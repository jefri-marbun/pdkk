@extends('index')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>Sertifikat Kuota</h3>
                    </div>
                </div>
    
                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li>SIUP</li>
                        <li>Sertifikat Kuota</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
<!-- Start A -->
<div class="form-layouts-area">
    <div class="container-fluid">
        <!-- SURAT PERMOHONAN -->
        <div class="card-box-style">
            <div class="others-title">
                <h3>Surat Permohonan</h3>
            </div>
            <h6>
                A. Data Permohonan
            </h6>
            <form class="row g-3">

                @foreach ($sp_sert_kuota_permohonan as $data)
                <div class="col-md-6">
                    <label for="no_permohonan" class="form-label">Nomor Permohonan</label>
                    <input name="nomorPermohonan" type="text" class="form-control" value="{{ $data->nomor_permohonan }}" id="nomor_permohonan">
                </div>
                @endforeach

                @foreach ($sp_sert_kuota_permohonan as $data)
                <div class="col-md-6">
                    <label for="tanggal_permohonan" class="form-label">Tanggal Permohonan</label>
                    <input name="tanggalPermohonan" type="text" class="form-control" value="{{ $data->tanggal_permohonan }}" id="tanggal_permohonan">
                </div>
                @endforeach
                <h6>
                    B. Data Siup
                </h6>

                @foreach ($sp_sert_kuota_permohonan as $data)
                <div class="col-md-6">
                    <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                    <input name="namaPemilik" type="text" class="form-control" value="{{ $data->nama_pemilik }}" id="nama_pemilik">
                </div>
                
                <div class="col-md-6">
                    <label for="nomor_siup" class="form-label">Nomor SIUP</label>
                    <input name="nomorSIUP" type="text" class="form-control" value="{{ $data->nomor_siup }}" id="nomor_siup">
                </div>

                <div class="col-md-6">
                    <label for="tanggal_siup" class="form-label">Tanggal SIUP</label>
                    <input name="tanggalSiup" type="text" class="form-control" value="{{ $data->tanggal_siup }}" id="tanggal_siup">
                </div>

                <div class="col-md-6">
                    <label for="masa_berlaku_siup" class="form-label">Masa Berlaku SIUP</label>
                    <input name="masa_berlaku" type="text" class="form-control" value="{{ $data->masa_berlaku }}" id="masa_berlaku">
                </div>

                <div class="col-md-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" value="{{ $data->alamat }}" id="alamat">
                </div>

                <div class="col-md-6">
                    <label for="penanggungjawab" class="form-label">Penanggung Jawab</label>
                    <input name="penanggungJawab" type="text" class="form-control" value="{{ $data->penanggung_jawab }}" id="penanggungJawab">
                </div>

                
                <div class="col-md-6">
                    <label for="nib" class="form-label">NIB</label>
                    <input name="nib" type="text" class="form-control" value="{{ $data->nib }}" id="nib">
                </div>

                 
                <div class="col-md-6">
                    <label for="npwp" class="form-label">NPWP</label>
                    <input name="npwp" type="text" class="form-control" value="{{ $data->npwp }}" id="npwp">
                </div>

                <div class="col-md-6">
                    <label for="ruanglingkup" class="form-label">Ruang Lingkup Kegiatan</label>
                    <input name="ruanglingkup" type="text" class="form-control" value="{{ $data->ruang_lingkup }}" id="ruang_lingkup">
                </div>

                <div class="col-md-6">
                    <label for="jumlahKapal" class="form-label">Jumlah Kapal Penangkap Ikan</label>
                    <input name="jumlahKapal" type="text" class="form-control" value="{{ $data->jumlah_kapal_penangkap }}" id="jumlah_kapal_penangkap">
                </div>

                <div class="col-md-6">
                    <label for="totalKuota" class="form-label">Total Kuota</label>
                    <input name="totalKuota" type="text" class="form-control" value="{{ $data->total_kuota }}" id="total_kuota">
                </div>
                @endforeach
            </form>
            <br>
            <h6>
                C. Data Laporan
            </h6>
        
            <div class="others-title mt-3">
                <style>
                    th {
                      text-align: center;
                    }
                    .header {
                      text-align: center;
                      font-weight: bold;
                    }
                  </style>
                        </div>
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>                                                                
                                        <th scope="col">Nama Kapal</th>                                                                
                                        <th scope="col">Alat Penangkapan Ikan</th>
                                        <th scope="col">Ukuran Kapal(GT)</th>
                                        <th scope="col">Zona Penangkapan Ikan Terukur</th>
                                        <th scope="col">Pelabuhan Pangkalan</th>
                                        <th scope="col">Jumlah Kuota(TON)</th>
                                       
                                      </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach ($sp_sert_kuota_permohonan_lampiran as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama_kapal }}</td>
                                        <td>{{ $data->nama_alat_tangkap }}</td>
                                        <td>{{ $data->ukuran_kapal }}</td>
                                        <td>{{ $data->zona_pit }}</td>
                                        <td>{{ $data->pangkalan }}</td>
                                        <td>{{ $data->kuota_prod }}</td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                            </table> 

                            @php
                                $email = session('email');
                            @endphp
                            
                            <a href="{{ route('sertifikat_pdf') }}" class="btn btn-primary" onclick="event.preventDefault(); submitForm();">Simpan</a>

                            <form id="spSimpanForm" action="{{ route('sertifikat_pdf') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" name="param1" value="1">
                                <input type="hidden" name="param2" value="{{ $email }}">
                                <input type="hidden" name="param3" value="1/2023">
                            </form>

                            <script>
                                function submitForm() {
                                    // Submit the form
                                    document.getElementById('spSimpanForm').submit();

                                    // Display "Tersimpan" message
                                    alert('Tersimpan');

                                    // Redirect to the specified route
                                    window.location.href = "{{ route('sertifikat_pdf') }}";
                                }
                            </script>

                                                                          
            </div>

        </div>
    </div>
</div> 

<!-- End A -->
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