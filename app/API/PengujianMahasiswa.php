<?php

namespace App\API;

/**
 * Pengujian Mahasiswa
 */
trait PengujianMahasiswa
{
    public static function getPengujianMahasiswa($request)
    {
        return self::get(`/pengujian_mahasiswa`, [
            "id_sdm" => $request->id_sdm,
            "id_semester" => $request->id_semester
        ]);
    }

    public static function getPengujianMahasiswaID($id_aktivitas_mahasiswa)
    {
        return self::get(`/pengujian_mahasiswa/$id_aktivitas_mahasiswa`);
    }

    public static function getPengujianMahasiswaBidang($id_aktivitas_mahasiswa)
    {
        return self::get(`/pengujian_mahasiswa/$id_aktivitas_mahasiswa/bidang_ilmu`);
    }

    public static function putPengujianMahasiswa($request)
    {
        return self::put(`/pengujian_mahasiswa/$request->id_aktivitas_mahasiswa/bidang_ilmu`, [
            $request->id_kelompok_bidang
        ]);
    }
}