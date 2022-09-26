<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order; 
use App\Mahatma;
use App\Http\Requests;
use Redirect; 
use Log;

class OrderController extends Controller {

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
        $orders = Order::all();
        $total=array();
        $total[0]=Order::select('kajukatri_250')->sum('kajukatri_250');
        $total[1]=Order::select('kajukatri_500')->sum('kajukatri_500');
        $total[2]=Order::select('chiki_250')->sum('chiki_250');
        $total[3]=Order::select('chiki_500')->sum('chiki_500');
        $total[4]=Order::select('ghari_250')->sum('ghari_250');
        $total[5]=Order::select('ghari_500')->sum('ghari_500');
        $total[6]=Order::select('ghari_250')->sum('kaju500');
        $total[7]=Order::select('ghari_500')->sum('badam500');
        $total[8]=Order::select('total_kg')->sum('total_kg');
        $total[9]=Order::select('total_price')->sum('total_price');
        $total[10]=Order::select('paid_price')->sum('paid_price');
        $total[11]=Order::select('pending_price')->sum('pending_price');
        
        $totalprice=array();
        $totalprice[0]=$total[0]*170;
        $totalprice[1]=$total[1]*340;
        $totalprice[2]=$total[2]*170;
        $totalprice[3]=$total[3]*340;
        $totalprice[4]=$total[4]*150;
        $totalprice[5]=$total[5]*300; 
        $totalprice[6]=$total[6]*370;
        $totalprice[7]=$total[7]*370; 
        
        
        $fulltotalprice=array();
        $fulltotalprice[0]=$totalprice[0]+$totalprice[1];
        $fulltotalprice[1]=$totalprice[2]+$totalprice[3];
        $fulltotalprice[2]=$totalprice[4]+$totalprice[5];
        $fulltotalprice[3]=$totalprice[6];
        $fulltotalprice[4]=$totalprice[7];
        
        
        $fullKg=array();
        $fullKg[0]=(($total[0]*250) + ($total[1]*500))/ 1000;
        $fullKg[1]=(($total[2]*250) + ($total[3]*500))/ 1000;
        $fullKg[2]=(($total[4]*250) + ($total[5]*500))/ 1000;
        $fullKg[3]=($total[6]*500)/ 1000;
        $fullKg[4]=($total[7]*500)/ 1000;
         
        
        // Show the page
        return view('order.index', compact('orders','total','totalprice','fulltotalprice','fullKg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
         $mahatma = Mahatma::all()->pluck('name', 'id');
        return view('order.create',compact('mahatma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $order = new Order($request->all());
        
        $kg=(($request->kajukatri_250 * 250)+($request->kajukatri_500 * 500)+($request->chiki_250 * 250)+($request->chiki_500 * 500)+($request->ghari_250 * 250)+($request->ghari_500 * 500)+($request->kaju500 * 500)+($request->badam500 * 500))/1000;
       
        $total=($request->kajukatri_250 * 170)+($request->kajukatri_500 * 340)+($request->chiki_250 * 170)+($request->chiki_500 * 340)+($request->ghari_250 * 150)+($request->ghari_500 * 300) +($request->kaju500 * 370)+($request->badam500 * 370 );
        $order->total_kg=$kg;
        $order->total_price=$total;
        $order->paid_price=$request->paid_price; 
        $order->pending_price=$total-$request->paid_price;
        $order->save();
        if ($order->id) {
            return redirect('me-admin/order')->with('success', 'order was successfully created.');
        } else {
            return Redirect::route('me-admin/order')->withInput()->with('error', 'There was an issue creating the order. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        $order = Order::find($id);
        if ($order->delete()) {
            return redirect('me-admin/order')->with('success', 'order was successfully deleted.');
        } else {
            return Redirect::route('me-admin/order')->with('error', 'There was an issue deleting the order. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit($id) {
        $order = Order::find($id);
         $mahatma = Mahatma::all()->pluck('name', 'id');
        return view('order.edit', compact('order','mahatma'));
    }

    public function update($id, Request $request) {
        $order = Order::findOrFail($id);
        $order->kajukatri_250= $request->kajukatri_250;
        $order->kajukatri_500= $request->kajukatri_500;
        $order->chiki_250= $request->chiki_250;
        $order->chiki_500= $request->chiki_500;
        $order->ghari_250= $request->ghari_250;
        $order->ghari_500= $request->ghari_500; 
        $order->kaju500= $request->kaju500;
        $order->badam500= $request->badam500; 
        
        $kg=(($request->kajukatri_250 * 250)+($request->kajukatri_500 * 500)+($request->chiki_250 * 250)+($request->chiki_500 * 500)+($request->ghari_250 * 250)+($request->ghari_500 * 500)+($request->kaju500 * 500)+($request->badam500 * 500))/1000;
       
        $total=($request->kajukatri_250 * 170)+($request->kajukatri_500 * 340)+($request->chiki_250 * 170)+($request->chiki_500 * 340)+($request->ghari_250 * 150)+($request->ghari_500 * 300) +($request->kaju500 * 370)+($request->badam500 * 370 );
        $order->total_kg=$kg;
        $order->total_price=$total;
        $order->paid_price=$request->paid_price; 
        $order->pending_price=$total-$request->paid_price;
        
        
        if ($order->update()) {
            return redirect('me-admin/order')->with('success', 'order was successfully updated.');
        } else {
            return Redirect::route('me-admin/order')->withInput()->with('error', "There was an issue creating order. Please try again.");
        }
    }
    
    

}
