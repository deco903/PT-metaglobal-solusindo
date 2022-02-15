<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('cat.input')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="inputName">Kode Barang</label>
                <input type="number" name="kode_brg" class="form-control" id="inputName" placeholder="Masukan Kode Barang"/ required>
            </div>
            <div class="form-group">
                <label for="inputName">Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" id="inputName" placeholder="Masukan Nama Barang"/ required>
            </div>
            <div class="form-group">
                <label for="inputName">Harga Barang</label>
                <input type="text" name="harga_brg" class="form-control" id="angka" placeholder="Masukan Harga Barang"/ required>
            </div>
            <div class="form-group">
                <label for="inputName">Stock Barang</label>
                <input type="number" name="stock_brg" class="form-control" id="inputName" placeholder="Masukan Stock Barang"/ required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!--end of modal-->