<div class="container-fluid">
<legend>Data User </legend>
		<div class="row">

		<form action="" method="post" role="search" class="navbar-form navbar-right">
                <div class="form-group">
                  <input type="text" name="inputan_pencarian" class="form-control form-top" placeholder="Masukan Id / Nama User. .">
                </div>
                <button type="submit" name="cari_user" value="cari" class="btn btn-default btn-link btn-search-top text-btn-top"><span class="glyphicon glyphicon-search"></span></button>
        </form>
		
	</div>
    <div class="row" >
		<div class="col-md-12 col-xs-12">
			<table class="table table-bordered table-striped table-hover" >
			<thead style="background-color: #336666;"> 
					<th style="text-align: center;">Kode User</th>
		            <th style="text-align: center;">Username</th>
		            <th style="text-align: center;">Nama Lengkap</th>
		            <th style="text-align: center;">Jenis Kelamin</th>
		            <th style="text-align: center;">No Telepon</th>
		            <th style="text-align: center;">Email</th>
		            <th style="text-align: center;">Alamat</th>
		            <th style="text-align: center;">Opsi</th>
			</thead>
			<tbody>
				<?php
				$no = 1;

				$batas = 3;
				$hal = @$_GET['hal'];
				if(empty($hal)){
					$posisi = 0;
					$hal = 1;
				} else {
					$posisi = ($hal - 1) * $batas;
				}

				$sql = mysql_query("select * from tb_donasi LIMIT $posisi, $batas") or die (mysql_error());
				$no = $posisi + 1;

				$inputan_pencarian = @$_POST['inputan_pencarian'];
				$cari_user= @$_POST['cari_user'];
				if($cari_user){
					if($inputan_pencarian != ""){
						$sql = mysql_query("select * from tb_user where id_user like '%$inputan_pencarian%' or nama_lengkap like '%$inputan_pencarian%'") or die(mysql_error());
						} else {
							$sql = mysql_query("select * from tb_user") or die(mysql_error());
						}
				} else {
					$sql = mysql_query("select * from tb_user") or die(mysql_error());
				}

				$cek = mysql_num_rows($sql);
				if($cek < 1){
					?>
					<tr>
						<td colspan="10" align="center" style="padding: 10px;">Data tidak ditemukan.</td>
					</tr>
					<?php

				} else {

				while ($data = mysql_fetch_array($sql)){
				?>
				
					<tr>
						
						<td align="center"><?php echo $data['id_user']; ?></td>
						<td align="center"><?php echo $data['username']; ?></td>
						<td align="center"><?php echo $data['nama_lengkap']; ?></td>
						<td align="center"><?php echo $data['jenis_kelamin']; ?></td>
						<td align="center"><?php echo $data['no_telepon']; ?></td>
						<td align="center"><?php echo $data['email']; ?></td>
						<td align="center"><?php echo $data['alamat']; ?></td>
						
						<td align="center">
							<a href="?page=userdiadmin&action=edit&kode=<?php echo $data['kode']; ?>"><a class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
							<a onclick="return confirm('Yakin ingin menghapus data ?')" href="?page=userdiadmin&action=hapus&kode=<?php echo $data['kode']; ?>"><a class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
							
						</td>
					</tr>
				<?php
				}
				}
				?>				
			</tbody>	
			</table>
			<div style="margin-top: 10px; float: left;">
				<?php 
				$jml = mysql_num_rows(mysql_query("select * from tb_user"));
				echo "Jumlah Data : <b>".$jml."</b>"; ?>
			</div>	
		</div>
      </div>
    </div> 
</div>