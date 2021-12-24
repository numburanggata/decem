<?php

//namespace App\Models\Sop;
namespace App\Http\Controllers;
use App\Models\Sop;

use Illuminate\Http\Request;

class SopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $sop = Sop::orderBy('id', 'ASC')->get();
        // return view('sop', ['sop'=>$sop]);
        return view('sop');
    }
}
