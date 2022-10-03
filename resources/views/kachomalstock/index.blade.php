@extends('layouts.app', ['page' => __('Kachomal'), 'pageSlug' => 'kachomalstock'])

@section('content')
<?php 
use App\Kachomal;
use App\KachomalDeliver;

?>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">{{ __('Kachomalstock') }}</h4>
                    </div>
                    
                </div>
            </div>
             <div class="card-body">
                @include('alerts.success') 
                <div class="table-responsive"> 
                        <table id="table" class="table table-striped cell-border table-hover dt-responsive" cellspacing="0" width="100%"> 
                        <thead class=" text-primary">
                            <tr>
                                <th scope="col">{{ __('Id') }}</th>
                                <th scope="col">{{ __('Item Name') }}</th>    
                                <th scope="col">{{ __('Stock Total_kg') }}</th>  
                                <th scope="col">{{ __('Deliver Total_kg') }}</th>  
                                <th scope="col">{{ __('Available Total_kg') }}</th>
                                 
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($kachomal))
                                @foreach ($kachomal as $st)
                                <tr>
                                    <td>{{ $st->id }}</td>
                                    <td>{{ $st->kachomal_name }}</td>  
                                    <td class="darkbluecolor">{{ $st->total_kg }}</td>  
                                    <td class="bcolor">
                                    <?php 
                                    echo $totaldeliver=KachomalDeliver::where('kachomal_name',$st->id)->sum('total_kg');
                                    
                                    ?>
                                    </td>
                                    <td class="greencolor"><?php echo $st->total_kg-$totaldeliver;?></td>  
                                    </td> 
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
</div>  
@endsection 

@section('footer_scripts')
<style>
    .order-action {
      
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
                                                $().ready(function() {
                                                $('#table').DataTable();
                                                $('#table1').dataTable({searching: false, paging: false, info: false,sorting:false});
                                                });
                                                });
</script>
@stop

