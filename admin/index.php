<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include 'partials/head.php' ?>
<!-- head -->

<body>
  <div id="overlay" class="overlay"></div>

  <!-- TOPBAR -->
 <?php include 'components/topbar.php' ?>

  <!-- SIDEBAR -->
 <?php include 'components/sidebar.php' ?>

  <!-- MAIN CONTENT -->
<!-- fungsi untuk menampilkan halaman hanya dibagian main content saja -->
 <?php 
 $page = isset($_GET['page']) ? $_GET['page'] : "dashboard";
 switch ($page) {
    // untuk memberi nama halamannya
    // dashboard
    case 'dashboard':
        // isinya apa / mau diisi dengan bagian pages apa 
        include 'pages/dashboard.php';
        // fungsinya untuk menahan halaman agar tidak otomatis berpindah ke halman setelahnya
        break;
        //kategori -> untuk halaman kategori
        // case nya nanti berfungsi untuk manggil halaman di sidebar / hrefnya
        case 'kategori' :
            include 'pages/kategori/kategori.php';
            break;
    // untuk mengarahkan halaman awal yang akan dibuka 
    default:
    include 'pages/dashboard.php';
    break;

 }
  ?>

  <!-- Bootstrap JS -->
  <?php include 'partials/script.php' ?>



</body>

</html>