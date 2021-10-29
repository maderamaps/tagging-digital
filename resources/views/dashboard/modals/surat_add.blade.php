<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" >
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form enctype="multipart/form-data" action="{{ route('add_surat')}}" method="post">
          @csrf
        <div class="modal-body">
              <table width="100%" class="table table-bordered">
                  <tr>
                      <td colspan="2" width="65%"  style="vertical-align: middle;">
                        <div style="display: flex"> <b>Nomor Tagging</b> 
                          <table class="tableNumber">
                            <td>
                              <select name="type" id="type" data-live-search="true" class="form-control selectpicker" required>
                                <option value="">-- Type --</option>
                                <option value="HMK">HMK</option>
                                <option value="HLT">HLT</option>
                                <option value="HKI">HKI</option>
                              </select>
                            </td>
                            <td style="border: 0"></td>
                            <td>
                              <input type="text" name='no_tagging3' id="no_tagging3" maxlength="1" class="inumber" value="{{$tagging[0]}}" readonly>
                            </td>
                            <td>
                              <input type="text" name='no_tagging4' id="no_tagging4" maxlength="1" class="inumber" value="{{$tagging[1]}}" readonly>
                            </td>
                            <td>
                              <input type="text" name='no_tagging5' id="no_tagging5" maxlength="1" class="inumber" value="{{$tagging[2]}}" readonly>
                            </td>
                            <td style="border: 0"></td>
                            <td>
                              <select name="unit" id="unit" data-live-search="true" class="form-control selectpicker" required>
                                <option value="">-- Unit --</option>
                                <option value="U1">U1</option>
                                <option value="U2">U2</option>
                                <option value="U3">U3 </option>
                              </select>
                            </td>
                            <input name="no_tagging" id="no_tagging" type="text" style="display: none" >
                          </table> 
                        </div>
                      </td>
                      <td colspan="2" width="35%"  style="vertical-align: middle;"><div style="display: flex"> <b>Nomor WO :</b> <div><input type="number"name="no_wo" class="inumber " required></div></div></td>
                  </tr>
                  <tr>
                      <td colspan="2" >Peralatan Yang Akan Diproteksi / KKS Number</td>
                      <td colspan="2" ><input type="text" name="no_kks" class="inumber form-control" required></td>
                  </tr>
                  <tr>
                      <td colspan="2" >Alasan Permintaan Diproteksi</td>
                      <td colspan="2" ><input type="text" name="keterangan_kks" class="inumber form-control" required></td>
                  </tr>
                  <tr>
                      <td colspan="2" style="border: 0">Apakah sudah ada surat ijin kerja ?</td>
                      <td colspan="2" style="border: 0">Ya <input type="radio" name="ijinKerja" value="ya" required>  Tidak <input type="radio" name="ijinKerja" value="tidak" required></td>
                  </tr>
                  <tr> 
                    <td colspan="2" style="border: 0">Apakah pekerjaan memerlukan pemutusan tegangan ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="radio" name="tegangan" value="ya" required>  Tidak <input type="radio" name="tegangan" value="tidak" required></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="border: 0">Apakah pekerjaan memerlukan grounding / pentanahan ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="radio" name="grounding" value="ya" required>  Tidak <input type="radio" name="grounding" value="tidak" required></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="border: 0">Apakah lokasi kerja tersedia alat pengaman / pemadam ?</td>
                    <td colspan="2" style="border: 0">Ya <input type="radio" name="pengaman" value="ya" required>  Tidak <input type="radio" name="pengaman" value="tidak" required></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="border: 0">Jumlah pekerja yang terlibat dalam pekerjaan</td>
                    <td colspan="2" style="border: 0"><input type="number" name="jumlah_pekerja" required> Orang</td>
                  </tr>
                  <tr>
                      <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Diajukan</td>
                      <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Tgl<input type="date" name="diajukan_date" class="mr-5" required> Jam<input type="time" name="diajukan_time" required></td>
                      <td colspan="2" style="border-bottom: 0; border-left: 0; border-right: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" name="diajukan_oleh" required></div></div></td>
                  </tr>
                  <tr>
                    <td colspan="1" style="border: 0">Dilaksanakan</td>
                    <td colspan="1" style="border: 0">Tgl<input type="date" name="dilaksanakan_date" class="mr-5" required> Jam<input type="time" name="dilaksanakan_time" required></td>
                    <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" name="dilaksanakan_oleh" required></div></div></td>
                  </tr>
                  <tr>
                    <td colspan="1" style="border: 0">Rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl<input type="date" name="rencana_selesai_date" class="mr-5" required> Jam<input type="time" name="rencana_selesai_time" required></td>
                    {{-- <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" name="rencana_selesai_oleh" required></div></div></td> --}}
                  </tr>
                  <tr>
                    <td colspan="1" style="border: 0">Rev1 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl<input type="date" class="mr-5" name="rev1_rencana_selesai_date"> Jam<input type="time" name="rev1_rencana_selesai_time"></td>
                    {{-- <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" name="rev1_rencana_selesai_oleh"></div></div></td> --}}
                  </tr>
                  <tr>
                    <td colspan="1" style="border: 0">Rev2 rencana selesai</td>
                    <td colspan="1" style="border: 0">Tgl<input type="date" class="mr-5" name="rev2_rencana_selesai_date"> Jam<input type="time" name="rev2_rencana_selesai_time"></td>
                    {{-- <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" name="rev2_rencana_selesai_oleh"></div></div></td> --}}
                  </tr>
              </table>
              
              <h5 style="text-align: center; font-weight: bold">DAFTAR URUTAN TAGGING ( TAG-ON )</h5>
              <h5 style="text-align: center">( URUTKAN SESUAI KEPERLUANNYA UNTUK KESELAMATAN PEKERJA DAN KEAMANAN ALAT )</h5>
              <table class="table table-bordered">
                  <tr>
                      <th>NO</th>
                      <th>Nama Peralatan</th>
                      <th>KKS Number</th>
                      <th>Status</th>
                  </tr>
                  @for ($i=1; $i <= 10; $i++)
                  <tr>
                        <td>{{$i}}</td>                      
                        <td><select name="peralatan_{{$i}}" data-live-search="true" class="form-control selectpicker" style="width: 100%">
                            <option>-- Pilih Nama Peralatan --</option>
                            @foreach ($peralatan as $prl)
                                <option value="{{$prl->id}}">{{$prl->name}}</option>
                            @endforeach
                          </select>
                        </td>                      
                        <td style="vertical-align: middle;"><input type="text" class="inumber form-control" name="kks_number_{{$i}}"></td>                      
                        <td style="vertical-align: middle;">
                          <select name="status_{{$i}}" data-live-search="true" class="form-control selectpicker" style="width: 100%">
                            <option value="">-- Pilih Status --</option>
                            <option value="rack in">rack in</option>
                            <option value="rack out">rack out</option>
                            <option value="open">open</option>
                            <option value="close">close</option>
                          
                          </select>
                        </td>                      
                  </tr>
                  @endfor
              </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>