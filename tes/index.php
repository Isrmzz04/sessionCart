<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h1>Keranjang Belanja</h1>

    <?php
    session_start();

    $keep = $_SESSION['cart'];

    // Tambahkan item ke keranjang
    if(isset($_POST['add'])){
        $product = $_POST['product'];

        if(isset($_SESSION['cart'][$product])){
            $_SESSION['cart'][$product]++;
        } else {
            $_SESSION['cart'][$product] = 1;
        }
    }

    // Hapus item dari keranjang
    if(isset($_POST['remove'])){
        $product = $_POST['product'];

        if(isset($_SESSION['cart'][$product])){
            if($_SESSION['cart'][$product] > 1){
                $_SESSION['cart'][$product]--;
            } else {
                unset($_SESSION['cart'][$product]);
            }
        }
    }

    // Tampilkan isi keranjang
    if(isset($_SESSION['cart'])){
        echo "<h2>Isi Keranjang:</h2>";
        echo "<ul>";
        foreach($_SESSION['cart'] as $product => $quantity){
            echo "<li>".$product." - ".$quantity." 
                <form method='post' action=''>
                    <input type='hidden' name='product' value='".$product."'>
                    <input type='submit' name='remove' value='Hapus'>
                </form>
                </li>";
        }
        echo "</ul>";
    }
    echo $keep;

    ?>
<a href="tes.php">Out</a>
<a href="new.php">Klik</a>
<a href="">ddd</a>
    <h2>Tambahkan Item:</h2>
    <form method="post" action="">
        <label>Produk:</label>
        <input type="text" name="product" required><br>

        <input type="submit" name="add" value="Tambahkan">
        <input type="reset" name="" value="reset">
    </form>
</body>
</html>
