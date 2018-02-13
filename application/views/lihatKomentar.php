<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Lihat Komentar</div>

  <!-- Table -->
  <table class="table">
          <th>Judul Iklan</th>
          <th>Komentar</th>
          <th>Tanggal</th>
          <?php foreach ($data as $datas): ?>  
          <tr>
            <td><?php echo $datas->judul_iklan ?> </td>
            <td><?php echo $datas->komentar ?> </td>
            <td><?php echo $datas->waktu ?> </td>
          </tr>
          <?php endforeach ?>
  </table>
</div>