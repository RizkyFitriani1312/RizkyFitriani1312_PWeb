<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop Primrose</title>
    <link rel="stylesheet" href="stylesheet/style.CSS">
</head>
<body>
    <?php 
        if(isset($_POST['form'])) {
            $namap = $_POST['namap'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $telpopn = $_POST['telpon'];
            $produk1 = $_POST['produk1'];
            $produk2 = $_POST['produk2'];
            $produk3 = $_POST['produk3'];
            $produk4 = $_POST['produk4'];
            $produk5 = $_POST['produk5'];
            $lokasi = $_POST['lokasi'];
            $pesan = $_POST['pesan'];
        }
    ?>
</body>
</html>