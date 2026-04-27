<style>
  .gallery-container {
      padding: 50px 40px;
      background: #fffef5;
  }

  .gallery-title {
      text-align: center;
      font-size: 2em;
      color: olive;
      margin-bottom: 30px;
  }

  .gallery-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr); /* 5 kolom sejajar */
      gap: 15px;
  }

  .gallery-item {
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
  }

  .gallery-item img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      display: block;
      transition: transform 0.3s;
  }

  .gallery-item:hover img {
      transform: scale(1.05);
  }

  /* Responsif untuk layar kecil */
  @media (max-width: 992px) {
      .gallery-grid {
          grid-template-columns: repeat(3, 1fr);
      }
  }

  @media (max-width: 600px) {
      .gallery-grid {
          grid-template-columns: repeat(2, 1fr);
      }
  }
</style>

<div class="gallery-container">
  <h2 class="gallery-title">Galeri Kami</h2>
  <div class="gallery-grid">
      <div class="gallery-item"><img src="image/foto1.jpg" alt="Foto 1"></div>
      <div class="gallery-item"><img src="image/foto2.jpg" alt="Foto 2"></div>
      <div class="gallery-item"><img src="image/foto3.jpg" alt="Foto 3"></div>
      <div class="gallery-item"><img src="image/foto4.jpg" alt="Foto 4"></div>
      <div class="gallery-item"><img src="image/foto5.jpg" alt="Foto 5"></div>
      <div class="gallery-item"><img src="image/foto1.jpg" alt="Foto 6"></div>
      <div class="gallery-item"><img src="image/foto2.jpg" alt="Foto 7"></div>
      <div class="gallery-item"><img src="image/foto3.jpg" alt="Foto 8"></div>
      <div class="gallery-item"><img src="image/foto4.jpg" alt="Foto 9"></div>
      <div class="gallery-item"><img src="image/foto5.jpg" alt="Foto 10"></div>
  </div>
</div>
