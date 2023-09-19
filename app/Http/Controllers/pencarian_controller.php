<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class pencarian_controller extends Controller
{
    public function get_pppk_2023(Request $request){
        $validator = $request->validate([
            'nik_sscn' => 'required|numeric|min:16',
            // 'g-recaptcha-response' => 'required|captcha'
            // 'captcha' => 'required|captcha',
        ]);

        $nik_sscn = $request->input('nik_sscn');

        $sql = DB::table('dbo.tempTable')->delete();
        $sql1 = DB::insert("INSERT INTO dbintan.dbo.tempTable exec ws_guru.formasi2023.sp_pendaftaran_check $nik_sscn");

        $data_guru = DB::select(DB::raw("select * from dbintan.dbo.tempTable"));
        
        if (empty($data_guru)) {
            return redirect()->back()->with('message', 'NIK Anda tidak terdata pada Dapodik, jika Anda sudah terdata pada Dapodik pastikan NIK pada Dapodik sudah valid. Untuk memastikan silakan validasi NIK Anda pada laman https://vervalptk.data.kemdikbud.go.id/. Jika NIK sudah valid dan data tidak muncul, kemungkinan Anda belum memenuhi syarat menjadi peserta PPPK Guru 2023.');
        }
        elseif(isset($data_guru[0])) {
            $get_data_exist = $data_guru[0];

            $referensi_jabatan = DB::select(DB::raw("select  kode_baru, b.jabatan, is_formasi_tersedia  from eformasi_2023_agustus.dbo.t_individu_request_check a
            inner join (select distinct kode_baru,jabatan from cut_off_sep_2022.dbo.ref_jabatan_2022) b on a.kode_jabatan = b.kode_baru
            where request_id =
            (select top 1 request_id from eformasi_2023_agustus.dbo.t_individu_request_check
            where nik =$nik_sscn
            order by request_id desc )"));
        }
        else {
            $get_data_exist = null;
            $referensi_jabatan = null;
        }
            
        
        return view('pppk_2023.show_data', compact('get_data_exist', 'referensi_jabatan'));
    }

    

}
