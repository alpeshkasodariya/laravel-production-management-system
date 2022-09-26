<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title"><?php echo e(__('Kachomal')); ?></h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?php echo e(URL::to('me-admin/kachomal/create')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Add Kachomal')); ?></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                <div class="table-responsive"> 
                        <table id="table" class="table table-striped cell-border table-hover dt-responsive" cellspacing="0" width="100%"> 
                        <thead class=" text-primary">
                            <tr>
                                <th scope="col"><?php echo e(__('Id')); ?></th>
                                <th scope="col"><?php echo e(__('Item Name')); ?></th>   
                                <th scope="col"><?php echo e(__('Rate')); ?></th>  
                                <th scope="col"><?php echo e(__('Total_kg')); ?></th>  
                                <th scope="col"><?php echo e(__('Total_price')); ?></th>  
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($kachomal)): ?>
                                <?php $__currentLoopData = $kachomal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($st->id); ?></td>
                                    <td><?php echo e($st->name); ?></td>  
                                    <td><?php echo e($st->rate); ?></td> 
                                    <td><?php echo e($st->total_kg); ?></td> 
                                    <td><?php echo e($st->total_price); ?></td> 
                                    <td class="text-center">
                                        <div class="order-action">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                            <a class="" href="<?php echo e(URL::to('me-admin/kachomal/' . $st->id . '/edit' )); ?>"><i class="tim-icons icon-pencil" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                            <form action="<?php echo e(route('me-admin.kachomal.destroy', $st->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('POST'); ?> 

                                                <button type="button" class="dropdown-item" onclick="confirm('<?php echo e(__("Are you sure you want to delete this kachomal?")); ?>') ? this.parentElement.submit() : ''"><i class="tim-icons icon-trash-simple"></i></button>
                                            </form> 
                                        </div> 
                                    </td> 
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div> 
            </div> 
        </div>
    </div>
</div>  
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('footer_scripts'); ?>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', ['page' => __('Kachomal'), 'pageSlug' => 'kachomal'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/AlpeshJetDrive/C-Card/MAMP/order/resources/views/kachomal/index.blade.php ENDPATH**/ ?>