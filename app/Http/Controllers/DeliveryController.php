<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery; 
use App\Mahatma; 
use App\Http\Requests;
use Redirect; 

class DeliveryController extends Controller {

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
        $deliverys = Delivery::all();
        $total=array();
        $total[0]=Delivery::select('kajukatri_250')->sum('kajukatri_250');
        $total[1]=Delivery::select('kajukatri_500')->sum('kajukatri_500');
        $total[2]=Delivery::select('chiki_250')->sum('chiki_250');
        $total[3]=Delivery::select('chiki_500')->sum('chiki_500');
        $total[4]=Delivery::select('ghari_250')->sum('ghari_250');
        $total[5]=Delivery::select('ghari_500')->sum('ghari_500');
        $total[6]=Delivery::select('angir_250')->sum('angir_250');
        $total[7]=Delivery::select('angir_500')->sum('angir_500');
        $total[8]=Delivery::select('kaju500')->sum('kaju500');
        $total[9]=Delivery::select('badam500')->sum('badam500'); 
        $total[10]=Delivery::select('total_kg')->sum('total_kg');
        $total[11]=Delivery::select('total_price_pending')->sum('total_price_pending');
     
        $totalprice=array();
        $totalprice[0]=$total[0]*170;
        $totalprice[1]=$total[1]*340;
        $totalprice[2]=$total[2]*170;
        $totalprice[3]=$total[3]*340;
        $totalprice[4]=$total[4]*150;
        $totalprice[5]=$total[5]*300; 
        $totalprice[6]=$total[6]*200;
        $totalprice[7]=$total[7]*400; 
        $totalprice[8]=$total[8]*370;
        $totalprice[9]=$total[9]*370;

        
        
        $fullKg=array();
        $fullKg[0]=(($total[0]*250) + ($total[1]*500))/ 1000;
        $fullKg[1]=(($total[2]*250) + ($total[3]*500))/ 1000;
        $fullKg[2]=(($total[4]*250) + ($total[5]*500))/ 1000;
        $fullKg[3]=(($total[6]*250) + ($total[7]*500))/ 1000;
        $fullKg[4]=($total[8]*500)/ 1000;
        $fullKg[5]=($total[9]*500)/ 1000;
        // Show the page
        return view('delivery.index', compact('deliverys','total','totalprice','fullKg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
          $mahatma = Mahatma::all()->pluck('name', 'id');
        return view('delivery.create',compact('mahatma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $delivery = new Delivery($request->all());
        $kg=(($request->kajukatri_250 * 250)+($request->kajukatri_500 * 500)+($request->chiki_250 * 250)+($request->chiki_500 * 500)+($request->ghari_250 * 250)+($request->ghari_500 * 500)+($request->kaju500 * 500)+($request->badam500 * 500)+($request->angir_250 * 250)+($request->angir_500 * 500))/1000;
         
        
        $total=($request->kajukatri_250 * 170)+($request->kajukatri_500 * 340)+($request->chiki_250 * 170)+($request->chiki_500 * 340)+($request->ghari_250 * 150)+($request->ghari_500 * 300)+($request->kaju500 * 370)+($request->badam500 * 370)+($request->angir_250 * 200)+($request->angir_500 * 400);
        $delivery->total_kg=$kg;
        $delivery->total_price_pending=$total;
        
        $delivery->save();
        if ($delivery->id) {
            return redirect('me-admin/delivery')->with('success', 'delivery was successfully created.');
        } else {
            return Redirect::route('me-admin/delivery')->withInput()->with('error', 'There was an issue creating the delivery. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        $delivery = Delivery::find($id);
        if ($delivery->delete()) {
            return redirect('me-admin/delivery')->with('success', 'delivery was successfully deleted.');
        } else {
            return Redirect::route('me-admin/delivery')->with('error', 'There was an issue deleting the delivery. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit($id) {
        $delivery = Delivery::find($id);
                 $mahatma = Mahatma::all()->pluck('name', 'id');
        return view('delivery.edit', compact('delivery','mahatma'));
    }

    public function update($id, Request $request) {
        $delivery = Delivery::findOrFail($id);
         $kg=(($request->kajukatri_250 * 250)+($request->kajukatri_500 * 500)+($request->chiki_250 * 250)+($request->chiki_500 * 500)+($request->ghari_250 * 250)+($request->ghari_500 * 500)+($request->angir_250 * 250)+($request->angir_500 * 500))/1000;
          
       
        $total=($request->kajukatri_250 * 170)+($request->kajukatri_500 * 340)+($request->chiki_250 * 170)+($request->chiki_500 * 340)+($request->ghari_250 * 150)+($request->ghari_500 * 300)+($request->kaju500 * 370)+($request->badam500 * 370)+($request->angir_250 * 200)+($request->angir_500 * 400);
        
        $delivery->total_kg=$kg;
        $delivery->total_price_pending=$total;
        
        $delivery->kajukatri_250= $request->kajukatri_250;
        $delivery->kajukatri_500= $request->kajukatri_500;
        $delivery->chiki_250= $request->chiki_250;
        $delivery->chiki_500= $request->chiki_500;
        $delivery->ghari_250= $request->ghari_250;
        $delivery->ghari_500= $request->ghari_500; 
        $delivery->kaju500= $request->kaju500;
        $delivery->badam500= $request->badam500; 
        $delivery->angir_250= $request->angir_250;
        $delivery->angir_500= $request->angir_500; 
        
        if ($delivery->update()) {
            return redirect('me-admin/delivery')->with('success', 'delivery was successfully updated.');
        } else {
            return Redirect::route('me-admin/delivery')->withInput()->with('error', "There was an issue creating delivery. Please try again.");
        }
    }
    
    

}
