<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Edit sekolah</h3>
      <br>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/sekolah') ?>">sekolah</a></li>
        <li class="breadcrumb-item active">Edit sekolah</li>
      </ol>


      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <div class="modal-body align-center">
          <?php echo form_open('admin/ed_sekolah'); ?>
          <?php echo form_hidden('id', $ek->id_sekolah); ?>

          <label for="s" class="alert-link">sekolah </label>
          <?php echo form_input("s", $ek->nm_sekolah, array('class' => 'form-control', 'id' => 's', 'placeholder' => ' sekolah')); ?>

          <div class="modal-footer">
            <button type="submit" id="edit" onclick="Swal.fire('SUKSES','Teredit Tersimpan','success')" class="btn btn-primary">EDIT</button>
            <?php echo form_close(); ?>

            <script>
              const tombol = document.querySelector('#edit');
              tombol.addEventListener('click', function() {
                Swal({
                  title: 'SUKSES',
                  text: 'Edit Data Kelas',
                  type: 'success'
                })
              });
            </script>
          </div>

        </div>
      </div>
    </div>
</div>
</main>
</div>