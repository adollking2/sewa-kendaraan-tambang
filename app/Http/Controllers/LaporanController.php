<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kendaraan;
use Illuminate\Support\Facades\Log;
// require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class LaporanController extends Controller
{
    public function index()
    {
        // tanggal sewa
        $tanggal_sewa = DB::select('SELECT MONTHNAME(tanggal_sewa) FROM sewa GROUP BY tanggal_sewa');
        $data_approved = DB::select('SELECT sewa.*,kendaraan.nama_kendaraan,Drivers.nama_driver FROM `sewa` JOIN kendaraan ON sewa.kendaraan_id = kendaraan.id JOIN Drivers on sewa.driver_id = Drivers.id where sewa.status = "approved"');
        $data_pending = DB::select('SELECT sewa.*,kendaraan.nama_kendaraan,Drivers.nama_driver FROM `sewa` JOIN kendaraan ON sewa.kendaraan_id = kendaraan.id JOIN Drivers on sewa.driver_id = Drivers.id where sewa.status = "pending"');
        $data_approved2 = DB::select('SELECT COUNT(*) FROM `sewa` WHERE status = "approved" GROUP BY MONTH(tanggal_sewa)');
        $data_pending2 = DB::select('SELECT COUNT(*) FROM `sewa` WHERE status = "pending" GROUP BY MONTH(tanggal_sewa)');
        
        Log::info('memangil tampilan laporan');
        return view('admin.laporan',[
            'approved' => $data_approved,
            'pending' => $data_pending,
            'tanggal_sewa' => $tanggal_sewa,
            'data_approved' => $data_approved2,
        ]);
    }

     public function excel()
    {
        Log::info('memangil unduh laporan');

        $data = DB::select('SELECT sewa.*,kendaraan.nama_kendaraan,Drivers.nama_driver FROM `sewa` JOIN kendaraan ON sewa.kendaraan_id = kendaraan.id JOIN Drivers on sewa.driver_id = Drivers.id');
        // dd($data_approved);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        $from = "A1"; 
        $to = "E1"; 
        $sheet->getStyle("$from:$to")->getFont()->setBold( true );

        for ($i=1; $i <= count($data)  ; $i++) { 
            if ($i == 1) {
                $sheet->setCellValue('A1', 'ID');
                $sheet->setCellValue('B1', 'Nama Kendaaan');
                $sheet->setCellValue('C1', 'Nama Driver');
                $sheet->setCellValue('D1', 'Tanggal sewa');
                $sheet->setCellValue('E1', 'status');
                
            }else{
                $sheet->setCellValue('A'.$i, $data[$i-1]->id);
                $sheet->setCellValue('B'.$i, $data[$i-1]->nama_kendaraan);
                $sheet->setCellValue('C'.$i, $data[$i-1]->nama_driver);
                $sheet->setCellValue('D'.$i, $data[$i-1]->tanggal_sewa);
                $sheet->setCellValue('E'.$i, $data[$i-1]->status);
            }


        }

        $writer = new Xlsx($spreadsheet);
        $writer->save('hello world.xlsx');
          // redirect output to client browser
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="laporan.xlsx"');
        header('Cache-Control: max-age=0');
        Log::info('mengunduh laporan excel');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
