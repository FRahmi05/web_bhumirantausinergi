<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bhumi Rantau Energi</title>
    <link rel="icon" href="image/Logo.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f1ca2dff, #ffffff); /* Gradasi kuning ke putih */
            color: #ffffff; /* Warna font utama hitam */
        }

        .container {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ffe680;
            padding: 20px 40px;
            text-align: left;
            border-bottom: 2px solid #f3e5ab;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
        }

        .logo h1 {
            margin: 0 0 0 15px;
            font-size: 2em;
            color: olive;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .topnav {
            background-color: #ffd633;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 10px 0;
            border-bottom: 1px solid #e0dcbf;
        }

        .content {
            display: flex;
            flex-direction: row;
            padding: 20px 40px;
        }

        .sidebar {
            width: 25%;
            padding-right: 30px;
            border-right: 1px solid #f3e5ab;
            font-size: 0.95em;
            color: #000;
        }

        .sidebar h3 {
            margin-top: 20px;
            font-size: 1em;
            color: goldenrod;
        }

        .sidebar ul {
            list-style: disc;
            padding-left: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: goldenrod;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .main-content {
            width: 75%;
            padding-left: 30px;
            color: #000;
        }

        .main-content h2,
        .main-content h3 {
            color: olive;
        }

        footer {
            text-align: right;
            font-size: 0.8em;
            color: #000;
            padding: 15px 40px;
            border-top: 1px solid #f3e5ab;
            background-color: #ffe680;
        }

        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }

            .sidebar,
            .main-content {
                width: 100%;
                padding: 0;
                border: none;
            }

            .main-content {
                margin-top: 20px;
            }

            header, .content, footer {
                padding: 20px;
            }

          
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <div class="logo">
                <img src="image/logo_bre_light.png" alt="Logo Perusahaan" />
                <h1>Bhumi Rantau Energi</h1>
            </div>
        </header>


        <!-- Konten -->
        <div class="content">
            <!-- Sidebar -->
            <?php include 'sidebar.php'; ?>

            <!-- Konten Utama -->
            <main class="main-content">
                <?php
                $file = "pages/$page.php";
                if (file_exists($file)) {
                    include $file;
                } else {
                    echo "<p>Halaman tidak ditemukan.</p>";
                }
                ?>
            </main>
        </div>

        <!-- Footer -->
        <footer>
            Design by: Faridah Rahmi
        </footer>
    </div>
</body>
</html>
