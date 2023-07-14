<div class="page-content container">
    <div class="page-header text-blue-d2">
        <center>
            <img src="{{ asset('public/images/garuda.png') }}" alt="Garuda" width="75" height="75">
            <h5 class="page-title text-secondary-d1">
                SERTIFIKAT KUOTA<br> 
                PENANGKAPAN IKAN
            </h5>
            <p>
                Nomor : xxxxxxxxxxx
            </p>
        </center>
    </div>
</div>

<hr class="row brc-default-l1 mx-n1 mb-4" />

<div class="row">
    <div class="col-sm-6">
        <div align="justify">
            <h4 class="page-title text-secondary-d1">
                <small>
                    Berdasarkan Peraturan Menteri Kelautan dan Perikanan No... Tahun ... tentang Peraturan Pelaksanaan Peraturan Pemerintah Nomor 11 Tahun 2023 tentang Penangkapan Ikan Terukur, dengan ini memberikan kuota industri/kuota nelayan lokal/kuota kegiatan bukan untuk tujuan komersial kepada:
                </small>
            </h4>
        </div>
        @foreach ($sp_sert_kuota_permohonan as $data)
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $data->nama_pemilik }}</td>
                
            </tr>
            <tr>
                <td>Nomor SIUP</td>
                <td>:</td>
                <td>{{ $data->nomor_siup }}</td>
            </tr>
            <tr>
                <td>Tanggal SIUP</td>
                <td>:</td>
                <td>{{ $data->tanggal_siup }}</td>
            </tr>
            <tr>
                <td>Masa Berlaku SIUP</td>
                <td>:</td>
                <td>{{ $data->masa_berlaku }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $data->alamat }}</td>
            </tr>
            <tr>
                <td>Penanggung Jawab</td>
                <td>:</td>
                <td>{{ $data->penanggung_jawab }}</td>
            </tr>
            <tr>
                <td>NIB</td>
                <td>:</td>
                <td>{{ $data->nib }}</td>
            </tr>
            <tr>
                <td>NPWP</td>
                <td>:</td>
                <td>{{ $data->npwp }}</td>
            </tr>
            <tr>
                <td>Ruang Lingkup Kegiatan</td>
                <td>:</td>
                <td>{{ $data->ruang_lingkup }}</td>
            </tr>
            <tr>
                <td>Jumlah Kapal Penangkap Ikan</td>
                <td>:</td>
                <td>{{ $data->jumlah_kapal_penangkap }}</td>
            </tr>
            <tr>
                <td>Total Kuota</td>
                <td>:</td>
                <td>{{ $data->total_kuota }}</td>
            </tr>
            <tr>
                <td>Masa Berlaku</td>
                <td>:</td>
                <td>{{ $data->masa_berlaku }}</td>
            </tr>
        </table>
        @endforeach
        <br>

       
<br>

<div style="float: right;">
    Dikeluarkan di Jakarta<br>
    pada tanggal …<br>
    <br>
    <br>
    Direktur Jenderal Perikanan Tangkap,<br>
    <br>
    <br>
    (………………………………………)
</div>

<div style="position: absolute; top: 17cm; left: 3cm; border: 1px solid black; padding: 10px;">
    <p style="text-align: center; font-weight: bold;">BLANKO</p>
</div>

    </div>
    <br>
    
</div>
<pagebreak>
</div>



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


            <div class="page-content container"style="page-break-before: always;">
                <div class="page-header text-blue-d2">
                    <center>
                        <img src="{{ asset('public/images/garuda.png') }}" alt="Garuda" width="75" height="75">
                        <h4 class="page-title text-secondary-d1">
                            SERTIFIKAT KUOTA
                            PENANGKAPAN IKAN
                        </h4>
                        
                    </center>
                </div>
            </div>
            <br>
            
            @foreach ($sp_sert_kuota_permohonan as $data )
            <table>
        
            <tr>
                <td>Nomor</td>
                <td>:</td>
                <td>...</td>
            </tr>
            <br>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>...</td>
            </tr>

             </table>


            @endforeach
             <br>
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
                        <table class="table table-bordered mt-4" style="border: 1px solid black;">
                            <thead>
                                <tr>
                                    <th scope="col" >No.</th>                                                                
                                    <th scope="col" >Nama Kapal</th>                                                                
                                    <th scope="col" >Alat Penangkapan Ikan</th>
                                    <th scope="col" >Ukuran Kapal(GT)</th>
                                    <th scope="col" >Zona Penangkapan Ikan Terukur</th>
                                    <th scope="col" >Pelabuhan Pangkalan</th>
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
                                <tr>
                                    <td colspan="6" style="text-align: center; border: 1px solid black; font-weight: bold;">Total</td>
                                    <td style="border: 1px solid black; font-weight: bold;">
                                        @php
                                            $totalKuota = 0;
                                            foreach ($sp_sert_kuota_permohonan_lampiran as $data) {
                                                $totalKuota += $data->kuota_prod;
                                            }
                                            echo $totalKuota;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
    

        </div>
        <br>
        
        
        
        
    </div>



    <br>

    <div style="position: absolute; top: 17cm; right: 0;">
        Dikeluarkan di Jakarta<br>
        pada tanggal …<br>
        <br>
        <br>
        Direktur Jenderal Perikanan Tangkap,<br>
        <br>
        <br>
        (………………………………………)
    </div>
    
    <div style="position: absolute; top: 17cm; left: 3cm; border: 1px solid black; padding: 10px;">
        <p style="text-align: center; font-weight: bold;">BLANKO</p>
    </div>
