<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer; 
use App\Http\Requests;
use Redirect; 

class CustomerController extends Controller {

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
        $customers = Customer::all();
        // Show the page
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $customer = new Customer($request->all());
        $customer->save();
        if ($customer->id) {
            return redirect('me-admin/customer')->with('success', 'Customer was successfully created.');
        } else {
            return Redirect::route('me-admin/customer')->withInput()->with('error', 'There was an issue creating the Customer. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        $customer = Customer::find($id);
        if ($customer->delete()) {
            return redirect('me-admin/customer')->with('success', 'Customer was successfully deleted.');
        } else {
            return Redirect::route('me-admin/customer')->with('error', 'There was an issue deleting the Customer. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit($id) {
        $customer = Customer::find($id);
        return view('customer.edit', compact('customer'));
    }

    public function update($id, Request $request) {
        $customer = Customer::findOrFail($id);
        if ($customer->update($request->all())) {
            return redirect('me-admin/customer')->with('success', 'Customer was successfully updated.');
        } else {
            return Redirect::route('me-admin/customer')->withInput()->with('error', "There was an issue creating Customer. Please try again.");
        }
    }
    
    

}
