<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Sekolah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">SMA Harapan Bangsa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="beranda" class="bg-light text-center py-5">
    <div class="container">
      <h1 class="display-5">Selamat Datang di SMA Harapan Bangsa</h1>
      <p class="lead">Membentuk generasi unggul, cerdas, dan berakhlak mulia.</p>
      <a href="#tentang" class="btn btn-primary">Pelajari Lebih Lanjut</a>
    </div>
  </section>

  <!-- Tentang -->
  <section id="tentang" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Tentang Sekolah</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="https://via.placeholder.com/500x300" alt="Sekolah" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
          <p>SMA Harapan Bangsa berdiri sejak tahun 1995 dan telah meluluskan ribuan siswa berprestasi. Kami berkomitmen untuk memberikan pendidikan terbaik dengan kurikulum yang inovatif dan lingkungan belajar yang kondusif.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Fasilitas -->
  <section id="fasilitas" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Fasilitas</h2>
      <div class="row text-center">
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Laboratorium</h5>
              <p class="card-text">Laboratorium sains dan komputer yang lengkap dan modern.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Perpustakaan</h5>
              <p class="card-text">Ribuan koleksi buku dan akses e-library.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Lapangan Olahraga</h5>
              <p class="card-text">Lapangan sepak bola, basket, dan fasilitas olahraga lainnya.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kontak -->
  <section id="kontak" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Kontak Kami</h2>
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
        </div>
        <div class="col-md-6">
          <h5>Alamat</h5>
          <p>Jl. Pendidikan No.123, Jakarta</p>
          <p>Email: info@smaharapan.sch.id</p>
          <p>Telepon: (021) 12345678</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-3">
    <p class="mb-0">&copy; 2025 SMA Harapan Bangsa. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
