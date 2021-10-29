<div class="modal fade" id="view_surat_modal" role="dialog" aria-labelledby="exampleModalLabel" >
    <div class="modal-dialog modal-xl" style="width: 100%" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">View Form</h5>
          <button id="close_surat_view" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="surat_view_div">
            <form id="surat_view" class="section-to-print">
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
                        <td align="center" style="border-left: none">FORMULIR PENGAJUAN TAGGING</td>
                        <td>Halaman : hal 1/1</td>
                    </tr>
                </table>

                <table width="100%" class="table table-bordered">
                    <tr>
                        <td colspan="2" width="65%"  style="vertical-align: middle;">
                            <div style="display: flex"> <b>Nomor Tagging</b> 
                            <table class="tableNumber">
                                <td><input type="text" maxlength="1" class="inumber" id="no_taggingview1" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_taggingview2" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_taggingview3" readonly></td>
                                <td style="border: 0"></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_taggingview4" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_taggingview5" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_taggingview6" readonly></td>
                                <td style="border: 0"></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_taggingview7" readonly></td>
                                <td><input type="text" maxlength="1" class="inumber" id="no_taggingview8" readonly></td>
                            </table> 
                            </div>
                        </td>
                        <td colspan="2" width="35%"  style="vertical-align: middle;"><div style="display: flex"> <b>Nomor WO :</b> <div><input type="text" class="inumber" id="no_wo" readonly></div></div></td>
                    </tr>
                    <tr>
                        <td colspan="2" >Peralatan Yang Akan Diproteksi / KKS Number</td>
                        <td colspan="2" ><input type="text" class="inumber" id="no_kks" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="2" >Alasan Permintaan Diproteksi</td>
                        <td colspan="2" ><input type="text" class="inumber" id="keterangan_kks" readonly></td>
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
                        <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Tgl: <input class="mr-5" id="tgl_diajukan" style="border: 0px" readonly> Jam: <input id="jam_diajukan" style="border: 0px" readonly></td>
                        <td colspan="2" style="border-bottom: 0; border-left: 0; border-right: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_diajukan" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Dilaksanakan</td>
                    <td colspan="1" style="border: 0">Tgl: <input class="mr-5" id="tgl_dilaksanakan" style="border: 0px" readonly> Jam: <input id="jam_dilaksanakan" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_dilaksanakan" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input class="mr-5" id="tgl_rencana_selesai" style="border: 0px" readonly> Jam: <input id="jam_rencana_selesai" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rencana_selesai" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rev1 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input class="mr-5" id="tgl_rev1_rencana_selesai" style="border: 0px" readonly> Jam: <input id="jam_rev1_rencana_selesai" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rev1_rencana_selesai" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rev2 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input class="mr-5" id="tgl_rev2_rencana_selesai" style="border: 0px" readonly> Jam: <input id="jam_rev2_rencana_selesai" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rev2_rencana_selesai" readonly></div></div></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="border-bottom: 0">Sebelum pemasangan tagging</td>
                    </tr>
                    <tr>
                        <td align="center" style="border: 0">Menyetujui</td>
                        <td  height="100px" style="border: 0"></td>
                        <td align="center" style="border: 0">Yang Mengajukan Tagging</td>
                        <td style="border: 0"></td>
                    </tr>
                    <tr>
                        <td align="center" style="border: 0">(...............................................)<br>SPS / SP Operasi (A-D)</td>
                        <td style="border: 0"></td>
                        <td align="center" style="border: 0">(...............................................)<br>SP Pemeliharaan (HMK/ HLT/ HKI)</td>
                        <td style="border: 0"></td>
                    </tr>
                </table>
                
                <h5 style="text-align: center; font-weight: bold">DAFTAR URUTAN TAGGING ( TAG-ON )</h5>
                <h5 style="text-align: center">( URUTKAN SESUAI KEPERLUANNYA UNTUK KESELAMATAN PEKERJA DAN KEAMANAN ALAT )</h5>
                <table class="table table-bordered">
                    <tr>
                        <th width="2%">NO</th>
                        <th>Nama Peralatan</th>
                        <th>KKS Number</th>
                        <th>Status</th>
                    </tr>
                    @for ($i=1; $i <= 10; $i++)
                    <tr>
                            <td>{{$i}}</td>                      
                            <td><input type="text" class="inumber form-control" id="peralatan_{{$i}}" readonly></td>                      
                            <td style="vertical-align: middle;"><input type="text" class="inumber form-control" id="kks_number_{{$i}}" readonly></td>                      
                            <td style="vertical-align: middle;"><input type="text" class="inumber form-control" id="status_{{$i}}" readonly></td>                      
                    </tr>
                    @endfor
                    <tr>
                        <td colspan="4" style="border-bottom: 0">Setelah pemasangan tagging</td>
                    </tr>
                    <tr>
                        <td align="center" style="border: 0" colspan="2" height="100px">Menyetujui</td>
                        <td align="center" style="border: 0" colspan="2"> Yang melaksanakan tagging</td>
                    </tr>
                    <tr>
                        <td align="center" style="border: 0" colspan="2">(...............................................)<br>SPS / SP Operasi (A-D)</td>
                        <td align="center" style="border: 0" colspan="2">(...............................................)<br>SP Pemeliharaan (HMK/ HLT/ HKI)</td>
                    </tr>
                </table>
            </form> 

                <div class="col col-lg-12" style="margin-bottom: 20px">
                    <a class="btn btn-default" type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 48%;">Close</a>
                    <a class="btn btn-success" id="realease" style="width: 48%; float: right">Release</a>
                </div>

        </div>
        
        <div class="modal-body" id="surat_release_div" style="display: none">
            <form id="surat_release" class="section-to-print" action="{{ route('release_surat')}}" method="post">
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
                        <td align="center" style="border-left: none">FORMULIR RELEASED TAGGING</td>
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
                        <td colspan="2" style="border: 0">Ya <input type="radio" name="siap_dioperasikan" id="siap_dioperasikan_ya" value="ya" required> &emsp; Tidak <input type="radio" name="siap_dioperasikan" id="siap_dioperasikan_tidak" value="tidak"></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Apakah alat kerja sudah dipindahkan dari lokasi kerja ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="radio" name="dipindahkan" id="dipindahkan_ya" value="ya" required> &emsp; Tidak <input type="radio" name="dipindahkan" id="dipindahkan_tidak" value="tidak"></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Apakah pekerjaan memerlukan grounding / pentanahan ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="radio" name="grounding" id="grounding_released_ya" value="ya" required> &emsp; Tidak <input type="radio" name="grounding" id="grounding_released_tidak" value="tidak"></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Apakah lokasi kerja sudah bersih dan aman terhadap alat ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="radio" name="bersih" id="bersih_ya" value="ya" required> &emsp; Tidak <input type="radio" name="bersih" id="bersih_tidak" value="tidak"> </td>
                    </tr>
                    <tr>
                    <td colspan="2" style="border: 0">Jumlah pekerja yang terlibat dalam pekerjaan</td>
                    <td colspan="2" style="border: 0" id="jumlah_pekerja_released"></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Diajukan</td>
                        <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Tgl: <input class="mr-5" id="tgl_diajukan_released" style="border: 0px" readonly> Jam: <input id="jam_diajukan_released" style="border: 0px" readonly></td>
                        <td colspan="2" style="border-bottom: 0; border-left: 0; border-right: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_diajukan_released" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Dilaksanakan</td>
                    <td colspan="1" style="border: 0">Tgl: <input class="mr-5" id="tgl_dilaksanakan_released" style="border: 0px" readonly> Jam: <input id="jam_dilaksanakan_released" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_dilaksanakan_released" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input class="mr-5" id="tgl_rencana_selesai_released" style="border: 0px" readonly> Jam: <input id="jam_rencana_selesai_released" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rencana_selesai_released"></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rev1 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input class="mr-5" id="tgl_rev1_rencana_selesai_released" style="border: 0px" readonly> Jam: <input id="jam_rev1_rencana_selesai_released" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rev1_rencana_selesai_released" readonly></div></div></td>
                    </tr>
                    <tr>
                    <td colspan="1" style="border: 0">Rev2 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl: <input class="mr-5" id="tgl_rev2_rencana_selesai_released" style="border: 0px" readonly> Jam: <input id="jam_rev2_rencana_selesai_released" style="border: 0px" readonly></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" id="by_rev2_rencana_selesai_released" readonly></div></div></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="border-bottom: 0">Sebelum pemasangan tagging</td>
                    </tr>
                    <tr>
                        <td align="center" style="border: 0">Menyetujui</td>
                        <td  height="100px" style="border: 0"></td>
                        <td align="center" style="border: 0">Yang Mengajukan Tagging</td>
                        <td style="border: 0"></td>
                    </tr>
                    <tr>
                        <td align="center" style="border: 0">(...............................................)<br>SPS / SP Operasi (A-D)</td>
                        <td style="border: 0"></td>
                        <td align="center" style="border: 0">(...............................................)<br>SP Pemeliharaan (HMK/ HLT/ HKI)</td>
                        <td style="border: 0"></td>
                    </tr>
                </table>
                
                <h5 style="text-align: center; font-weight: bold">DAFTAR URUTAN TAGGING ( TAG-ON )</h5>
                <h5 style="text-align: center">( URUTKAN SESUAI KEPERLUANNYA UNTUK KESELAMATAN PEKERJA DAN KEAMANAN ALAT )</h5>
                <table class="table table-bordered">
                    <tr>
                        <th width="2%">NO</th>
                        <th>Nama Peralatan</th>
                        <th>KKS Number</th>
                        <th>Status</th>
                    </tr>
                    @for ($i=1; $i <= 10; $i++)
                    <tr>
                            <td>{{$i}}</td>                      
                            <td><input type="text" class="inumber form-control" id="peralatan_released_{{$i}}" readonly></td>                      
                            <td style="vertical-align: middle;"><input type="text" class="inumber form-control" id="kks_number_released_{{$i}}" readonly></td>                      
                            <td style="vertical-align: middle;"><input type="text" class="inumber form-control" id="status_released_{{$i}}" readonly></td>                      
                    </tr>
                    @endfor
                    <tr>
                        <td colspan="4" style="border-bottom: 0">Setelah pemasangan tagging</td>
                    </tr>
                    <tr>
                        <td align="center" style="border: 0" colspan="2" height="100px">Menyetujui</td>
                        <td align="center" style="border: 0" colspan="2"> Yang melaksanakan tagging</td>
                    </tr>
                    <tr>
                        <td align="center" style="border: 0" colspan="2">(...............................................)<br>SPS / SP Operasi (A-D)</td>
                        <td align="center" style="border: 0" colspan="2">(...............................................)<br>SP Pemeliharaan (HMK/ HLT/ HKI)</td>
                    </tr>
                </table>
                <div class="col col-lg-12" style="margin-bottom: 20xp">
                    <input name="id_print_released" id="id_print_released" type="text" style="display:none ">
                    <button class="btn btn-success float-right" type="submit" id="submit_released" style="width: 48%;">Submit</button>
                </div>
                
            </form> 
                
            <div class="col-lg-12">
                <form id="form-print" action="{{ route('print_page')}}" target="_blank" method="post">
                    @csrf
                    <a class="btn btn-default" id="btn-back-view" style="width: 48%;" > Back </a>
                    <input name="id_print" id="id_print" type="text" style="display:none ">
                    <a class="btn btn-danger" id="btn-print" style="width: 48%; float: right;" onclick="print_page()" > Print / PDF </a>
                </form>      
            </div>
        </div>
                
            

      </div>
    </div>
</div>
