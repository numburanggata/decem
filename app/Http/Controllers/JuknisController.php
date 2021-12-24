<?php

namespace App\Http\Controllers;
use App\Models\Juknis;
use Illuminate\Http\Request;

class JuknisController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jukni = Juknis::orderBy('id', 'ASC')->get();
        return view('juknis', ['juknis'=>$juknis]);
    }
}
