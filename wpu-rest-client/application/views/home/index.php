<style>
  .jumbotron {
    background: linear-gradient(135deg, #f8fafc 0%,rgb(252, 195, 243) 100%);
    padding-top: 4rem;
    padding-bottom: 4rem;
    margin-bottom: 0;
  }
  .portfolio .card {
    transition: transform 0.2s, box-shadow 0.2s;
  }
  .portfolio .card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 8px 24px rgba(160, 100, 255, 0.15);
  }
  .contact .card {
    border-radius: 1rem;
  }
  .fade-in {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s forwards;
  }
  @keyframes fadeInUp {
    to {
      opacity: 1;
      transform: none;
    }
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<div class="jumbotron text-center" id="home">
  <div class="container fade-in">
    <img src="<?= base_url(); ?>assets/img/profile1.jpg" class="rounded-circle img-thumbnail mb-3 shadow" alt="Profile Image" style="width: 200px; height: 200px; object-fit: cover;">
    <h1 class="display-4 fw-bold">Dikka Hardilla</h1>
    <h3 class="lead mb-0">College Student <span class="text-primary">|</span> Programmer <span class="text-primary">|</span> Gamer</h3>
  </div>
</div>

<!-- Portfolio -->
<section class="portfolio py-5" id="portfolio">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center fade-in" style="animation-delay:0.2s">
        <h2 class="fw-bold">About Me</h2>
        <hr class="w-25 mx-auto mb-4" style="border-top:2px solid #a064ff;">
      </div>
    </div>
    <div class="row">
      <?php
      $about = [
        ["1.jpg", "Lahir di Kota Padang tanggal 21 Juni 2004."],
        ["2.jpg", "Sekolah Dasar di SDN 13 Ulakan Tapakis dan Sekolah Menengah Pertama di MTSn 02 Padang Pariaman."],
        ["3.jpg", "Sekolah Menengah Atas di MAN 1 Padang Pariaman dengan Jurusan MIPA dan Lulus di Tahun 2022."],
        ["4.jpg", "Kuliah di Universitas Islam Negeri Imam Bonjol Padang pada angkatan 2022."],
        ["5.jpg", "Fakultas Sains dan Teknologi dengan Program Studi Sistem Informasi."],
        ["6.jpg", "Hobi saya Traveling, mendengarkan Musik dan bermain Game. Warna Kesukaan Saya Pink"]
      ];
      foreach ($about as $i => $item): ?>
        <?php if ($i % 3 == 0): ?><div class="row mb-4"><?php endif; ?>
        <div class="col-md fade-in" style="animation-delay:<?= 0.3 + $i*0.1 ?>s">
          <div class="card shadow-sm">
            <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/<?= $item[0] ?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><?= $item[1] ?></p>
            </div>
          </div>
        </div>
        <?php if ($i % 3 == 2 || $i == count($about)-1): ?></div><?php endif; ?>
      <?php endforeach; ?>
  </div>
</section>

<!-- Contact -->
<section class="contact bg-light py-5" id="contact">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center fade-in" style="animation-delay:0.2s">
        <h2 class="fw-bold">Contact</h2>
        <hr class="w-25 mx-auto mb-4" style="border-top:2px solid #a064ff;">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 fade-in" style="animation-delay:0.3s">
        <div class="card bg-primary text-white mb-4 text-center shadow">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-envelope"></i> Contact Me</h5>
            <p class="card-text">Feel free to reach out for collaboration or just a friendly hello!</p>
          </div>
        </div>
        <ul class="list-group mb-4 shadow-sm">
          <li class="list-group-item"><h5><i class="fas fa-map-marker-alt text-primary"></i> Location</h5></li>
          <li class="list-group-item">My Home</li>
          <li class="list-group-item">Ulakan Tapakis Kab.Padang Pariaman</li>
          <li class="list-group-item">West Sumatera, Indonesia</li>
        </ul>
      </div>
      <div class="col-lg-6 fade-in" style="animation-delay:0.4s">
        <form>
          <div class="form-group mb-3">
            <label for="nama"><i class="fas fa-user"></i> Nama</label>
            <input type="text" class="form-control rounded-pill" id="nama" placeholder="Your Name">
          </div>
          <div class="form-group mb-3">
            <label for="email"><i class="fas fa-envelope"></i> Email</label>
            <input type="email" class="form-control rounded-pill" id="email" placeholder="you@example.com">
          </div>
          <div class="form-group mb-3">
            <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
            <input type="text" class="form-control rounded-pill" id="phone" placeholder="08xxxxxxxxxx">
          </div>
          <div class="form-group mb-3">
            <label for="message"><i class="fas fa-comment"></i> Message</label>
            <textarea class="form-control rounded" id="message" rows="3" placeholder="Type your message..."></textarea>
          </div>
          <div class="form-group text-end">
            <button type="button" class="btn btn-primary btn-lg rounded-pill px-4 shadow"><i class="fas fa-paper-plane"></i> Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
