<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCrudController extends Controller
{
    public function Home(){


        return view('welcome');
    }

    public function CreateData(){

        return view('pages.create');
    }
}
