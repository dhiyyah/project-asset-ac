<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Barang Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-description"> Formulir Barang Baru</p>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleSelectGender">Kategori Barang</label>
                    <select class="form-select" id="id_kategori">
                      
                        <option value=""></option>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" required>
                  </div>
                  <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" class="form-control" id="merek" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="tahun_perolehan">Tahun Perolehan</label>
                    <input type="year" class="form-control" id="tahun_perolehan" placeholder="Name">
                  </div>
                  <button type="button" class="btn btn-gradient-primary me-2" id="button-submit">Submit</button>
                  <button class="btn btn-light" data-dismiss="modal">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
            <div class="row">
              <div class="col-12 grid-margin">
                <button type="button" class="btn btn-inverse-primary btn-fw" data-toggle="modal" data-target="#myModal">Barang Baru</button>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Barang</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Kategori </th>
                            <th> Nama Barang </th>
                            <th> Merek </th>
                            <th> Tahun Pengadaan </th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- <?php
                          /* $no = 1;
                          foreach($daftarBarang as $row) {
                            ?>
                            <tr>
                              <td><?= $no ?></td>
                              <td><?= $row['id_kategori_barang'] ?></td>
                              <td><?= $row['nama_barang'] ?></td>
                              <td><?= $row['merek'] ?></td>
                              <td><?= $row['tahun_perolehan'] ?></td>
                            </tr>
                            <?php
                            $no++;
                          }
                           */ ?> -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<script>
  $(document).ready(function(){
    $('#button-submit').on('click', function(e) {
      e.preventDefault();
      const namaBarang = $('#nama_barang').val();
      const merek = $('#merek').val();
      const tahun_perolehan = $('#tahun_perolehan').val();
      const id_kategori = $('#id_kategori').val();
      $.post('barang/tambah_barang', {
        namaBarang, merek, tahun_perolehan, id_kategori
      }, function(response) {
        $('')
      }).fail(function(error) {
        
        $('#myModal').modal('hide');
      })
    })
    
  });
</script>
             <?= $this->endSection() ?>