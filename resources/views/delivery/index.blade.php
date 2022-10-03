@extends('layouts.app', ['page' => __('Delivery'), 'pageSlug' => 'delivery'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">{{ __('Delivery') }}</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ URL::to('me-admin/delivery/create') }}" class="btn btn-sm btn-primary">{{ __('Add Delivery') }}</a>
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
                                <th scope="col">{{ __('Name') }}</th>  
                                <th scope="col">{{ __('k_250') }}</th> 
                                <th scope="col">{{ __('k_500') }}</th> 
                                <th scope="col">{{ __('c_250') }}</th> 
                                <th scope="col">{{ __('c_500') }}</th> 
                                <th scope="col">{{ __('g_250') }}</th> 
                                <th scope="col">{{ __('g_500') }}</th> 
                                <th scope="col">{{ __('angir_250') }}</th> 
                                <th scope="col">{{ __('angir_500') }}</th> 
                                <th scope="col">{{ __('Kaju') }}</th> 
                                <th scope="col">{{ __('Badam') }}</th> 
                                <th scope="col">{{ __('total_kg') }}</th> 
                                <th scope="col">{{ __('total_price') }}</th> 
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($deliverys))
                            @foreach ($deliverys as $st)
                            <tr>
                                <td>{{ $st->id }}</td>
                                <td>{{ $st->mahatma->name }}</td>  
                                <td>{{ $st->kajukatri_250 }}</td> 
                                <td>{{ $st->kajukatri_500 }}</td>
                                <td>{{ $st->chiki_250 }}</td>
                                <td>{{ $st->chiki_500 }}</td>
                                <td>{{ $st->ghari_250 }}</td>
                                <td>{{ $st->ghari_500 }}</td>
                                <td>{{ $st->angir_250 }}</td>
                                <td>{{ $st->angir_500 }}</td>
                                <td>{{ $st->kaju500 }}</td>
                                <td>{{ $st->badam500 }}</td>
                                <td>{{ $st->total_kg }}</td>
                                <td>{{ $st->total_price_pending }}</td>  

                                <td class="text-center">
                                    <div class="order-action">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <a class="" href="{{ URL::to('me-admin/delivery/' . $st->id . '/edit' ) }}"><i class="tim-icons icon-pencil" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <form action="{{ route('me-admin.delivery.destroy', $st->id)}}" method="post">
                                            @csrf
                                            @method('POST') 

                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this delivery?") }}') ? this.parentElement.submit() : ''"><i class="tim-icons icon-trash-simple"></i></button>
                                        </form> 
                                    </div> 
                                </td> 
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                
                <div class="row">
                    <div class="col-7">
                        <h4 class="card-title">{{ __('Summary Delivery') }}</h4>
                    </div>
                </div>
                <div class="table-responsive"> 
                    <table id="table1" class="table table-striped cell-border table-hover dt-responsive" cellspacing="0" width="100%"> 
                        <thead class=" text-primary">
                            <tr>
                                <th scope="col">             </th>
                                <th colspan="2">{{ __('kajukatri') }}</th>  
                                <th colspan="2">{{ __('chiki') }}</th>  
                                <th colspan="2">{{ __('ghari') }}</th>  
                                 <th colspan="2">{{ __('angir') }}</th>  
                                 <th scope="col"></th>
                                 <th scope="col"></th>
                                <th scope="col">{{ __('total_kg') }}</th> 
                                <th scope="col">{{ __('total_price') }}</th> 
                               
                            </tr>
                            <tr>
                                <th scope="col">{{ __('Id') }}</th>
                                <th scope="col">{{ __('250gm') }}</th>  
                                <th scope="col">{{ __('500gm') }}</th>  
                                <th scope="col">{{ __('250gm') }}</th>  
                                <th scope="col">{{ __('500gm') }}</th>  
                                <th scope="col">{{ __('250gm') }}</th>  
                                <th scope="col">{{ __('500gm') }}</th>  
                                 <th scope="col">{{ __('250gm') }}</th>  
                                <th scope="col">{{ __('500gm') }}</th> 
                                <th scope="col">{{ __('Kaju') }}</th>  
                                <th scope="col">{{ __('Badaam') }}</th>  
                                <th scope="col">{{ __('total_kg') }}</th> 
                                <th scope="col">{{ __('total_price') }}</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total Deliver Box</td>
                                <td><?php echo $total[0] ?></td>  
                                <td><?php echo $total[1] ?></td> 
                                <td><?php echo $total[2] ?></td> 
                                <td><?php echo $total[3] ?></td> 
                                <td><?php echo $total[4] ?></td> 
                                <td><?php echo $total[5] ?></td> 
                                <td><?php echo $total[6] ?></td> 
                                <td><?php echo $total[7] ?></td>  
                                <td><?php echo $total[8] ?></td> 
                                <td><?php echo $total[9] ?></td>
                                <td><?php echo $total[10] ?>(kg)</td> 
                                <td><?php echo $total[11] ?></td> 
                            </tr>
                            <tr> 
                                <td>Total Deliver Box Amount (Rs.)</td>  
                                <td class="greencolor" ><?php echo $totalprice[0] ?></td>  
                                <td class="greencolor" ><?php echo $totalprice[1] ?></td>  
                                <td class="greencolor" ><?php echo $totalprice[2] ?></td>  
                                <td class="greencolor" ><?php echo $totalprice[3] ?></td>
                                <td class="greencolor" ><?php echo $totalprice[4] ?></td>
                                <td class="greencolor" ><?php echo $totalprice[5] ?></td>  
                                <td class="greencolor" ><?php echo $totalprice[6] ?></td>  
                                <td class="greencolor" ><?php echo $totalprice[7] ?></td>     
                                <td class="greencolor" ><?php echo $totalprice[8] ?></td>    
                                <td class="greencolor" ><?php echo $totalprice[9] ?></td>    
                                <td></td>
                                <td></td>   
                            </tr>
                            <tr> 
                                <td>Total Deliver KG</td> 
                                <td class="bcolor" colspan="2"><?php echo $fullKg[0] ?> (kg)</td>  
                                <td class="bcolor" colspan="2"><?php echo $fullKg[1] ?> (kg)</td>  
                                <td class="bcolor" colspan="2"><?php echo $fullKg[2] ?> (kg)</td>  
                                 <td class="bcolor" colspan="2"><?php echo $fullKg[3] ?> (kg)</td>  
                                <td class="bcolor"><?php echo $fullKg[4] ?> (kg)</td>  
                                <td class="bcolor"><?php echo $fullKg[5] ?> (kg)</td>  
                                <td></td>
                                <td></td>   
                            </tr>  
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
        $('#table1').dataTable({searching: false, paging: false, info: false});
    });
});
</script>
@stop

