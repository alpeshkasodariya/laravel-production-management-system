<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use App\Ticket;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
         $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getOrder($id) {
        $response = array();
        if (Auth::check()) {
            $ticket = Ticket::find($id);
            if ($id != "" && $ticket) {
                if ($ticket->checkin == 1) {
                    $response["success"] = 1;
                    $response["message"] = "Already Chekin";
                } else {
                    $ticket->checkin = 1;
                    $ticket->checkintime = date('Y-m-d h:i:s');
                    //$ticket->update();
                    $response["success"] = 1;
                    $response["message"] = "Chekin Successful!";
                }
            } else {
                $response["error"] = 1;
                $response["message"] = "Chekin UnSuccessful!";
            }

            return json_encode($response);
        } else {
            $response["error"] = 1;
            $response["message"] = "User not login";
            return json_encode($response);
        }
    }

}
