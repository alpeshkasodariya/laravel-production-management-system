<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Redirect;  
use App\Kachomal;
use App\KachomalDeliver;

class KachomalStockController extends Controller {

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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
         $kachomal = Kachomal::all();
         
         
        // Show the page
        return view('kachomalstock.index',compact('kachomal'));
    }
 
    
    

}
