@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a class="btn btn-success mb-4" data-toggle="modal" data-target="#exampleModal" style="width: 15%; font-size: 18px">Add</a>
            <div class="card">
                <div class="card-header">List</div>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" aria-controls="home" aria-selected="true" onclick="filter_list()">All</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-selected="false" onclick="filter_list('U1')">U1</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" aria-controls="contact" aria-selected="false" onclick="filter_list('U2')">U2</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" aria-controls="contact" aria-selected="false" onclick="filter_list('U3')">U3</a>
                    </li>
                  </ul>
                <div class="card-body">
                  <div id="message" class="alert" role="alert" style="display: none"></div>
                  @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @elseif(session()->has('alert'))
                      <div class="alert alert-danger">
                          {{ session()->get('alert') }}
                      </div>
                  @endif
                    <table width="100%" class="display" id="table-list">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NOMOR TAGGING</th>
                          <th>Judul</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@include('dashboard.modals.surat_add')
@include('dashboard.modals.surat_view')

@endsection


