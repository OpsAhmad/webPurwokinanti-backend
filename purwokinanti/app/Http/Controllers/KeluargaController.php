<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\Kependudukan;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class KeluargaController extends Controller
{
    /* 
    * Function list -> get agenda
     */
    public function list()
    {
        if (request()->get('q')) {
            $q = request()->get('q');
            $keluarga = DB::table('kependudukans')->join('keluargas', 'kependudukans.id', '=', 'keluargas.kependudukan_id')->where('kependudukans.name', 'like', '%' . $q . '%')->orderBy('keluargas.id', 'desc')->paginate(8);
        } else {
            $keluarga =  DB::table('kependudukans')->join('keluargas', 'kependudukans.id', '=', 'keluargas.kependudukan_id')->orderBy('keluargas.id', 'desc')->paginate(8);
        }
        return view('admin.kependudukan.keluarga', compact('keluarga'));
    }
    /* 
    * Function detail -> detail keluarga  
     */
    public function detail($id)
    {
        $keluarga = Keluarga::where('id', $id)->first();
        if ($keluarga) {
            return view('admin.kependudukan.keluarga-detail', compact('keluarga'));
        } else {
            return redirect(route('admin.kependudukan.keluarga'));
        }
    }
    /* 
    /* 
    * Function add -> add keluarga  
     */
    public function add()
    {
        return view('admin.kependudukan.keluarga-add');
    }
    /* 
    * Function insert -> insert kependudukan
     */
    public function insert()
    {
        //validation first
        request()->validate([
            'name' => 'required|max:200',
            'nik' => 'required',
            'gender' => 'required',
            'born' => 'required|date',
            'address' => 'required',
            'status' => 'required',
            'job' => 'required',
            'education' => 'required',
            'kb' => 'required',
            'ks' => 'required',
            'pus' => 'required',
        ]);

        //insert data to database
        $keluarga_id = Keluarga::create([
            'ks' => request('ks'),
            'kb' => request('kb'),
            'pus' => request('pus'),
        ])->id;

        $penduduk_id = Kependudukan::create([
            'name' => request('name'),
            'gender' => request('gender'),
            'nik' =>  Crypt::encryptString(request('nik')),
            'born' => Crypt::encryptString(request('born')),
            'address' => request('address'),
            'status' => request('status'),
            'job' => request('job'),
            'education' => request('education'),
            'keluarga_id' => $keluarga_id,
        ])->id;

        //iupdate keluarga-> kependudukan id
        Keluarga::where('id', $keluarga_id)->update([
            'kependudukan_id' => $penduduk_id
        ]);

        // set message
        session()->flash(
            'message',
            "<script>swal('Berhasil','Menambahkan keluarga baru','success')</script>"
        );
        return redirect(route('admin.kependudukan.keluarga'));
    }
    /* 
    * Edit keluarga
    */
    public function edit($id)
    {
        $keluarga = keluarga::where('id', $id)->first();
        return view('admin.kependudukan.keluarga-edit', compact('keluarga'));
    }
    /* 
    *Update berita
    */
    public function update(Request $request)
    {
        // validate first
        $validation = request()->validate([
            '_id' => 'required',
            'kb' => 'required',
            'ks' => 'required',
            'pus' => 'required',
        ]);

        // insert into database
        keluarga::where('id', $request->_id)->update(request()->only(['kb', 'ks', 'pus']));
        session()->flash('message', "<script>swal('Berhasil','Mengubah data keluarga','success')</script>");
        return back();
    }
    /*
    * function destroy -> hapus berita permanent
    */
    public function destroy($id)
    {
        $item = keluarga::where('id', $id)->first();
        $item->delete();
        session()->flash('message', "<script>swal('Dihapus','Keluarga berhasil dihapus','success')</script>");
        return redirect(route('admin.kependudukan.keluarga'));
    }
    /*
    * Get page() / Mengambil semuanya dari database
    */
    public function page_kb()
    {
        $title = Page::where('location', 'general_title')->first();
        $favicon = Page::where('location', 'general_favicon')->first();
        $footer = Page::where('location', 'general_footer')->first();
        $runingText = Page::where('location', 'general_runing_text')->first();

        $jumbotron = Page::where('location', 'home_jumbotron')->first();
        if (request()->get('q')) {
            $q = request()->get('q');
            $kb = DB::table('kependudukans')->join('keluargas', 'kependudukans.id', '=', 'keluargas.kependudukan_id')->where('kependudukans.name', 'like', '%' . $q . '%')->where('kb', '!=', 'Tidak terdaftar')->orderBy('keluargas.id', 'desc')->paginate(8);
        } else {
            $kb =  DB::table('kependudukans')->join('keluargas', 'kependudukans.id', '=', 'keluargas.kependudukan_id')->where('kb', '!=', 'Tidak terdaftar')->orderBy('keluargas.id', 'desc')->paginate(8);
        }

        return view('public.page', compact('kb', 'title', 'favicon', 'footer', 'jumbotron', 'runingText'));
    }
    public function page_pus()
    {
        $title = Page::where('location', 'general_title')->first();
        $favicon = Page::where('location', 'general_favicon')->first();
        $footer = Page::where('location', 'general_footer')->first();
        $runingText = Page::where('location', 'general_runing_text')->first();

        $jumbotron = Page::where('location', 'home_jumbotron')->first();
        if (request()->get('q')) {
            $q = request()->get('q');
            $pus = DB::table('kependudukans')->join('keluargas', 'kependudukans.id', '=', 'keluargas.kependudukan_id')->where('kependudukans.name', 'like', '%' . $q . '%')->where('pus', '!=', 'Tidak terdaftar')->orderBy('keluargas.id', 'desc')->paginate(8);
        } else if ((request()->get('c')) && (request()->get('c') != 'semua')) {
            $c = request()->get('c');
            $pus =  DB::table('kependudukans')->join('keluargas', 'kependudukans.id', '=', 'keluargas.kependudukan_id')->where('pus', $c)->orderBy('keluargas.id', 'desc')->paginate(8);
        } else {
            $pus =  DB::table('kependudukans')->join('keluargas', 'kependudukans.id', '=', 'keluargas.kependudukan_id')->where('pus', '!=', 'Tidak terdaftar')->orderBy('keluargas.id', 'desc')->paginate(8);
        }
        return view('public.page', compact('pus', 'title', 'favicon', 'footer', 'jumbotron', 'runingText'));
    }
    public function page_ks()
    {
        $title = Page::where('location', 'general_title')->first();
        $favicon = Page::where('location', 'general_favicon')->first();
        $footer = Page::where('location', 'general_footer')->first();
        $runingText = Page::where('location', 'general_runing_text')->first();

        $jumbotron = Page::where('location', 'home_jumbotron')->first();
        if (request()->get('q')) {
            $q = request()->get('q');
            $ks = DB::table('kependudukans')->join('keluargas', 'kependudukans.id', '=', 'keluargas.kependudukan_id')->where('kependudukans.name', 'like', '%' . $q . '%')->where('ks', '!=', 'Tidak terdaftar')->orderBy('keluargas.id', 'desc')->paginate(8);
        } else {
            $ks =  DB::table('kependudukans')->join('keluargas', 'kependudukans.id', '=', 'keluargas.kependudukan_id')->where('ks', '!=', 'Tidak terdaftar')->orderBy('keluargas.id', 'desc')->paginate(8);
        }

        return view('public.page', compact('ks', 'title', 'favicon', 'footer', 'jumbotron', 'runingText'));
    }
    /* 
    * Function page_detail -> detail keluarga-PUBLIC
     */
    public function page_detail($id)
    {
        $title = Page::where('location', 'general_title')->first();
        $favicon = Page::where('location', 'general_favicon')->first();
        $footer = Page::where('location', 'general_footer')->first();
        $jumbotron = Page::where('location', 'home_jumbotron')->first();
        $carbon = new Carbon;

        if (request()->get('from') == 'kb') {
            $back = route('kb');
        } else if (request()->get('from') == 'ks') {
            $back = route('ks');
        } else if (request()->get('from') == 'pus') {
            $back = route('pus');
        } else {
            $back = route('index');
        }

        $keluarga = Keluarga::where('id', $id)->first();
        if ($keluarga) {
            return view('public.single', compact('keluarga', 'title', 'favicon', 'footer', 'jumbotron', 'carbon', 'back'));
        } else {
            return redirect(route('index'));
        }
    }
}
