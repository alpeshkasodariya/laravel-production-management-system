@extends('layouts.app', ['page' => __('Productions'), 'pageSlug' => 'production'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-7">
                        <h4 class="card-title">{{ __('Productions') }}</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ URL::to('me-admin/production/create') }}" class="btn btn-sm btn-primary">{{ __('Add Production') }}</a>
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
                                <th scope="col">{{ __('Date') }}</th>  
                                <th scope="col">{{ __('Time') }}</th>  
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
                            @if(!empty($productions))
                            @foreach ($productions as $st)
                            <tr>
                                <td>{{ $st->id }}</td>
                                <td>{{ $st->date }}</td>  
                                <td>{{ $st->time }}</td>  
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
                                <td>{{ $st->total_price }}</td>  
                                <td class="text-center">
                                    <div class="order-action">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <a class="" href="{{ URL::to('me-admin/production/' . $st->id . '/edit' ) }}"><i class="tim-icons icon-pencil" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <form action="{{ route('me-admin.production.destroy', $st->id)}}" method="post">
                                            @csrf
                                            @method('POST') 

                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this production?") }}') ? this.parentElement.submit() : ''"><i class="tim-icons icon-trash-simple"></i></button>
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
                        <h4 class="card-title">{{ __('Summary Productions') }}</h4>
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
                                <th scope="col">{{ __('Kaju') }}</th> 
                                <th scope="col">{{ __('Badam') }}</th> 
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
                                <th scope="col"></th> 
                                <th scope="col"></th>  
                                <th scope="col"></th> 
                                <th scope="col"></th>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total Box</td>
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
                                <td><?php echo $total[10] ?></td> 
                                <td><?php echo $total[11] ?></td> 
                            </tr>
                            <tr> 
                                <td>Total Box Amount (Rs.)</td>  
                                <td><?php echo $totalprice[0] ?></td>   
                                <td><?php echo $totalprice[1] ?></td>
                                <td><?php echo $totalprice[2] ?></td>
                                <td><?php echo $totalprice[3] ?></td>
                                <td><?php echo $totalprice[4] ?></td>
                                <td><?php echo $totalprice[5] ?></td>
                                <td><?php echo $totalprice[6] ?></td>
                                <td><?php echo $totalprice[7] ?></td>
                                <td><?php echo $totalprice[8] ?></td>
                                <td><?php echo $totalprice[9] ?></td>
                                <td></td>  
                                <td></td> 
                            </tr>
                            <tr> 
                                <td>Total Amount(Rs.)</td>
                                <td class="greencolor" colspan="2"><?php echo $fulltotalprice[0] ?><small>(Rs)</small></td>  
                                <td class="greencolor" colspan="2"><?php echo $fulltotalprice[1] ?><small>(Rs)</small></td>  
                                <td class="greencolor" colspan="2"><?php echo $fulltotalprice[2] ?><small>(Rs)</small></td>  
                                <td class="greencolor"  colspan="2"><?php echo $fulltotalprice[3] ?><small>(Rs)</small></td>  
                                <td class="greencolor" colspan="2" ><?php echo $fulltotalprice[4] ?><small>(Rs)</small></td>  
                                <td></td>
                                <td></td> 
                            </tr>
                            <tr> 
                                <td>Total KG</td>
                                <td class="bcolor" colspan="2"><?php echo $fullKg[0] ?> (kg)</td>  
                                <td class="bcolor" colspan="2"><?php echo $fullKg[1] ?> (kg)</td>  
                                <td class="bcolor" colspan="2"><?php echo $fullKg[2] ?> (kg)</td>
                                <td class="bcolor" colspan="2"><?php echo $fullKg[3] ?> (kg)</td>
                                <td class="bcolor"  ><?php echo $fullKg[4] ?> (kg)</td>
                                <td class="bcolor"  ><?php echo $fullKg[5] ?> (kg)</td>
                                <td></td>
                                <td></td>   
                            </tr>
                            <tr> 
                                <td>Order Total Box</td>
                                <td class="darkbluecolor"><?php echo $orderbox[0] ?></td>  
                                <td class="darkbluecolor"><?php echo $orderbox[1] ?></td>  
                                <td class="darkbluecolor"><?php echo $orderbox[2] ?></td> 
                                <td class="darkbluecolor"><?php echo $orderbox[3] ?></td>
                                <td class="darkbluecolor"><?php echo $orderbox[4] ?></td>
                                <td class="darkbluecolor"><?php echo $orderbox[5] ?></td> 
                                <td class="darkbluecolor"><?php echo $orderbox[6] ?></td>
                                <td class="darkbluecolor"><?php echo $orderbox[7] ?></td>
                                <td class="darkbluecolor"><?php echo $orderbox[8] ?></td>
                                <td class="darkbluecolor"><?php echo $orderbox[9] ?></td>
                                <td class="darkbluecolor"><?php echo $orderbox[10] ?>(kg)</td>
                                <td class="darkbluecolor"><?php echo $orderbox[11] ?></td>
                            </tr>
                            <tr> 
                                <td>Delivered Total Box </td>
                                <td class="gcolor"><?php echo $deliverbox[0] ?></td>  
                                <td class="gcolor"><?php echo $deliverbox[1] ?></td>  
                                <td class="gcolor"><?php echo $deliverbox[2] ?></td> 
                                <td class="gcolor"><?php echo $deliverbox[3] ?></td>
                                <td class="gcolor"><?php echo $deliverbox[4] ?></td>
                                <td class="gcolor"><?php echo $deliverbox[5] ?></td> 
                                <td class="gcolor"><?php echo $deliverbox[6] ?></td>
                                <td class="gcolor"><?php echo $deliverbox[7] ?></td>
                                <td class="gcolor"><?php echo $deliverbox[8] ?></td>
                                <td class="gcolor"><?php echo $deliverbox[9] ?></td>
                                <td class="gcolor"><?php echo $deliverbox[10] ?></td>
                                <td class="gcolor"><?php echo $deliverbox[11] ?></td>
                            </tr>
                            <tr> 
                                <td>Delivered Pending Box</td>
                                <td class="ycolor"><?php echo $pendingbox[0] ?></td>  
                                <td class="ycolor"><?php echo $pendingbox[1] ?></td>  
                                <td class="ycolor"><?php echo $pendingbox[2] ?></td> 
                                <td class="ycolor"><?php echo $pendingbox[3] ?></td>
                                <td class="ycolor"><?php echo $pendingbox[4] ?></td>
                                <td class="ycolor"><?php echo $pendingbox[5] ?></td>
                                <td class="ycolor"><?php echo $pendingbox[6] ?></td>
                                <td class="ycolor"><?php echo $pendingbox[7] ?></td>
                                <td class="ycolor"><?php echo $pendingbox[8] ?></td>
                                <td class="ycolor"><?php echo $pendingbox[9] ?></td>
                                <td></td>  
                                <td></td>  
                            </tr>
                            <tr> 
                                <td>Balance Box</td>
                                <td class="pcolor"><?php echo $balancebox[0] ?></td>  
                                <td class="pcolor"><?php echo $balancebox[1] ?></td>  
                                <td class="pcolor"><?php echo $balancebox[2] ?></td> 
                                <td class="pcolor"><?php echo $balancebox[3] ?></td>
                                <td class="pcolor"><?php echo $balancebox[4] ?></td>
                                <td class="pcolor"><?php echo $balancebox[5] ?></td>
                                <td class="pcolor"><?php echo $balancebox[6] ?></td>
                                <td class="pcolor"><?php echo $balancebox[7] ?></td>
                                <td class="pcolor"><?php echo $balancebox[8] ?></td>
                                <td class="pcolor"><?php echo $balancebox[9] ?></td>
                                <td></td>  
                                <td></td>  
                            </tr>
                            <tr> 
                                <td>Pending for Making</td> 
                                <td class="redcolor"><?php echo $pending_makeing_box[0] ?></td>  
                                <td class="redcolor"><?php echo $pending_makeing_box[1] ?></td>  
                                <td class="redcolor"><?php echo $pending_makeing_box[2] ?></td> 
                                <td class="redcolor"><?php echo $pending_makeing_box[3] ?></td>
                                <td class="redcolor"><?php echo $pending_makeing_box[4] ?></td>
                                <td class="redcolor"><?php echo $pending_makeing_box[5] ?></td>
                                <td class="redcolor"><?php echo $pending_makeing_box[6] ?></td>
                                <td class="redcolor"><?php echo $pending_makeing_box[7] ?></td>
                                <td class="redcolor"><?php echo $pending_makeing_box[8] ?></td>
                                <td class="redcolor"><?php echo $pending_makeing_box[9] ?></td>
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
         
            $('#table').DataTable();
            
            $('#table1').dataTable({searching: false, paging: false, info: false,sorting:false});

        
    });
</script>
@stop

