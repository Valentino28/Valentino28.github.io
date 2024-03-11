<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="../style1.css">
</head>
<body>
	<!-- cek apakah sudah login -->
	<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}
	?>

	<?php echo "<script>alert('Selamat Datang $_SESSION[username]');</script>"; ?>
	<header>
		<h1 class="judul">Daftar Mahasiswa</h1>
	</header>
	<br/>
	<div class="wrap">
		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li>
					<a href="../index.php">Home</a>
				</li>
				<li>
					<a href="../kabar_pendidikan.php">Kabar Pendidikan</a>
				</li>
				<li>
					<a href="../tutorial.php">Tutorial</a>
				</li>
				<li>
					<a href="../tentang.php">Tentang</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>
		<!-- akhir bagian menu -->

		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>Tutorial</h2>
				<p>.</p>
			</div>
			<div class="widget">
				<h2>Post</h2>
				<p>Silahkan</p>
			</div>
		</aside>


	<button><a href="logout.php">LOGOUT</a></button> <button><a href="tambah_mahasiswa.php">Tambah Mahasiswa</a></button>
</div>

</body>
</html>
