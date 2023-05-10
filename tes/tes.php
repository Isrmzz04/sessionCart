<?php 

// Inisialisasi sesi
session_start();

// // Menandai sesi yang ingin dijaga
// $sessionIdToKeep = $_SESSION['cart'];

// // Menghapus sesi kecuali yang ditandai
// foreach ($_SESSION as $key => $value) {
//     if ($key !== $sessionIdToKeep) {
//         unset($_SESSION[$key]);
//     }
// }

// // Menghapus variabel penanda
// unset($_SESSION['cart']);

// Menghancurkan sesi jika diperlukan
session_destroy();


// // Inisialisasi sesi
// session_start();

// // Menyimpan ID sesi yang ingin dijaga
// $sessionIdToKeep = $_SESSION['cart'];

// // Menghapus semua data sesi
// session_unset();
// session_destroy();

// // Mulai sesi baru
// session_start();

// // Mengembalikan data sesi yang ingin dijaga
// $_SESSION['cart'] = $sessionIdToKeep;


 ?>