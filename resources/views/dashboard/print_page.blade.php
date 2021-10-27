<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" rel="stylesheet"></script>
    <script src="{{ asset('js/bootstrap-select.js') }}" rel="stylesheet"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet"></script>
    <script src="{{ asset('js/tagging_virtual.js') }}" rel="stylesheet"></script>
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free-5.15.1-web/css/all.min.css') }}" rel="stylesheet">


    
    
</head>

<body>


            <form id="surat_view" class="section-to-print print-style">
                <table class="table table-bordered" id="header-table">
                    <tr>
                        <td rowspan="3" width="20%"></td>
                        <td align="center">PT INDONESIA POWER</td>
                        <td>No. Form    : IK.PNS.Q</td>
                    </tr>
                    <tr>
                        <td align="center">UNIT JASA PEMBANGKITAN PANGKALAN SUSU</td>
                        <td>Tgl Terbit    : 1 Juni 2015</td>
                    </tr>
                    <tr>
                        <td align="center">INDONESIA POWER INTEGRATED MANAGEMENT SYSTEM</td>
                        <td>Revisi    : 00</td>
                    </tr>
                    <tr>
                        <td style="border: none"></td>
                        <td align="center" style="border-left: none; font-size: 25px">FORMULIR PENGAJUAN TAGGING</td>
                        <td>Halaman : hal 1/1</td>
                    </tr>
                </table>

                <table width="100%" class="table table-bordered table-body">
                    <tr>
                        <td colspan="2" width="65%"  style="vertical-align: middle;">
                            <div style="display: flex"> <b>Nomor Tagging</b> 
                            <table class="tableNumber">
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging1" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging2" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging3" readonly></td>
                                <td style="border: 0"></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging4" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging5" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging6" readonly></td>
                                <td style="border: 0"></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging7" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging8" readonly></td>
                            </table> 
                            </div>
                        </td>
                        <td colspan="2" width="35%"  style="vertical-align: middle;"><div style="display: flex"> <b>Nomor WO :</b> <div><input type="text" class="inumber" id="no_wo" readonly></div></div></td>
                    </tr>
                    <tr>
                        <td colspan="2" >Peralatan Yang Akan Diproteksi / KKS Number</td>
                        <td colspan="2" ><input type="text" class="inumber" id="no_kks"  readonly></td>
                    </tr>
                    <tr>
                        <td colspan="2" >Alasan Permintaan Diproteksi</td>
                        <td colspan="2" ><input type="text" class="inumber" id="keterangan_kks"  readonly></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border: 0">Apakah sudah ada surat ijin kerja ?</td>
                        <td colspan="2" style="border: 0">Ya <input type="checkbox" name="ijinKerja" id="ijinKerja_ya" onclick="return false;"> &emsp; Tidak <input type="checkbox" name="ijinKerja" id="ijinKerja_tidak" onclick="return false;"></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Apakah pekerjaan memerlukan pemutusan tegangan ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="checkbox" name="tegangan" id="tegangan_ya" onclick="return false;"> &emsp; Tidak <input type="checkbox" name="tegangan" id="tegangan_tidak" onclick="return false;"></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Apakah pekerjaan memerlukan grounding / pentanahan ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="checkbox" name="grounding" id="grounding_ya" onclick="return false;"> &emsp; Tidak <input type="checkbox" name="grounding" id="grounding_tidak" onclick="return false;"></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Apakah lokasi kerja tersedia alat pengaman / pemadam ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="checkbox" name="pengaman" id="pengaman_ya" onclick="return false;"> &emsp; Tidak <input type="checkbox" name="pengaman" id="pengaman_tidak" onclick="return false;"> </td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Jumlah pekerja yang terlibat dalam pekerjaan</td>
                    <td colspan="2" style="border: 0" id="jumlah_pekerja"></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Diajukan</td>
                        <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Tgl: <input type="date" class="mr-5" id="tgl_diajukan" style="border: 0px" readonly> Jam: <input type="time" id="jam_diajukan" style="border: 0px" readonly></td>
                        <td colspan="2" style="border-bottom: 0; border-left: 0; border-right: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_diajukan" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Dilaksanakan</td>
                    <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" id="tgl_dilaksanakan" style="border: 0px" readonly> Jam: <input type="time" id="jam_dilaksanakan" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_dilaksanakan" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" id="tgl_rencana_selesai" style="border: 0px" readonly> Jam: <input type="time" id="jam_rencana_selesai" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rencana_selesai" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rev1 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" id="tgl_rev1_rencana_selesai" style="border: 0px" readonly> Jam: <input type="time" id="jam_rev1_rencana_selesai" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rev1_rencana_selesai" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rev2 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" id="tgl_rev2_rencana_selesai" style="border: 0px" readonly> Jam: <input type="time" id="jam_rev2_rencana_selesai" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rev2_rencana_selesai" readonly></div></div></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center" style="border-bottom: 0">
                            <span style="float: left">Sebelum pemasangan tagging</span>
                            <br><br>
                            <div class="col-md-12 row">
                                
                                <br>
                                <br>
                                <div  class="col-md-4">
                                    Menyetujui
                                    <br><br><br><br><br><br>
                                    
                                    (...............................................)<br>SPS / SP Operasi (A-D)
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    Yang Mengajukan Tagging
                                    <br><br><br><br><br><br>
                                    
                                    (...............................................)<br>SP Pemeliharaan (HMK/ HLT/ HKI)
                                </div>
                            
                            </div>
                        </td>
                    
                    </tr>
                </table>
                <br><br>
                <h5 style="text-align: center; font-weight: bold">DAFTAR URUTAN TAGGING ( TAG-ON )</h5>
                <h5 style="text-align: center">( URUTKAN SESUAI KEPERLUANNYA UNTUK KESELAMATAN PEKERJA DAN KEAMANAN ALAT )</h5>
                <table class="table table-bordered table-peralatan">
                    <tr>
                        <th width="2%">NO</th>
                        <th>Nama Peralatan</th>
                        <th>KKS Number</th>
                        <th>Status</th>
                    </tr>
                    @for ($i=1; $i <= 10; $i++)
                    <tr>
                            <td style="padding: 3px">{{$i}}</td>                      
                            <td style="padding: 3px"><input type="text" class="inumber form-control" id="peralatan_{{$i}}" readonly></td>                      
                            <td style="vertical-align: middle;padding: 3px"><input type="text" class="inumber form-control" id="kks_number_{{$i}}" readonly></td>                      
                            <td style="vertical-align: middle;padding: 3px"><input type="text" class="inumber form-control" id="status_{{$i}}" readonly></td>                      
                    </tr>
                    @endfor
                    <tr>
                        <td colspan="4" align="center"  style="border-bottom: 0">
                            <span style="float: left">Setelah pemasangan tagging</span>
                            <br><br>
                            <div class="col-md-12 row">
                                <br>
                                <br>
                                <div  class="col-md-4">
                                    Menyetujui
                                    <br><br><br><br><br><br>
                                    (...............................................)<br>SPS / SP Operasi (A-D)
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    Yang melaksanakan tagging
                                    <br><br><br><br><br><br>

                                    (...............................................)<br>Operator (A-D)
                                </div>
                            
                            </div>    
                        </td>
                    </tr>
                </table>
                
            </form>

            <form id="surat_release" class="section-to-print print-style pagebreak mb-0 pb-0 " action="{{ route('release_surat')}}" method="post">
                @csrf
                <table class="table table-bordered" id="header-table">
                    <tr>
                        <td rowspan="3" width="20%"></td>
                        <td align="center">PT INDONESIA POWER</td>
                        <td>No. Form    : IK.PNS.Q.01.08.02</td>
                    </tr>
                    <tr>
                        <td align="center">UNIT JASA PEMBANGKITAN PANGKALAN SUSU</td>
                        <td>Tgl Terbit    : 1 Juni 2015</td>
                    </tr>
                    <tr>
                        <td align="center">INDONESIA POWER INTEGRATED MANAGEMENT SYSTEM</td>
                        <td>Revisi    : 00</td>
                    </tr>
                    <tr>
                        <td style="border: none"></td>
                        <td align="center" style="border-left: none; font-size: 25px">FORMULIR RELEASED TAGGING</td>
                        <td>Halaman : hal 1/1</td>
                    </tr>
                </table>

                <table width="100%" class="table table-bordered">
                    <tr>
                        <td colspan="2" width="65%"  style="vertical-align: middle;">
                            <div style="display: flex"> <b>Nomor Tagging</b> 
                            <table class="tableNumber">
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging_realesed1" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging_realesed2" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging_realesed3" readonly></td>
                                <td style="border: 0"></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging_realesed4" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging_realesed5" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging_realesed6" readonly></td>
                                <td style="border: 0"></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging_realesed7" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_tagging_realesed8" readonly></td>
                            </table> 
                            </div>
                        </td>
                        <td colspan="2" width="35%"  style="vertical-align: middle;"><div style="display: flex"> <b>Nomor WO :</b> <div><input type="text" class="inumber" id="no_wo_realesed"  readonly></div></div></td>
                    </tr>
                    <tr>
                        <td colspan="2" >Peralatan Yang Akan Di-released / KKS Number</td>
                        <td colspan="2" ><input type="text" class="inumber" id="no_kks_released" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="2" >Alasan Permintaan realeased peralatan</td>
                        <td colspan="2" ><input type="text" class="inumber" id="keterangan_kks_released" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border: 0">Apakah peralatan sudah siap dites dan dioperasikan ?</td>
                        <td colspan="2" style="border: 0">Ya <input type="radio" name="siap_dioperasikan" id="siap_dioperasikan_ya" value="ya" onclick="return false;"> &emsp; Tidak <input type="radio" name="siap_dioperasikan" id="siap_dioperasikan_tidak" value="tidak" onclick="return false;"></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Apakah alat kerja sudah dipindahkan dari lokasi kerja ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="radio" name="dipindahkan" id="dipindahkan_ya" value="ya" onclick="return false;"> &emsp; Tidak <input type="radio" name="dipindahkan" id="dipindahkan_tidak" value="tidak" onclick="return false;"></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Apakah pekerjaan memerlukan grounding / pentanahan ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="radio" name="grounding" id="grounding_released_ya" value="ya" onclick="return false;"> &emsp; Tidak <input type="radio" name="grounding" id="grounding_released_tidak" value="tidak" onclick="return false;"></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Apakah lokasi kerja sudah bersih dan aman terhadap alat ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="radio" name="bersih" id="bersih_ya" value="ya" onclick="return false;"> &emsp; Tidak <input type="radio" name="bersih" id="bersih_tidak" value="tidak" onclick="return false;"> </td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Jumlah pekerja yang terlibat dalam pekerjaan</td>
                    <td colspan="2" style="border: 0" id="jumlah_pekerja_released"></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Diajukan</td>
                        <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Tgl: <input type="date" class="mr-5" id="tgl_diajukan_released" style="border: 0px" readonly> Jam: <input type="time" id="jam_diajukan_released" style="border: 0px" readonly></td>
                        <td colspan="2" style="border-bottom: 0; border-left: 0; border-right: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_diajukan_released" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Dilaksanakan</td>
                    <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" id="tgl_dilaksanakan_released" style="border: 0px" readonly> Jam: <input type="time" id="jam_dilaksanakan_released" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_dilaksanakan_released" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" id="tgl_rencana_selesai_released" style="border: 0px" readonly> Jam: <input type="time" id="jam_rencana_selesai_released" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rencana_selesai_released"></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rev1 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" id="tgl_rev1_rencana_selesai_released" style="border: 0px" readonly> Jam: <input type="time" id="jam_rev1_rencana_selesai_released" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rev1_rencana_selesai_released" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rev2 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" id="tgl_rev2_rencana_selesai_released" style="border: 0px" readonly> Jam: <input type="time" id="jam_rev2_rencana_selesai_released" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rev2_rencana_selesai_released" readonly></div></div></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center" style="border-bottom: 0">
                            <span style="float: left">Sebelum pemasangan tagging</span>
                            <br><br>
                            <div class="col-md-12 row">
                                
                                <br>
                                <br>
                                <div  class="col-md-4">
                                    Menyetujui
                                    <br><br><br><br><br><br>
                                    
                                    (...............................................)<br>SPS / SP Operasi (A-D)
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    Yang Mengajukan Tagging
                                    <br><br><br><br><br><br>
                                    
                                    (...............................................)<br>SP Pemeliharaan (HMK/ HLT/ HKI)
                                </div>
                            
                            </div>
                        </td>
                    
                    </tr>
                </table>
                
                <h5 style="text-align: center; font-weight: bold">DAFTAR URUTAN TAGGING ( TAG-ON )</h5>
                <h5 style="text-align: center">( URUTKAN SESUAI KEPERLUANNYA UNTUK KESELAMATAN PEKERJA DAN KEAMANAN ALAT )</h5>
                <table class="table table-bordered table-peralatan">
                    <tr>
                        <th width="2%">NO</th>
                        <th>Nama Peralatan</th>
                        <th>KKS Number</th>
                        <th>Status</th>
                    </tr>
                    @for ($i=1; $i <= 10; $i++)
                    <tr>
                            <td style="padding: 3px">{{$i}}</td>                      
                            <td style="padding: 3px"><input type="text" class="inumber form-control" id="peralatan_released_{{$i}}" readonly></td>                      
                            <td style="vertical-align: middle;padding: 3px"><input type="text" class="inumber form-control" id="kks_number_released_{{$i}}" readonly></td>                      
                            <td style="vertical-align: middle;padding: 3px"><input type="text" class="inumber form-control" id="status_released_{{$i}}" readonly></td>                      
                    </tr>
                    @endfor
                    <tr>
                        <td colspan="4" align="center"  style="border-bottom: 0">
                            <span style="float: left">Setelah pemasangan tagging</span>
                            <br><br>
                            <div class="col-md-12 row">
                                <br>
                                <br>
                                <div  class="col-md-4">
                                    Menyetujui
                                    <br><br><br><br><br><br>
                                    (...............................................)<br>SPS / SP Operasi (A-D)
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    Yang melaksanakan tagging
                                    <br><br><br><br><br><br>

                                    (...............................................)<br>Operator (A-D)
                                </div>
                            
                            </div>    
                        </td>
                    </tr>
                </table>
                
            </form> 
         
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $( document ).ready(function() {
        view({{$id_print}});
        realesed_form({{$id_print}});
        setTimeout(function(){ window.print(); }, 3000);
        
        
    });
    
    
</script>