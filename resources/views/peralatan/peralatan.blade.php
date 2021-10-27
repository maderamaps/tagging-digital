@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-success mb-2" data-toggle="modal" data-target="#add_peralatan">Add</a>
            <div class="card">
                <div class="card-header">List</div>

                <div class="card-body">
                    <table width="100%" class="table table-bordered" id="table-list-peralatans">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Kategori</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                      @foreach ($peralatan as $peralatan)
            
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$peralatan->name}}</td>
                          <td>{{$peralatan->kategori}}</td>
                          <td><a class="btn btn-danger btn-sm btn-circlee" href="{{route('peralatan_delete',[$peralatan->id])}}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="View"></i></a></td>
                        </tr>
                      
                      @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@include('peralatan.modals.peralatan_add')
@endsection

