<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AgendaController extends Controller
{
    /* 
    * Function list -> get agenda
     */
    public function list()
    {
        $agenda =  Agenda::latest()->paginate(6);
        return view('admin.agenda.index', compact('agenda'));
    }
    /* 
    * Function add -> add agenda
     */
    public function add()
    {
        return view('admin.agenda.add');
    }
    /* 
    * Function insert -> insert news
     */
    public function insert()
    {
        //validation
        request()->validate([
            'title' => 'required|max:200',
            'time' => 'required',
            'date' => 'required',
            'location' => 'required',
            'description' => 'required|min:3',
        ]);

        //insert data to database
        Agenda::create([
            'title' => request()->title,
            'slug' => Str::slug(request()->title),
            'time' => request()->time,
            'date' => request()->date,
            'location' => request()->location,
            'description' => request()->description,
        ]);
        // set message
        session()->flash(
            'message',
            "<script>swal('Berhasil','berhasil menambahkan agenda','success')</script>"
        );
        return redirect(route('admin.agenda'));
    }
    /* 
    * Edit berita
    */
    public function edit($slug)
    {
        $agenda = Agenda::where('slug', $slug)->first();
        return view('admin.agenda.edit', compact('agenda'));
    }
    /* 
    *Update berita
    */
    public function update(Request $request)
    {
        // validate first
        $validation = request()->validate([
            'title' => 'required|max:200',
            'time' => 'required',
            'date' => 'required',
            'location' => 'required',
            'description' => 'required|min:3',
        ]);

        // insert into database
        Agenda::where('id', $request->id)->update($validation);

        session()->flash('message', "<script>swal('Berhasil','Edit agenda berhasi','success')</script>");
        return redirect(route('admin.agenda'));
    }
    /*
    * function destroy -> hapus berita permanent
    */
    public function destroy($slug)
    {
        $item = Agenda::where('slug', $slug)->first();
        $item->delete();
        session()->flash('message', "<script>swal('Dihapus','Agenda berhasil dihapus','success')</script>");
        return redirect(route('admin.agenda'));
    }
    /*
    * Get page() / Mengambil semuanya dari database
    */
    public function page()
    {
        $title = Page::where('location', 'general_title')->first();
        $favicon = Page::where('location', 'general_favicon')->first();
        $footer = Page::where('location', 'general_footer')->first();
        $runingText = Page::where('location', 'general_runing_text')->first();

        $jumbotron = Page::where('location', 'home_jumbotron')->first();
        $agenda =  Agenda::latest()->paginate(6);

        return view('public.page', compact('agenda', 'title', 'favicon', 'footer', 'jumbotron', 'runingText'));
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
        $agenda =  Agenda::where('slug', $slug)->first();

        return view('public.single', compact('agenda', 'title', 'favicon', 'footer', 'jumbotron'));
    }
}
