<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KategoriController extends Controller
{
    public function index()
    {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'kategori_kode' => now()
        
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data baru Berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: '. $row. ' baris';

        $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->where('kategori_nama', 'Camilan')->delete();
        return 'Update data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

    }
}
