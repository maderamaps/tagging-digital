@extends('layouts.app')

@section('content')
<div class="container">
    <form>
        <table width="100%" class="table table-bordered">
            <tr>
                <td colspan="2" width="65%"  style="vertical-align: middle;"><div style="display: flex"> <b>Nomor Tagging</b> <table class="tableNumber"><td><input type="text" maxlength="1" class="inumber" value="1"></td><td><input type="text" maxlength="1" class="inumber" value="2"></td><td style="border: 0"></td><td><input type="text" maxlength="1" class="inumber" value="3"></td><td><input type="text" maxlength="1" class="inumber" value="2"></td><td><input type="text" maxlength="1" class="inumber" value="1"></td><td style="border: 0"></td><td><input type="text" maxlength="1" class="inumber" value="2"></td><td><input type="text" maxlength="1" class="inumber" value="3"></td></table> </div></td>
                <td colspan="2" width="35%"  style="vertical-align: middle;"><div style="display: flex"> <b>Nomor WO :</b> <div><input type="text" class="inumber" value="234232"></div></div></td>
            </tr>
            <tr>
                <td colspan="2" >Peralatan Yang Akan Diproteksi / KKS Number</td>
                <td colspan="2" ><input type="text" class="inumber" value="xxxxxxx"></td>
            </tr>
            <tr>
                <td colspan="2" >Alasan Permintaan Diproteksi</td>
                <td colspan="2" ><input type="text" class="inumber" value="xxxxxxx"></td>
            </tr>
            <tr>
                <td colspan="2" style="border: 0">Apakah sudah ada surat ijin kerja ?</td>
                <td colspan="2" style="border: 0">Ya <input type="checkbox" name="ijinKerja" onclick="return false;" checked> &emsp; Tidak <input type="checkbox" name="ijinKerja"></td>
            </tr>
            <tr>
              <td colspan="2" style="border: 0">Apakah pekerjaan memerlukan pemutusan tegangan ?</td>
              <td colspan="2" style="border: 0">Ya <input type="checkbox" name="ijinKerja" onclick="return false;" checked> &emsp; Tidak <input type="checkbox" name="ijinKerja" onclick="return false;"></td>
            </tr>
            <tr>
              <td colspan="2" style="border: 0">Apakah pekerjaan memerlukan grounding / pentanahan ?</td>
              <td colspan="2" style="border: 0">Ya <input type="checkbox" name="ijinKerja" onclick="return false;" checked> &emsp; Tidak <input type="checkbox" name="ijinKerja" onclick="return false;"></td>
            </tr>
            <tr>
              <td colspan="2" style="border: 0">Apakah lokasi kerja tersedia alat pengaman / pemadam ?</td>
              <td colspan="2" style="border: 0">Ya <input type="checkbox" name="ijinKerja" onclick="return false;"> &emsp; Tidak <input type="checkbox" name="ijinKerja" onclick="return false;" checked> </td>
            </tr>
            <tr>
              <td colspan="2" style="border: 0">Jumlah pekerja yang terlibat dalam pekerjaan</td>
              <td colspan="2" style="border: 0">28 Orang</td>
            </tr>
            <tr>
                <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Diajukan</td>
                <td colspan="1" style="border-bottom: 0; border-left: 0; border-right: 0">Tgl: <input type="date" class="mr-5" value="2021-07-22" style="border: 0px"> Jam: <input type="time" value="07:22" style="border: 0px"></td>
                <td colspan="2" style="border-bottom: 0; border-left: 0; border-right: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" value="xxxxxx"></div></div></td>
            </tr>
            <tr>
              <td colspan="1" style="border: 0">Dilaksanakan</td>
              <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" value="2021-07-22" style="border: 0px"> Jam: <input type="time" value="07:22" style="border: 0px"></td>
              <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" value="xxxxxx"></div></div></td>
            </tr>
            <tr>
              <td colspan="1" style="border: 0">Rencana selesai</td>
              <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" value="2021-07-22" style="border: 0px"> Jam: <input type="time" value="07:22" style="border: 0px"></td>
              <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" value="xxxxxx"></div></div></td>
            </tr>
            <tr>
              <td colspan="1" style="border: 0">Rev1 rencana selesai</td>
              <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" value="2021-07-22" style="border: 0px"> Jam: <input type="time" value="07:22" style="border: 0px"></td>
              <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" value="xxxxxx"></div></div></td>
            </tr>
            <tr>
              <td colspan="1" style="border: 0">Rev2 rencana selesai</td>
              <td colspan="1" style="border: 0">Tgl: <input type="date" class="mr-5" value="2021-07-22" style="border: 0px"> Jam: <input type="time" value="07:22" style="border: 0px"></td>
              <td colspan="2" style="border: 0"><div style="display: flex">Oleh :<div><input type="text" class="inumber" value="xxxxxx"></div></div></td>
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
            <tr>
                  <td>1</td>                      
                  <td>Peralatan 1
                  </td>                      
                  <td style="vertical-align: middle;">xxxxxxxxxx</td>                      
                  <td style="vertical-align: middle;">aktif</td>                      
            </tr>
            <tr>
              <td>2</td>                      
              <td>Peralatan 1
              </td>                      
              <td>xxxxxxxxxx</td>                      
              <td>aktif</td>                      
            </tr>
            <tr>
              <td>3</td>                      
              <td>Peralatan 1
              </td>                      
              <td>xxxxxxxxxx</td>                      
              <td>aktif</td>                      
            </tr>
            <tr>
              <td>4</td>                      
              <td>Peralatan 1
              </td>                      
              <td>xxxxxxxxxx</td>                      
              <td>aktif</td>                      
            </tr>
            <tr>
              <td>5</td>                      
              <td>Peralatan 1
              </td>                      
              <td>xxxxxxxxxx</td>                      
              <td>aktif</td>                      
            </tr>
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
</div>
@endsection

