<script>
function reloadSiswa() {
  $.ajax({
    method: "GET",
    url: "{{ url('siswa') }}",
    data: {},
    success: function(data) {
      window.history.pushState('', '', '{{ url('siswa') }}');
      document.open();
      document.write(data);
      document.close();
    }
  });
}

function editSiswa(id) {
  $.ajax({
    method: "GET",
    url: "{{ url('siswa') }}"+ '/' + id,
    data: {},
    success: function(data) {
      $('#form_edit').attr("action", "{{ url('siswa/update') }}" + '/' + data.id);
      $('#edit_id').val(data.id);
      $('#edit_nis').val(data.nis);
      $('#edit_nama').val(data.nama);
      $('#edit_kelas').val(data.kelas);
    }
  });
}

function hapusSiswa(id) {
  $.ajax({
    method: "GET",
    url: "{{ url('siswa') }}"+ '/' + id,
    data: {},
    success: function(data) {
      $('.judul-modal').html(data.nama);
      $('.id_hapus').val(data.id);
    }
  });
}
// ----------------------------------------------------------------------------------
$(function() {
  $('#hapus_siswa').click(function(e) {
    e.preventDefault();

    var hapus = $('#data_hapus').val();

    $.ajax({
      method: "GET",
      url: "{{ url('siswa/delete') }}" + '/' + hapus,
      data: {},
      success: function(data) {
        reloadSiswa();
      },
      error: function() {
        alert('ajax error');
      }
    });
  })

  $('#form_create').submit(function(e) {
    e.preventDefault();

    var data_nis = $('#nis').val();
    var data_nama = $('#nama').val();
    var data_kelas = $('#kelas').val();

    $.ajax({
      method: "POST",
      url: "{{ url('siswa/create') }}",
      data: { nis: data_nis, nama: data_nama, kelas: data_kelas },
      success: function() {
        reloadSiswa();
      },
      error: function() {
        alert('ajax error');
      }
    });
  })

  $('#form_edit').submit(function (e){
    e.preventDefault();

    var data_id = $('#edit_id').val();
    var data_nis = $('#edit_nis').val();
    var data_nama = $('#edit_nama').val();
    var data_kelas = $('#edit_kelas').val();

    $.ajax({
      data: { id: data_id, nis: data_nis, nama: data_nama, kelas: data_kelas },
      method: "POST",
      url: "{{ url('siswa/update') }}",
      success: function(data) {
        reloadSiswa();
      },
      error: function() {
        alert('ajax error');
      }
    });
  })
})
</script>
