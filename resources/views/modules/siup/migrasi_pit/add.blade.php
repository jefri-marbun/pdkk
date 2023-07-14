@extends('index')
@section('custom_style')
{{-- <link rel="stylesheet" href=""> --}}
@endsection
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>SIUP Migrasi PIT</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>SIUP</li>
                    <li>SIUP Migrasi PIT</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- End Page Title Area -->

<!--  StartAuthor Jefri -->

<!-- Surat Permohonan -->
<div class="form-layouts-area">
    <div class="container-fluid">
        <!-- SURAT PERMOHONAN -->
        <div class="card-box-style">
            <div class="others-title">
                <h3>Surat Permohonan</h3>
            </div>
            <form class="row g-3">

                @foreach ($sp_mig_nomor_agenda_baru as $data)
                <div class="col-md-6">
                    <label for="no_agenda_baru" class="form-label">Nomor Agenda</label>
                    <input name="nomorAgenda" type="text" class="form-control" value="{{ $data->nomor_agenda }}" id="no_agenda_baru">
                </div>

                <div class="col-md-6">
                    <label for="nomor_nib" class="form-label">Nomor NIB</label>
                    <input name="nomorNIB" type="text" class="form-control" value="{{ $data->nomor_nib }}" id="nomor_nib">
                    
                </div>

                <div class="col-md-6">
                    <label for="idIzinOSS" class="form-label">ID Izin OSS</label>
                    <input name="idIzinOSS" type="text" class="form-control" value="P02-201912300448488879340" id="idIzinOSS">
                </div>
                @endforeach

                <div class="col-md-6">
                    <label for="idIzinOSS" class="form-label">Perizinan Berusaha OSS</label>
                    <input name="idIzinOSS" type="text" class="form-control" id="idIzinOSS">
                </div>
            </form>
        </div>
    </div>
</div> 
   <!-- END SURAT PERMOHONAN -->  

<!-- START RINCIAN PERMOHONAN -->
<div class="form-layouts-area">
    <div class="container-fluid">
        <div class="card-box-style">
            <div class="others-title">
                <h3>Rincian Permohonan</h3>
            </div>
            <form class="row g-3">

                <div class="col-md-12">
                    <label for="jenisIzin" class="form-label">Jenis Izin<span style="color: red; font-style: italic;">*<span></label>
                        <select id="jenisIzin" class="form-select form-control" disabled>
                            @foreach ($sp_mig_jenis_izin as $status)
                                <option value="{{ $status->id_jenis_izin }}">{{ $status->nama_jenis_izin }}</option>
                            @endforeach
                        </select>
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Skema PNBP</label>
                    <input name="nomorAgenda" type="text" class="form-control" id="
                    skemaPNBP">
                </div>

                <div class="col-md-6">
                    <label for="statusIzin" class="form-label">Status Izin<span style="color: red; font-style: italic;">*<span></label>
                    <select id="statusIzin" class="form-select form-control" disabled>
                      <option value="migrasi">Migrasi</option> <!-- Default option -->
                      @foreach ($sp_mig_status_izin as $status)
                        <option value="{{ $status->id_status_izin }}">{{ $status->nama_status_izin }}</option>
                      @endforeach
                    </select>
                  </div>
                  

                <div class="col-md-12">
                    <label for="ketPerubahan" class="form-label">Keterangan Perubahan</label>
                    <textarea name="ketPerubahan" type="text" class="form-control" id="ketPerubahan"></textarea>
                </div>
                
                
                @foreach ($sp_mig_nomor_agenda_baru as $data)
                <div class="col-md-6">
                    <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                        <input name="namaPemilik" type="text" class="form-control" value="{{ $data->nama_pemilik }}" id="nama_pemilik" disabled>
                    </div>
                @endforeach
            
                @foreach ($sp_mig_nomor_agenda_baru as $data)
                <div class="col-md-4">
                    <label for="bantuan_pemerintah" class="form-label">Bantuan Pemerintah</label>
                        <input name="bantuanPemerintah" type="text" class="form-control" value="{{ $data->bantuan_pemerintah }}" id="bantuan_pemerintah" disabled>
                    </div>
                @endforeach

                
                
            </form>
        </div>
    </div>
</div>
<!-- END RINCIAN PERMOHONAN -->



<!-- START VERIFIKASI -->

<div class="form-layouts-area">
    <div class="container-fluid">
        <div class="card-box-style">
            <div class="others-title">
                <h3>Verifikasi</h3>
            </div>
            <form class="row g-3">
                @foreach ($sp_mig_nomor_agenda_baru as $data)
                <div class="col-md-4">
                    <label for="no_agenda_baru" class="form-label">Nomor Agenda</label>
                    <input name="nomorAgenda" type="text" class="form-control" value="{{ $data->nomor_agenda }}" id="no_agenda_baru" disabled>
                </div>
                @endforeach

                @foreach ($sp_mig_nomor_agenda_baru as $data)
                <div class="col-md-4">
                    <label for="tanggal_permohonan" class="form-label">Tanggal</label>
                    <input name="tanggalPermohonan" type="text" class="form-control" value="{{ date('Y-m-d', strtotime($data->tanggal_permohonan)) }}" id="tanggal_permohonan" disabled>
                </div>
                @endforeach
                 
                @foreach ($sp_mig_nomor_agenda_baru as $data)
                <div class="col-md-4">
                    <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                        <input name="namaPemilik" type="text" class="form-control" value="{{ $data->nama_pemilik }}" id="nama_pemilik" disabled>
                    </div>
                @endforeach

                <div class="col-md-4">
                    <label for="jenisIzin" class="form-label">Jenis Izin</label>
                    <input name="jenisIzin" type="text" class="form-control" id="jenisIzin" value="SIUP" disabled>
                </div>

                <div class="col-md-6">
                    <label for="idIzinOSS" class="form-label">Perizinan Berusaha OSS</label>
                    <input name="idIzinOSS" type="text" class="form-control" id="idIzinOSS">
                </div>

                @foreach ($sp_mig_nomor_agenda_baru as $data)
                <div class="col-md-4">
                    <label for="nomor_izin_usaha" class="form-label">Nomor Izin</label>
                        <input name="nomorIzinUsaha" type="text" class="form-control" value="{{ $data->nomor_izin_usaha }}" id="nomor_izin_usaha" disabled>
                    </div>
                @endforeach

                @foreach ($sp_mig_nomor_agenda_baru as $data)
                <div class="col-md-6">
                    <label for="nomor_nib" class="form-label">Nomor NIB</label>
                    <input name="nomorNIB" type="text" class="form-control" value="{{ $data->nomor_nib }}" id="nomor_nib" disabled>
                @endforeach

                </div>
                <div class="col-md-4">
                    <label for="idIzinOSS" class="form-label">ID Izin OSS</label>
                    <input name="idIzinOSS" type="text" class="form-control" id="idIzinOSS" value="I-202306101712592955356">
                </div>

                <div class="col-md-4">
                    <label for="idProyekOSS" class="form-label">ID Proyek OSS</label>
                    <input name="idProyekOSS" type="text" class="form-control" id="idProyekOSS" value="R-202306101708559289970">
                </div>
                
        <!-- Start Tab Menu -->
                <div class="mt-5">
                    <div class="accordion" id="accordionExample">



        <!-- Start Daftar Pemilik (History) -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Daftar Pemilik (History)
                                </button>
                            </h2>

                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                          
                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                                <input name="namaPemilik" type="text" class="form-control" value="{{ $data->nama_pemilik }}" id="nama_pemilik" disabled>
                            </div>
                        @endforeach
                                          
                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="alamat_pemilik" class="form-label">Alamat Pemilik</label>
                                <input name="alamatPemilik" type="text" class="form-control" value="{{ $data->alamat_pemilik }}" id="alamat_pemilik" disabled>
                            </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="nama_negara" class="form-label">Nama Negara</label>
                                <input name="namaNegara" type="text" class="form-control" value="{{ $data->nama_negara }}" id="nama_negara" disabled>
                            </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                            <div class="col-md-3">
                                <label for="rt_pemilik" class="form-label">RT</label>
                                    <input name="rtPemilik" type="text" class="form-control" value="{{ $data->rt_pemilik }}" id="rt_pemilik" disabled>
                                </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-3">
                            <label for="rw_pemilik" class="form-label">RW</label>
                                <input name="rwPemilik" type="text" class="form-control" value="{{ $data->rw_pemilik }}" id="rw_pemilik" disabled>
                            </div>
                        @endforeach
            
                        <div class="col-md-3">
                            <label for="desaAtauKelurahanPrefix" class="form-label">Desa/Kelurahan</label>
                                <select id="desaAtauKelurahanPrefix" class="form-select form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="Desa">Desa</option>
                                    <option value="Kelurahan" selected>Kelurahan</option>
                                </select>
                        </div>

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-3">
                            <label for="desa" class="form-label"> </label>
                                <input name="desa" type="text" class="form-control" value="{{ $data->desa }}" id="desa">
                        </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                                <label for="provinsi" class="form-label">Provinsi </label>
                                 <input name="provinsi" type="text" class="form-control" value="{{ $data->nama_propinsi }}" id="nama_propinsi" >
                        </div>
                        @endforeach
                                        
                        {{-- <div class="col-md-12">
                        <label for="provinsi" class="form-label">Provinsi<span style="color: red; font-style: italic;">*<span></label>
                            <select id="provinsi" class="form-select form-control">
                                 @foreach ($sp_mig_nomor_agenda_baru as $status)
                                <option value="{{ $status->nama_propinsi }}">{{ $status->nama_propinsi}}</option>
                                @endforeach
                            </select>
                        </div>` --}}                
                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                            <div class="col-md-4">
                                <label for="kabupaten" class="form-label">Kabupaten</label>
                                <input name="kabupaten" type="text" class="form-control" value="{{ $data->nama_kabupaten }}" id="nama_kabupaten" >
                            </div>
                        @endforeach
                                        
                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                            <div class="col-md-4">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input name="kecamatan" type="text" class="form-control" value="{{ $data->kecamatan }}" id="kecamatan" >
                            </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                            <div class="col-md-4">
                                <label for="npwp" class="form-label">NPWP Pemilik</label>
                                <input name="npwpPemilik" type="text" class="form-control" value="{{ $data->npwp_pemilik }}" id="npwp_pemilik" disabled >
                            </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input name="email_pemilik" type="text" class="form-control" value="{{ $data->email_pemilik }}" id="email_pemilik" >
                        </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                             <label for="nomorNIB" class="form-label">Nomor NIB</label>
                            <input name="nomor_nib" type="text" class="form-control" value="{{ $data->nomor_nib }}" id="nomor_nib" disabled >
                        </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="website" class="form-label">Website</label>
                            <input name="website_pemilik" type="text" class="form-control" value="{{ $data->website_pemilik }}" id="website_pemilik" >
                        </div>
                        @endforeach

                        {{-- <div class="col-md-6">
                            <label for="noNIB" class="form-label">Nomor NIB <span style="color: red; font-style: italic;">*<span></label>
                            <input type="text" class="form-control" id="noNIB" value="28XXXXXXXXXXX">
                        </div> --}}

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="kodeTelpon1" class="form-label">Telpon 1</label>
                                <input name="kode_telepon1" type="text" class="form-control" value="{{ $data->kode_telepon1 }}" id="kode_telepon1" >
                        </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="telpon1Pemilik" class="form-label"> </label>
                            <input name="telepon1_pemilik" type="text" class="form-control" value="{{ $data->telepon1_pemilik }}" id="telepon1_pemilik" >
                        </div>
                         @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                            <div class="col-md-4">
                            <label for="kodeTelpon2" class="form-label">Telpon 2</label>
                            <input name="kode_telepon2" type="text" class="form-control" value="{{ $data->kode_telepon2 }}" id="kode_telepon2" >
                        </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="telpon2Pemilik" class="form-label"> </label>
                            <input name="telepon2_pemilik" type="text" class="form-control" value="{{ $data->telepon2_pemilik }}" id="telepon2_pemilik" >
                            </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="teleponGenggam" class="form-label">Telepon Genggam</label>
                            <input name="kode_handphone" type="text" class="form-control" value="{{ $data->kode_handphone }}" id="kode_handphone" >
                        </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="handphonePemilik" class="form-label"></label>
                            <input name="handphone_pemilik" type="text" class="form-control" value="{{ $data->handphone_pemilik }}" id="handphone_pemilik" >
                        </div>
                        @endforeach

                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                        <div class="col-md-4">
                            <label for="fax" class="form-label"> FAX </label>
                            <input name="kode_faksimili1" type="text" class="form-control" value="{{ $data->kode_faksimili1 }}" id="kode_faksimili1" >
                            </div>
                        @endforeach
                                        
                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="faxPemilik" class="form-label"></label>
                                                <input name="faksimili1_pemilik" type="text" class="form-control" value="{{ $data->handphone_pemilik }}" id="faksimili1_pemilik" >
                                            </div>
                                        @endforeach


                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="badanHukum" class="form-label"> Badan Hukum </label>
                                                <input name="nama_badan_hukum" type="text" class="form-control" value="{{ $data->nama_badan_hukum }}" id="nama_badan_hukum" >
                                            </div>
                                        @endforeach


                                        <div class="col-md-6">
                                            <label for="kategoriPemohon" class="form-label">Kategori Pemohon <span style="color: red; font-style: italic;">*<span></label>
                                            <input type="text" class="form-control" id="kategoriPemohon" value="PERSEROAN TERBATAS">
                                        </div>


                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="nomorIdentitas" class="form-label"> KTP </label>
                                                <input name="nomor_identitas" type="text" class="form-control" value="{{ $data->nomor_identitas }}" id="nomor_identitas" >
                                            </div>
                                        @endforeach


                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="nomorIdentitas" class="form-label"> Akte Pendirian </label>
                                                <input name="akte_pendirian" type="text" class="form-control" value="{{ $data->akte_pendirian }}" id="akte_pendirian" >
                                            </div>
                                        @endforeach


                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="tanggalAktePendirian" class="form-label">Tanggal Akte Pendirian </label>
                                                <input name="tanggalAktePendirian" type="text" class="form-control" value="{{ $data->tanggal_akte_pendirian }}" id="tanggal_akte_pendirian" >
                                            </div>
                                        @endforeach

                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="statusPerusahaan" class="form-label">Status Perusahaan </label>
                                                <input name="statusPerusahaan" type="text" class="form-control" value="{{ $data->status_perikanan }}" id="status_perikanan" >
                                            </div>
                                        @endforeach

                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="bantuanPemerintah" class="form-label">Bantuan Pemerintah</label>
                                                <input name="bantuanPemerintah" type="text" class="form-control" value="{{ $data->bantuan_pemerintah }}" id="bantuan_pemerintah" >
                                            </div>
                                        @endforeach

                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="statusTerpadu" class="form-label">Status Terpadu</label>
                                                <input name="statusTerpadu" type="text" class="form-control" value="{{ $data->status_terpadu }}" id="status_terpadu" >
                                            </div>
                                        @endforeach

                                    
                                            
                                        <!-- Start Penanggung Jawab -->
                                        <div class="others-title mt-5 mb-0">
                                            <h6>Penanggung Jawab</h6>
                                        </div>
                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="namaLengkapPJ" class="form-label"> Nama Lenkap </label>
                                                <input name="namaLengkapPJ" type="text" class="form-control" value="{{ $data->penanggung_jawab }}" id="penanggung_jawab" >
                                            </div>
                                        @endforeach

                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="jenisIdentitasPJ" class="form-label"> Jenis Identitas </label>
                                                <input name="jenisIdentitasPJ" type="text" class="form-control" value="{{ $data->ktp_penanggung_jawab }}" id="ktp_penanggung_jawab" >
                                            </div>
                                        @endforeach

                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="jabatanPJ" class="form-label"> Jabatan </label>
                                                <input name="jabatanPJ" type="text" class="form-control" value="{{ $data->jabatan_penanggung_jawab }}" id="jabatan_penanggung_jawab" >
                                            </div>
                                        @endforeach

                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div class="col-md-4">
                                            <label for="noIdentitasPJ" class="form-label"> Jabatan </label>
                                                <input name="noIdentitasPJ" type="text" class="form-control" value="{{ $data->nomor_identitas_pengurus }}" id="nomor_identitas_pengurus" >
                                            </div>
                                        @endforeach

                            
                                        <!-- End Penanggung Jawab -->

                                        <!-- Start Pemilik Manfaat -->
                                        <div class="others-title mt-5 mb-0">
                                            <h6>Pemilik Manfaat</h6>
                                            
                                            @php
                                            $isFormFilled = true; 
                                            @endphp
                                            @foreach ($sp_mig_nomor_agenda_baru as $data)
                                            <div class="col-md-6">
                                                <label for="pemilik_manfaat" class="form-label">Nama Pemilik Manfaat</label>
                                                    <input name="namaPemilikmanfaat" type="text" class="form-control" value="{{ $data->pemilik_manfaat }}" id="pemilik_manfaat" disabled>
                                                </div>
                                            @endforeach

                                            @php
                                            $isFormFilled = true; 
                                            @endphp
                                            @foreach ($sp_mig_nomor_agenda_baru as $data)
                                            <div class="col-md-6">
                                                <label for="nama_jenis_identitas" class="form-label">Jenis Identitas</label>
                                                    <input name="namaJenisIdentitas" type="text" class="form-control" value="{{ $data->nama_jenis_identitas }}" id="nama_jenis_identitas" disabled>
                                                </div>
                                            @endforeach

                                            @php
                                            $isFormFilled = true; 
                                            @endphp
                                            @foreach ($sp_mig_nomor_agenda_baru as $data)
                                            <div class="col-md-6">
                                                <label for="jabatan_pemilik_manfaat" class="form-label">Jabatan</label>
                                                    <input name="jabatanPemilikManfaat" type="text" class="form-control" value="{{ $data->jabatan_pemilik_manfaat }}" id="jabatan_pemilik_manfaat" disabled>
                                                </div>
                                            @endforeach
                                            
                                            @php
                                            $isFormFilled = true; 
                                            @endphp
                                            @foreach ($sp_mig_nomor_agenda_baru as $data)
                                            <div class="col-md-6">
                                                <label for="nomor_identitas_pemilik_manfaat" class="form-label">No. Identitas</label>
                                                    <input name="nomorIdentitasPemilikManfaat" type="text" class="form-control" value="{{ $data->nomor_identitas_pemilik_manfaat }}" id="nomor_identitas_pemilik_manfaat" disabled>
                                                </div>
                                            @endforeach
                                            <br>
                                            <script>
                                                function validateForm() {
                                                    var inputs = document.querySelectorAll('input[required]');
                                            
                                                    for (var i = 0; i < inputs.length; i++) {
                                                        if (inputs[i].value === '') {
                                                            alert('Harap isi semua input sebelum melanjutkan.');
                                                            return false;
                                                        }
                                                    }
                                            
                                                    return true;
                                                }
                                              
                                            </script>

                                            <div class="col-12">
                                            
                                            <!-- Tambahkan atribut 'onsubmit' pada form -->
                                            <form action="..." onsubmit="return validateForm()">
                                                <!-- ... Bagian form lainnya ... -->
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                            {{-- <a href="{{ route ('siup_migrasi_pdf') }}"class="btn btn-primary">print pdf</a>
                                                <br> --}}
                                      
                                            {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}
                                        </div>
                                        <!-- End Pemilik Manfaat -->
                                    </div>
                                </div>
                            </div>
                        </div>
             <!-- End Daftar Pemilik (History) -->
                        
                        <!-- Start NPWP -->
                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Informasi NPWP
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Data NPWP Sesuai</p>
                                </div>
                            </div>
                        </div> --}}
    
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Dokumen Persyaratan
                                </button>
                            </h2>


                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Jenis Dokumen</th>
                                                <th scope="col">Dokumen Di Unggah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="d-none">
                                                <th scope="row">1</th>
                                                <td>Surat Permohonan</td>
                                                <td>
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>NIB</td>
                                                <td>
                                                   
                                                    <form action="/upload-file" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row mt-4 mb-3 text-center" >
                                                        <div class="col-sm-4">
                                                                <img src="{{ asset('resources/assets/images/pemilik/6277.jpg') }}" style="width: 150px" class="img-thumbnail" alt="blog-1">
                                                                <input class="mt-3" type="file" id="fotoPemilik" name="fotoPemilik">
                                                            </div>
                                                        </div>
                                        

                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Izin Usaha OSS</td>
                                                <td>
                                                   
                                                    <form action="/upload-file" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row mt-4 mb-3 text-center" >
                                                        <div class="col-sm-4">
                                                                <img src="{{ asset('resources/assets/images/pemilik/6277.jpg') }}" style="width: 150px" class="img-thumbnail" alt="blog-1">
                                                                <input class="mt-3" type="file" id="fotoPemilik" name="fotoPemilik">
                                                            </div>
                                                        </div>
                                        

                                                </td>
                                            </tr>


                                            <tr class="d-none">
                                                <th scope="row">3</th>
                                                <td>Rencana Kegiatan Usaha</td>
                                                <td>
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                </td>
                                            </tr>
                                            <tr class="d-none">
                                                <th scope="row">4</th>
                                                <td>Alokasi - Realisasi SIUP</td>
                                                <td>
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                </td>
                                            </tr>
                                            <tr class="d-none">
                                                <th scope="row">5</th>
                                                <td>Syarat Pendukung</td>
                                                <td>
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                </td>
                                            </tr>
                                            <tr class="d-none">
                                                <th scope="row">6</th>
                                                <td>Surat pernyataan penangkapan ikan terukur</td>
                                                <td>
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                    <img src="{{ URL::asset('resources/assets/images/blog/blog-2.jpg') }}" style="width: 200px" class="img-thumbnail" alt="blog-1">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End NPWP -->
                        
                        <!-- Start Foto & Tanda Tangan -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Foto & Tanda Tangan
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="/upload-file" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mt-4 mb-3">
                                            <label for="fotoPemilik" class="col-sm-8 col-form-label">Foto Pemilik ( <span style="color: red; font-style: italic;">Foto orang perseorangan atau penanggung jawab Korporasi terbaru berwarna berukuran 4 x 6 cm berlatar belakang merah</span> )</label>
                                            <div class="col-sm-4">
                                                <img src="{{ asset('resources/assets/images/pemilik/6277.jpg') }}" style="width: 400px" class="img-thumbnail" alt="blog-1">
                                                <input class="mt-3" type="file" id="fotoPemilik" name="fotoPemilik">
                                            </div>
                                        </div>
                        
                                        <div class="row mt-4 mb-3">
                                            <label for="ttdPemilik" class="col-sm-8 col-form-label">Tanda Tangan Pemilik</label>
                                            <div class="col-sm-4">
                                                <img id="previewImage" src="{{ asset('resources/assets/images/pemilik/t6277.jpg') }}" style="width: 500px" class="img-thumbnail" alt="blog-1">
                                                <input class="mt-3" type="file" id="ttdPemilik" onchange="previewFile()" name="ttdPemilik">
                                            </div>
                                        </div>
                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- End Foto & Tanda Tangan -->
                 <!--  End Author Jefri -->        

                        <!-- Start Alokasi -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Kegiatan Usaha dan Alokasi Izin Usaha
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th scope="col" colspan="2">Kegiatan Usaha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Parameter Resiko <span style="color: red; font-style: italic;">*</span></td>
                                                <td>
                                                    <select id="inputState" class="form-select form-control">
                                                        <option selected="">Tinggi</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kegiatan Usaha <span style="color: red; font-style: italic;">*</span></td>
                                                <td>
                                                    <select id="inputState" class="form-select form-control">
                                                        <option value="5">USAHA PENANGKAPAN IKAN</option>
                                                        <option value="6">USAHA PENGANGKUTAN IKAN</option>
                                                        <option value="7" selected="">USAHA PENANGKAPAN DAN PENGANGKUTAN IKAN</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>

                                    <div class="accordion mt-4" id="accordionExample2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivePointOne" aria-expanded="false" aria-controls="collapseFivePointOne">
                                                    Permohonan Alokasi
                                                </button>
                                            </h2>
                                            <div id="collapseFivePointOne" class="accordion-collapse collapse show d-none" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body">
                                                    <p>Tidak ada data.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item d-none">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivePointTwo" aria-expanded="false" aria-controls="collapseFivePointTwo">
                                                    Persetujuan Alokasi
                                                </button>
                                            </h2>
                                            <div id="collapseFivePointTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body">
                                                    <table class="table table-bordered mt-4">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Aksi</th>
                                                                <th scope="col">No.</th>
                                                                <th scope="col">Jenis Alat Tangkap</th>
                                                                <th scope="col">KBLI</th>
                                                                <th scope="col">Ukuran Kapal</th>
                                                                <th scope="col">Diajukan - Disetujui</th>
                                                                <th scope="col">Kuota Usaha</th>
                                                                <th scope="col">Daerah Penangkapan</th>
                                                                <th scope="col">Daerah Terlarang</th>
                                                                <th scope="col">Pangkalan</th>
                                                                <th scope="col">Muat</th>
                                                                <th scope="col">Pelabuhan Negara Tujuan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="min-width:135px;">
                                                                    <select id="inputState" class="form-select form-control">
                                                                        <option selected="">Pilih Aksi</option>
                                                                        <option>Edit</option>
                                                                        <option>Hapus</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td>
                                                                    Pukat Cincin Pelagis Kecil dengan Satu Kapal 
                                                                </td>
                                                                <td>
                                                                    [03111] Penangkapan Pisces/lkan Bersirip di laut
                                                                </td>
                                                                <td>
                                                                    60 - 100
                                                                </td>
                                                                <td>
                                                                    1 - 1 
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    ZEEI WPP NRI 711 (ZEEI L. Cina Selatan); WPP NRI 711 (Sl. Karimata; L. Natuna dan L. Cina Selatan)
                                                                </td>
                                                                <td>
                                                                    Jalur I & II
                                                                </td>
                                                                <td>
                                                                    PP. Barelang, PP. Selat Lampa (Ranai), PPP. Sungai Rengas, PP. Kuala Tungkal, PP. Kijang
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="min-width:135px;">
                                                                    <select id="inputState" class="form-select form-control">
                                                                        <option selected="">Pilih Aksi</option>
                                                                        <option>Edit</option>
                                                                        <option>Hapus</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    2
                                                                </td>
                                                                <td>
                                                                    Pukat Cincin Pelagis Kecil dengan Satu Kapal
                                                                </td>
                                                                <td>
                                                                    [03111] Penangkapan Pisces/lkan Bersirip di laut
                                                                </td>
                                                                <td>
                                                                    150 - 200
                                                                </td>
                                                                <td>
                                                                    1 - 1
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    ZEEI WPP NRI 711 (ZEEI L. Cina Selatan)
                                                                </td>
                                                                <td>
                                                                    Jalur I & II 
                                                                </td>
                                                                <td>
                                                                    PP. Barelang, PP. Selat Lampa (Ranai), PPP. Sungai Rengas, PP. Kuala Tungkal, PP. Kijang
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="min-width:135px;">
                                                                    <select id="inputState" class="form-select form-control">
                                                                        <option selected="">Pilih Aksi</option>
                                                                        <option>Edit</option>
                                                                        <option>Hapus</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    3
                                                                </td>
                                                                <td>
                                                                    Rawai Dasar
                                                                </td>
                                                                <td>
                                                                    [03111] Penangkapan Pisces/lkan Bersirip di laut
                                                                </td>
                                                                <td>
                                                                    30 - 60
                                                                </td>
                                                                <td>
                                                                    1 - 1
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    ZEEI WPP NRI 711 (ZEEI L. Cina Selatan); WPP NRI 711 (Sl. Karimata; L. Natuna dan L. Cina Selatan)
                                                                </td>
                                                                <td>
                                                                    Jalur I & II 
                                                                </td>
                                                                <td>
                                                                    PP. Barelang, PP. Selat Lampa (Ranai), PPP. Sungai Rengas, PP. Kuala Tungkal, PP. Kijang 
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="min-width:135px;">
                                                                    <select id="inputState" class="form-select form-control">
                                                                        <option selected="">Pilih Aksi</option>
                                                                        <option>Edit</option>
                                                                        <option>Hapus</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    4
                                                                </td>
                                                                <td>
                                                                    Jaring Insang Hanyut
                                                                </td>
                                                                <td>
                                                                    [03111] Penangkapan Pisces/lkan Bersirip di laut
                                                                </td>
                                                                <td>
                                                                    60 - 100
                                                                </td>
                                                                <td>
                                                                    1 - 1
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    ZEEI WPP NRI 711 (ZEEI L. Cina Selatan); WPP NRI 711 (Sl. Karimata; L. Natuna dan L. Cina Selatan)
                                                                </td>
                                                                <td>
                                                                    Jalur I & II 
                                                                </td>
                                                                <td>
                                                                    PP. Barelang, PP. Selat Lampa (Ranai), PPP. Sungai Rengas, PP. Kuala Tungkal, PP. Kijang 
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="min-width:135px;">
                                                                    <select id="inputState" class="form-select form-control">
                                                                        <option selected="">Pilih Aksi</option>
                                                                        <option>Edit</option>
                                                                        <option>Hapus</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    5
                                                                </td>
                                                                <td>
                                                                    Kapal Pengangkut Ikan dari Daerah Penangkapan Ikan (WPPNRI)
                                                                </td>
                                                                <td>
                                                                    [50133] Angkutan Laut Dalam Negeri untuk Barang Khusus
                                                                </td>
                                                                <td>
                                                                    60 - 100
                                                                </td>
                                                                <td>
                                                                    1 - 1
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    -
                                                                </td>
                                                                <td>
                                                                    -
                                                                </td>
                                                                <td>
                                                                    PP. Barelang, PP. Selat Lampa (Ranai), PPP. Sungai Rengas, PP. Kuala Tungkal, PP. Kijang
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="min-width:135px;">
                                                                    <select id="inputState" class="form-select form-control">
                                                                        <option selected="">Pilih Aksi</option>
                                                                        <option>Edit</option>
                                                                        <option>Hapus</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    5
                                                                </td>
                                                                <td>
                                                                    Kapal Pengangkut Ikan antar Pelabuhan Pangkalan
                                                                </td>
                                                                <td>
                                                                    [50133] Angkutan Laut Dalam Negeri untuk Barang Khusus
                                                                </td>
                                                                <td>
                                                                    100 - 150
                                                                </td>
                                                                <td>
                                                                    1 - 1
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                                <td>
                                                                    -
                                                                </td>
                                                                <td>
                                                                    -
                                                                </td>
                                                                <td>
                                                                    PP. Selat Lampa (Ranai), PPP. Tegalsari
                                                                </td>
                                                                <td>
                                                                    PP. Barelang, PP. Selat Lampa (Ranai), PPI. Tarempa, PPP. Sungai Rengas, PP. Kuala Tungkal, PP. Dompak, PPN. Sungailiat, PPN. Pemangkat, PP. Moro, PPN. Tanjung Pandan, PP. Sungai Jawi, PPI. Manggar Belitung Timur, PPN. Kejawanan, PPN. Pekalongan, PPP. Tegalsari, PPP. Klidang Lor, PPP. Bajomulyo , PPS. Nizam Zachman Jakarta, PPP. Tasik Agung, PP. Karangsong
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   <!-- Start Data Alokasi SIUP Sebelumnya -->
                                   <div class="others-title mt-3">
                                    <h3>Data Alokasi SIUP Sebelumnya</h3>
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
                                                            <th scope="col">Jenis Sub Alat Tangkap</th>                                                                
                                                            <th scope="col">Ukuran Kapal</th>
                                                            <th scope="col">Diajukan - Disetujui</th>
                                                            <th scope="col">Operasi Laut Lepas</th>
                                                            <th scope="col">Armada /Tunggal</th>
                                                            <th scope="col">Daerah Penangkapan</th>
                                                            <th scope="col">Daerah Terlarang</th>
                                                            <th scope="col">Pangkalan</th>
                                                            <th scope="col">Muat</th>
                                                            <th scope="col">Pelabuhan Negara Tujuan</th>
                                                          </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($sp_mig_alokasi_lama as $data)
                                                        <tr>
                                                        
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $data->keterangan }}</td>
                                                            <td>{{ $data->ukuran_kapal }}</td>
                                                            <td class="text-center">{{ $data->jumlah_persetujuan }}</td>
                                                            <td>{{ $data->operasi_laut_lepas }}</td>
                                                            <td>{{ $data->status_armada }}</td>
                                                            <td>{{ $data->dpi }}</td>
                                                            <td>{{ $data->daerah_terlarang }}</td>
                                                            <td>{{ $data->pangkalan }}</td>
                                                            <td>{{ $data->muat }}</td>
                                                            <td>{{ $data->tujuan }}</td>
                                                        @endforeach
                                                        </tr>
                                                    </tbody>
                                                </table>                                                    
                                </div>
                                <!-- End Data Alokasi SIUP Sebelumnya -->
                                    
                                    <!-- Start Data Alokasi SIUP Diajukan -->
                                    <div class="others-title mt-3">
                                        <h3>Data Alokasi SIUP Diajukan</h3>
                                                </div>
                                                    <table class="table table-bordered mt-4">
                                                        <thead>
                                                            <tr>
                                                            <!-- 
                                                                <th scope="col">No.</th>
                                                                <th scope="col">Jenis Alat Tangkap</th>
                                                                <th scope="col">KBLI</th>
                                                                <th scope="col">Ukuran Kapal</th>
                                                                <th scope="col">Diajukan - Disetujui</th>
                                                                <th scope="col">Kuota Usaha</th>
                                                                <th scope="col">Daerah Penangkapan</th>
                                                                <th scope="col">Daerah Terlarang</th>
                                                                <th scope="col">Pangkalan</th>
                                                                <th scope="col">Muat</th>
                                                                <th scope="col">Pelabuhan Negara Tujuan</th> 
                                                            -->
                                                                <th scope="col">No.</th>
                                                                <th scope="col">Isi Data</th>
                                                                <th scope="col d-none">Id Alokasi</th>
                                                                <th scope="col">Alat Tangkap</th>
                                                                <th scope="col">Ukuran Kapal</th>
                                                                <th scope="col">Alokasi</th>
                                                                <th scope="col">Zona PIT</th>
                                                                <th scope="col">WPP</th>
                                                                <th scope="col">Koefisien Produksi</th>
                                                                <th scope="col">Pangkalan</th>
                                                                <th scope="col">Estimasi Produksi</th>
                                                                <th scope="col">Nama Kapal</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($sp_mig_split_alokasi as $data)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                
                                                                <!-- Modal Form-->
                                                               <!-- Button to trigger the modal -->
                                                                <td>
                                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-{{ $data->idalokasi }}">+</button>
                                                                </td>
                                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-{{ $data->idalokasi }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel-{{ $data->idalokasi }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLabel-{{ $data->idalokasi }}">Alokasi SIUP Diajukan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                    
                                                        
                                                        <div class="modal-body">
                                                            <form action="{{ route('submitForm') }}" method="POST">
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="idalokasi" class="col-form-label">Id Alokasi:</label>
                                                                    <input name="idalokasi" type="text" class="form-control" value="{{ $data->idalokasi }}" id="idalokasi" disabled>
                                                                    <input type="hidden" name="idalokasi" value="{{ $data->idalokasi }}">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="zona_pit" class="col-form-label">Zona PIT:</label>
                                                                    <select class="form-control" name="zonaPit">
                                                                        <option value="zona 1">Zona 1</option>
                                                                        <option value="zona 2">Zona 2</option>
                                                                        <option value="zona 3">Zona 3</option>
                                                                    </select>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="wpp" class="col-form-label">WPP:</label>
                                                                    <select class="form-control" name="wpp">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                    </select>
                                                                </div>

                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

  
  
                                                                 <!-- End Modal Form-->
                                                                <td>{{ $data->idalokasi }}</td>
                                                                <td>{{ $data->keterangan }}</td>
                                                                <td class="text-center">{{ $data->ukuran }}</td> 
                                                                <td class="text-center">{{ $data->alokasiajukan }}</td>
                                                                <td>{{ $data->zonapit }}</td>
                                                                <td>{{ $data->wpp }}</td>
                                                                <td>{{ $data->koefisien }}</td>
                                                                <td>{{ $data->pangkalan }}</td>
                                                                <td>{{ $data->kuota }}</td>                                   
                                                                <td>{{ $data->namakapal }}</td>
                                                            </tr>
                                                            @endforeach 
                                                        </tbody>
                                                    </table>                                                   
                                                    </div>
                                    </div>
                                    <!-- Start Data Alokasi SIUP Diajukan -->

                                <!-- Start Realisasi Kapal --> <!-- BY JO -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Realisasi Kapal
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="others-title mt-3">
                                                <h3>Data Realisasi Kapal</h3>
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
                                                        <th scope="col">Nama Pemilik</th>
                                                        <th scope="col">Nomor Izin Usaha</th>
                                                        <th scope="col">Nama Kapal</th>
                                                        <th scope="col">Nomor Izin</th>
                                                        <th scope="col">Tanggal Terbit</th>
                                                        <th scope="col">Keterangan</th>
                                                        <th scope="col">Berat Kotor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sp_mig_realisasi_kapal as $data)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $data->nama_pemilik }}</td>
                                                        <td>{{ $data->nomor_izin_usaha }}</td>
                                                        <td>{{ $data->nama_kapal }}</td>
                                                        <td>{{ $data->nomor_izin }}</td>
                                                        <td>{{ $data->tanggal_terbit }}</td>
                                                        <td>{{ $data->keterangan }}</td>
                                                        <td>{{ $data->berat_kotor }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            <!-- End Realisasi Kapal --> <!-- BY JO -->
                            </div>
        
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Catatan Verifikasi	
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3 mt-1">
                                        <div class="col-md-12">
                                            <label for="catatanVerifikasi" class="form-label">Catatan Verifikasi <span style="color: red; font-style: italic;">*<span></label>
                                            <textarea class="form-control" rows="5"> </textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="catatanProses" class="form-label">Catatan Proses</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="catatanSIUP" class="form-label">Catatan SIUP</label>
                                            <textarea class="form-control" rows="5"></textarea> </textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item d-none">
                            <h2 class="accordion-header" id="headingFourteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                    Alokasi Pertimbangan
                                </button>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body"> 
                                    <table class="table table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">Alokasi Pertimbangan</th>
                                                <th scope="col">
                                                    <button type="button" class="btn btn-primary mb-1">Tambah</button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <select id="inputState" class="form-select form-control">
                                                        <option selected="">Alokasi Pertimbangan...</option>
                                                        <option>Perubahan data administrasi (KTP/NPWP/alamat/penanggung jawab)</option>
                                                        <option>Perubahan alat tangkap</option>
                                                        <option>Perubahan daerah penangkapan ikan</option>
                                                        <option>Perubahan pelabuhan pangkalan</option>
                                                        <option>Perubahan pelabuhan muat/singgah/bongkar</option>
                                                        <option>Perubahan NPWP</option>
                                                        <option>Batas waktu pengajuan SIUP sudah terpenuhi (> 6 bulan)</option>
                                                        <option>Pengurangan alokasi</option>
                                                        <option>Telah merealisasikan seluruh alokasi</option>
                                                    </select>
                                                </th>
                                                <td>
                                                    <button type="button" class="btn btn-danger mb-1">Hapus</button>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab Menu -->
            </form>
            <a href="{{ route ('siup_migrasi_pdf') }}"class="btn btn-primary">Cetak Resume</a>
    <br>
        </div>
    </div>
    
</div>
<!-- End Form Layouts Area -->

<div class="flex-grow-1"></div>
@endsection
@section('custom_script')
{{-- <script src=""></script> --}}
<script type="text/javascript">
    $(document).ready(function() {

    });
</script>





@endsection