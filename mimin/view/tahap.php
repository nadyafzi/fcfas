<?php

//$sdd = "SELECT tbl_biodata.npm, tbl_biodata.domisili,tbl_akun.nama_lengkap,tbl_berkas.foto,tbl_berkas.rangkuman,tbl_berkas.portofolio,tbl_akun.aktivitas_terakhir,tbl_akun.tahap_sekarang from ((tbl_biodata inner join tbl_berkas on tbl_biodata.npm = tbl_berkas.npm ) inner join tbl_akun on tbl_biodata.npm = tbl_akun.npm)";
$sdd = "Select * from peserta";
$hasil = $conn->query($sdd);

?>

<!-- paraf 1-->
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
		
                <div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Data Peserta FIKTI CLASS FOR ACTIVE STUDENTS 2019</h5>
							<div class="ibox-tools">
								<a class="collapse-link">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="ibox-content">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover dataTables-example" >
								<thead>
								<tr>
									<th>Nama Lengkap</th>
									<th>NPM</th>
									<th>Kelas</th>
									<th>Jurusan</th>
									<th>Domisili</th>
									<th>Jenis Kelamin</th>
									<th>No. HP</th>
									<th>ID Line</th>
									<th>Email</th>
									<th>Kelas yang ingin diambil</th>
									
									
								</tr>
								</thead>
								<tbody>
								<?php while($row = $hasil->fetch_array(MYSQLI_ASSOC)) { 
									?>
								<tr>
									<td><?=$row['nama'];?></td>
									<td><?=$row['npm'];?></td>
									<td><?=$row['kelas'];?></td>
									<td><?=$row['jurusan'];?></td>
									<td><?=$row['domisili'];?></td>
									<td><?=$row['jenis_kelamin'];?></td>
									<td><?=$row['nohp'];?></td>
									<td><?=$row['line'];?></ttd>
									<td><?=$row['email'];?></td>
									<td><?=$row['minat'];?></td>
									
								</tr>
								<?php } ?>
								</tbody>
								</table>
							</div>
						
						</div>
					</div>
				</div>
			</div>
        </div>
<!-- end paraf 1-->
