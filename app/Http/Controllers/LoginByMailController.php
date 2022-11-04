<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginByMailController extends Controller
{
    public function login_by_mail(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $server 	= "mail01.edi-indonesia.co.id";
		$server2 	= 'mail.edi-indonesia.co.id';
		$email 		= $request->email . '@edi-indonesia.co.id';

		$box 		= false;
		$box2 		= false;

		$byPass 	= array('webadmin', 'idris', 'admin.HRIS', 'erwin', 'andre.dharmawan');

		if (!in_array($request->email, $byPass)) {
			$box = $this->CheckPOP3($server, $request->email, $request->password);

            if ($box) {
                # code...
            } else {
                $box2 = $this->CheckPOP3($server2, $request->email, $request->password);

                if ($box2) {
                    $box = true;
                } else {
                    $box = false;
                }
            }
		} else {
			$box = false;
		}

        if ($box) {
            $data = User::select('nik', 'tb_datapribadi.company_id', 'nama', TRIM('email'), 'userpriv', 'lastlogin', 'lockuser', 'photo', 'idpangkat', 'idjabatan',  'atasan1', 'statuskar', 'old_nik', 'LokasiKer', 'tbldivmaster.nama_div_ext as divisi', 'tb_subdivisi.subdivisi as subdivisi', 'tb_jabatan.jabatan as jabatan', 'tb_pangkat.pangkat as pangkat')
                ->leftjoin('tbldivmaster', 'tb_datapribadi.Divisi', '=', 'tbldivmaster.id')
                ->leftjoin('tb_subdivisi', 'tb_datapribadi.SubDivisi', '=', 'tb_subdivisi.id')
                ->leftjoin('tb_jabatan', 'tb_datapribadi.idjabatan', '=', 'tb_jabatan.id')
                ->leftjoin('tb_pangkat', 'tb_datapribadi.idpangkat', '=', 'tb_pangkat.id')
                ->where('email', $email)
                ->where('resign', 'N')
                ->first();

            $atasan = null;

            if ($data->atasan1) {
                $atasan = User::select('Nama')->where('NIK', $data->atasan1)->first();
            }

            if ($data) {
                $up = User::where('NIK', $data->nik)->first();
                $up->lastlogin = date('Y-m-d h:i:s');
                $up->update();
                // return($up);
                Auth::loginUsingId($up->id);

                return redirect('/home');

            } else {
                return redirect()->back()->withErrors(['error' => 'Account Anda tidak terdaftar di HRIS']);
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Todak dapat terhubung ke mail server']);
        }
    }

    public function CheckPOP3($server, $id, $passwd, $port = 110)
	{
        try {
            if (empty($server) || empty($id) || empty($passwd))
                return false;
            // connect to POP3 Server
            $fs = fsockopen($server, $port, $errno, $errstr, 5);

            // check if connection valid
            if (!$fs)
                return false;

            //connected..
            $msg = fgets($fs, 256);
            // step 1. send ID
            fputs($fs, "USER $id\r\n");
            $msg = fgets($fs, 256);

            if (strpos($msg, "+OK") === false)
                return false;

            // step 2. send password
            fputs($fs, "PASS $passwd\r\n");
            $msg = fgets($fs, 256);

            if (strpos($msg, "+OK") === false)
                return false;
            //step 3. auth passwd, QUIT
            fputs($fs, "QUIT \r\n");
            fclose($fs);

            return true;

        } catch (\Throwable $th) {
            return false;
        }
	}
}
