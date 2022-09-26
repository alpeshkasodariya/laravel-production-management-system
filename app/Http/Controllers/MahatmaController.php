<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahatma;  
use Redirect; 

class MahatmaController extends Controller {

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
        $mahatmas = Mahatma::all();
        // Show the page
       
        return view('mahatma.index', compact('mahatmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('mahatma.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $mahatma = new Mahatma($request->all());
        $mahatma->save();
        if ($mahatma->id) {
            return redirect('me-admin/mahatma')->with('success', 'mahatma was successfully created.');
        } else {
            return Redirect::route('me-admin/mahatma')->withInput()->with('error', 'There was an issue creating the mahatma. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        $mahatma = Mahatma::find($id);
        if ($mahatma->delete()) {
            return redirect('me-admin/mahatma')->with('success', 'mahatma was successfully deleted.');
        } else {
            return Redirect::route('me-admin/mahatma')->with('error', 'There was an issue deleting the mahatma. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit($id) {
        $mahatma = Mahatma::find($id);
        return view('mahatma.edit', compact('mahatma'));
    }

    public function update($id, Request $request) {
        $mahatma = Mahatma::findOrFail($id);
        if ($mahatma->update($request->all())) {
            return redirect('me-admin/mahatma')->with('success', 'mahatma was successfully updated.');
        } else {
            return Redirect::route('me-admin/mahatma')->withInput()->with('error', "There was an issue creating mahatma. Please try again.");
        }
    }
    
    

}
