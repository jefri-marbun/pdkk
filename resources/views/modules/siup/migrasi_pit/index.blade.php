@extends('index')
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

    <!-- Start FAQ Area -->
    <div class="faq-area">
        <div class="container-fluid">
            <div class="contact-form">
                <div class="others-title">
                    <h3>Disclaimer</h3>
                </div>
                <form id="contactForm" method="GET" action="{{ URL::to('siup/migrasi-pit/add') }}" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="scroll-bar-content card-box-style mb-24">
                                    <div class="content-height" data-simplebar>
                                        <h3>CATATAN SILAT<sup>NG</sup></h3>
                                        <ol>
                                            <li>Bagian Disclaimer, langsung ambil seluruh isi Ketentuan Pengguna. Ada di halaman terakhir file SILAT<sup>NG</sup>.</li>
                                            <li>Data pemilik full dari NIB OSS, jika data kosong/mau ubah data nanti kita arahkan perbaikan data di OSS nya. Data pribadi yang boleh di update hanya email dan nomor HP (aktif WA) saja.</li>
                                            <li>Dokumen persyaratan cukup SIUP terakhir saja, gunanya untuk arsip dan data pembanding. Format PDF.</li>
                                            <li>Cari Data Status Wajib Pajak untuk ditambahkan ke profil pelaku usaha. Karena ini nanti jadi syarat kuota.</li>
                                            <li>Bagian foto dan tanda tangan agar distandarkan formatnya (pemilik agar upload ulang).</li>
                                            <li>Untuk SIUP migrasi, proses mapping ke kapal agar sekaligus di proses migrasi. Jadi setelah muncul list alokasi, pelaku usaha diarahkan untuk mengisi kapalnya menggunakan nomor BKP.</li>
                                            <li>Pada saat migrasi, boleh merubah DPI dan Pelabuhan Pangkalan (di menu verifikator agar ditampilkan informasi jika ada perubahan tersebut).</li>
                                            <li>Pada saat migrasi, tidak boleh menambah atau mengurangi alokasi.</li>
                                            <li>Proses persetujuan kalau memungkinkan sudah sesuai alur proses SILAT<sup>NG</sup> yang sudah kita sederhanakan.</li>
                                            <li>Kuota pertama kali dihitung secara otomatis berdasarkan ukuran kapal (hasil mapping kapal) dikali indeks produktivitas. Perlu menjadi catatan bahwa kuota dalam database agar tetap dibuat rinci per kelompok jenis dan atau jenis ikan (komposisi per API mengikuti produktivitas).</li>
                                            <li>Sertifikat Kuota diberikan per Pelaku Usaha. 1 SIUP 1 Sertifikat Kuota. Mengenai isi kuota yang ditampilkan <i>to be discuss</i> lagi, nanti bisa per kapal atau per kelompok jenis per kapal.</li>
                                            <li>Agar dibuat modul untuk input Pagu kuota. Pagu kuota akan dibuat per Zona - DPI - Pelabuhan Perikanan - Kelompok/Jenis Ikan.</li>
                                            <li>Saat mengambil kuota untuk setiap kapal menggunakan acuan produktivitas berdasrkan API x GT kapal dengan rincian kuota yang diambil divalidasi dengan ketersediaan kuota di kelompok/jenis ikan untuk pelabuhan yang dipilih di Zona/DPI tersebut.</li>
                                            <li>Maksudnya kuota pelabuhan adalah bahwa kuota ikan yang sudah dibagi per jenis/kelompok per zona akan dibagi lagi per pelabuhan. Sehingga ikan yang ditangkap di DPI tertentu, bisa didorong masuk ke pelabuhan pelabuhan yang sudah kita tentukan (dengan kuota pelabuhan). Dengan ini, diharapkan pelabuhan punya estimasi berapa banyak ikan yang akan mendarat disitu.</li>
                                        </ol>
                                        <br/>
                                        <h3>Catatan Menu Alokasi</h3>
                                        <ol>
                                            <li>Tunggal/Armada tidak perlu dihapus databasenya, cukup di <i>hidden</i> saja.</li>
                                            <li>Tambahkan Zona Penangkapan Ikan.</li>
                                            <li>Zona, DPI (WPP) dan Pelabuhan Perikanan bisa diedit untuk penyesuaian dengan ketentuan PIY.</li>
                                            <li>Tambahkan menu untuk mapping kapal. Saat mapping agar sekaligus dilakukan validasi atas kesesuaian ukuran kapal dengan range GT dan kesesuaian API. Untuk kesesuaian DPI diabaikan dulu karena mungkin data di BKP harus diupdate karena DPI berubah.</li>
                                            <li>Update Zona dan DPI dulu baru mapping kapal.</li>
                                            <li>Tidak boleh merubah API.</li>
                                            <li>Tidak boleh menambah atau mengurangi alokasi.</li>
                                            <li>Realisasi kapal itu adalah hasil mapping alokasi dengan BKP. Untuk migrasi tidak perlu menu tersendiri.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input name="disclaimer" value="agreed" class="form-check-input" type="checkbox" id="siupMigrasiPITDisclaimer">
                                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                                        <label class="form-check-label" for="siupMigrasiPITDisclaimer">
                                            Saya telah membaca dan menyetujui <i>Disclaimer</i> di atas.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button id="btnAjukan" class="btn btn-primary mb-1" type="button" disabled>Ajukan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End FAQ Area -->
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