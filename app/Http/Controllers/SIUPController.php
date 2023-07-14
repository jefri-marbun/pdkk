<?php

namespace silatng\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


use silatng\Models\ListNegaraModel;
use silatng\Models\ListProvinsiModel;
use silatng\Models\ListBadanHukumModel;
use App\Models\ListAgendaBaru;
use PDF;
use App\Models\modalform;
use App\Models\TrsAlokasiIzinUsaha;






class SIUPController extends SilatNGController
{
 
//Start Author Jefri
    public function siup_migrasi_pit()
    {
        // if ($id != session('id')){
        //     \Session::flush();
        //     // Auth::logout();
        //     return Redirect::route('login')->with('success', 'session ada telah habis');
        
        // }else{
        //     $this->data['title'] = 'SIUP Migrasi PIT';
        //     $sessionData = session('session_data');
    
        //     // dd(session('id'));
    
        //     return view('modules.siup.migrasi_pit.index', $this->data);    
        // }
        $this->data['title'] = 'SIUP Migrasi PIT';
        $sessionData = session('session_data');
        return view('modules.siup.migrasi_pit.index', $this->data);
    }

    public function siup_migrasi_pit_operation($operation, $id = null)
    {
        if ($id !== null) {
            $id = Crypt::decryptString($id);
        }
        switch ($operation) {
            case 'add':
                if ( (\Request::get('disclaimer') == 'agreed') && (\Request::get('token') == csrf_token()) ) {
                    $this->data['title'] = 'Add | SIUP Migrasi PIT';
                    $this->data['listNegara'] = ListNegaraModel::get();
                    $this->data['listProvinsi'] = ListProvinsiModel::get();
                    $this->data['listBadanHukum'] = ListBadanHukumModel::get();
                    $email = session('email');  
                    $results = DB::select('CALL sp_mig_nomor_agenda_baru(1, ?)', [$email]);
                    $this->data['sp_mig_nomor_agenda_baru'] = $results;
                    $this->data['sp_mig_status_izin'] = DB::select('CALL sp_mig_status_izin(1)');
                    $this->data['sp_mig_jenis_izin'] = DB::select('CALL sp_mig_jenis_izin(1)');
                    $this->data['sp_mig_data_permohonan'] = DB::select('CALL sp_mig_data_permohonan(1,"217499/2023")');
                    $this->data['sp_mig_resume_siup'] = DB::select('call sp_mig_resume_siup("218013/2023")');
                    $this->data['sp_mig_resume_siup_alokasi'] = DB::select('call sp_mig_resume_siup_alokasi("218013/2023")');
                    $this->data['sp_mig_kapal_aktif'] = DB::select('CALL sp_mig_kapal_aktif(1,0,0,0)');
                    $this->data['sp_mig_alokasi_lama'] = DB::select('call sp_mig_alokasi_lama("6277")');


                    $email = session('email');
                    $results = DB::select('CALL sp_sert_kuota_simpan(1, ?, "1/2023")', [$email]);
                    $this->data['sp_sert_kuota_simpan'] = $results;

                    
                    
                    // START CONTROLLER AUTHOR JO //

                    $this->data['sp_mig_alokasi_lama'] = DB::select('CALL sp_mig_alokasi_lama(6277)');
                    $this->data['sp_mig_split_alokasi'] = DB::select('CALL sp_mig_split_alokasi(6277)');
                    $this->data['sp_mig_realisasi_kapal'] = DB::select('CALL sp_mig_realisasi_kapal(6277)');

                    //  $this->data['sp_mig_zona_pit'] = DB::select('CALL sp_mig_zona_pit(3121413)');
                    //  $this->data['wpp'] = DB::select('CALL sp_mig_zona_pit(5121413)');
                    //  $this->data['pangkalan'] = DB::select('CALL sp_mig_zona_pit(6121413)');
                    //  $this->data['kapal'] = DB::select('CALL sp_mig_zona_pit(7121413)');
                    // $this->data['sp_mig_zona_pit'] = DB::select('CALL sp_mig_zona_pit(1,0)');

                    $this->data['sp_mig_zona_pit'] = DB::select('CALL sp_mig_zona_pit(3121413)');
                    $this->data['sp_mig_zona_pit1'] = DB::select('CALL sp_mig_zona_pit(3121414)');
                    $this->data['sp_mig_zona_pit2'] = DB::select('CALL sp_mig_zona_pit(3121415)');

                    $this->data['wpp'] = DB::select('CALL sp_mig_zona_pit(5121413)');
                    $this->data['wpp1'] = DB::select('CALL sp_mig_zona_pit(5121414)');
                    $this->data['wpp2'] = DB::select('CALL sp_mig_zona_pit(5121415)');


                    $this->data['pangkalan'] = DB::select('CALL sp_mig_zona_pit(6121413)');
                    $this->data['pangkalan1'] = DB::select('CALL sp_mig_zona_pit(6121414)');
                    $this->data['pangkalan2'] = DB::select('CALL sp_mig_zona_pit(6121415)');


                    $this->data['kapal'] = DB::select('CALL sp_mig_zona_pit(7121413)');
                    $this->data['kapal1'] = DB::select('CALL sp_mig_zona_pit(71121414)');
                    $this->data['kapal2'] = DB::select('CALL sp_mig_zona_pit(7121415)');
                   
                    // END CONTROLLER AUTHOR JO //

                    $sertifikat = DB::select('CALL sp_sert_kuota_permohonan(1, ?)', [$email]);
                    $this->data['sp_sert_kuota_permohonan']=$sertifikat;


                    
                    $sertifikat_c = DB::select('CALL sp_sert_kuota_permohonan_lampiran(1, ?)', [$email]);
                    $this->data['sp_sert_kuota_permohonan_lampiran']=$sertifikat_c;
                    
                   
                    // // START EDIT JO //
                    // $this->data['sp_mig_split_alokasi'] = DB::select('CALL sp_mig_split_alokasi(1779)');
                    // $this->data['sp_mig_zona_pit'] = DB::select('CALL sp_mig_zona_pit(1,0)');
                   
                   
                    // // END EDIT JO // 
                    
                    // dd($this->data['sp_sert_kuota_simpan']);

                    return view('modules.siup.migrasi_pit.add', $this->data);
                    break;
                } else {
                    abort(404);
                    break;
                }
            default:
                abort(404);
                break;
        }
    }

    public function agendaControlller()
    {
        $model = new ListAgendaBaru();
        $no_agenda_baru = $model->getStoredProcValue();
        $nomor_nib = $model->getStoredProcValue();

    return view('modules.siup.migrasi_pit.add', $this->data);
    }


    public function siup_migrasi_pdf()
{
    $this->data['sp_mig_resume_siup'] = DB::select('call sp_mig_resume_siup("218013/2023")');
    $this->data['sp_mig_resume_siup_alokasi'] = DB::select('call sp_mig_resume_siup_alokasi("218013/2023")');
    $email = session('email');
    $results = DB::select('CALL sp_mig_nomor_agenda_baru(1, ?)', [$email]);
    $this->data['sp_mig_nomor_agenda_baru'] = $results;
    $this->data['sp_mig_alokasi_lama'] = DB::select('call sp_mig_alokasi_lama("6277")');
    
    
    $pdf = PDF::loadView('modules.siup.migrasi_pit.pdf', $this->data, ['orientation' => 'portrait']);
    $pdf->setPaper('A4', 'portrait');
    
    // Return the PDF as a response
    return $pdf->stream('siup_report.pdf');
    

    // Force the download of the PDF
    // return $pdf->download('siup_report.pdf');
}

public function uploadFile(Request $request)
{
    // $validator = Validator::make($request->all(), [
    //     'fotoPemilik' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     'ttdPemilik' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    // ]);

    // if ($validator->fails()) {
    //     // Tangani jika validasi gagal
    //     return redirect()->back()->withErrors($validator)->withInput();
    // }

    if ($request->hasFile('fotoPemilik')) {
        $fotoPemilik = $request->file('fotoPemilik');
        $fotoPemilikName = time() . '_foto.' . $fotoPemilik->getClientOriginalExtension();
        $fotoPemilik->storeAs('public/images', $fotoPemilikName);
    }

    if ($request->hasFile('ttdPemilik')) {
        $ttdPemilik = $request->file('ttdPemilik');
        $ttdPemilikName = time() . '_ttd.' . $ttdPemilik->getClientOriginalExtension();
        $ttdPemilik->storeAs('public/images', $ttdPemilikName);
    }

    // Lanjutkan dengan logika Anda atau kembalikan respons yang sesuai
}


//test alokasi diajukan//

public function submitForm(Request $request)
{
    try {
        $idalokasi = $request->input('idalokasi');
        $zonaPit = $request->input('zonaPit');
        $wpp = $request->input('wpp');

        \silatng\Models\TrsAlokasiIzinUsaha::where('id_alokasi_izin_usaha', $idalokasi)->update([
            'zona_pit' => $zonaPit,
            'wpp' => $wpp,
        ]);

        return redirect()->back()->with('success', 'Alokasi updated successfully.');
    } catch (\Throwable $e) {
       
        dd($e);
        return redirect()->back()->with('error', 'An error occurred while updating the Alokasi.');
    }
}

    public function updateAlokasi(Request $request)
    {
        // Retrieve the request data
        dd($request->all());
        $zonaPit = $request->input('zonaPit');
        $wpp = $request->input('wpp');
        
        if (empty($idalokasi) || empty($zonaPit) || empty($wpp)) {
            return redirect()->back()->with('error', 'Id Alokasi, Zona PIT, and WPP fields are required.');
        }
    
        $alokasi = TrsAlokasiIzinUsaha::findOrFail($idalokasi);
        $alokasi->zona_pit = $zonaPit;
        $alokasi->wpp = $wpp;
        $alokasi->save();

        return redirect()->back()->with('success', 'Alokasi updated successfully.');
    }

    public function menu_utama()
    {


        
        $this->data['title'] = 'SIUP Migrasi PIT';
        return view('menu',$this->data);



    }

    public function sertifikat_kuota()
    {
        $email = session('email');  
        $results = DB::select('CALL sp_mig_nomor_agenda_baru(1, ?)', [$email]);
        $this->data['sp_mig_nomor_agenda_baru'] = $results;
        $this->data['sp_mig_resume_siup_alokasi'] = DB::select('call sp_mig_resume_siup_alokasi("218013/2023")');
        
        $this->data['title'] = 'SIUP Migrasi PIT';
     

        $sertifikat = DB::select('CALL sp_sert_kuota_permohonan(1, ?)', [$email]);
        $this->data['sp_sert_kuota_permohonan']=$sertifikat;

        $sertifikat_c = DB::select('CALL sp_sert_kuota_permohonan_lampiran(1, ?)', [$email]);
        $this->data['sp_sert_kuota_permohonan_lampiran']=$sertifikat_c;

        return view('modules.siup.migrasi_pit.sertifikat', $this->data);

        // dd($this->data['sp_sert_kuota_permohonan']);
    }

    public function sertifikat_pdf()
{
    $this->data['sp_mig_resume_siup'] = DB::select('call sp_mig_resume_siup("218013/2023")');
    $this->data['sp_mig_resume_siup_alokasi'] = DB::select('call sp_mig_resume_siup_alokasi("218013/2023")');
    $email = session('email');
    $results = DB::select('CALL sp_mig_nomor_agenda_baru(1, ?)', [$email]);
    $this->data['sp_mig_nomor_agenda_baru'] = $results;
    $this->data['sp_mig_alokasi_lama'] = DB::select('call sp_mig_alokasi_lama("6277")');
    $this->data['sp_sert_kuota_simpan'] = DB::select('call sp_sert_kuota_simpan(1,"JOVENBALI86@GMAIL.COM","1/2023")');

    $email = session('email');  
    $results = DB::select('CALL sp_mig_nomor_agenda_baru(1, ?)', [$email]);
    $this->data['sp_mig_nomor_agenda_baru'] = $results;
    
    $this->data['title'] = 'SIUP Migrasi PIT';
 

    $sertifikat = DB::select('CALL sp_sert_kuota_permohonan(1, ?)', [$email]);
    $this->data['sp_sert_kuota_permohonan']=$sertifikat;

  
    $sertifikat_c = DB::select('CALL sp_sert_kuota_permohonan_lampiran(1, ?)', [$email]);
    $this->data['sp_sert_kuota_permohonan_lampiran']=$sertifikat_c;

    
    $pdf = PDF::loadView('modules.siup.migrasi_pit.pdfsertifikat', $this->data, ['orientation' => 'portrait']);
    $pdf->setPaper('A4', 'portrait');
    
    // Return the PDF as a response
    return $pdf->stream('sertifikat_kuota.pdf');
    

    // Force the download of the PDF
    // return $pdf->download('siup_report.pdf');
}


    public function simpan(Request $request)
    {
        // Retrieve the form input values
        $param1 = $request->input('param1');
        $param2 = $request->input('param2');
        $param3 = $request->input('param3');

        // Call the stored procedure
        $results = DB::select('CALL sp_sert_kuota_simpan(?, ?, ?)', [$param1, $param2, $param3]);

        // Perform any other necessary actions

        return redirect()->route('sertifikat_pdf'); // Redirect to the sertifikat_pdf route
    }
}


