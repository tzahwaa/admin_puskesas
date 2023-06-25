<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Employes;
use App\Models\Pekerjaan;
use PDF;

class RekapAbsensiController extends Controller
{
    public function index(){
        $resource = Absensi::paginate(5); 
        return view('rekap/index', compact('resource'));
    }
    
    public function search(Request $request) {
        $batas = 3;
        $cari = $request->kata;
        $resource = Absensi::where('nama', 'like', "%" . $cari . "%")->paginate(5);
        $no = $batas * ($resource->currentPage() - 1);
        return view('rekap.search', compact('resource', 'no', 'cari'));    
    }
   
    public function pdf(Request $request){
        foreach($resource as $index => $res){
            $hadir=Absensi::where(['nama'=>$res->nama])->where('status','Hadir');
            $alfa=Absensi::where(['nama'=>$res->nama])->where('status','Alfa');
            $izin=Absensi::where(['nama'=>$res->nama])->where('status','Izin');
            $sakit=Absensi::where(['nama'=>$res->nama])->where('status','Sakit');
        }
        $hadir=$hadir->get();
        $alfa=$alfa->get();
        $izin=$izin->get();
        $sakit=$sakit->get();

        $pdf= PDF::loadview('rekap.rekap_pdf',['hadir'=>$hadir, 'alfa'=>$alfa,'izin'=>$izin,'sakit'=>$sakit]);
        return $pdf->stream();
    }

    public function hitung(Request $request){
        foreach($resource as $index => $res){
            $hadir=Absensi::where(['nama'=>$res->nama])->where('status','Hadir');
            $alfa=Absensi::where(['nama'=>$res->nama])->where('status','Alfa');
            $izin=Absensi::where(['nama'=>$res->nama])->where('status','Izin');   
            $sakit=Absensi::where(['nama'=>$res->nama])->where('status','Sakit');
        }
        $hadir=$hadir->get();
        $alfa=$alfa->get();
        $izin=$izin->get();
        $sakit=$sakit->get();
  
        return redirect('resources');
        ?> 
<tr>
    <td class="text-center"><?php echo $index+1 ?></td>
    <td class="text-center"><?php echo $res->nama ?></td>
    <td class="text-center"><?php echo $res->jabatan ?></td>
    <td class="text-center"><?php echo count($hadir) ?></td>
    <td class="text-center"><?php echo count($alfa) ?></td>
    <td class="text-center"><?php echo count($izin) ?></td>
    <td class="text-center"><?php echo count($sakit) ?></td>
</tr>
<?php

    }
}