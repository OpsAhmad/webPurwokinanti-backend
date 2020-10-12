<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\Kependudukan;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class KependudukanController extends Controller
{
    /* 
    * Function list -> get agenda
     */
    public function list()
    {
        if (request()->get('q')) {
            $q = request()->get('q');
            $penduduk =  Kependudukan::where('name', 'like', '%' . $q . '%')->latest()->paginate(10);
        } else {
            $penduduk =  Kependudukan::latest()->paginate(10);
        }
        return view('admin.kependudukan.index', compact('penduduk'));
    }
    /* 
    * Function add -> add kependudukan  
     */
    public function add($keluarga_id)
    {
        return view('admin.kependudukan.add', compact('keluarga_id'));
    }
    /*
    /* 
    * Function insert -> insert kependudukan  
     */
    public function insert()
    {
        request()->validate([
            '_keluarga_id' => 'required',
            'name' => 'required|max:200',
            'nik' => 'required',
            'born' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'status' => 'required',
            'job' => 'required',
            'education' => 'required',
        ]);
        $data = [
            'keluarga_id' => request('_keluarga_id'),
            'name' => request('name'),
            'gender' => request('gender'),
            'nik' => Crypt::encryptString(request('nik')),
            'born' => Crypt::encryptString(request('born')),
            'address' => request('address'),
            'status' => request('status'),
            'job' => request('job'),
            'education' => request('education'),
        ];
        Kependudukan::create($data);
        session()->flash('message', "<script>swal('Berhasil,'Menambahkan anggota keluarga','success')</script>");
        return redirect(route('admin.kependudukan.keluarga.detail', ['id' => request('_keluarga_id')]));
    }
    /*
    * function destroy -> hapus  permanent
    */
    public function destroy($id)
    {
        $item = Kependudukan::where('id', $id)->first();
        $item->delete();
        session()->flash('message', "<script>swal('Dihapus','Penduduk berhasil dihapus','success')</script>");
        return back();
    }
    /*
    * function detail->detail individu
    */
    public function detail($id)
    {
        $from = request()->get('from');
        $penduduk = Kependudukan::where('id', $id)->first();
        return view('admin.kependudukan.detail', compact('penduduk', 'from'));
    }
    /*
    * function edit->edit individu
    */
    public function edit($id)
    {
        $from = request()->get('from');
        $penduduk = Kependudukan::where('id', $id)->first();
        return view('admin.kependudukan.edit', compact('penduduk', 'from'));
    }
    /*
    * function update->update individu
    */
    public function update()
    {
        request()->validate([
            'name' => 'required|max:200',
            'nik' => 'required',
            'born' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'status' => 'required',
            'job' => 'required',
            'education' => 'required',
            '_id' => 'required',
        ]);

        $update = [
            'name' => request('name'),
            'gender' => request('gender'),
            'born' => Crypt::encryptString(request('born')),
            'nik' => Crypt::encryptString(request('nik')),
            'address' => request('address'),
            'status' => request('status'),
            'job' => request('job'),
            'education' => request('education'),
        ];

        Kependudukan::where('id', request('_id'))->update($update);

        session()->flash('message', "<script>swal('Berhasil','Edit kependudukan berhasi','success')</script>");
        return back();
    }
    /*
    * Get page() / Mengambil semuanya dari database
    */
    public function page()
    {
        $title = Page::where('location', 'general_title')->first();
        $favicon = Page::where('location', 'general_favicon')->first();
        $footer = Page::where('location', 'general_footer')->first();

        $jumbotron = Page::where('location', 'home_jumbotron')->first();
        if (request()->get('q')) {
            $q = request()->get('q');
            $kependudukan =  Kependudukan::where('name', 'like', '%' . $q . '%')->latest()->paginate(10);
        } else {
            $kependudukan =  Kependudukan::latest()->paginate(10);
        }

        return view('public.page', compact('kependudukan', 'title', 'favicon', 'footer', 'jumbotron'));
    }
}
