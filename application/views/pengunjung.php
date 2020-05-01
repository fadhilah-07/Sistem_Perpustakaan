<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Pengunjung
        </h1>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Pengunjung</button>
    	<table class="table">
    		<tr>
    			<th>No</th>
    			<th>ID Anggota</th>
    			<th>Password</th>
    		</tr>
    		<?php 
    		$no = 1;
    		foreach ($pengunjung as $tb_pengunjung): ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $tb_pengunjung->id_anggota ?></td>
    			<td><?php echo $tb_pengunjung ->password ?></td>
    		</tr>
    	<?php endforeach; ?>

    	</table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input data Pengunjung</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"action="<?php echo base_url().'pengunjung/tambah_aksi'; ?>">
        	<div class="form-group">
        		<label>Id_Anggota</label>
        		<input type="text" name="id_anggota" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Password</label>
        		<input type="text" name="password" class="form-control">
        	</div>
        	   <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	   <button type="submit" class="btn btn-primary">Simpan</button>
        	</form>
        </div>
    </div>
</div>

