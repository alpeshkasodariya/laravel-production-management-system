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
use App\Notification;
use App\Client;
use App\Service;
use App\ClientService;
use Yajra\Datatables\Datatables; 

class ReportsController extends Controller {

      protected $config;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
         
        $this->middleware('auth');
    }
    
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index() {  
             
            return view('report'); 
         
    } 
    
  
    
    public function search(Request $request)
    {   
        $start_date=date('Y-m-d',strtotime($request->get('start_date')));
        $end_date="";
        if($request->get('end_date')!=""){
            $end_date=date('Y-m-d',strtotime($request->get('end_date')));
        }
        
        $client=$request->get('client_id');
        $res=array();
        if($start_date!="" && $end_date!=""  && $client!=""){ 
            if($client=="all"){
                $clArr=ClientService::whereDate('end_date','<=', $end_date)->whereDate('start_date','>=', $start_date)->get(); 
            }else{
                $clArr=ClientService::whereDate('end_date','<=', $end_date)->whereDate('start_date','>=', $start_date)->where('client_id',$client)->get(); 
            } 
            if($clArr){
                  
                foreach($clArr as $cl){
                    $clientinfo=Client::where('id',$cl->client_id)->first();
                    if($clientinfo){
                        $service=Service::where('id',$cl->service_id)->first();
                        $service->client_name=$clientinfo->first_name." ".$clientinfo->last_name;
                        $service->start_date=date("d-m-Y",strtotime($cl->start_date)) ;
                        if($cl->end_date!=""){
                            $service->end_date=date("d-m-Y",strtotime($cl->end_date)) ;
                        }else{
                            $service->end_date="";
                        }
                        $service->finance_use=$clientinfo->finance_use;
                        $service->contract_in_place=$clientinfo->contract_in_place;
                        $service->client_id= $cl->client_id ;
                        $service->invoice_set=$cl->invoice_set; 
                        $res[]=$service;
                        }
                }
            }
        }else if($start_date!="" && $end_date==""  && $client!=""){
         
           if($client=="all"){
                $clArr=ClientService::whereDate('start_date','>=', $start_date)->get(); 
            }else{
                $clArr=ClientService::whereDate('start_date','>=', $start_date)->where('client_id',$client)->get(); 
            } 
            if($clArr){
                  
                foreach($clArr as $cl){ 
                    $clientinfo=Client::where('id',$cl->client_id)->first();
                    if($clientinfo){
                        $service=Service::where('id',$cl->service_id)->first();
                        $service->client_name=$clientinfo->first_name." ".$clientinfo->last_name;
                        $service->start_date=date("d-m-Y",strtotime($cl->start_date)) ;
                        if($cl->end_date!=""){
                            $service->end_date=date("d-m-Y",strtotime($cl->end_date)) ;
                        }else{
                            $service->end_date="";
                        }
                         $service->finance_use=$clientinfo->finance_use;
                        $service->contract_in_place=$clientinfo->contract_in_place;
                        $service->client_id= $cl->client_id ;
                        $service->invoice_set=$cl->invoice_set; 
                        $res[]=$service;
                    }
                }
            }   
        }else{
            $clArr=ClientService::where('client_id',$client)->get();  
            if($clArr){ 
                foreach($clArr as $cl){
                     $clientinfo=Client::where('id',$cl->client_id)->first();
                     if($clientinfo){
                        $service=Service::where('id',$cl->service_id)->first();
                        $service->client_name=$clientinfo->first_name." ".$clientinfo->last_name;
                         $service->start_date=date("d-m-Y",strtotime($cl->start_date)) ;
                        if($cl->end_date!=""){
                            $service->end_date=date("d-m-Y",strtotime($cl->end_date)) ;
                        }else{
                            $service->end_date="";
                        }
                         $service->finance_use=$clientinfo->finance_use;
                        $service->contract_in_place=$clientinfo->contract_in_place;
                        $service->client_id= $cl->client_id ;
                        $service->invoice_set=$cl->invoice_set;
                        $res[]=$service;
                     }
                }
            }
        }
        
         $finaldata=array('data'=>$res); 
         
       //  return Response::json($finaldata);
         return Datatables::of($res)->make(true);
    }
    
  
     
}
