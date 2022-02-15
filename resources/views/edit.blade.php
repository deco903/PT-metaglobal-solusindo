@extends('layout.app')
@section('content')
<center><h1>Edit Data Barang</h1></center>
 <form action="{{route('cat.update')}}" method="post">
   @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="form-group">
        <label for="inputEmail">Kode Barang</label>
        <input type="number" name="kode_brg" class="form-control" value="{{$data->kode_brg}}" />
    </div>
    <div class="form-group">
        <label for="inputName">Nama Barang</label>
        <input type="text" name="nama_brg" class="form-control" id="inputName" value="{{$data->nama_brg}}" / required>
    </div>
    <div class="form-group">
        <label for="inputName">Harga Barang</label>
        <input type="text" name="harga_brg" class="form-control" id="angka" value="{{$data->harga_brg}}" required>
    </div>
    <div class="form-group">
        <label for="inputName">Stock Barang</label>
        <input type="number" name="stock_brg" class="form-control" id="inputName" value="{{$data->stock_brg}}"/ required>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
@endsection