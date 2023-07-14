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
                <!-- START AUTHOR BY JO -->
                <form id="contactForm" method="GET" action="{{ URL::to('siup/migrasi-pit/add') }}" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="scroll-bar-content card-box-style mb-24">
                                    <div class="content-height" data-simplebar>
                                        <!-- <h3>CATATAN SILAT<sup>NG</sup></h3> -->
                                        <h3 class="text-center">MOHON UNTUK MEMBACA SELURUH SYARAT DAN KETENTUAN PENGGUNAAN 
                                        DI BAWAH INI DENGAN CERMAT DAN SAKSAMA SEBELUM MENGGUNAKAN 
                                        SETIAP FITUR DAN/ATAU LAYANAN YANG TERSEDIA DALAM SILAT.</h3>
                                        <b><p>I. KETENTUAN UMUM</p></b>
                                        <p  class="text-justify">
                                        Syarat dan Ketentuan Penggunaan ini adalah perjanjian antara pengguna <b>(“Pengguna”)</b> dan 
                                        Kementerian Kelautan dan Perikanan Republik Indonesia selaku Penyelenggara Sistem Informasi 
                                        Izin Layanan Cepat <b>("SILAT")</b> untuk memberikan layanan serta pengelolaan administrasi 
                                        perizinan usaha sektor perikanan tangkap. Syarat dan Ketentuan Penggunaan ini mengatur 
                                        pengelolaan Data Pribadi pada SILAT.<br>
                                        Dengan menyetujui Syarat dan Ketentuan Penggunaan ini, Pengguna juga menyetujui ketentuan 
                                        penggunaan tambahan pada SILAT dan perubahannya yang merupakan bagian yang tidak 
                                        terpisahkan dari Syarat dan Ketentuan Penggunaan ini <b>(“Ketentuan Penggunaan Tambahan”).</b>
                                        Apabila Pengguna tidak setuju terhadap salah satu, sebagian, atau seluruh isi yang tertuang dalam 
                                        Syarat dan Ketentuan Penggunaan ini, Pengguna diperkenankan untuk menghapus SILAT dalam 
                                        perangkat elektronik dan/atau tidak menggunakan SILAT. SILAT dilepaskan dari seluruh tanggung 
                                        jawab atas seluruh kerugian yang Pengguna terima sehubungan keputusan untuk tidak 
                                        menggunakan SILAT ini.</p>
                                        <b><p>II. DEFINISI</p></b>
                                        <p class="text-justify">Setiap kata atau istilah berikut yang digunakan di dalam Syarat dan Ketentuan Penggunaan ini 
                                        memiliki arti seperti berikut di bawah, kecuali jika kata atau istilah yang bersangkutan di dalam 
                                        pemakaiannya dengan tegas menentukan lain:
                                        <ol>
                                            <li><b>"SILAT"</b> adalah aplikasi dan situs website <b>"SILAT"</b> yang dipergunakan Pemerintah 
                                            Republik Indonesia untuk tujuan:</li>
                                            <ol type='a'>
                                                <li>Pelaksanaan pengelolaan dokumen perizinan usaha sektor perikanan tangkap,</li>
                                                <li>Penyelenggaraan pelayanan dokumen perizinan usaha sektor perikanan tangkap,</li>
                                                <li>Layanan informasi perizinan usaha sektor perikanan tangkap, dan</li>
                                                <li>Upaya pembinaan lainnya yang bersifat promotif, dan preventif, serta tujuan-tujuan lainnya
                                                selama diizinkan berdasarkan ketentuan peraturan perundang-undangan yang berlaku.</li>
                                            </ol>
                                            <li><b>"Pengguna"</b>, berarti setiap orang yang menggunakan SILAT.</li>
                                            <li><b>"Data Pribadi"</b> atau <b>"Informasi Pribadi"</b> berarti setiap dan seluruh data pribadi dan data 
                                            aktivitas Pengguna yang setuju diberikan oleh Pengguna atau kepada Fasilitas Layanan usaha 
                                            perikanan lainnya, termasuk namun tidak terbatas pada nama, nomor identifikasi, lokasi 
                                            pengguna, kontak pengguna, serta dokumen dan data lainnya sebagaimana diminta pada 
                                            formulir pendaftaran akun, atau informasi termasuk setiap dan seluruh data pelaku usaha, data 
                                            usaha, data kapal perikanan, data kegiatan usaha, data laporan usaha dan informasi terkait 
                                            kegiatan usaha perikanan lainnya yang diunggah oleh pengguna pada SILAT.</li>
                                        </ol>
                                        </p>
                                        <b><p>III. PEMBUKAAN AKUN</p></b>
                                        <p  class="text-justify">
                                        Sebelum menggunakan SILAT, Pengguna wajib menyetujui Syarat dan Ketentuan Penggunaan dan 
                                        Kebijakan Privasi, dan mendaftarkan diri Pengguna dengan memberikan informasi yang diminta. 
                                        Saat melakukan pendaftaran, SILAT akan meminta Pengguna untuk memberikan Data Pribadi, dan 
                                        Pengguna dapat mengubah Data Pribadi pada fitur pengaturan dalam SILAT.
                                        </p>
                                        <b><p>IV. PENGGUNAAN SILAT</p></b>
                                        <p class="text-justify">
                                        Setelah Pengguna mengisi data diri yang dibutuhkan pada saat pendaftaran, sistem SILAT akan 
                                        membuatkan akun Pengguna yang tunduk pada Syarat dan Ketentuan Penggunaan, sebagai berikut:
                                        <ol>
                                            <li>Pengguna SILAT setuju untuk:</li>
                                            <ol type='a'>
                                                <li>menggunakan SILAT hanya untuk tujuan dan cara yang sah;</li>
                                                <li>mematuhi semua panduan, pemberitahuan, peraturan operasional, kebijakan, dan instruksi 
                                                apa pun terkait penggunaan SILAT, sekaligus seluruh perubahan yang diterbitkan oleh 
                                                SILAT dari waktu ke waktu, baik karena alasan teknis atau karena kebijakan Pemerintah 
                                                Republik Indonesia; dan</li>
                                                <li>menjamin kebenaran dan keabsahan data serta dokumen yang Pengguna unggah di SILAT 
                                                bersifat akurat.</li>
                                                <li>menjamin informasi atau data yang Pengguna publikasikan atau tampilkan di SILAT 
                                                bersifat akurat dan tidak menyesatkan.</li>
                                            </ol>
                                            <li>Pengguna memahami dan setuju untuk juga tunduk pada Kebijakan Privasi SILAT.</li>
                                            <li>Pengguna dilarang untuk:</li>
                                            <ol type='a'>
                                                <li>Menggunakan SILAT atau isinya untuk tujuan apapun yang melanggar hukum atau 
                                                dilarang dalam Syarat dan Ketentuan Penggunaan ini;</li>
                                                <li>Mengambil, mengunduh, menggunakan atau menyimpan Data Pribadi dan/atau Informasi 
                                                Pribadi tentang pengguna lain;</li>
                                                <li>Menggunakan program-program seperti robot, spider, scraper atau cara otomatis atau 
                                                manual lainnya untuk menjangkau, memantau, menyalin, dan/atau menyebarluaskan 
                                                informasi, data dan/atau konten apapun pada SILAT;</li>
                                                <li>Mengirim virus, spam, program atau teknik lainnya pada SILAT</li>
                                                <li>Mendekompilasi, membongkar, atau merekayasa balik setiap perangkat lunak atau konten 
                                                yang digunakan di bagian manapun dari SILAT;</li>
                                                <li>Melakukan tindakan apapun untuk menghindar dari langkah-langkah yang dapat 
                                                digunakan untuk mencegah, mengganggu, atau membatasi penggunaan ke SILAT;</li>
                                                <li>Melakukan tindakan yang mengakibatkan terjadinya overload atau crash terhadap SILAT 
                                                atau server SILAT;</li>
                                                <li>Memalsukan data, dokumen, lokasi dan informasi lain yang berkaitan dengan Pengguna 
                                                daripada yang sebenarnya;</li>
                                                <li>Melakukan tindakan lainnya yang dapat menghambat pengoperasian SILAT</li>
                                            </ol>
                                            <li>Jika Pengguna mencetak, menyalin, mengunduh, mengunggah, memperbanyak, atau 
                                            menyebarkan bagian mana pun dari SILAT yang melanggar Syarat dan Ketentuan Penggunaan 
                                            ini, hak untuk menggunakan SILAT akan segera diberhentikan dan Pengguna harus 
                                            mengembalikan atau memusnahkan salinan dari materi yang telah Pengguna buat.</li>
                                            <li>SILAT berhak untuk melakukan investigasi maupun melakukan gugatan atau tuntutan terhadap 
                                            bentuk pelanggaran apa pun terhadap Syarat dan Ketentuan Penggunaan sesuai dengan 
                                            ketentuan hukum yang berlaku dengan melibatkan pihak yang berwenang.</li>
                                        </ol>
                                        </p>
                                        <b><p>V. JAMINAN-JAMINAN</p></b>
                                        <p class="text-justify">
                                            <ol>
                                                <li>SILAT menjamin aspek keamanan dan bertanggung jawab atas kegagalan atau gangguan sistem 
                                                berkaitan fungsi SILAT.</li>
                                                <li>Dalam hal terjadi kegagalan atau gangguan sistem yang diakibatkan oleh pelanggaran atau 
                                                penggunaan tidak sah sebagaimana diatur dalam ketentuan peraturan perundang-undangan 
                                                yang dilakukan oleh pengguna dan/atau pihak lain terhadap SILAT, maka SILAT akan segera 
                                                melaporkan kepada aparat penegak hukum dan atau lembaga terkait lainnya. Dalam hal 
                                                kegagalan atau gangguan sistem tersebut menimbulkan kerugian, maka SILAT dibebaskan dari 
                                                tanggung jawab.</li>
                                            </ol>
                                        </p>
                                        <b><p>VI. GANTI RUGI</p></b>
                                        <p class="text-justify">
                                        SILAT dilepaskan dari setiap klaim atau tuntutan, yang dilakukan oleh pihak lain yang timbul dalam 
                                        hal Pengguna melanggar ketentuan dalam Syarat dan Ketentuan Penggunaan ini, penggunaan fitur 
                                        dan/atau layanan SILAT yang tidak semestinya, dan/atau pelanggaran Pengguna terhadap hukum 
                                        atau hak-hak pihak lain.
                                        </p>
                                        <b><p>VII. PEMBATASAN</p></b>
                                        <p class="text-justify">
                                            <ol>
                                                <li>SILAT mengambil langkah-langkah teknis dan keamanan yang sesuai dan wajar untuk menjaga 
                                                agar SILAT tetap aman dan bebas dari virus, gangguan dan kesalahan. Namun, meskipun 
                                                teknologi ini efektif, tidak ada sistem keamanan yang tidak dapat ditembus. Dengan demikian, 
                                                SILAT tidak dapat menjamin keamanan basis data SILAT maupun menjamin bahwa informasi 
                                                yang Pengguna berikan tidak akan terhambat pada saat dikirimkan melalui sistem SILAT. 
                                                SILAT akan menginformasikan kepada Pengguna secara tertulis apabila terdapat pelanggaran 
                                                keamanan data yang melibatkan Informasi Pribadi Pengguna. SILAT melakukan upaya terbaik 
                                                untuk menjaga keamanan SILAT, seluruh perangkat yang mendukung, dan informasi 
                                                Pengguna.</li>
                                                <li>SILAT dapat saja mengalami pembatasan, penundaan, dan masalah lain terkait penggunaan 
                                                internet dan komunikasi elektronik, termasuk kecacatan perangkat yang digunakan oleh 
                                                Pengguna, tidak terhubung, di luar jangkauan, tidak aktif, atau tidak berfungsi. SILAT tidak 
                                                bertanggung jawab atas penundaan, kegagalan pengiriman, kerusakan, atau kerugian apa pun 
                                                akibat masalah-masalah tersebut atau masalah lain diluar jangkauan SILAT.</li>
                                            </ol>
                                        </p>
                                        <b><p>VIII. HAK KEKAYAAN INTELEKTUAL</p></b>
                                        <p class="text-justify">
                                        Segala merek, logo, gambar, ikon, source code, atau desain logo, serta apapun yang terdapat dalam 
                                        SILAT merupakan kepemilikan yang diperoleh secara sah oleh SILAT, yang tidak boleh disalin, 
                                        ditiru, atau digunakan, baik secara keseluruhan atau sebagian tanpa persetujuan tertulis terlebih dulu 
                                        dari SILAT.
                                        </p>
                                        <b><p>IX. PENGHENTIAN APLIKASI</p></b>
                                        <p class="text-justify">
                                            <ol>
                                                <li>Pengguna tidak memiliki kewajiban untuk menggunakan SILAT dan dapat memilih untuk 
                                                berhenti menggunakan SILAT.</li>
                                                <li>SILAT berhak untuk segera menangguhkan, membatasi, atau menghentikan penggunaan 
                                                Pengguna atas SILAT jika diduga Pengguna telah melanggar ketentuan apa pun dalam Syarat 
                                                dan Ketentuan Penggunaan ini atau hukum dan peraturan yang berlaku.</li>
                                                <li>Pengguna dan SILAT setuju untuk mengabaikan ketentuan-ketentuan dalam Pasal 1266 dan 
                                                Pasal 1267 Kitab Undang-Undang Hukum Perdata (KUH Perdata), berkaitan dengan 
                                                pengakhiran Syarat dan Ketentuan Penggunaan ini.</li>
                                            </ol>
                                        </p>
                                        <b><p>X. LAIN-LAIN</p></b>
                                        <p class="text-justify">
                                            <ol>
                                                <li>Pengguna mengerti dan setuju bahwa Syarat dan Ketentuan Penggunaan ini merupakan 
                                                perjanjian dalam bentuk elektronik dan tindakan Pengguna menekan tombol ‘daftar’ atau 
                                                dengan diksi lain pada saat pembukaan akun atau tombol ‘masuk’ atau dengan diksi lain pada 
                                                saat akan menggunakan akun Pengguna merupakan persetujuan aktif untuk mengikatkan diri 
                                                dalam perjanjian dengan SILAT, sehingga Syarat dan Ketentuan Penggunaan ini dan Kebijakan 
                                                Privasi adalah sah dan mengikat secara hukum dan terus berlaku sepanjang Pengguna terus 
                                                menerus menggunakan SILAT.</li>
                                                <li>Pengguna tidak akan mengajukan tuntutan atau keberatan apapun terhadap keabsahan dari 
                                                Syarat dan Ketentuan Penggunaan atau Kebijakan Privasi yang dibuat dalam bentuk elektronik.</li>
                                                <li>Pengguna tidak dapat mengalihkan hak berdasarkan Syarat dan Ketentuan Penggunaan ini 
                                                tanpa persetujuan tertulis dari SILAT. Namun, SILAT dapat mengalihkan hak Pengguna 
                                                kepada pihak lain tanpa perlu mendapatkan persetujuan terlebih dahulu atau memberikan 
                                                pemberitahuan kepada Pengguna.</li>
                                                <li>Apabila Pengguna tidak mematuhi atau melanggar Syarat dan Ketentuan Penggunaan ini, dan 
                                                SILAT tidak mengambil tindakan secara langsung, tidak dapat diartikan bahwa SILAT 
                                                mengesampingkan hak untuk mengambil tindakan yang diperlukan di kemudian hari.</li>
                                                <li>Ketentuan ini tetap berlaku bahkan setelah penangguhan, pembatasan, atau penghentian 
                                                penggunaan SILAT atau setelah berakhirnya perjanjian ini antara Pengguna dan SILAT.</li>
                                                <li>Syarat dan Ketentuan Penggunaan dibuat dalam bahasa Indonesia dan dan bahasa asing. Dalam 
                                                hal terdapat ketidakkonsistenan antara versi bahasa Indonesia dan bahasa asing, maka versi 
                                                bahasa Indonesia yang akan berlaku.</li>
                                                <li>Syarat dan Ketentuan Penggunaan ini diatur berdasarkan hukum Republik Indonesia. Seluruh 
                                                perselisihan yang timbul dari penggunaan SILAT ini terlebih dahulu diselesaikan melalui 
                                                negosiasi dan musyawarah. Dalam hal perselisihan tidak dapat diselesaikan dalam jangka 
                                                waktu 60 (enam puluh hari) setelah perselisihan tersebut timbul, perselisihan harus diselesaikan 
                                                melalui Pengadilan Negeri Jakarta Pusat.</li>
                                                <li>Jika salah satu dari ketentuan dalam Syarat dan Ketentuan Penggunaan ini tidak dapat 
                                                diberlakukan, hal tersebut tidak akan mempengaruhi keberlakuan ketentuan lainnya.</li>
                                                <li>Syarat dan Ketentuan Penggunaan ini dapat diubah dari waktu ke waktu dengan pemberitahuan 
                                                kepada Pengguna melalui SILAT. Dengan tetap mengakses SILAT, Pengguna dianggap telah 
                                                membaca, memahami dan menyetujui Syarat dan Ketentuan Penggunaan ini, termasuk 
                                                perubahan dan/atau pembaharuannya.</li>
                                            </ol>
                                        </p>
                                        <b><p>XI. PEMBERITAHUAN</p></b>
                                        <p class="text-justify">
                                            <ol>
                                                <li>Dalam hal Pengguna menemukan celah keamanan sistem SILAT, maka Pengguna wajib segera 
                                                melaporkan temuan secara tertulis kepada SILAT. Pengguna dilarang memanfaatkan hal 
                                                tersebut untuk kepentingan pribadi atau kelompok tertentu dan mempublikasikan kepada 
                                                khalayak umum dengan alasan apapun.</li>
                                                <li>Pengguna dapat menyampaikan pertanyaan, keluhan dan/atau pengaduan sehubungan dengan 
                                                penggunaan SILAT. Segala tanggapan, saran, dan atau temuan yang diberikan Pengguna terkait 
                                                SILAT tidak dianggap sebagai informasi rahasia. SILAT berhak atas penggunaan informasi ini 
                                                secara bebas tanpa batas. Pengguna dilarang untuk menyalahgunakan temuan sehingga dapat 
                                                mempengaruhi pengoperasian SILAT.</li>
                                                <li>Laporan temuan keamanan, pertanyaan, keluhan dan/atau pengaduan sehubungan dengan 
                                                penggunaan SILAT disampaikan secara tertulis melalui email ditpdk@kkp.go.id dengan 
                                                melampirkan identitas Pengguna.</li>
                                                <li>SILAT akan melakukan verifikasi Data Pribadi dengan berpedoman pada Data Pribadi yang 
                                                tersimpan pada sistem SILAT. SILAT berhak melakukan penolakan atas pertanyaan, keluhan 
                                                dan/atau pengaduan yang diajukan dalam hal Data Pribadi belum diverifikasi.</li>
                                            </ol>
                                        </p>
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
                                        <b>SAYA TELAH MEMBACA DAN MENGERTI SELURUH SYARAT DAN KETENTUAN PENGGUNAAN INI
                                        BESERTA KONSEKUENSINYA, DAN DENGAN INI MENERIMA SETIAP HAK, KEWAJIBAN, DAN
                                        KETENTUAN YANG DIATUR DI DALAMNYA.</b>
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
                <!-- END AUTHOR BY JO -->
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