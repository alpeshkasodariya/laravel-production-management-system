<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KachomalDeliver;   
use Redirect;  

class KachomalDeliverController extends Controller {

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
        $kachomaldeliver = KachomalDeliver::all();
         
        // Show the page
        return view('kachomaldeliver.index', compact('kachomaldeliver'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
         $kachomal = Kachomal::all()->pluck('name', 'id');
        return view('kachomaldeliver.create',compact('kachomal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $kachomaldeliver = new KachomalDeliver($request->all());
        
         
        $kachomaldeliver->save();
        if ($kachomaldeliver->id) {
            return redirect('me-admin/kachomaldeliver')->with('success', 'kachomaldeliver was successfully created.');
        } else {
            return Redirect::route('me-admin/kachomaldeliver')->withInput()->with('error', 'There was an issue creating the kachomaldeliver. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        $kachomaldeliver = KachomalDeliver::find($id);
        if ($kachomaldeliver->delete()) {
            return redirect('me-admin/kachomaldeliver')->with('success', 'kachomaldeliver was successfully deleted.');
        } else {
            return Redirect::route('me-admin/kachomaldeliver')->with('error', 'There was an issue deleting the kachomaldeliver. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit($id) {
        $kachomaldeliver = KachomalDeliver::find($id);
        $kachomal = Kachomal::all()->pluck('name', 'id');
        return view('kachomaldeliver.edit', compact('kachomal','kachomaldeliver'));
    }

    public function update($id, Request $request) {
        $kachomaldeliver = KachomalDeliver::findOrFail($id);
        
        
        
        if ($kachomaldeliver->update()) {
            return redirect('me-admin/kachomaldeliver')->with('success', 'kachomaldeliver was successfully updated.');
        } else {
            return Redirect::route('me-admin/kachomaldeliver')->withInput()->with('error', "There was an issue creating kachomaldeliver. Please try again.");
        }
    }
    
    

}
