<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Buku
        </h1>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Buku</button>
    	<table class="table">
    		<tr>
    			<th>No</th>
    			<th>ID Buku</th>
    			<th>judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Jumlah Halaman</th>
                <th>Tahun Terbit</th>
                <th>Asal perolehan</th>
                <th>Tanggal Input</th>
    		</tr>
    		<?php 
    		$no = 1;
    		foreach ($buku as $tb_buku): ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $tb_buku ->id_buku ?></td>
    			<td><?php echo $tb_buku ->judul_buku?></td>
                <td><?php echo $tb_buku ->pengarang?></td>
                <td><?php echo $tb_buku ->penerbit?></td>
                <td><?php echo $tb_buku ->jumlah_halaman?></td>
                <td><?php echo $tb_buku ->tahun_terbit?></td>
                <td><?php echo $tb_buku ->asal_perolehan?></td>
                <td><?php echo $tb_buku ->tanggal_input?></td>
    		</tr>
    	<?php endforeach; ?>

    	</table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input buku</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"action="<?php echo base_url().'buku/tambah_buku'; ?>">
        	<div class="form-group">
        		<label>Id Buku</label>
        		<input type="text" name="id_buku" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Judul Buku</label>
        		<input type="text" name="judul_buku" class="form-control">
        	</div>
            <div class="form-group">
                <label>Pengarang</label>
                <input type="textarea" name="pengarang" class="form-control">
            </div>
            <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control">
            </div>
            <div class="form-group">
                <label>Jumlah Halaman</label>
                <input type="text" name="jumlah_halaman" class="form-control">
            </div>
            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control">
            </div>
            <div class="form-group">
                <label>Asal Perolehan</label>
                <input type="text" name="asal_perolehan" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Input</label>
                <input type="date" name="tanggal_input" class="form-control">
            </div>

        	   <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
               <button type="submit" class="btn btn-primary">Simpan</button>
           </form>
       </div>
   </div>
</div>
