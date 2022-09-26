<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KachomalStock;   
use Redirect;  

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
        $kachomalstock = KachomalStock::all();
         
        // Show the page
        return view('kachomalstock.index', compact('kachomalstock'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
         $kachomal = Kachomal::all()->pluck('name', 'id');
        return view('kachomalstock.create',compact('kachomal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $kachomalstock = new KachomalStock($request->all());
        
         
        $kachomalstock->save();
        if ($kachomalstock->id) {
            return redirect('me-admin/kachomalstock')->with('success', 'kachomalstock was successfully created.');
        } else {
            return Redirect::route('me-admin/kachomalstock')->withInput()->with('error', 'There was an issue creating the kachomalstock. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        $kachomalstock = KachomalStock::find($id);
        if ($kachomalstock->delete()) {
            return redirect('me-admin/kachomalstock')->with('success', 'kachomaldeliver was successfully deleted.');
        } else {
            return Redirect::route('me-admin/kachomalstock')->with('error', 'There was an issue deleting the kachomaldeliver. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit($id) {
        $kachomalstock = KachomalStock::find($id);
        $kachomal = Kachomal::all()->pluck('name', 'id');
        return view('kachomalstock.edit', compact('kachomal','kachomalstock'));
    }

    public function update($id, Request $request) {
        $kachomalstock = KachomalStock::findOrFail($id); 
        
        if ($kachomalstock->update()) {
            return redirect('me-admin/kachomalstock')->with('success', 'kachomalstock was successfully updated.');
        } else {
            return Redirect::route('me-admin/kachomalstock')->withInput()->with('error', "There was an issue creating kachomalstock. Please try again.");
        }
    }
    
    

}
