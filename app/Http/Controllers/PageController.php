<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index()
    {
        $train= Train::all();
        $data=['train' => $train];
        return view('train',$data);
    }
}
