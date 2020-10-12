<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /* 
    * Function list -> get news
     */
    public function list()
    {
        $news =  Berita::latest()->paginate(6);
        return view('admin.news.index', compact('news'));
    }
    /* 
    * Function add -> add news
     */
    public function add()
    {
        return view('admin.news.add');
    }
    /* 
    * Function insert -> insert news
     */
    public function insert()
    {
        //validation
        request()->validate([
            'title' => 'required|max:200',
            'excerpt' => 'required|max:200',
            'body' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);

        // insert image
        $extension = request()->file('thumbnail')->extension();
        $imgname = Str::random(25) . "." . $extension;
        Storage::putFileAs('public/News', request()->file('thumbnail')->path(), $imgname);

        //insert data to database
        Berita::create([
            'title' => request()->title,
            'slug' => Str::slug(request()->title),
            'excerpt' => request()->excerpt,
            'body' => request()->body,
            'thumbnail' => $imgname,
        ]);
        // set message
        session()->flash(
            'message',
            "<script>swal('Berhasil','berhasil menambahkan berita','success')</script>"
        );
        return redirect('admin/berita');
    }
    /* 
    * Edit berita
    */
    public function edit($slug)
    {
        $news = Berita::where('slug', $slug)->first();
        return view('admin.news.edit', compact('news'));
    }
    /* 
    *Update berita
    */
    public function update(Request $request)
    {
        // validate first
        $data_v = [
            'title' => 'required|max:200',
            'excerpt' => 'required|max:200',
            'body' => 'required',
        ];
        if ($request->file('thumbnail')) {
            $data_v['thumbnail'] = 'required|image|mimes:jpeg,jpg,png,svg|max:2048';
        }
        $request->validate($data_v);

        // preparing data insert
        $data = [
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
        ];


        // Update image fiirst
        if ($request->file('thumbnail')) {
            // delete old jumbotorn
            Storage::delete(['public/News/' . $request->old_thumbnail]);
            // store new jumbotorn
            // insert image
            $extension = request()->file('thumbnail')->extension();
            $imgname = Str::random(25) . "." . $extension;
            Storage::putFileAs('public/News', request()->file('thumbnail')->path(), $imgname);
            $data['thumbnail'] = $imgname;
        }

        // insert into database
        Berita::where('id', $request->id)->update($data);

        session()->flash('message', "<script>swal('Berhasil',''Edit berita berhasi','success')</script>");
        return redirect(route('admin.berita'));
    }
    /*
    * function destroy -> hapus berita permanent
    */
    public function destroy($slug)
    {
        $item = Berita::where('slug', $slug)->first();
        //delere image
        Storage::delete('public/News/' . $item->thumbnail);
        //delete row
        $item->delete();
        session()->flash('message', "<script>swal('Dihapus','Berita berhasil dihapus','success')</script>");
        return redirect(route('admin.berita'));
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
        $berita =  Berita::latest()->paginate(6);

        return view('public.page', compact('berita', 'title', 'favicon', 'footer', 'jumbotron'));
    }
    /*
    * Get single() / Mengambil semuanya dari database
    */
    public function single($slug)
    {
        $title = Page::where('location', 'general_title')->first();
        $favicon = Page::where('location', 'general_favicon')->first();
        $footer = Page::where('location', 'general_footer')->first();

        $jumbotron = Page::where('location', 'home_jumbotron')->first();
        $berita =  Berita::where('slug', $slug)->first();

        return view('public.single', compact('berita', 'title', 'favicon', 'footer', 'jumbotron'));
    }
}
