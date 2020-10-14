<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /*
    * Mapping field location
    * Umum > Favicon,Footer
    * Home > home_jumbotron,home_tentang
    */
    public function template($judul_halaman, $location)
    {
        $data = Page::where('location', $location)->first();
        return view('admin.pages.index', compact('data', 'judul_halaman'));
    }
    public function update()
    {
        // * Preparing data
        if (request()->file('image')) {
            request()->validate(
                [
                    'image' => 'file|image|mimes:jpg,jpeg,png,svg,gif|max:2048'
                ]
            );
            // delete old data
            Storage::delete(request('_old_image'));
            // insert new image
            $data['image'] = Storage::putFile('public/Pages', request()->file('image')->path());
        }
        if (request('title')) {
            $data['title'] = request('title');
        }
        if (request('description')) {
            $data['description'] = request('description');
        }
        // Update data
        Page::where('location', request('_location'))->update($data);

        session()->flash('message', "<script>swal('Berhasil','Memperbarui halaman','success')</script>");
        return back();
    }
    /*
    *   Function jumbotron / Menampilkan form edit untuk jumbotron
    *   Location = home_jumbotron
    */
    public function jumbotron()
    {
        // * Mendefinisikan untuk breadcumb
        $judul_halaman = 'Edit jumbotron';
        $location = 'home_jumbotron';

        return $this->template($judul_halaman, $location);
    }
    /*
    *   Function tentang / Menampilkan form edit untuk tentang
    *   Location = home_tentang
    */
    public function tentang()
    {
        // * Mendefinisikan untuk breadcumb
        $judul_halaman = 'Edit tentang';
        $location = 'home_about';

        return $this->template($judul_halaman, $location);
    }
    /*
    *   Function favicon / Menampilkan form edit untuk favicon
    *   Location = home_favicon
    */
    public function favicon()
    {
        // * Mendefinisikan untuk breadcumb
        $judul_halaman = 'Edit logo web';
        $location = 'general_favicon';

        return $this->template($judul_halaman, $location);
    }
    /*
    *   Function footer / Menampilkan form edit untuk footer
    *   Location = home_footer
    */
    public function footer()
    {
        // * Mendefinisikan untuk breadcumb
        $judul_halaman = 'Edit footer';
        $location = 'general_footer';

        return $this->template($judul_halaman, $location);
    }
    /*
    *   Function title / Menampilkan form edit untuk title
    *   Location = home_title
    */
    public function title()
    {
        // * Mendefinisikan untuk breadcumb
        $judul_halaman = 'Edit Judul Web';
        $location = 'general_title';

        return $this->template($judul_halaman, $location);
    }
    /*
    * Function runningText > Menampilkan form edit untuk
    */
    public function running_text()
    {
        // * Mendefinisikan untuk breadcumb
        $judul_halaman = 'Edit Running Text';
        $location = 'general_runing_text';

        return $this->template($judul_halaman, $location);
    }
}
