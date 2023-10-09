<?php

namespace App\Http\Controllers;
use App\Models\wahana;
use App\Models\Image;
use App\Models\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
                    'title'=> 'Home',
                    'About'=> About::all(),
                    'wahana'=> wahana::all(),
                    'image' => Image::paginate(8)]);
    }
}
