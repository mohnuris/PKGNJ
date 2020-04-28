<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Form Edit guru</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/guru') ?>">Data Guru</a></li>
        <li class="breadcrumb-item active">Form Edit Guru</li>
      </ol>

      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <div class="modal-body align-center">
          <?php echo form_open('Admin/ed_guru'); ?>
          <!-- <?php echo form_hidden('id', $gr->id_guru); ?> -->
          <?php echo form_hidden('id', $gr->id_guru); ?>
          <?php echo form_hidden('id', $gr->ft_guru); ?>

          <form action="<?= base_url('admin/guru/') ?>{id_guru}">
            <label for="niup" class="alert-link">Niup</label>

            <?php echo form_input("niup", $gr->niup, array('class' => 'form-control', 'id' => 'niup', 'placeholder' => 'NIUP ')); ?>
            <br>
            <form>
              <label for="nm_guru" class="alert-link">Nama Lengkap </label>
              <?php echo form_input("nm_guru", $gr->nm_guru, array('class' => 'form-control', 'id' => 'nm_guru', 'placeholder' => 'Nama Lengkap')); ?>

              <br>
              <label for="sekolah" class="alert-link">Sekolah </label>
              <?php echo form_input("sekolah", $gr->sekolah, array('class' => 'form-control', 'id' => 'sekolah', 'placeholder' => ' Sekolah')); ?>

              <br>
              <label for="kelas" class="alert-link">Kelas </label>
              <?php echo form_input("kelas", $gr->kelas, array('class' => 'form-control', 'id' => 'kelas', 'placeholder' => ' Kelas')); ?>

              <br>
              <label for="jurusan" class="alert-link">Jurusan </label>
              <?php echo form_input("jurusan", $gr->jurusan, array('class' => 'form-control', 'id' => 'jurusan', 'placeholder' => ' jurusan')); ?>

              <br>
              <div class="from-grup">
                <label for="jk_guru" class="alert-link">Jenis Kelamin</label><br>
                <?php
                $jk_guru = $gr->jk_guru;
                if ($jk_guru == "pria") {
                ?><br><?php echo form_radio('jk_guru', 'laki-laki', 'checked') ?> Laki-Laki
                  <?php echo form_radio('jk_guru', 'perempuan', '') ?> perempuan
                  <br>
                <?php
                } else {
                ?><br><?php echo form_radio('jk_guru', 'laki-laki', 'checked') ?> Laki-Laki
                  <?php echo form_radio('jk_guru', 'perempuan', '') ?> perempuan
                <?php
                }

                ?>
                <small class="text-danger">
                  <?php echo form_error('jk_guru', ' '); ?>
                </small>

              </div>
              <br>
              <div class="from-grup">
                <label for="foto" class="alert-link">Foto Guru*)</label>
                <?php
                if (!$gr->ft_guru) {
                ?>
                  <img src="<?= base_url('assets/guru/avatar.gif') ?>" alt="" width="100px">
                  <br>
                <?php
                } else {
                ?>
                  <img src="<?= base_url('assets/guru/' . $gr->ft_guru) ?>" alt="" width="300px">
                <?php
                }

                ?>
                <?php echo form_upload('foto', '', $gr->ft_guru, array('class' => 'foto')); ?>

                <small class="text-danger">
                  <?php echo form_error(('ft_guru')); ?>
                </small>
              </div>

              <div class="modal-footer">
                <button type="submit" id="edit" onclick="Swal.fire('SUKSES','Teredit Tersimpan','success')" class="btn btn-primary">EDIT</button>
                <?php echo form_close(); ?>

                <script>
                  const tombol = document.querySelector('#edit');
                  tombol.addEventListener('click', function() {
                    Swal({
                      title: 'SUKSES',
                      text: 'Edit Data Guru',
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