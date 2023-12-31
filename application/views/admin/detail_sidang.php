  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Mahasiswa</h1>
    <hr class="sidebar-divider ">
		<div class="col-lg-10">
			<div class="row">
				<div class="col">
					<div class="card">
					  <div class="card-header font-weight-bold h5">
					    <?= $sidang['nis'] ?> - <?= $sidang['nama']; ?> 
					  </div>
					  	<div class="card-body">
					  		<form action="<?= base_url('admin/delete_sidang') ?>" method="post">
					  		<input type="hidden" name="id" value="<?= $sidang['id']; ?>">		
					  		<p class="font-weight-bold">Informasi Mahasiswa</p>
					  		<hr class="sidebar-divider">
					  		  <div class="form-group row">
					  		    <label for="staticEmail" class="col-sm-2 col-form-label font-weight-normal">NIM	</label>
					  		    <div class="col-sm-8">
					  		      <input type="text" readonly class="form-control-plaintext font-weight-bold" id="staticEmail" value="<?= $sidang['nis']; ?>">
					  		    </div>
					  		  </div>
					  		  <div class="form-group row">
					  		    <label for="staticEmail" class="col-sm-2 col-form-label font-weight-normal">Nama</label>
					  		    <div class="col-sm-8">
					  		      <input type="text" readonly class="form-control-plaintext font-weight-bold" id="staticEmail" value="<?= $sidang['nama']; ?>">
					  		    </div>
					  		  </div>
					  		  <div class="form-group row">
					  		    <label for="staticEmail" class="col-sm-2 col-form-label font-weight-normal">Jurusan </label>
					  		    <div class="col-sm-8">
					  		      <input type="text" readonly class="form-control-plaintext font-weight-bold" id="staticEmail" value="<?= $sidang['kelas']; ?>">
					  		    </div>
					  		  </div>
					  		  <div class="form-group row">
					  		    <label for="staticEmail" class="col-sm-2 col-form-label font-weight-normal">Pembimbing	</label>
					  		    <div class="col-sm-8">
					  		      <input type="text" readonly class="form-control-plaintext font-weight-bold" id="staticEmail" value="<?= $sidang['pembimbing']; ?>">
					  		    </div>
					  		  </div>

					  		  <p class="font-weight-bold">Informasi Sidang</p>
					  		  <hr class="sidebar-divider">
					  		   <div class="form-group row">
					  		    <label for="staticEmail" class="col-sm-2 col-form-label font-weight-normal">Penguji 1	</label>
					  		    <div class="col-sm-8">
					  		      <input type="text" readonly class="form-control-plaintext font-weight-bold" id="staticEmail" value="<?= $sidang['penguji1']; ?>">
					  		    </div>
					  		  </div>
					  		   <div class="form-group row">
					  		    <label for="staticEmail" class="col-sm-2 col-form-label font-weight-normal">Penguji 2	</label>
					  		    <div class="col-sm-8">
					  		      <input type="text" readonly class="form-control-plaintext font-weight-bold" id="staticEmail" value="<?= $sidang['penguji2']; ?>">
					  		    </div>
					  		  </div>
					  		   <div class="form-group row">
					  		    <label for="staticEmail" class="col-sm-2 col-form-label font-weight-normal">Tanggal	</label>
					  		    <div class="col-sm-8">
					  		      <input type="text" readonly class="form-control-plaintext font-weight-bold" id="staticEmail" value="<?= $sidang['tanggal']; ?>">
					  		    </div>
					  		  </div>
					  		   <div class="form-group row">
					  		    <label for="staticEmail" class="col-sm-2 col-form-label font-weight-normal">Waktu	</label>
					  		    <div class="col-sm-8">
					  		      <input type="text" readonly class="form-control-plaintext font-weight-bold" id="staticEmail" value="<?= $sidang['waktu']; ?>">
					  		    </div>
					  		  </div>
					  		   <div class="form-group row">
					  		    <label for="staticEmail" class="col-sm-2 col-form-label font-weight-normal">Ruangan	</label>
					  		    <div class="col-sm-8">
					  		      <input type="text" readonly class="form-control-plaintext font-weight-bold" id="staticEmail" value="<?= $sidang['ruangan']; ?>">
					  		    </div>
					  		  </div>
					  		  <div class="form-group row">
					  		  	<div class="col-sm-2"></div>
								<div class="col-sm-8">
									<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus jadwal ini?')" >Hapus Jadwal</a>
								</div>	
					  		 </form> 
					  	</div>
					</div>
				</div>
			</div>
		</div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->