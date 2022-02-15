@extends('layout.app')
@section('content')
<div class="container mt-5">
  <div class="row">
  <div class="col-md-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      input Data
    </button>
  </div>
 
    @include('layout.modal')

     <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode Barang</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga Barang</th>
          <th scope="col">Stock Barang</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($datas as $data)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$data->kode_brg}}</td>
          <td>{{$data->nama_brg}}</td>
          <td>Rp {{number_format($data->harga_brg, 3)}}</td>
          <td>{{$data->stock_brg}}</td>
          <td>
            <a href="/edit/{{$data->id}}" class="btn btn-sm btn-success">Edit</a> ||
            <a href="/delete/{{$data->id}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach()
      </tbody>
    </table>
  </div>
</div>

@endsection