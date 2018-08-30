<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='welcome to laravel edyefdfetdfedfeff6f36fg36f3gf63g63f';
        return view('pages.index')->with('title',$title);

    }

    public function about(){
        $title='about us';
        return view('pages.about')->with('title',$title);

    }

    public function services(){
        $data= array(
            'title' => 'Services',
            'services' => ['web designing','programming','algo']

         );
        return view('pages.services')->with($data);

    }
}
