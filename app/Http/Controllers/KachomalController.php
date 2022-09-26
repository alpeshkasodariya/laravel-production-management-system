<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kachomal;   
use Redirect;  

class KachomalController extends Controller {

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
        return view('kachomal.index', compact('kachomal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
          
        return view('kachomal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $kachomal = new Kachomal($request->all()); 
        $total_price=$request->rate * $request->total_kg; 
        $kachomal->total_price=$total_price; 
        $kachomal->save();
        if ($kachomal->id) {
            return redirect('me-admin/kachomal')->with('success', 'order was successfully created.');
        } else {
            return Redirect::route('me-admin/kachomal')->withInput()->with('error', 'There was an issue creating the order. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        $order = Kachomal::find($id);
        if ($order->delete()) {
            return redirect('me-admin/kachomal')->with('success', 'kachomal was successfully deleted.');
        } else {
            return Redirect::route('me-admin/kachomal')->with('error', 'There was an issue deleting the kachomal. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit($id) {
        $kachomal = Kachomal::find($id);
        return view('kachomal.edit', compact('kachomal'));
    }

    public function update($id, Request $request) {
        $kachomal = Kachomal::findOrFail($id);
        $total_price=$request->rate * $request->total_kg; 
        $kachomal->total_price=$total_price;
        
        
        if ($kachomal->update()) {
            return redirect('me-admin/kachomal')->with('success', 'kachomal was successfully updated.');
        } else {
            return Redirect::route('me-admin/kachomal')->withInput()->with('error', "There was an issue creating kachomal. Please try again.");
        }
    }
    
    

}
