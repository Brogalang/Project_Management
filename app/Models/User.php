<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tb_datapribadi';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIK',
        'sqc_nik',
        'Nama',
        'jk',
        'status_pernikahan',
        'email',
        'atasan1',
        'atasan2',
        'TglKontrak',
        'TglKontrakEnd',
        'idpangkat',
        'idjabatan',
        'Divisi',
        'SubDivisi',
        'LokasiKer',
        'statuskar',
        'resign',
        'Golongan',
        'Golongan_out',
        'userpriv',
        'noext',
        'updnoext',
        'photo',
        'NmPanggil',
        'Alamat',
        'Alamat_KTP',
        'NoTelepon',
        'NoHp',
        'TempatLahir',
        'TanggalLahir',
        'Agama',
        'Status',
        'TanggalMenikah',
        'NamaPasangan',
        'TanggalLahirPasangan',
        'TmplLahirPasangan',
        'umurpasangan',
        'jobpasangan',
        'pndkpasangan',
        'agamapasangan',
        'password',
        'emailreg',
        'lastlogin',
        'firstlogin',
        'lockuser',
        'ktp_sim',
        'gol_darah',
        'nama_bapak',
        'agama_bapak',
        'kerja_bapak',
        'tmplhr_bapak',
        'tgllhr_bapak',
        'umur_bapak',
        'alamat_bapak',
        'pnddk_bapak',
        'nama_ibu',
        'agama_ibu',
        'kerja_ibu',
        'tmplhr_ibu',
        'tgllhr_ibu',
        'umur_ibu',
        'alamat_ibu',
        'pnddk_ibu',
        'Negara',
        'npwp',
        'nama_npwp',
        'alamat_npwp',
        'hobi',
        'jamsostek',
        'bpjs',
        'TglTetap',
        'jabatan',
        'tgl_sk_jab',
        'tgl_sk_gol',
        'TglPromosi',
        'disableuse',
        'stilllogin',
        'norek',
        'vendor',
        'old_nik',
        'tgl_pengajuan_out',
        'tgl_out',
        'alasan_out',
        'detail_out',
        'surat_pemberhentian',
        'dir_1_resign',
        'dir_2_resign',
        'id',
        'daily_token',
        'session_id',
        'gaji',
        'tunj_tmr',
        'tunj_jab',
        'Divisi_penugasan',
        'ttd_karyawan',
        'byproyek',
        'proyek',
        'INCLUDE_PLAYER_IDS',
        'company_id',
        'status_project',
        'nama_project',
        'no_rab',
        'uuid',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function divisi(): BelongsTo
    {
        return $this->belongsTo(DivisiModel::class, 'Divisi', 'id');
    }

    public function sub_divisi(): BelongsTo
    {
        return $this->belongsTo(SubDivisiModel::class, 'SubDivisi', 'id');
    }
}
