<?php
// Koneksi ke database
include 'app/Config/config.php';


$result = $conn->query("SELECT * FROM products");

if ($result->num_rows > 0) {
    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} else {
    $products = [];
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Toko Air Mineral</title>
    <link rel="stylesheet" href="css/Home.css">
</head>
<body>
    <header>
        <nav>
            <h1>Toko Air Mineral</h1>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Produk.html">Produk</a></li>
                <li><a href="CRUD.PHP">Add</a></li>
            </ul>
        </nav>
    </header>
    <main id="home">
        <section>
            <h2>Selamat Datang di Toko Air Mineral</h2>
            <p>Kami menyediakan berbagai macam air mineral berkualitas untuk Anda.</p>
            <div id="product-list">
            </div>
        </section>
        <section class="products">
                <h2>pesanan minuman </h2>
                
                <?php if (count($products) > 0): ?>
                    <ul>
                    <section class="tokomineral">
                        <?php foreach ($products as $product): ?>
                            <div class="book-card">
                            <div class="book-cover">
                                    
                                    <img src="Foto/aqua1.jpg" alt="minuman 1">
                                </div>
                                <div class="product-info">
                                    <h3 class="product_name"><?php echo htmlspecialchars($product['product_name']); ?></h3>
                                    <p class="product_Harga"><strong>product_Harga:</strong> <?php echo htmlspecialchars($product['product_Harga']); ?></p>
                                    <p class="Tanggal_kadaluarsa"><strong>Tanggal_kadaluarsa:</strong> <?php echo $product['Tanggal_kadaluarsa']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </section>

                    </ul>
                <?php else: ?>
                    <p>Belum ada minuman yang tersedia.</p>
                <?php endif; ?>
                
            </section>
    </main>
    <footer>
        <p>&copy; 2024 Toko Air Mineral. All rights reserved.</p>
    </footer>
</body>
</html>
