<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk</title>
    <style>
       /* Reset Margin dan Padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Font dan Background Umum */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

/* Header */
header {
    background-color: #0073e6;
    color: white;
    padding: 20px 0;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 2rem;
    font-weight: 700;
}

/* Navigation */
nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 10px 0;
    margin: 0;
    gap: 15px;
}

nav ul li {
    margin: 0;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 1rem;
    padding: 8px 15px;
    transition: background-color 0.3s ease;
}

nav ul li a:hover {
    background-color: #0056b3;
    border-radius: 4px;
}

/* Main Section */
main {
    padding: 40px 20px;
}

/* Heading */
h1, h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* Tabs Navigation */
.tabs {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
}

.tabs div {
    padding: 12px 20px;
    background-color: #f4f4f4;
    margin-right: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
    cursor: pointer;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.tabs div:hover {
    background-color: #e1e1e1;
}

.tabs div.active {
    background-color: #0073e6;
    color: white;
}

/* Tab Content */
.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
}

/* Search and Form Container */
.search-container, .form-container {
    margin-bottom: 30px;
    text-align: center;
}

.search-container input[type="text"], 
.form-container input[type="text"] {
    padding: 12px;
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
    margin-right: 10px;
}

.search-container button, 
.form-container button {
    padding: 12px 20px;
    border: none;
    background-color: #0073e6;
    color: white;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-container button:hover, 
.form-container button:hover {
    background-color: #0056b3;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
    font-size: 1rem;
}

table th {
    background-color: #f4f4f4;
    color: #0073e6;
    font-weight: bold;
}

table tr:hover {
    background-color: #f1f1f1;
}

/* Footer */
footer {
    background-color: #0073e6;
    color: white;
    text-align: center;
    padding: 15px 0;
    margin-top: 30px;
}

footer p {
    font-size: 1rem;
}

/* Responsiveness */
@media (max-width: 768px) {
    .tabs {
        flex-direction: column;
    }

    .tabs div {
        margin-bottom: 10px;
    }

    .search-container input[type="text"], 
    .form-container input[type="text"] {
        width: 100%;
        margin-bottom: 10px;
    }

    .search-container button, 
    .form-container button {
        width: 100%;
    }

    table th, table td {
        padding: 10px;
    }
}

    </style>
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
    <h1>Manajemen Produk</h1>

    <!-- Tab navigation -->
    <div class="tabs">
        <div class="tab" data-tab="get">GET</div>
        <div class="tab" data-tab="post">POST</div>
        <div class="tab" data-tab="put">PUT</div>
        <div class="tab" data-tab="delete">DELETE</div>
    </div>

    <!-- Form GET -->
    <div class="tab-content" id="get">
        <h2>Cari Produk Berdasarkan ID</h2>
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Cari produk berdasarkan ID..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button type="submit">Cari</button>
        </form>
    </div>

    <!-- Form POST -->
    <div class="tab-content" id="post">
        <h2>Tambah Produk Baru</h2>
        <form method="POST" action="">
            <input type="text" name="product_name" placeholder="Nama Produk" required>
            <input type="text" name="product_Harga" placeholder="Harga Produk" required>
            <button type="submit" name="action" value="create">Tambahkan</button>
        </form>
    </div>

    <!-- Form PUT -->
    <div class="tab-content" id="put">
        <h2>Ubah Data Produk</h2>
        <form method="POST" action="">
            <input type="text" name="id" placeholder="ID Produk" required>
            <input type="text" name="product_name" placeholder="Nama Produk Baru" required>
            <input type="text" name="product_Harga" placeholder="Harga Baru" required>
            <button type="submit" name="action" value="update">Ubah</button>
        </form>
    </div>

    <!-- Form DELETE -->
    <div class="tab-content" id="delete">
        <h2>Hapus Produk</h2>
        <form method="POST" action="">
            <input type="text" name="id" placeholder="ID Produk yang akan dihapus" required>
            <button type="submit" name="action" value="delete">Hapus</button>
        </form>
    </div>

    <!-- Menampilkan data Produk -->
    <div class="search-container">
        <?php
        // Konfigurasi database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tokomineral";

        // Buat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Cek koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Proses POST (create, update, delete)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'];

            // Tambah Produk Baru
            if ($action === 'create') {
                $product_name = $conn->real_escape_string($_POST['product_name']);
                $product_Harga = intval($_POST['product_Harga']);

                $sqlInsert = "INSERT INTO products (product_name, product_Harga) VALUES ('$product_name', $product_Harga)";
                if ($conn->query($sqlInsert) === TRUE) {
                    echo "<p>Produk berhasil ditambahkan.</p>";
                } else {
                    echo "<p>Error: " . $conn->error . "</p>";
                }
            }

            // Ubah Produk
            if ($action === 'update') {
                $id = intval($_POST['id']);
                $product_name = $conn->real_escape_string($_POST['product_name']);
                $product_Harga = intval($_POST['product_Harga']);

                $sqlUpdate = "UPDATE products SET product_name = '$product_name', product_Harga = $product_Harga WHERE id = $id";
                if ($conn->query($sqlUpdate) === TRUE) {
                    echo "<p>Produk berhasil diubah.</p>";
                } else {
                    echo "<p>Error: " . $conn->error . "</p>";
                }
            }

            // Hapus Produk
            if ($action === 'delete') {
                $id = intval($_POST['id']);

                $sqlDelete = "DELETE FROM products WHERE id = $id";
                if ($conn->query($sqlDelete) === TRUE) {
                    echo "<p>Produk berhasil dihapus.</p>";
                } else {
                    echo "<p>Error: " . $conn->error . "</p>";
                }
            }
        }

        // Tangkap parameter GET
        $searchID = isset($_GET['search']) ? intval($_GET['search']) : 0;
        $sql = "SELECT * FROM products";

        if ($searchID > 0) {
            $sql .= " WHERE id = $searchID";
        }

        $result = $conn->query($sql);

        // Tampilkan data produk
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<thead><tr><th>ID</th><th>Nama Produk</th><th>Harga</th><th>Tanggal Kadaluarsa</th></tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['product_name'] . "</td><td>" . $row['product_Harga'] . "</td><td>" . $row['Tanggal_kadaluarsa'] . "</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>Tidak ada data ditemukan.</p>";
        }

        $conn->close();
        ?>
    </div>

    <script>
        // Script untuk tab
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(tc => tc.classList.remove('active'));
                tab.classList.add('active');
                document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
            });
        });

        document.querySelector('.tab').classList.add('active');
        document.getElementById(document.querySelector('.tab').getAttribute('data-tab')).classList.add('active');
    </script>
</body>
</html>
