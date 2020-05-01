<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Peminjaman
    </h1>
  </section>
  <table class="table">
    <tr>
      <th>No</th>
      <th>ID Anggota</th>
      <th>Nama Anggota</th>
      <th>ID Buku</th>
      <th>Judul Buku</th>
      <th>Pengarang</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Tanggal Peminjaman</th>
      </tr>
      <?php
      $no=1;
      foreach ($join3 as $row): ?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row->id_anggota;?></td>
        <td><?php echo $row->nama_anggota;?></td>
        <td><?php echo $row->id_buku;?></td>
        <td><?php echo $row->judul_buku;?></td>
        <td><?php echo $row->pengarang;?></td>
        <td><?php echo $row->penerbit;?></td>
        <td><?php echo $row->tahun_terbit;?></td>
        <td><?php echo $row->tanggal_peminjaman;?></td>
      </tr>
      <?php endforeach; ?>
    </table>