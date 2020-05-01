<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Anggota
        </h1>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Anggota</button>
    	<table class="table">
    		<tr>
    			<th>No</th>
    			<th>ID Anggota</th>
    			<th>Nama Anggota</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Pekerjaan</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Tanggal Daftar</th>
    		</tr>
    		<?php 
    		$no = 1;
    		foreach ($anggota as $tb_anggota): ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $tb_anggota->id_anggota ?></td>
    			<td><?php echo $tb_anggota ->nama_anggota?></td>
                <td><?php echo $tb_anggota ->alamat?></td>
                <td><?php echo $tb_anggota ->jenis_kelamin?></td>
                <td><?php echo $tb_anggota ->agama?></td>
                <td><?php echo $tb_anggota ->pekerjaan?></td>
                <td><?php echo $tb_anggota ->Tempat_lahir?></td>
                <td><?php echo $tb_anggota ->tanggal_lahir?></td>
                <td><?php echo $tb_anggota ->tanggal_daftar?></td>

    		</tr>
    	<?php endforeach; ?>

    	</table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input data Anggota</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"action="<?php echo base_url().'anggota/tambah_anggota'; ?>">
        	<div class="form-group">
        		<label>Id_Anggota</label>
        		<input type="text" name="id_anggota" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Nama Anggota</label>
        		<input type="text" name="nama_anggota" class="form-control">
        	</div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="textarea" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control">
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input type="text" name="agama" class="form-control">
            </div>
            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control">
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="Tempat_lahir" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Daftar</label>
                <input type="date" name="tanggal_daftar" class="form-control">
            </div>

        	   <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
               <button type="submit" class="btn btn-primary">Simpan</button>
           </form>
       </div>
   </div>
</div>
