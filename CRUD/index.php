<?php
	//Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass ="";
	$database ="dblatihan";

	$Koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($Koneksi));

	//jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
	{
	
		 $nama = $_POST['tnama'];
  		 $alamat = $_POST['talamat'];
  		 $umur = $_POST['tumur'];
  		 $no_tlp = $_POST['tnotlp'];

  		 $sql = "INSERT INTO"
  		 '$simpan' = mysqli_query($Koneksi, $sql);
  		 "tmhs VALUES ('','$nama', '$alamat', '$umur', '$no_tlp')";
									
		if($simpan) //jika simpan sukses 
		{
			echo "<script>
					alert('SIMPAN DATA SUKSES!');
					document.location='index.php';
				 </script>";
		}
		else
		{
			echo "<script>
					alert('SIMPAN DATA GAGAL!');
					document.location='index.php';
				 </script>";
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>PROJECT CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">

	<h1 class="text-center">PENDAFTARAN</h1>


		<!--Awal Card Form-->
	<div class="card mt-3 ">
	  <div class="card-header bg-primary text-white ">
	    Pendaftaran Siswa
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>Nama</label>
	    		<input type="text" name="tnama" class="form-control" placeholder="Jawaban Anda" required>
	    	</div>

	    	<div class="form-group">
	    		<label>Alamat</label>
	    		<input type="text" name="talamat" class="form-control" placeholder="Jawaban Anda" required>
	    	</div>

	    	<div class="form-group">
	    		<label>Umur</label>
	    		<input type="text" name="tumur" class="form-control" placeholder="Jawaban Anda" required>
	    	</div>

	    	<div class="form-group">
	    		<label>No Tlp</label>
	    		<input type="text" name="tnotlp" class="form-control" placeholder="Jawaban Anda" required>
	    	</div>

	    	<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="breset">Reset</button>


	    </form>
	  </div>
	</div>
		<!--Akhir Card Form-->

		<!--Awal Card Tabel-->
	<div class="card mt-3 ">
	  <div class="card-header bg-success text-white ">
	    Daftar Siswa
	  </div>
	  <div class="card-body">

	  	<table class="table table-bordered table-striped">
	  		<tr>
	  			<th>No</th>
	  			<th>Nama</th>
	  			<th>Alamat</th>
	  			<th>Umur</th>
	  			<th>No Tlp</th>
	  		</tr>
	  		<?php
	  			$no = 1;
	  			$tampil = mysqli_query($Koneksi, "SELECT * from tmhs order by id_mhs desc");
	  			while($data = mysqli_fetch_array($tampil)) :
	  			
			?>
	  		<tr>
	  			<td><?=$no++;?></td>
	  			<td><?=$data['nama']?></td>
	  			<td><?=$data['alamat']?></td>
	  			<td><?=$data['umur']?></td>
	  			<td><?=$data['no tlp']?></td>
	  			<td>
	  				<a href="@" class="btn btn-warning"> Edit</a>
	  				<a href="@" class=" btn btn-danger"> Hapus</a>
	  			</td>
	  		</tr>
	  	<?php endwhile; //penutup perulangan while ?>

	  	</table>
	    
	  </div>
	</div>
		<!--Akhir Card Tabel-->


</div>



<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>