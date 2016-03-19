<div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dissmis="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Siswa</h4>
      </div>
      <form class="form-horizontal" method="post" id="form_edit">
        {!! csrf_field() !!}
        <input type="hidden" name="edit_nis" class="form-control nis" id="edit_id" placeholder="ex: 10578">
        <div class="modal-body">
          <div class="form-group">
            <label for="edit_nis" class="col-sm-2 control-label">NIS</label>
            <div class="col-sm-10">
              <input type="text" name="edit_nis" class="form-control nis" id="edit_nis" placeholder="ex: 10578">
            </div>
          </div>
          <div class="form-group">
            <label for="edit_nama" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="edit_nama" class="form-control" id="edit_nama" placeholder="ex: John Doe">
            </div>
          </div>
          <div class="form-group">
            <label for="edit_kelas" class="col-sm-2 control-label">Kelas</label>
            <div class="col-sm-10">
              <input type="text" name="edit_kelas" class="form-control" id="edit_kelas" placeholder="ex: XI-RPL">
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
