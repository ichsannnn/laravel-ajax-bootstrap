<div class="modal fade" tabindex="-1" role="dialog" id="modalTambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Siswa</h4>
      </div>
      <form class="form-horizontal" method="post" id="form_create">
        {!! csrf_field() !!}
        <div class="modal-body">
          <div class="form-group">
            <label for="nis" class="col-sm-2 control-label">NIS</label>
            <div class="col-sm-10">
              <input type="text" name="nis" class="form-control" id="nis" placeholder="ex: 10578">
            </div>
          </div>
          <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" placeholder="ex: John Doe">
            </div>
          </div>
          <div class="form-group">
            <label for="kelas" class="col-sm-2 control-label">Kelas</label>
            <div class="col-sm-10">
              <input type="text" name="kelas" class="form-control" id="kelas" placeholder="ex: XI-RPL">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
