


<div class="page-content container">
    <div class="page-header text-blue-d2">
        <center>
            <img src="<?php echo e(asset('public/images/kkp_img.png')); ?>" alt="Deskripsi Gambar" width="200" height="120">
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
                                        <?php $__currentLoopData = $sp_mig_resume_siup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div>
                                                <span>
                                                    <font size="2">1. Nama Pemohon :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->nama_pemilik); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">2. Alamat :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->alamat_pemilik); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">3. Penanggung Jawab :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->penanggung_jawab); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">4. Surat Permohonan :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->nomor_permohonan); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">5. Tgl Permohonan :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->tanggal_permohonan); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">6. Tgl Penerimaan :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->tanggal_tanda_terima); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">7. Nomor Identitas :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->nomor_identitas); ?></font>
                                                </span>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $sp_mig_nomor_agenda_baru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div>
                                                <span>
                                                    <font size="2">8. Nama Pemilik :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->nama_pemilik); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">9. Alamat Pemilik :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->alamat_pemilik); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">10. Nama Negara :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->nama_negara); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">11. RT :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->rt_pemilik); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">12. RW :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->tanggal_permohonan); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">13. Desa/Kelurahan :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->desa); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">14. Provinsi :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->nama_propinsi); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">15. Kabupaten :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->nama_kabupaten); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">16. Kecamatan :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->kecamatan); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">17. NPWP Pemilik :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->npwp_pemilik); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">18. E-mail :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->email_pemilik); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">19. Nomor NIB :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->nomor_nib); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">20. Website :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->website_pemilik); ?></font>
                                                </span>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </td>
                                    <td style="width: 50%;">
                                        <?php $__currentLoopData = $sp_mig_resume_siup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div>
                                                <span>
                                                    <font size="2">21. Status Usaha :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->no_siup_sebelum); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">22. NPWP :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->npwp_pemilik); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">23. Jenis Kegiatan :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->jenis_kegiatan); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">24. No Telp./Fax :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->telepon_fax); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">25. Pengurus/No. Hp :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->hp_pengurus); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">26. No SIUP :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->no_siup); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">27. Tgl SIUP Pertama :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->no_siup_pertama); ?></font>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <font size="2">28. Tgl SIUP Sebelumnya :</font>
                                                </span>
                                                <span>
                                                    <font size="2"><?php echo e($data->no_siup_sebelum); ?></font>
                                                </span>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $sp_mig_nomor_agenda_baru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div>
                                            <span>
                                                <font size="2">28. Telepon 1 :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->telepon1_pemilik); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">29. Telepon 2 :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->telepon2_pemilik); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">30. Telepon Genggam :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->handphone_pemilik); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">31. Faksmili :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->kode_faksimili1); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">32. Badan Hukum :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->nama_badan_hukum); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">33. Kategori Pemohon :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->kode_faksimili1); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">34. KTP :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->nomor_identitas); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">35. Akte Pendirian :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->akte_pendirian); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">36. Tanggal Akte Pendirian :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->tanggal_akte_pendirian); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">37. Status Perusahaan :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->status_perikanan); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">38. Bantuan Pemerintah :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->bantuan_pemerintah); ?></font>
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                <font size="2">39. Status Terpadu :</font>
                                            </span>
                                            <span>
                                                <font size="2"><?php echo e($data->status_terpadu); ?></font>
                                            </span>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                            
                                            <th>Pangkalan</th>
                                            <th>Muat</th>
                                            <th>Kuota Prod</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $sp_mig_resume_siup_alokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($data->keterangan); ?></td>
                                            <td><?php echo e($data->ukuran_kapal); ?></td>
                                            <td><?php echo e($data->jumlah_persetujuan); ?></td>
                                            <td><?php echo e($data->zona_pit); ?></td>
                                            <td><?php echo e($data->wpp); ?></td>
                                            
                                            <td><?php echo e($data->pangkalan); ?></td>
                                            <td><?php echo e($data->muat); ?></td>
                                            <td><?php echo e($data->kuota_prod); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </body>

                            
                            
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
                                                    
                                                    
                                                    
                                                    <th>Status Armada</th>
                                                    <th>Daerah Terlarang</th>
                                                    <th>Pangkalan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $sp_mig_alokasi_lama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($data->id_alokasi_izin_usaha); ?></td>
                                                    <td><?php echo e($data->nomor_izin_usaha); ?></td>
                                                    <td><?php echo e($data->keterangan); ?></td>
                                                    <td><?php echo e($data->ukuran_kapal); ?></td>
                                                    
                                                    
                                                    
                                                    <td><?php echo e($data->status_armada); ?></td>
                                                    <td><?php echo e($data->daerah_terlarang); ?></td>
                                                    <td><?php echo e($data->pangkalan); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                             
                            

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
                                            
                                            <th>Pangkalan</th>
                                            <th>Muat</th>
                                            <th>Kuota Prod</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $sp_mig_resume_siup_alokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($data->keterangan); ?></td>
                                            <td><?php echo e($data->ukuran_kapal); ?></td>
                                            <td><?php echo e($data->jumlah_persetujuan); ?></td>
                                            <td><?php echo e($data->zona_pit); ?></td>
                                            <td><?php echo e($data->wpp); ?></td>
                                            
                                            <td><?php echo e($data->pangkalan); ?></td>
                                            <td><?php echo e($data->muat); ?></td>
                                            <td><?php echo e($data->kuota_prod); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </body>
                            
                            <body>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h5>Foto Diri</h5>
                                            <img src="<?php echo e(asset('resources/assets/images/pemilik/6277.jpg')); ?>" style="width: 150px" class="img-thumbnail" alt="blog-1">
                                        </div>
                                    </div>
                                </div>
                            

                            
                            
                                    
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            
                       
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\kkp\resources\views/modules/siup/migrasi_pit/pdf.blade.php ENDPATH**/ ?>