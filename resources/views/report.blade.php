@extends('layouts.app', ['page' => __('Reports'), 'pageSlug' => 'reports'])


@section('content')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="has-error">
             
            </div>
            
                 
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Reports') }}</h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body"> 
                        
                    </div>
                    
                      
                </div>
               
                  
             
        </div>
    </div>
</div>
</div>
@endsection

@section('footer_scripts')
<style>
    .card h1, .card h2, .card h4, .card h5, .card h6, .card p{
        color: black!important;
    }
</style>
<style>
    .field:nth-child(1) .field-remove {
    display: none;
}
.field-remove {
    position: absolute;
    top: 15px; 
    text-decoration: none;
    font-size: 28px;
    color: #f00;
    padding: 4px;
    outline: none;
    box-shadow: none;
}
#addButton {
    height:30px;
}
</style>
<style>
div#table_filter {
    font-size: 20px;
    margin-bottom: 10px;
}
    button.dt-button.buttons-csv.buttons-html5 {
    background-color: #4d7f9c!important;
    color: white;
    padding: 10px 20px;
    border: 0px;
    border-radius: 5px;
    font-weight: 700;
}
     .viewm {
        top:60px!important;
    }
    .order-action {
        float:left;
        color:#e8488a;
        display:flex;
    }
    .order-action i {
        font-size:1.5em;
    }
    .order-action a { 
       color:#e8488a!important; 
    }
</style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" />

  <script>
       jQuery.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')

        }

    });
		 
        
			});
			</script>
@stop

