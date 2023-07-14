{{-- <html>
<head>
    <title>SIUP</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;   
    }
    .w-70{
        width:70%;   
    }
    .w-85{
        width:85%;   
    }
    .w-30{
        width:30%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
        <div class="head-title">
        <h1 class="text-center m-0 p-0">Resume</h1>
    </div>
    @foreach ($sp_mig_nomor_agenda_baru as $item)
    <div class="add-detail mt-10">
        <div class="w-50 float-left mt-10">
            <p class="m-0 pt-5 text-bold w-100">Nomor Agenda :  <span class="gray-color">{{ $item->nomor_agenda }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Nomor NIB : <span class="gray-color">{{ $item->nomor_nib }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Nama : <span class="gray-color">{{ $item->penyampai_permohonan }}</span></p>
        </div>
        <div style="clear: both;"></div>
    </div>
    @endforeach
    
</body>


</html> --}}
{{-- <html>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> --}}

<div class="page-content container">
    <div class="page-header text-blue-d2">
        <center>
            <img src="{{ asset('public/images/kkp_img.png') }}" alt="Deskripsi Gambar" width="200" height="120">
            <h4 class="page-title text-secondary-d1">
                LOG BOOK, PENILAIAN KELAYAKAN RENCANA USAHA DAN PERSETUJUAN ALOKASI
            </h4>
        </center>
    </div>
</div>



                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <h5>A. DATA PERUSAHAAN / PERORANGAN</h5>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="width: 50%;">
                                        @foreach ($sp_mig_resume_siup as $data)
                                            <div>
                                                <span>
                                                    <font size="2">1. Nama Pemohon :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->nama_pemilik }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">2. Alamat :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->alamat_pemilik }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">3. Penanggung Jawab :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->penanggung_jawab }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">4. Surat Permohonan :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->nomor_permohonan }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">5. Tgl Permohonan :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->tanggal_permohonan }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">6. Tgl Penerimaan :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->tanggal_tanda_terima }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">7. Nomor Identitas :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->nomor_identitas }}</font>
                                                </span>
                                            </div>
                                        @endforeach
                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                            <div>
                                                <span>
                                                    <font size="2">8. Nama Pemilik :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->nama_pemilik }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">9. Alamat Pemilik :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->alamat_pemilik }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">10. Nama Negara :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->nama_negara }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">11. RT :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->rt_pemilik }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">12. RW :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->tanggal_permohonan }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">13. Desa/Kelurahan :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->desa }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">14. Provinsi :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->nama_propinsi }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">15. Kabupaten :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->nama_kabupaten }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">16. Kecamatan :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->kecamatan }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">17. NPWP Pemilik :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->npwp_pemilik }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">18. E-mail :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->email_pemilik }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">19. Nomor NIB :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->nomor_nib }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">20. Website :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->website_pemilik }}</font>
                                                </span>
                                            </div>
                                        @endforeach

                                    </td>
                                    <td style="width: 50%;">
                                        @foreach ($sp_mig_resume_siup as $data)
                                            <div>
                                                <span>
                                                    <font size="2">21. Status Usaha :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->no_siup_sebelum }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">22. NPWP :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->npwp_pemilik }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">23. Jenis Kegiatan :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->jenis_kegiatan }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">24. No Telp./Fax :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->telepon_fax }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">25. Pengurus/No. Hp :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->hp_pengurus }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">26. No SIUP :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->no_siup }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">27. Tgl SIUP Pertama :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->no_siup_pertama }}</font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">28. Tgl SIUP Sebelumnya :</font>
                                                </span>
                                                <span>
                                                    <font size="2">{{ $data->no_siup_sebelum }}</font>
                                                </span>
                                            </div>
                                        @endforeach
                                        @foreach ($sp_mig_nomor_agenda_baru as $data)
                                        <div>
                                            <span>
                                                <font size="2">28. Telepon 1 :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->telepon1_pemilik }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">29. Telepon 2 :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->telepon2_pemilik }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">30. Telepon Genggam :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->handphone_pemilik }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">31. Faksmili :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->kode_faksimili1 }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">32. Badan Hukum :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->nama_badan_hukum }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">33. Kategori Pemohon :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->kode_faksimili1 }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">34. KTP :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->nomor_identitas }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">35. Akte Pendirian :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->akte_pendirian }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">36. Tanggal Akte Pendirian :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->tanggal_akte_pendirian }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">37. Status Perusahaan :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->status_perikanan }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">38. Bantuan Pemerintah :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->bantuan_pemerintah }}</font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">39. Status Terpadu :</font>
                                            </span>
                                            <span>
                                                <font size="2">{{ $data->status_terpadu }}</font>
                                            </span>
                                        </div>
                                    @endforeach
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                            
                            
                        </div>
                        </div>
                        
                        <head>
                        </head>
                        <head>
                            <style>
                                table {
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                                
                                th, td {
                                    text-align: left;
                                    padding: 8px;
                                    border-bottom: 1px solid #ddd;
                                }
                                
                                th {
                                    background-color: #f2f2f2;
                                }
                            </style>
                            </head>

                            {{-- // start permohonan alokasi :siup baru // --}}

                            <body>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h5>B. PERMOHONAN ALOKASI : SIUP BARU</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>Keterangan</th>
                                            <th>Ukuran Kapal</th>
                                            <th>Jumlah Persetujuan</th>
                                            <th>Zona PIT</th>
                                            <th>WPP</th>
                                            {{-- <th>DPI</th> --}}
                                            <th>Pangkalan</th>
                                            <th>Muat</th>
                                            <th>Kuota Prod</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sp_mig_resume_siup_alokasi as $data)
                                        <tr>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>{{ $data->ukuran_kapal }}</td>
                                            <td>{{ $data->jumlah_persetujuan }}</td>
                                            <td>{{ $data->zona_pit }}</td>
                                            <td>{{ $data->wpp }}</td>
                                            {{-- <td>{{ $data->dpi }}</td> --}}
                                            <td>{{ $data->pangkalan }}</td>
                                            <td>{{ $data->muat }}</td>
                                            <td>{{ $data->kuota_prod }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </body>

                            {{-- // C. Alokasi Siup Lama // --}}
                            
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h5>C. ALOKASI SIUP LAMA</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID Alokasi</th>
                                                    <th>Nomor Izin</th>
                                                    <th>Keterangan</th>
                                                    <th>Ukuran Kapal</th>
                                                    {{-- <th>Jumlah</th> --}}
                                                    {{-- <th>ID Ukuran</th> --}}
                                                    {{-- <th>Operasi Laut</th> --}}
                                                    <th>Status Armada</th>
                                                    <th>Daerah Terlarang</th>
                                                    <th>Pangkalan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sp_mig_alokasi_lama as $data)
                                                <tr>
                                                    <td>{{ $data->id_alokasi_izin_usaha }}</td>
                                                    <td>{{ $data->nomor_izin_usaha }}</td>
                                                    <td>{{ $data->keterangan }}</td>
                                                    <td>{{ $data->ukuran_kapal }}</td>
                                                    {{-- <td>{{ $data->jumlah_persetujuan }}</td> --}}
                                                    {{-- <td>{{ $data->id_ukuran_kapal }}</td> --}}
                                                    {{-- <td>{{ $data->operasi_laut_lepas }}</td> --}}
                                                    <td>{{ $data->status_armada }}</td>
                                                    <td>{{ $data->daerah_terlarang }}</td>
                                                    <td>{{ $data->pangkalan }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                             
                            {{-- // end alokasi siup lama // --}}

                            <body>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h5>D. REKOMENDASI PERSETUJUAN ALOKASI</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>Keterangan</th>
                                            <th>Ukuran Kapal</th>
                                            <th>Jumlah Persetujuan</th>
                                            <th>Zona PIT</th>
                                            <th>WPP</th>
                                            {{-- <th>DPI</th> --}}
                                            <th>Pangkalan</th>
                                            <th>Muat</th>
                                            <th>Kuota Prod</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sp_mig_resume_siup_alokasi as $data)
                                        <tr>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>{{ $data->ukuran_kapal }}</td>
                                            <td>{{ $data->jumlah_persetujuan }}</td>
                                            <td>{{ $data->zona_pit }}</td>
                                            <td>{{ $data->wpp }}</td>
                                            {{-- <td>{{ $data->dpi }}</td> --}}
                                            <td>{{ $data->pangkalan }}</td>
                                            <td>{{ $data->muat }}</td>
                                            <td>{{ $data->kuota_prod }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </body>
                            
                            <body>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h5>Foto Diri</h5>
                                            <img src="{{ asset('resources/assets/images/pemilik/6277.jpg') }}" style="width: 150px" class="img-thumbnail" alt="blog-1">
                                        </div>
                                    </div>
                                </div>
                            

                            {{-- // end permohonan alokasi siup baru // --}}
                            
                                    {{-- <table style="width: 100%;">
                                        <tr>
                                            <td style="width: 50%;">
                                                @foreach ($sp_mig_resume_siup as $data)
                                                    <div>
                                                        <span>
                                                            <font size="2">1. Nama Pemohon :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->nama_pemilik }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">2. Alamat :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->alamat_pemilik }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">3. Penanggung Jawab :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->penanggung_jawab }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">4. Surat Permohonan :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->nomor_permohonan }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">5. Tgl Permohonan :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->tanggal_permohonan }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">6. Tgl Penerimaan :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->tanggal_tanda_terima }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">7. Nomor Identitas :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->nomor_identitas }}</font>
                                                        </span>
                                                    </div>
                                                @endforeach
                                            </td>
                                            <td style="width: 50%;">
                                                @foreach ($sp_mig_resume_siup as $data)
                                                    <div>
                                                        <span>
                                                            <font size="2">8. Status Usaha :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->no_siup_sebelum }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">9. NPWP :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->npwp_pemilik }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">10. Jenis Kegiatan :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->jenis_kegiatan }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">11. No Telp./Fax :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->telepon_fax }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">12. Pengurus/No. Hp :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->hp_pengurus }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">13. No SIUP :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->no_siup }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">14. Tgl SIUP Pertama :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->no_siup_pertama }}</font>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>
                                                            <font size="2">15. Tgl SIUP Sebelumnya :</font>
                                                        </span>
                                                        <span>
                                                            <font size="2">{{ $data->no_siup_sebelum }}</font>
                                                        </span>
                                                    </div>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                 --}}
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            {{-- <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #111-222</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> Oct 12, 2019</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> <span class="badge badge-warning badge-pill px-25">Unpaid</span></div> --}}
                       
                </div>
            </div>
        </div>
    </div>
</div>