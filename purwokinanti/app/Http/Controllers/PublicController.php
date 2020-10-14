<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Kepengurusan;
use App\Models\Page;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function template()
    {
        $title = Page::where('location', 'general_title')->first();
        $favicon = Page::where('location', 'general_favicon')->first();
        $footer = Page::where('location', 'general_footer')->first();
        return [$title, $favicon, $footer];
    }
    /*
    * Function index / Halaman home / Halaman utama
    */
    public function index()
    {
        $template = $this->template();
        $title = $template[0];
        $favicon = $template[1];
        $footer = $template[2];

        $jumbotron = Page::where('location', 'home_jumbotron')->first();
        $about = Page::where('location', 'home_about')->first();
        $split = strlen($about->description) / 2;
        $about = str_split($about->description, $split);
        $runingText = Page::where('location', 'general_runing_text')->first();

        $berita = Berita::latest()->limit(3)->get();
        $agenda = Agenda::latest()->limit(3)->get();
        $kepengurusan = Kepengurusan::latest()->limit(3)->get();

        return view('public.index', compact('berita', 'agenda', 'kepengurusan', 'jumbotron', 'about', 'title', 'favicon', 'footer', 'runingText'));
    }
}
