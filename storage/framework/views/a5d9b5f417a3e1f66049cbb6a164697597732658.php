<?php $__env->startSection('content'); ?>
<style>
    .card .card-header.dashboarddiv1 .card-title {
        font-weight: 500!important;
    }
    .none {
        display:none;
    }
    .card .card-title .l1 { 
        width:48%;
    }
    .card .card-title .l2 { 
        width:48%;
    }
    .card .card-title .l3 { 
        width:100%;
    }
    .btn-red {
        background: red; 
    }
    .btn-red.btn:hover, .btn-red.btn:focus, .btn-red.btn:active, .btn-red.btn.active, .btn-red.btn:active:focus, .btn-red.btn:active:hover{
        background-color: red !important;
        background-image: linear-gradient(to bottom left, red, red, red) !important;
    }
    
    .btn-yellow {
        background: yellow; 
        color:black !important;
    }
    .btn-yellow.btn:hover, .btn-yellow.btn:focus, .btn-yellow.btn:active, .btn-yellow.btn.active, .btn-yellow.btn:active:focus, .btn-yellow.btn:active:hover{
        background-color: yellow !important;
        background-image: linear-gradient(to bottom left, yellow, yellow, red) !important;
    }
    
    .btn-orange {
        background: orange; 
    }
    .btn-orange.btn:hover, .btn-orange.btn:focus, .btn-orange.btn:active, .btn-orange.btn.active, .btn-orange.btn:active:focus, .btn-orange.btn:active:hover{
        background-color: orange !important;
        background-image: linear-gradient(to bottom left, orange, orange, red) !important;
    }
    .card-header h1 {
            font-size: 28px!important;
    font-weight: bold!important;
        margin-bottom: 6px!important;
    }
    .card .card-title .l1 b {
        font-size:20px;
        color:#523430!important;
    }
     .card .card-title .l2 b {
        font-size:20px;
        color:#523430!important;
    }
     .card .card-title .l3 b {
        font-size:20px;
        color:#523430!important;
    }
    .card .card-title .l4 { 
        width:100%;
    }
     .card .card-title .l4 b {
        font-size:20px;
        color:white!important;
    }
</style>
<div class="row">
       <div class="col-lg-4">
           <div class="card card-chart">
                <div class="card-header dashboarddiv">
                    <h1 class="card-category">Order Kajkatri</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger"> 250gm Box<br><b><?php echo $total[0] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger"> 500gm Box<br><b><?php echo $total[1] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger">  250gm (Rs)<br><b><?php echo $totalprice[0] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger">  500gm (Rs)<br><b><?php echo $totalprice[1] ?> </b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-danger"> Total Kg<br><b><?php echo $fullKg[0] ?></b></button>
                        
                    </h3>
                     
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-danger"> Total Amount(Rs)<br><b><?php echo $fulltotalprice[0] ?></b></button>
                        
                    </h3>
                </div> 
            </div>
       </div>
       <div class="col-lg-4">
           <div class="card card-chart">
           <div class="card-header dashboarddiv">
                    <h1 class="card-category">Order Chikki</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger"> 250gm Box<br><b><?php echo $total[2] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger"> 500gm Box<br><b><?php echo $total[3] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger">  250gm (Rs)<br><b><?php echo $totalprice[2] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger">  500gm (Rs)<br><b><?php echo $totalprice[3] ?> </b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-danger"> Total Kg<br><b><?php echo $fullKg[1] ?></b></button>
                        
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-danger"> Amount(Rs)<br><b><?php echo $fulltotalprice[1] ?></b></button>
                        
                </div> 
            </div>
       </div>
       <div class="col-lg-4">
           <div class="card card-chart">
           <div class="card-header dashboarddiv">
                    <h1 class="card-category">Order Ghari</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger">  250gm Box<br><b><?php echo $total[4] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger">  500gm Box<br><b><?php echo $total[5] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger">   250gm (Rs)<br><b><?php echo $totalprice[4] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger">   500gm (Rs)<br><b><?php echo $totalprice[5] ?> </b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-danger"> Total Kg<br><b><?php echo $fullKg[2] ?></b></button>
                        
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-danger">Total Amount(Rs)<br><b><?php echo $fulltotalprice[2] ?></b></button>
                        
                    </h3>
                </div> 
            </div>
        </div> 
</div>
<div class="row">
    <div class="col-lg-12">
         <div class="card card-chart">
           <div class="card-header dashboarddiv">
                    <h1 class="card-category">Order Status</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l4 dashboardtbn btn btn-lg btn-darker">Total Amount Paid<small>(Rs)</small>:  <b><?php echo $total[8] ?><Br></b></button>

                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l4 dashboardtbn btn btn-lg btn-red">Total Amount Pending<small>(Rs)</small>:  <b><?php echo $total[9] ?><BR></b></button>

                    </h3>
           </div>
         </div>
    </div>
</div>
<div class="row">
       <div class="col-lg-6">
           <div class="card card-chart">
                <div class="card-header dashboarddiv">
                    <h1 class="card-category">Order Kaju</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger">Order  500gm <br><b><?php echo $kaju[0] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger">Order  500gm(Rs) <br><b><?php echo $kaju[2] ?><small>(Rs)</small></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-success">Production  500gm <br><b><?php echo $kaju[3] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-success">Production  500gm(Rs) <br><b><?php echo $kaju[5] ?><small>(Rs)</small></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary">Deliver  500gm <br><b><?php echo $kaju[7] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary">Deliver  500gm(Rs) <br><b><?php echo $kaju[8] ?><small>(Rs)</small></b></button>
                    </h3>
                </div>
            </div>
       </div>
       <div class="col-lg-6">
           <div class="card card-chart">
                <div class="card-header dashboarddiv">
                    <h1 class="card-category">Order Badam</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger">Order  500gm <br><b><?php echo $badam[0] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger">Order  500gm(Rs) <br><b><?php echo $badam[2] ?><small>(Rs)</small></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-success">Production  500gm <br><b><?php echo $badam[3] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-success">Production  500gm(Rs) <br><b><?php echo $badam[5] ?><small>(Rs)</small></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary">Deliver  500gm <br><b><?php echo $badam[7] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary">Deliver  500gm(Rs) <br><b><?php echo $badam[8] ?><small>(Rs)</small></b></button>
                    </h3>
                </div>
            </div>
       </div>
       
</div>



<div class="row">
      <div class="col-lg-4">
           <div class="card card-chart">
                <div class="card-header dashboarddiv">
                    <h1 class="card-category">Production Kajkatri</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger"> Order 250gm <br><b><?php echo $total[0] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger"> Order 500gm <br><b><?php echo $total[1] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-success">Production  250gm <br><b><?php echo $totalp[0] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-success">Production  500gm <br><b><?php echo $totalp[1] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary">Deliver 250gm <br><b><?php echo $totald[0] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary">Deliver 500gm <br><b><?php echo $totald[1] ?></b></button>
                    </h3>
                    
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-yellow">Pending 250gm <br><b><?php echo max($total[0]-$totalp[0],0); ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-yellow">Pending 500gm <br><b><?php echo max($total[1]-$totalp[1],0); ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-orange">Balance 250gm <br><b><?php echo max($totalp[0]-$totald[0],0); ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-orange">Balance 500gm <br><b><?php echo max($totalp[1]-$totald[1],0); ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-success"> Production 250gm  <br><b><?php echo $totalpricep[0] ?><small>(Rs)</small></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-success"> Production 500gm  <br><b><?php echo $totalpricep[1] ?><small>(Rs)</small> </b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-success"> Production   <b><?php echo $fullKgp[0] ?> <small>(Kg)</small></b></button>
                        
                    </h3>
                     
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-success"> Production Amount(Rs)<br><b><?php echo $fulltotalpricep[0] ?></b></button>
                        
                    </h3>
                </div> 
            </div>
       </div>
       <div class="col-lg-4">
           <div class="card card-chart">
           <div class="card-header dashboarddiv">
                    <h1 class="card-category">Production Chikki</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger">Order 250gm <br><b><?php echo $total[2] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger">Order 500gm <br><b><?php echo $total[3] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-success">Production 250gm <br><b><?php echo $totalp[2] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-success">Production 500gm <br><b><?php echo $totalp[3] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary">Deliver 250gm <br><b><?php echo $totald[2] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary">Deliver 500gm <br><b><?php echo $totald[3] ?></b></button>
                    </h3>
                    
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-yellow">Pending 250gm <br><b><?php echo max($total[2]-$totalp[2],0); ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-yellow">Pending 500gm <br><b><?php echo max($total[3]-$totalp[3],0); ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-orange">Balance 250gm <br><b><?php echo  max($totalp[2]-$totald[3],0); ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-orange">Balance 500gm <br><b><?php echo  max($totalp[2]-$totald[3],0); ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-success"> Production 250gm  <br><b><?php echo $totalpricep[2] ?><small>(Rs)</small></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-success"> Production 500gm <br><b><?php echo $totalpricep[3] ?> <small>(Rs)</small></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-success"> Production  <b><?php echo $fullKgp[1] ?> <small>(Kg)</small></b></button>
                        
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-success"> Production Amount(Rs)<br><b><?php echo $fulltotalpricep[1] ?></b></button>
                        
                    </h3>
                </div> 
            </div>
       </div>
       <div class="col-lg-4">
           <div class="card card-chart">
           <div class="card-header dashboarddiv">
                    <h1 class="card-category">Production Ghari</h1>
                     <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-danger">Order 250gm <br><b><?php echo $total[4] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-danger">Order 500gm <br><b><?php echo $total[5] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-success">Production 250gm <br><b><?php echo $totalp[4] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-success">Production 500gm <br><b><?php echo $totalp[5] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary">Deliver 250gm <br><b><?php echo $totald[4] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary">Deliver 500gm <br><b><?php echo $totald[5] ?></b></button>
                    </h3>
                    
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-yellow">Pending 250gm <br><b><?php echo max($total[4]-$totalp[4],0); ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-yellow">Pending 500gm <br><b><?php echo max($total[5]-$totalp[5],0); ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-orange">Balance 250gm <br><b><?php echo max($totalp[4]-$totald[4],0); ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-orange">Balance 500gm <br><b><?php echo max($totalp[5]-$totald[5],0); ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-success"> Production 250gm<br><b><?php echo $totalpricep[4] ?><small>(Rs)</small></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-success"> Production 500gm<br><b><?php echo $totalpricep[5] ?><small>(Rs)</small> </b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-success"> Production   <b><?php echo $fullKgp[2] ?> <small>(Kg)</small></b></button>
                        
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-success">Production Amount(Rs)<br><b><?php echo $fulltotalpricep[2] ?></b></button>
                        
                    </h3>
                </div> 
            </div>
        </div> 
</div>

<div class="row">
    <div class="col-lg-12">
         <div class="card card-chart">
           <div class="card-header dashboarddiv">
                    <h1 class="card-category">Production Status</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l4 dashboardtbn btn btn-lg btn-darker">Total Amount <small>(Rs)</small> : <b><?php echo $totalp[7] ?><Br></b></button>

                    </h3>
                    
           </div>
         </div>
    </div>
</div>
<div class="row">
      <div class="col-lg-4">
           <div class="card card-chart">
                <div class="card-header dashboarddiv">
                    <h1 class="card-category">Deliver Kajkatri</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary">Deliver 250gm <br><b><?php echo $totald[0] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary">Deliver 500gm <br><b><?php echo $totald[1] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary"> Deliver250gm<br><b>(Rs)<?php echo $totalpriced[0] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary"> Deliver500gm<br><b>(Rs)<?php echo $totalpriced[1] ?> </b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-primary"> Total Deliver Kg<br><b><?php echo $fullKgd[0] ?></b></button>
                        
                    </h3>
                     
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-primary">Amount Pending(Rs)<br><b><?php echo $fulltotalpriced[0] ?></b></button>
                        
                    </h3>
                </div> 
            </div>
       </div>
       <div class="col-lg-4">
           <div class="card card-chart">
           <div class="card-header dashboarddiv">
                    <h1 class="card-category">Deliver Chikki</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary">Deliver 250gm <br><b><?php echo $totald[2] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary">Deliver 500gm <br><b><?php echo $totald[3] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary"> Deliver250gm<br><b>(Rs)<?php echo $totalpriced[2] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary"> Deliver500gm<br><b>(Rs)<?php echo $totalpriced[3] ?> </b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-primary"> Total Deliver Kg<br><b><?php echo $fullKgd[1] ?></b></button>
                        
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-primary">Amount Pending(Rs)<br><b><?php echo $fulltotalpriced[1] ?></b></button>
                        
                    </h3>
                </div> 
            </div>
       </div>
       <div class="col-lg-4">
           <div class="card card-chart">
           <div class="card-header dashboarddiv">
                    <h1 class="card-category">Deliver Ghari</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary">Deliver 250gm <br><b><?php echo $totald[4] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary">Deliver 500gm <br><b><?php echo $totald[5] ?></b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l1 dashboardtbn btn btn-sm btn-primary"> Deliver250gm<br><b>(Rs)<?php echo $totalpriced[4] ?></b></button>
                        <button id="l1" class="l2 dashboardtbn btn btn-sm btn-primary"> Deliver500gm<br><b>(Rs)<?php echo $totalpriced[5] ?> </b></button>
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-primary"> Deliver Kg<br><b><?php echo $fullKgd[2] ?></b></button>
                        
                    </h3>
                    <h3 class="card-title">
                        <button id="l1" class="l3 dashboardtbn btn btn-lg btn-primary">Amount Pending(Rs)<br><b><?php echo $fulltotalpriced[2] ?></b></button>
                        
                    </h3>
                </div> 
            </div>
        </div> 
</div>
<div class="row">
    <div class="col-lg-12">
         <div class="card card-chart">
           <div class="card-header dashboarddiv">
                    <h1 class="card-category">Deliver Status</h1>
                    <h3 class="card-title">
                        <button id="l1" class="l4 dashboardtbn btn btn-lg btn-darker">Total Amount<small>(Rs)</small>:  <b><?php echo $fulltotalpriced[0]+$fulltotalpriced[1]+$fulltotalpriced[2] ?><Br></b></button>

                    </h3>
                    
           </div>
         </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<script
    src="https://code.jquery.com/jquery-1.12.4.js"
    integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
crossorigin="anonymous"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>

<script>
$(document).ready(function () {
    $().ready(function () {
        $('#table').DataTable();
        $('#table1').dataTable({responsive: true,searching: false, paging: false, info: false, sorting: false});
    });
});
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', ['pageSlug' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/AlpeshJetDrive/C-Card/MAMP/order/resources/views/dashboard.blade.php ENDPATH**/ ?>