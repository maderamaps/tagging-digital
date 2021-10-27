<div class="modal fade" id="add_peralatan" role="dialog" aria-labelledby="exampleModalLabel" >
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Peralatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="{{ route('peralatan_add')}}" method="post">
            @csrf
        <div class="modal-body">
            
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama<span class="required"> </span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input class="form-control" type="text" name="name_peralatan" required>
                </div>
            </div>

            <div class="form-group" id="kategori">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori<span class="required"> </span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <select name="kategori_peralatan" name="kategori_peralatan" class="form-control selectpicker"  style="width:100%" >
                        <option value="">-- Pilih Kategori --</option>          
                        @foreach ($kategori as $kategori)
                          <option value="{{$kategori->kategori}}">{{$kategori->kategori}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group" id="kategori_baru" style="display: none">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori baru<span class="required"> </span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input class="form-control" type="text" name="kategori_peralatan_baru">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"><span class="required"> </span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <a class="ml-4 btn btn-success" id="btn_plus" data-toggle="tooltip" title="Untuk menambahkan kategori baru" onclick="kategori_baru()"><i class="fas fa-plus"></i></a>
                    <a class="ml-4 btn btn-danger" id="btn_min" data-toggle="tooltip" title="Untuk menambahkan kategori baru" onclick="kategori_baru_close()" style="display: none"><i class="fas fa-minus"></i></a>
                    <span style="color: blue">kategori baru</span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>

