<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <header>
      <h1>SILAHKAN LOGIN UNTUK MENAMBAHKAN ARTIKEL ATAU MENGHAPUS ARITKEL</H1>
    </header>
      <!-- cek pesan notifikasi -->
      <?php
      if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
          echo "<script>alert('Login gagal! username dan password salah!');</script>";
        }else if($_GET['pesan'] == "logout"){
          echo "<script>alert('Anda telah berhasil logout');</script>";
        }else if($_GET['pesan'] == "belum_login"){
          echo "<script>alert('Anda harus login untuk mengakses halaman admin');</script>";
        }
      }
      ?>
      <div class="wrap">
    		<!-- bagian menu		 -->
        <nav class="menu">
    			<ul>
    				<li>
    					<a href="index.php">Home</a>
    				</li>
    				<li>
    					<a href="kabar_pendidikan.php">Kabar Pendidikan</a>
    				</li>
    				<li>
    					<a href="tutorial.php">Tutorial</a>
    				</li>
    				<li>
    					<a href="tentang.php">Tentang</a>
    				</li>
    				<li>
    					<a href="login.php">Login</a>
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
    <div class="login">
    <form method="post" action="cek_login.php">
      <table>
        <tr><!--username-->
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" placeholder="Masukkan Username"></td>
        </tr>
        <tr><!--password-->
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password" placeholder="Masukkan password"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button type="submit" name="masuk">Login</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
  </body>
</html>
