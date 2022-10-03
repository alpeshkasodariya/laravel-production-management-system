<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Log;
use Response;
use App\User;
use App\Order;
use App\Production;
use App\Delivery;
use App\Kachomal;
use App\KachomalDeliver;


class HomeController extends Controller {

    protected $config;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('auth');
    }

    public function redirectdashboard() {
        return redirect('/me-admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

        $total=array();
        $total[0]=Order::select('kajukatri_250')->sum('kajukatri_250');
        $total[1]=Order::select('kajukatri_500')->sum('kajukatri_500');
        $total[2]=Order::select('chiki_250')->sum('chiki_250');
        $total[3]=Order::select('chiki_500')->sum('chiki_500');
        $total[4]=Order::select('ghari_250')->sum('ghari_250');
        $total[5]=Order::select('ghari_500')->sum('ghari_500');
        $total[6]=Order::select('angir_250')->sum('angir_250');
        $total[7]=Order::select('angir_500')->sum('angir_500');
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
        $totalprice[6]=$total[6]*200;
        $totalprice[7]=$total[7]*400;
        
        
        $fulltotalprice=array();
        $fulltotalprice[0]=$totalprice[0]+$totalprice[1];
        $fulltotalprice[1]=$totalprice[2]+$totalprice[3];
        $fulltotalprice[2]=$totalprice[4]+$totalprice[5];
        $fulltotalprice[3]=$totalprice[6]+$totalprice[7];
        
        $fullKg=array();
        $fullKg[0]=(($total[0]*250) + ($total[1]*500))/ 1000;
        $fullKg[1]=(($total[2]*250) + ($total[3]*500))/ 1000;
        $fullKg[2]=(($total[4]*250) + ($total[5]*500))/ 1000;
        $fullKg[3]=(($total[6]*250) + ($total[7]*500))/ 1000;
        
        $totalp=array();
        $totalp[0]=Production::select('kajukatri_250')->sum('kajukatri_250');
        $totalp[1]=Production::select('kajukatri_500')->sum('kajukatri_500');
        $totalp[2]=Production::select('chiki_250')->sum('chiki_250');
        $totalp[3]=Production::select('chiki_500')->sum('chiki_500');
        $totalp[4]=Production::select('ghari_250')->sum('ghari_250');
        $totalp[5]=Production::select('ghari_500')->sum('ghari_500');
        $totalp[6]=Production::select('angir_250')->sum('angir_250');
        $totalp[7]=Production::select('angir_500')->sum('angir_500');
        $totalp[8]=Production::select('total_kg')->sum('total_kg');
        $totalp[9]=Production::select('total_price')->sum('total_price'); 
        
        $totalpricep=array();
        $totalpricep[0]=$totalp[0]*170;
        $totalpricep[1]=$totalp[1]*340;
        $totalpricep[2]=$totalp[2]*170;
        $totalpricep[3]=$totalp[3]*340;
        $totalpricep[4]=$totalp[4]*150;
        $totalpricep[5]=$totalp[5]*300; 
        $totalpricep[6]=$totalp[6]*200;
        $totalpricep[7]=$totalp[7]*400;
        
        
        $fulltotalpricep=array();
        $fulltotalpricep[0]=$totalpricep[0]+$totalpricep[1];
        $fulltotalpricep[1]=$totalpricep[2]+$totalpricep[3];
        $fulltotalpricep[2]=$totalpricep[4]+$totalpricep[5];
        $fulltotalpricep[3]=$totalpricep[6]+$totalpricep[7];
        
        $fullKgp=array();
        $fullKgp[0]=(($totalp[0]*250) + ($totalp[1]*500))/ 1000;
        $fullKgp[1]=(($totalp[2]*250) + ($totalp[3]*500))/ 1000;
        $fullKgp[2]=(($totalp[4]*250) + ($totalp[5]*500))/ 1000;
        $fullKgp[3]=(($totalp[6]*250) + ($totalp[7]*500))/ 1000;
        
        $totald=array();
        $totald[0]=Delivery::select('kajukatri_250')->sum('kajukatri_250');
        $totald[1]=Delivery::select('kajukatri_500')->sum('kajukatri_500');
        $totald[2]=Delivery::select('chiki_250')->sum('chiki_250');
        $totald[3]=Delivery::select('chiki_500')->sum('chiki_500');
        $totald[4]=Delivery::select('ghari_250')->sum('ghari_250');
        $totald[5]=Delivery::select('ghari_500')->sum('ghari_500');
        $totald[6]=Delivery::select('angir_250')->sum('angir_250');
        $totald[7]=Delivery::select('angir_500')->sum('angir_500');
        $totald[8]=Delivery::select('total_kg')->sum('total_kg');
        $totald[9]=Delivery::select('total_price_pending')->sum('total_price_pending');
     
        $totalpriced=array();
        $totalpriced[0]=$totald[0]*170;
        $totalpriced[1]=$totald[1]*340;
        $totalpriced[2]=$totald[2]*170;
        $totalpriced[3]=$totald[3]*340;
        $totalpriced[4]=$totald[4]*150;
        $totalpriced[5]=$totald[5]*300; 
        $totalpriced[6]=$totald[6]*200;
        $totalpriced[7]=$totald[7]*400;
        
        $fulltotalpriced=array();
        $fulltotalpriced[0]=$totalpriced[0]+$totalpriced[1];
        $fulltotalpriced[1]=$totalpriced[2]+$totalpriced[3];
        $fulltotalpriced[2]=$totalpriced[4]+$totalpriced[5];
        $fulltotalpriced[3]=$totalpriced[6]+$totalpriced[7];
        
        $fullKgd=array();
        $fullKgd[0]=(($totald[0]*250) + ($totald[1]*500))/ 1000;
        $fullKgd[1]=(($totald[2]*250) + ($totald[3]*500))/ 1000;
        $fullKgd[2]=(($totald[4]*250) + ($totald[5]*500))/ 1000;
        $fullKgd[3]=(($totald[6]*250) + ($totald[7]*500))/ 1000;
        
        $kaju=array();
        $kaju[0]=Order::select('kaju500')->sum('kaju500'); 
        $kaju[1]=($kaju[0]*500)/1000;
        $kaju[2]=$kaju[0]*370; 
        $kaju[3]=Production::select('kaju500')->sum('kaju500');
        $kaju[4]=($kaju[3]*500)/1000;
        $kaju[5]=$kaju[3]*370;
        $kaju[6]=Delivery::select('kaju500')->sum('kaju500');
        $kaju[7]=($kaju[6]*500)/1000;
        $kaju[8]=$kaju[6]*370;
        
        $badam=array();
        $badam[0]=Order::select('badam500')->sum('badam500'); 
        $badam[1]=($badam[0]*500)/1000;
        $badam[2]=$badam[0]*370; 
        $badam[3]=Production::select('badam500')->sum('badam500');
        $badam[4]=($badam[3]*500)/1000;
        $badam[5]=$badam[3]*370;
        $badam[6]=Delivery::select('badam500')->sum('badam500');
        $badam[7]=($badam[6]*500)/1000;
        $badam[8]=$badam[6]*370;
        
        $kachomal = Kachomal::all();
        return view('dashboard', compact('total','totalprice','fulltotalprice','fullKg','totalp','totalpricep','fulltotalpricep','fullKgp','totald','totalpriced','fulltotalpriced','fullKgd','kaju','badam','kachomal'));
    }

    public function logout() {
        Auth::logout();

        return Redirect::away('login');
    }

}
