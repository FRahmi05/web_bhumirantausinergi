<style>
  .sidebar {
      width: 25%;
      padding: 20px;
      background: linear-gradient(to bottom, #fff8dc, #fce46d); /* gradasi putih ke kuning muda */
      border-right: 1px solid #f3e5ab;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .side-nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
  }

  .side-nav ul li {
      margin-bottom: 15px;
  }

  .side-nav a {
      display: block;
      background-color: #fff;
      color: #333;
      padding: 12px 15px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      position: relative;
  }

  .side-nav a::before {
      content: "➤"; /* ikon panah */
      margin-right: 10px;
      color: goldenrod;
  }

  .side-nav a:hover {
      background-color: #f9e79f;
      color: black;
      transform: translateX(5px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
</style>

<aside class="sidebar">
  <nav class="side-nav">
      <ul>
          <li><a href="dasboard.php?page=home">Home</a></li>
          <li><a href="dasboard.php?page=profile">Profile</a></li>
          <li><a href="dasboard.php?page=visimisi">Visi dan Misi</a></li>
          <li><a href="dasboard.php?page=produk">Produk Kami</a></li>
          <li><a href="dasboard.php?page=kontak">Kontak</a></li>
          <li><a href="dasboard.php?page=about">About Us</a></li>
          <li><a href="dasboard.php?page=galeri">Galeri</a></li>
          <li><a href="dasboard.php?page=logout">Logout</a></li>
      </ul>
  </nav>
</aside>
