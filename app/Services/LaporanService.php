<?php
namespace App\Services;
use App\Models\Laporan;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class LaporanService{

    public function getAllLaporan(){
        $laporan = DB::table('laporan_rekap')->select('rekap')->paginate(10);

        return $laporan;
    }

    public function addOrIgnore($date){
        $date = $this->convert($date);
        if(!DB::table('laporan_rekap')->where(['rekap' => $date])->exists()){
            $laporan = DB::table('laporan_rekap')->insert([
                'rekap' => $date,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            return true;
        }else{
            return false;
        }
    }

    private function convert($date){
        $date = date('M-Y', strtotime($date));
        return $date;
    }

    public function exportToExel($tanggalTarget, $paketList): bool{
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();

        // styling
        // set columen dimension
        $activeWorksheet->getColumnDimension('B')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('C')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('D')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('E')->setAutoSize(true);

        // set Header
        $activeWorksheet->setCellValue( 'A1', 'Rekap Laporan Bulan May 2023');
        $activeWorksheet->mergeCells("A1:G1");
        $activeWorksheet->getStyle('A1')->getFont()->setSize(20);
        $activeWorksheet->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // set nama kolom pada posisi row 1, sebagai judul column
        $activeWorksheet->setCellValue('A2', 'No');
        $activeWorksheet->setCellValue('B2', 'Kode Resi');
        $activeWorksheet->setCellValue('C2', 'Tanggal Pembuatan');
        $activeWorksheet->setCellValue('D2', 'Kota Tujuan');
        $activeWorksheet->setCellValue('E2', 'Total Biaya Paket');
        $activeWorksheet->setCellValue('F2', 'Status Paket');


        // urutan
        $i = 2;
        $no = 1;
        // // data import
        foreach($paketList as $paket){
            // print_r($paket);
            // echo "<br><br><br><br>";

            // row A, nomer auto inc
            $activeWorksheet->setCellValue('A' . ++$i, $no++);

            // row B, Kode Resi
            $activeWorksheet->setCellValue('B' . $i, $paket->resi);

            // row C, Tanggal
            $activeWorksheet->setCellValue('C' . $i, date('d M Y', strtotime($paket->created_at)));

            // row D, Kota Tujuan
            $activeWorksheet->setCellValue('D' . $i, $paket->data_paket['kota_tujuan']);

            // row E, Biaya Vendor
            // $activeWorksheet->setCellValue('E' . $i, $paket->biaya_paket['biaya_total']);

            // row F, Biaya Total
            $activeWorksheet->setCellValue('E' . $i, $paket->biaya_paket['biaya_total']);

            // row G, status paket
            $activeWorksheet->setCellValue('F' . $i, $paket->status_paket);
        }

        // set header file
        $name = $tanggalTarget;
        header('Content-disposition: attachment; filename= Rekap-'.$name.'.xlsx');
        header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        
        return true;
    }
}