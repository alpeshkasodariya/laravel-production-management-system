<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Production; 
use App\Order; 
use App\Delivery; 
use App\Mahatma;  
use Redirect; 

class ProductionController extends Controller {

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
        $productions = Production::all();
        
        $total=array();
        $total[0]=Production::select('kajukatri_250')->sum('kajukatri_250');
        $total[1]=Production::select('kajukatri_500')->sum('kajukatri_500');
        $total[2]=Production::select('chiki_250')->sum('chiki_250');
        $total[3]=Production::select('chiki_500')->sum('chiki_500');
        $total[4]=Production::select('ghari_250')->sum('ghari_250');
        $total[5]=Production::select('ghari_500')->sum('ghari_500');
        $total[6]=Production::select('angir_250')->sum('angir_250');
        $total[7]=Production::select('angir_500')->sum('angir_500');
        $total[8]=Production::select('kaju500')->sum('kaju500');
        $total[9]=Production::select('badam500')->sum('badam500');
        $total[10]=Production::select('total_kg')->sum('total_kg');
        $total[11]=Production::select('total_price')->sum('total_price'); 
        
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
        
        
        $fulltotalprice=array();
        $fulltotalprice[0]=$totalprice[0]+$totalprice[1];
        $fulltotalprice[1]=$totalprice[2]+$totalprice[3];
        $fulltotalprice[2]=$totalprice[4]+$totalprice[5]; 
        $fulltotalprice[3]=$totalprice[6]+$totalprice[7];
        $fulltotalprice[4]=$totalprice[8];
        $fulltotalprice[5]=$totalprice[9];
        
        $fullKg=array();
        $fullKg[0]=(($total[0]*250) + ($total[1]*500))/ 1000;
        $fullKg[1]=(($total[2]*250) + ($total[3]*500))/ 1000;
        $fullKg[2]=(($total[4]*250) + ($total[5]*500))/ 1000;
        $fullKg[3]=(($total[6]*250) + ($total[7]*500))/ 1000;
        $fullKg[4]=($total[8]*500)/ 1000;
        $fullKg[5]=($total[9]*500)/ 1000;
        
        $orderbox=array();
        $orderbox[0]=Order::select('kajukatri_250')->sum('kajukatri_250');
        $orderbox[1]=Order::select('kajukatri_500')->sum('kajukatri_500');
        $orderbox[2]=Order::select('chiki_250')->sum('chiki_250');
        $orderbox[3]=Order::select('chiki_500')->sum('chiki_500');
        $orderbox[4]=Order::select('ghari_250')->sum('ghari_250');
        $orderbox[5]=Order::select('ghari_500')->sum('ghari_500');
        $orderbox[6]=Order::select('angir_250')->sum('angir_250');
        $orderbox[7]=Order::select('angir_500')->sum('angir_500');
        $orderbox[8]=Order::select('kaju500')->sum('kaju500');
        $orderbox[9]=Order::select('badam500')->sum('badam500');
        $orderbox[10]=Order::select('total_kg')->sum('total_kg');
        $orderbox[11]=Order::select('total_price')->sum('total_price');
        
        $deliverbox=array();
        $deliverbox[0]=Delivery::select('kajukatri_250')->sum('kajukatri_250');
        $deliverbox[1]=Delivery::select('kajukatri_500')->sum('kajukatri_500');
        $deliverbox[2]=Delivery::select('chiki_250')->sum('chiki_250');
        $deliverbox[3]=Delivery::select('chiki_500')->sum('chiki_500');
        $deliverbox[4]=Delivery::select('ghari_250')->sum('ghari_250');
        $deliverbox[5]=Delivery::select('ghari_500')->sum('ghari_500');
        $deliverbox[6]=Delivery::select('angir_250')->sum('angir_250');
        $deliverbox[7]=Delivery::select('angir_500')->sum('angir_500');
        $deliverbox[8]=Delivery::select('kaju500')->sum('kaju500');
        $deliverbox[9]=Delivery::select('badam500')->sum('badam500');
        $deliverbox[10]=Delivery::select('total_kg')->sum('total_kg');
        $deliverbox[11]=Delivery::select('total_price_pending')->sum('total_price_pending');
        
        $pendingbox=array();
        $pendingbox[0]=$orderbox[0]-$deliverbox[0];
        $pendingbox[1]=$orderbox[1]-$deliverbox[1];
        $pendingbox[2]=$orderbox[2]-$deliverbox[2];
        $pendingbox[3]=$orderbox[3]-$deliverbox[3];
        $pendingbox[4]=$orderbox[4]-$deliverbox[4];
        $pendingbox[5]=$orderbox[5]-$deliverbox[5];
        $pendingbox[6]=$orderbox[6]-$deliverbox[6];
        $pendingbox[7]=$orderbox[7]-$deliverbox[7];
        $pendingbox[8]=$orderbox[8]-$deliverbox[8];
        $pendingbox[9]=$orderbox[9]-$deliverbox[9];
        
        $balancebox=array();
        $balancebox[0]=$total[0]-$deliverbox[0];
        $balancebox[1]=$total[1]-$deliverbox[1];
        $balancebox[2]=$total[2]-$deliverbox[2];
        $balancebox[3]=$total[3]-$deliverbox[3];
        $balancebox[4]=$total[4]-$deliverbox[4];
        $balancebox[5]=$total[5]-$deliverbox[5];
        $balancebox[6]=$total[6]-$deliverbox[6];
        $balancebox[7]=$total[7]-$deliverbox[7];
        $balancebox[8]=$total[8]-$deliverbox[8];
        $balancebox[9]=$total[9]-$deliverbox[9];
        
        
        $pending_makeing_box=array();
        $pending_makeing_box[0]=max($pendingbox[0]-$balancebox[0], 0);
        $pending_makeing_box[1]=max($pendingbox[1]-$balancebox[1], 0);
        $pending_makeing_box[2]=max($pendingbox[2]-$balancebox[2], 0);
        $pending_makeing_box[3]=max($pendingbox[3]-$balancebox[3], 0);
        $pending_makeing_box[4]=max($pendingbox[4]-$balancebox[4], 0);
        $pending_makeing_box[5]=max($pendingbox[5]-$balancebox[5], 0);
        $pending_makeing_box[6]=max($pendingbox[6]-$balancebox[6], 0);
        $pending_makeing_box[7]=max($pendingbox[7]-$balancebox[7], 0);
        $pending_makeing_box[8]=max($pendingbox[8]-$balancebox[8], 0);
        $pending_makeing_box[9]=max($pendingbox[9]-$balancebox[9], 0);
        
        return view('production.index', compact('productions','total','totalprice','fulltotalprice','fullKg','orderbox','deliverbox','pendingbox','balancebox','pending_makeing_box'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
         $mahatma = Mahatma::all()->pluck('name', 'id');
        return view('production.create',compact('mahatma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $production = new Production($request->all());
        $kg=(($request->kajukatri_250 * 250)+($request->kajukatri_500 * 500)+($request->chiki_250 * 250)+($request->chiki_500 * 500)+($request->ghari_250 * 250)+($request->ghari_500 * 500)+($request->kaju500 * 500)+($request->badam500 * 500)+($request->angir_250 * 250)+($request->angir_500 * 500))/1000;
         
        
        $total=($request->kajukatri_250 * 170)+($request->kajukatri_500 * 340)+($request->chiki_250 * 170)+($request->chiki_500 * 340)+($request->ghari_250 * 150)+($request->ghari_500 * 300)+($request->angir_250 * 200)+($request->angir_500 * 400)+($request->kaju500 * 370)+($request->badam500 * 370);
        $production->total_kg=$kg;
        $production->total_price=$total;
        
        $production->save(); 
        if ($production->id) {
            return redirect('me-admin/production')->with('success', 'production was successfully created.');
        } else {
            return Redirect::route('me-admin/production')->withInput()->with('error', 'There was an issue creating the production. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        $production = Production::find($id);
        if ($production->delete()) {
            return redirect('me-admin/production')->with('success', 'production was successfully deleted.');
        } else {
            return Redirect::route('me-admin/production')->with('error', 'There was an issue deleting the production. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit($id) {
        $production = Production::find($id);
        $mahatma = Mahatma::all()->pluck('name', 'id');
        return view('production.edit', compact('production','mahatma'));
    }

    public function update($id, Request $request) {
        $production = Production::findOrFail($id);
        $kg=(($request->kajukatri_250 * 250)+($request->kajukatri_500 * 500)+($request->chiki_250 * 250)+($request->chiki_500 * 500)+($request->ghari_250 * 250)+($request->ghari_500 * 500)+($request->kaju500 * 500)+($request->badam500 * 500)+($request->angir_250 * 250)+($request->angir_500 * 500))/1000;
          
        $total=($request->kajukatri_250 * 170)+($request->kajukatri_500 * 340)+($request->chiki_250 * 170)+($request->chiki_500 * 340)+($request->ghari_250 * 150)+($request->ghari_500 * 300)+($request->angir_250 * 200)+($request->angir_500 * 400)+($request->kaju500 * 370)+($request->badam500 * 370);
        $production->total_kg=$kg;
        $production->total_price=$total;
        $production->kajukatri_250= $request->kajukatri_250;
        $production->kajukatri_500= $request->kajukatri_500;
        $production->chiki_250= $request->chiki_250;
        $production->chiki_500= $request->chiki_500;
        $production->ghari_250= $request->ghari_250;
        $production->ghari_500= $request->ghari_500; 
        $production->kaju500= $request->kaju500;
        $production->badam500= $request->badam500; 
        $production->angir_250= $request->angir_250;
        $production->angir_500= $request->angir_500; 
        $production->date= $request->date; 
         $production->time= $request->time; 
        
        if ($production->update()) {
            return redirect('me-admin/production')->with('success', 'production was successfully updated.');
        } else {
            return Redirect::route('me-admin/production')->withInput()->with('error', "There was an issue creating production. Please try again.");
        }
    }
    
    

}
