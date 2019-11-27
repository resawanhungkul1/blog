<?php 
session_start();
if(!$_SESSION['login']){
     echo "<script type='text/javascript'>
    alert('Maaf  Anda Harus Login Terlebih Dahulu');
    window.location='../login.php'</script>";
}else{
  include('../config/database.php');
  $user=new Database();
  $user=mysqli_query($user->koneksi,
    "SELECT*FROM users WHERE  password='$_SESSION[login]'");
  //var_dump($_SESSION['login']);
  $user=mysqli_fetch_array($user);


 ?>


<!-- Header -->
<?php  include('../layouts/includes/head.php') ?>
<!-- End Header -->
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <!-- Navbar -->
  <?php  include('../layouts/includes/navbar.php') ?>
  <!-- End Navbar -->
  <!-- sidebar -->
  <?php  include('../layouts/includes/sidebar.php') ?>
  <!-- End sidebar -->
    <div class="app-body">

        <!-- Main content --> 
        <main class="main"></main>
        <!-- End Main content -->
    </div>

    <!-- CoreUI and necessary plugins-->
<!-- Script -->
 <?php  include('../layouts/includes/scripts.php') ?>
<!-- End Script -->
  </body>
</html>
<?php 
}
 ?>
