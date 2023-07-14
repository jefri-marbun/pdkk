@extends('index')
@section('content')
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
                        <a href="{!! URL::route('siup_migrasi_pit') !!}" class="btn btn-primary">Migrasi Siup</a>
                    </div>
                </div>


                <div class="col-24 col-lg-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{!! URL::route('sertifikat_kuota') !!}" class="btn btn-primary">Sertifikat Kuota</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    

    
    <div class="flex-grow-1"></div>
@endsection
@section('custom_script')
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
@endsection 