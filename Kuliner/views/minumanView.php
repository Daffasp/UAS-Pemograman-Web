<div class="card card-primary card-outline">
  <div class="card-header bg-primary text-white">
    <h5 class="float-start mt-2 fw-bold">Daftar Minuman Tradisional</h5>
    <div class="float-end mt-2">
      <a title="Tambah data" href="?page=minumanAdd" class="btn btn-sm btn-success">Tambah Data</a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="table table-bordered table-striped">
        <thead class="table-primary text-center">
          <tr>
            <th>No.</th>
            <th>Nama Minuman</th>
            <th>Asal Daerah</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
          $sql = mysqli_query($conn, $query);
          $nomor = 1;

          foreach ($sql as $val) {
          ?>
            <tr>
              <td class="text-center"><?= $nomor++; ?></td>
              <td><?= htmlspecialchars($val['nama_minuman']); ?></td>
              <td><?= htmlspecialchars($val['daerah_minuman']); ?></td>
              <td class="text-center">
                <a href="?page=minumanUpdate&id=<?= $val['id_minuman']; ?>" class="btn btn-sm btn-warning me-1">Update</a>
                <a href="?page=minumanDelete&id=<?= $val['id_minuman']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?');">Hapus</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
        <tfoot class="table-secondary text-center">
          <tr>
            <th>No.</th>
            <th>Nama Minuman</th>
            <th>Asal Daerah</th>
            <th>Keterangan</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>