<?php

namespace silatng\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; 

use silatng\Models\ListNegaraModel;
use silatng\Models\ListProvinsiModel;
use silatng\Models\ListBadanHukumModel;
use App\Models\ListAgendaBaru;
use PDF;




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
                    

                   
                    // START EDIT JO //
                    $this->data['sp_mig_split_alokasi'] = DB::select('CALL sp_mig_split_alokasi(1779)');
                    $this->data['sp_mig_zona_pit'] = DB::select('CALL sp_mig_zona_pit(1,0)');
                    $this->data['sp_mig_kapal_aktif'] = DB::select('CALL sp_mig_kapal_aktif(1,0,0,0)');
                   
                    // END EDIT JO // 
                    
                    //  dd($this->data['sp_mig_kapal_aktif']);
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
    $email = session('email');
    $results = DB::select('CALL sp_mig_nomor_agenda_baru(1, ?)', [$email]);
    $data['sp_mig_nomor_agenda_baru'] = $results;
    $pdf = PDF::loadView('modules.siup.migrasi_pit.pdf',$data,['orientation' => 'portrait']);
    $pdf->setPaper('A4', 'portrait');

    // Display the PDF in the browser
    return $pdf->stream('siup_report.pdf');

    // Force the download of the PDF
    // return $pdf->download('siup_report.pdf');
}



}

//End Author Jefri