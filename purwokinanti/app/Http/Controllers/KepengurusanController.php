<?php

namespace App\Http\Controllers;

use App\Models\Kepengurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KepengurusanController extends Controller
{
    /* 
    *   Halaman index / Menampilkan list kepengurusan
     */
    public function list()
    {
        $pengurus = Kepengurusan::latest()->paginate(6);
        return view('admin.kepengurusan.index', compact('pengurus'));
    }
    /*
    * Halaman Tambah / Tampilan form untuk tambah
    */
    public function add()
    {
        return view('admin.kepengurusan.add');
    }
    /*
    * Fungsi insert / memasukan request post add ke database
    */
    public function insert()
    {
        request()->validate([
            'avatar' => 'required',
            'name' => 'required',
            'position' => 'required',
            'priority' => 'required',
        ]);

        $imgname = Storage::putFile('public/Kepengurusan', request()->file('avatar')->path());

        Kepengurusan::create([
            'avatar' => $imgname,
            'name' => request('name'),
            'position' => request('position'),
            'priority' => request('priority'),
        ]);

        session()->flash('message', "<script>swal('Berhasil','Menambahkan pengurus','success')</script>");
        return redirect(route('admin.kepengurusan'));
    }
    /*
    * Fungsi Edit / edit field pengurus
    */
    public function edit($id)
    {
        $pengurus = Kepengurusan::where('id', $id)->first();
        return view('admin.kepengurusan.edit', compact('pengurus'));
    }
    /*
    * Fungsi Update / Handle request dari edit
    */
    public function update()
    {
        request()->validate([
            '_id' => 'required',
            'old_avatar' => 'required',
            'avatar' => 'file|image|mimes:jpeg,jpg,svg,png,gif|max:2048',
            'name' => 'required',
            'position' => 'required',
            'priority' => 'required',
        ]);


        $data = [
            'name' => request('name'),
            'position' => request('position'),
            'priority' => request('priority'),
        ];
        if (request()->file('avatar')) {
            // Delete old avatar
            Storage::delete(request('old_avatar'));
            // STore new avatar
            $data['avatar'] = Storage::putFile('public/kepengurusan', request()->file('avatar')->path());
        }

        Kepengurusan::where('id', request('_id'))->update($data);

        session()->flash('message', "<script>swal('Berhasil','Memperbarui data pengurus','success')</script>");
        return redirect(route('admin.kepengurusan'));
    }
    /*
    * Fungsi Destroy -> menghapus kependudukan
    */
    public function destroy($id)
    {
        // Hapus dari storage
        $path = Kepengurusan::where('id', $id)->first()->avatar;
        Storage::delete($path);
        Kepengurusan::where('id', $id)->delete();

        session()->flash('message', "<script>swal('Berhasil','Menghapus data pengurus','success')</script>");
        return redirect(route('admin.kepengurusan'));
    }
}
