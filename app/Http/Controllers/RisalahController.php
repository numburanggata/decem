<?php

namespace App\Http\Controllers;
use App\Models\Risalah;
use Illuminate\Http\Request;

class RisalahController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * 
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $risalah = Risalah::orderBy('id', 'ASC')->get();
        return view('risalah', ['risalah'=>$risalah]);
    }
}
