<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p>...</p>
  </div>

  <!-- Table -->
  <table class="table">
          <th>Tanggal</th>
          <th>Judul Iklan</th>
          <th>Pemesan</th>
          <th>Kuantitas</th>
          <th>Harga</th>
          <th>Total Harga</th>
          <?php foreach ($data as $data): ?>  
          <tr>
            <td><?php echo $data->tanggal?></td>
            <td><?php echo $data->judul_iklan?></td>
            <td><?php echo $data->nama?></td>
            <td><?php echo $data->kuantitas?></td>
            <td><?php echo $data->harga_iklan?></td>
            <td><?php echo $data->total_harga?></td>
          </tr>
          <?php endforeach ?>
  </table>
</div>