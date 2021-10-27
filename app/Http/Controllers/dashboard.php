<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\surat;
use App\Models\DateSurat;
use App\Models\Peralatan;
use App\Models\PeralatanSurat;
use Validator;

class dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {

        $surat = surat::orderby('created_at','desc')->get();
        
        if(!isset($surat[0])){
            $tagging = array("0","0","1",substr(date("y"),0,1) ,substr(date("y"),1,2) );
        }else{
            $inc = substr($surat[0]->no_tagging,4,3) + 1;
            $inc = str_pad($inc, 3, '0', STR_PAD_LEFT);
            $tagging = array(substr($inc,0,1) , substr($inc,1,1) , substr($inc,2,1) , substr(date("y"),0,1) ,substr(date("y"),1,2));

        }

        $peralatan = peralatan::select('id','name')->orderby('name','asc')->get();
        
        return view('dashboard.dashboard', ['surat' => $surat,
                                            'tagging' => $tagging,
                                            'peralatan' => $peralatan]);
    }
    public function view()
    {
        return view('view');
    }

    public function filter_list(request $request)
    {
        // $surat = surat::where('no_tagging','like','%'.$request->u.'%')->orderby('created_at','desc')->get();
        
        // return json_encode($surat);
        $columns = array( 
            0 =>'no', 
            1 =>'no_tagging',
            2=> 'keterangan_kks',
            3=> 'created_at',
            4=> 'status',
            5=> 'Action',
        );

        $totalData = surat::count();
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search.value'); 

        if($request->filter == NULL){
                if(empty($request->input('search.value')))
                {            
                    $surats = surat::offset($start)
                                ->limit($limit)
                                ->orderBy($order,$dir)
                                ->get();
                }
                else {
                    $search = $request->input('search.value'); 
        
                    $surats =  surat::where('created_at','LIKE',"%{$search}%")
                                    ->orWhere('keterangan_kks', 'LIKE',"%{$search}%")
                                    ->orWhere('status', 'LIKE',"%{$search}%")
                                    ->orWhere('no_tagging', 'LIKE',"%{$search}%")
                                    ->offset($start)
                                    ->limit($limit)
                                    ->orderBy($order,$dir)
                                    ->get();
        
                    $totalFiltered = surat::where('created_at','LIKE',"%{$search}%")
                                    ->orWhere('keterangan_kks', 'LIKE',"%{$search}%")
                                    ->orWhere('status', 'LIKE',"%{$search}%")
                                    ->orWhere('no_tagging', 'LIKE',"%{$search}%")
                                    ->count();
                }
        }else{
                if($request->filter == 'U1'){
                    $filter = 'U1';
                    $totalData = surat::where('no_tagging', 'LIKE',"%{$filter}%")->count();
                    $totalFiltered = $totalData; 
                }else if($request->filter == 'U2'){
                    $filter = 'U2';
                    $totalData = surat::where('no_tagging', 'LIKE',"%{$filter}%")->count();
                    $totalFiltered = $totalData; 
                }else if($request->filter == 'U3'){
                    $filter = 'U3';
                    $totalData = surat::where('no_tagging', 'LIKE',"%{$filter}%")->count();
                    $totalFiltered = $totalData; 
                }

                if(empty($request->input('search.value')))
                {            
                    $surats = surat::where('no_tagging', 'LIKE',"%{$filter}%")
                                ->offset($start)
                                ->limit($limit)
                                ->orderBy($order,$dir)
                                ->get();
                }
                else {
                    $search = $request->input('search.value'); 
        
                    $surats =  surat::where('no_tagging','LIKE',"%{$filter}%")
                                    ->Where(function($query) use ($search) {
                                        $query->where('created_at', 'LIKE',"%{$search}%")
                                            ->orWhere('keterangan_kks', 'LIKE',"%{$search}%")
                                            ->orWhere('status', 'LIKE',"%{$search}%")
                                            ->orWhere('no_tagging', 'LIKE',"%{$search}%");
                                        })
                                    ->offset($start)
                                    ->limit($limit)
                                    ->orderBy($order,$dir)
                                    ->get();
        
                    $totalFiltered = surat::where('no_tagging','LIKE',"%{$filter}%")
                                    ->Where(function($query) use ($search){
                                        $query->where('created_at', 'LIKE',"%{$search}%")
                                            ->orWhere('keterangan_kks', 'LIKE',"%{$search}%")
                                            ->orWhere('status', 'LIKE',"%{$search}%")
                                            ->orWhere('no_tagging', 'LIKE',"%{$search}%");
                                        })
                                    ->count();
                }
        }
       

        $data = array();
        if(!empty($surats))
        {
            $i=$start+1;
            foreach ($surats as $surat)
            {


                $nestedData['no'] = $i++;
                $nestedData['no_tagging'] = $surat->no_tagging;
                $nestedData['keterangan_kks'] = $surat->keterangan_kks;
                $nestedData['created_at'] = date('j M Y h:i a',strtotime($surat->created_at));
                $nestedData['status'] = $surat->status;
                $nestedData['Action'] = '<a class="btn btn-warning btn-sm btn-circlee" data-target="#view_surat_modal" data-toggle="modal" onclick="view('.$surat->id.')"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a>
                                         <a class="btn btn-danger btn-sm btn-circlee" id="remove'.$surat->id.'" data-id="'.$surat->id.'" data-tagging="'.$surat->no_tagging.'" onclick="delete_surat('.$surat->id.')"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="delete"></i></a>';
                $data[] = $nestedData;

            }
        }
          
        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data   
                    );
            
        echo json_encode($json_data); 
        
    }
    

    public function add_surat(Request $request)
    {
        $no_tagging = $request->type.'-'.$request->no_tagging3.$request->no_tagging4.$request->no_tagging5.'-'.$request->unit;
        $validator = Validator::make($request->all(), [
            $no_tagging => 'unique:project.surat,no_tagging'
        ]);

        if ($validator->passes()){
            $surat = new surat;
            $surat->no_tagging = $no_tagging;
            $surat->no_wo = $request->no_wo;
            $surat->no_kks = $request->no_kks;
            $surat->keterangan_kks = $request->keterangan_kks;
            $surat->surat_ijin_kerja = $request->ijinKerja;
            $surat->tegangan = $request->tegangan;
            $surat->grounding = $request->grounding;
            $surat->pengaman = $request->pengaman;
            $surat->jml_pekerja = $request->jumlah_pekerja;
            if($surat->save()){
                $date = new DateSurat;
                $date->id_surat = $surat->id;
                $date->type = 'diajukan';
                $date->date = $request->diajukan_date.' '.$request->diajukan_time;
                $date->created_by = $request->diajukan_oleh;
                $date->save();

                $date = new DateSurat;
                $date->id_surat = $surat->id;
                $date->type = 'dilaksanakan';
                $date->date = $request->dilaksanakan_date.' '.$request->dilaksanakan_time;
                $date->created_by = $request->dilaksanakan_oleh;
                $date->save();

                $date = new DateSurat;
                $date->id_surat = $surat->id;
                $date->type = 'rencana selesai';
                $date->date = $request->rencana_selesai_date.' '.$request->rencana_selesai_time;
                $date->created_by = $request->rencana_selesai_oleh;
                $date->save();

                if($request->rev1_rencana_selesai_date != "" and $request->rev1_rencana_selesai_time != ""){
                    $date = new DateSurat;
                    $date->id_surat = $surat->id;
                    $date->type = 'Rev1 rencana selesai';
                    $date->date = $request->rev1_rencana_selesai_date.' '.$request->rev1_rencana_selesai_time;
                    $date->created_by = $request->rev1_rencana_selesai_oleh;
                    $date->save();
                }else if($request->rev2_rencana_selesai_date != "" and $request->rev2_rencana_selesai_time != ""){
                    $date = new DateSurat;
                    $date->id_surat = $surat->id;
                    $date->type = 'Rev2 rencana selesai';
                    $date->date = $request->rev2_rencana_selesai_date.' '.$request->rev2_rencana_selesai_time;
                    $date->created_by = $request->rev2_rencana_selesai_oleh;
                    $date->save();
                }

                for($i=1;$i<=10;$i++){
                    $temp_peralatan='peralatan_'.$i;
                    $temp_kks_number='kks_number_'.$i;
                    $temp_status='status_'.$i;
                    if($request->$temp_peralatan != "" and $request->$temp_kks_number != "" and $request-> $temp_status != ""){
                        $peralatan = new PeralatanSurat;
                        $peralatan->id_surat = $surat->id;
                        $peralatan->id_peralatan = $request->$temp_peralatan;
                        $peralatan->kks_number = $request->$temp_kks_number;
                        $peralatan->status = $request->$temp_status;
                        $peralatan->save();
                    }
                    
                }

                
                return redirect('dashboard')->with('message', 'Hooray! You just added '.$surat->no_tagging.' !');
            }
        }else{
            $errors = $validator->errors();
            echo $errors;
        }
    }

    public function get_surat(request $request)
    {
        $data = array();
        $data['surat'] = surat::join('date_surat','date_surat.id_surat','=','surat.id')->where('surat.id',$request->id)->get();
        $data['peralatan_surat'] = PeralatanSurat::where('id_surat',$data['surat'][0]->id_surat)->join('peralatan','peralatan.id','=','peralatan_surat.id_peralatan')->get();

        return json_encode($data);
    }

    public function release_surat(request $request)
    {
        $surat = surat::findOrFail($request->id_print_released);
        $surat->siap_dioperasikan = $request->siap_dioperasikan;
        $surat->dipindahkan = $request->dipindahkan;
        $surat->bersih = $request->bersih;
        $surat->grounding_realeased = $request->grounding;
        $surat->status = 'Selesai';
        $surat->created_at = false;
        $surat->save();

        $peralatan_surat_get = PeralatanSurat::where('id_surat',$surat->id)->get();
        for($i=0;$i<count($peralatan_surat_get);$i++){
            $peralatan_surat = PeralatanSurat::findOrFail($peralatan_surat_get[$i]->id);
            if($peralatan_surat->status == 'rack in' ){
                $peralatan_surat->status_realeased = 'rack out';
            }else if($peralatan_surat->status == 'rack out'){
                $peralatan_surat->status_realeased = 'rack in';
            }else if($peralatan_surat->status == 'open'){
                $peralatan_surat->status_realeased = 'close';
            }else if($peralatan_surat->status == 'close'){
                $peralatan_surat->status_realeased = 'open';
            }
            $peralatan_surat->save();
        }
        
        
        return redirect('dashboard');
    }

    public function delete_surat(Request $request){
        $id = $request->id;
        $peralatan = PeralatanSurat::where('id_surat',$id)->delete();
        $date = DateSurat::where('id_surat',$id)->delete();
        $surat = surat::findOrFail($id)->delete();
        
        return json_encode('berhasil');
    }

    public function peralatan()
    {
        $peralatan = Peralatan::orderby('kategori','asc')->get();
        $kategori = Peralatan::select('kategori')->orderby('kategori','asc')->distinct()->get();


        return view('peralatan.peralatan', ['peralatan' => $peralatan,
                                            'kategori' => $kategori]);
    }

    public function peralatan_add(request $request)
    {
        $peralatan = new Peralatan;
        $peralatan->name = $request->name_peralatan;
        if($request->kategori_peralatan_baru == ''){
            $peralatan->kategori = $request->kategori_peralatan;
        }else{
            $peralatan->kategori = $request->kategori_peralatan_baru;
        }
        $peralatan->save();
        
        return redirect('peralatan');

    }

    public function peralatan_delete(request $request)
    {
        $peralatan = peralatan::findOrFail($request->id)->delete();
        return redirect('peralatan');
    }

    public function print_page(request $request){
        return view('dashboard.print_page',['id_print' => $request->id_print]);
    }
}
