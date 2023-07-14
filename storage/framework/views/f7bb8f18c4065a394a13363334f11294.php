
<?php $__env->startSection('content'); ?>
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>Menu Utama</h3>
                    </div>
                </div>
    
                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li>SIUP</li>
                        <li>menu utama</li> <!-- Space added here -->
                    </ul>
                </div>
            </div>
    
            <div class="row">
                
                <div class="col-24 col-lg-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="<?php echo URL::route('siup_migrasi_pit'); ?>" class="btn btn-primary">Migrasi Siup</a>
                    </div>
                </div>


                <div class="col-24 col-lg-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="<?php echo URL::route('sertifikat_kuota'); ?>" class="btn btn-primary">Sertifikat Kuota</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    

    
    <div class="flex-grow-1"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('change', '#siupMigrasiPITDisclaimer', function(e) {
            if(this.checked) {
                e.preventDefault();
                $('#btnAjukan').prop("disabled", false);
            } else {
                $('#btnAjukan').prop("disabled", true);
                
            }
        });
        $(document).on('click', '#btnAjukan', function(e) {
            $("#contactForm").submit();
        });
    });
</script>    
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\kkp\resources\views/menu.blade.php ENDPATH**/ ?>