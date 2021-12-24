<?php

namespace App\Http\Controllers;
use App\Models\Juknis;
use Illuminate\Http\Request;

class JuknisController extends Controller
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
        // $juknis = Juknis::orderBy('id', 'ASC')->get();
        // return view('juknis', ['juknis'=>$juknis]);
        return view('juknis');
    }
}
