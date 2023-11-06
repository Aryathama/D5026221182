<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aryathama's Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/"/>
    <link href="navbar.css" rel="stylesheet" />
    <script>
      function validate() {
      var num = document.getElementById("number");

      if (isNaN(num.value)) {
        alert("Nomor telepon harus angka");
        return false;
      }
      else {
      return true;
      }
    }
    </script>
  </head>

  <body>
    <main>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarsExample08"
            aria-controls="navbarsExample08"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#experience">Experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#">Dropdown</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>

      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://img.freepik.com/premium-photo/abstract-background-colorful-arcs-vibrant-energetic-illustration-perfect-adding-pop-color_442940-2074.jpg?w=1060" style="width: 100%; height: 400px; object-fit: cover; filter: brightness(20%)">

            <div class="container">
              <div class="carousel-caption" style="bottom: 120px;">
                <h1 class="display-1 fw-bold">Hi! Saya Radit!</h1>
                <p>Saya adalah mahasiswa sistem informasi ITS yang sedang mendalami UI/UX. Saya juga tertarik dengan bidang pemrograman dan pengolahan data serta desain.</p>
                <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.wallpaperscraft.com/image/single/circles_colorful_rainbow_137437_3840x2400.jpg" style="width: 100%; height: 400px; object-fit: cover; filter:brightness(20%)">

            <div class="container">
              <div class="carousel-caption text-start" style="bottom: 110px;">
                <h1>Projects!</h1>
                <p>Ini adalah beberapa proyek-proyek desain kecil-kecilan yang sudah pernah saya selesaikan.</p>
                <p><a class="btn btn-lg btn-light" href="https://instagram.com/radityaagung__?igshid=YTQwZjQ0NmI0OA==" target="_blank">Discover more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://img.freepik.com/premium-photo/abstract-background-colorful-arcs-vibrant-energetic-illustration-perfect-adding-pop-color_442940-2079.jpg?w=1060" style="width: 100%; height: 400px; object-fit: cover; filter:brightness(20%)">

            <div class="container">
              <div class="carousel-caption text-start" style="bottom: 110px;">
                <h1>Get in Touch?</h1>
                <p>Ingin menyapa? Saling connect? Klik tombol di bawah ini! Saya juga ingin mengenal anda lebih jauh!</p>
                <p><a class="btn btn-lg btn-light" href="#contact">Contact me</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>

      <section id="about">
        <div class="container-fluid mt-5 mb-5">
          <h1 class="text-center fw-bold">ABOUT</h1>
          <img src="profile.jpeg" class="mx-auto d-block mt-5" style="object-fit: cover; width:20%; height:240px; border-radius: 50%;">
          <h2 class="text-center mt-4">Aryathama Raditya Agung</h2>
          <p class="text-center text-secondary mt-3 fw-bold">5026221182</p>
          <p style="margin-left: 400px; margin-right: 400px; text-align: center;" class="text-secondary">
            Saya adalah mahasiswa sistem informasi di Institut Teknologi Sepuluh Nopember (ITS) yang sedang dengan
            antusias mendalami bidang User Interface (UI) dan User Experience (UX) design. Selain itu, saya juga
            memiliki minat yang kuat dalam pemrograman dan pengolahan data, serta senang menggabungkan elemen desain
            dalam proyek-proyek saya.</p>
        </div>
      </section>

      <section id="experience">
        <div class="container-fluid pt-5 pb-5 bg-warning">
          <h1 class="text-center fw-bold">EXPERIENCE</h1>
          <div class="row mt-5 ms-5 me-5">
            <div class="col-9">
              <h4 class="fw-bold">Ketua OSIS</h4>
              <h6 class="">Organisasi Siswa Intra Sekolah SMA Islam Bunga Bangsa Samarinda</h6>
              <p class="">Mengajukan program "Tiga Mekanisme Perbaikan" yang bertujuan untuk mengadaptasi program-program
                dalam era new normal, mengganti program-program sebelumnya dengan program yang sesuai dengan kondisi, dan
                menghapus program-program kerja untuk simplifikasi dan meningkatkan efisiensi kerja OSIS dalam era new normal.</p>
            </div>
            <div class="col-3">
              <p class="fw-bold" style="text-align: right;">Januari 2020 - 2021</p>
            </div>
          </div>

          <div class="row mt-5 ms-5 me-5">
            <div class="col-9">
              <h4 class="fw-bold">Divisi Acara</h4>
              <h6 class="">Lembaga Kerohanian dan Kajian Islam Sistem Informasi</h6>
              <p class="">Terlibat aktif dalam acara berbuka puasa bersama Sistem Informasi.
                Karena organisasi masih baru berkembang, saya terlibat aktif juga dalam penentuan visi dan misi,
                program kerja, serta sistem kerja yang berlandaskan efektivitas dan efisiensi.</p>
            </div>
            <div class="col-3">
              <p class="fw-bold" style="text-align: right;">Oktober 2022 - Sekarang</p>
            </div>
          </div>

          <div class="row mt-5 ms-5 me-5">
            <div class="col-9">
              <h4 class="fw-bold">Staf Divisi Kompetisi BIONIX</h4>
              <h6 class="">Information Systems Expo 2023</h6>
              <p class="">Terlibat dalam penyusunan soal untuk try out, babak penyisihan,
                dan babak final serta menyusun guidebook untuk keperluan babak penyisihan.
              </p>
            </div>
            <div class="col-3">
              <p class="fw-bold" style="text-align: right;">April 2023 - Sekarang</p>
            </div>
          </div>

          <div class="row mt-5 ms-5 me-5">
            <div class="col-9">
              <h4 class="fw-bold">Pengajar</h4>
              <h6 class="">SIMETRI 2023 - HMSI</h6>
              <p class="">Melakukan pengajaran kepada siswa SMA dan sederajat dalam mempelajari dasar-dasar
                dalam membuat website. Melakukan pemanduan secara langsung dalam sesi pengerjaan agar dapat
                lebih memahamkan konsep dasar kepada siswa.
              </p>
            </div>
            <div class="col-3">
              <p class="fw-bold" style="text-align: right;">September 2023 - Sekarang</p>
            </div>
          </div>
        </div>
      </section>

      <section id="projects">
        <div class="container-fluid pt-5 pb-5">
          <h1 class="text-center fw-bold">PROJECTS</h1>
          <div class="row">
            <div class="col-4">
              <img src="projects/1.jpg" style="width:100%">
            </div>
            <div class="col-4">
              <img src="projects/2.jpg" style="width:100%">
            </div>
            <div class="col-4">
              <img src="projects/3.jpg" style="width:100%">
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <img src="projects/4.jpg" style="width:100%">
            </div>
            <div class="col-4">
              <img src="projects/5.jpg" style="width:100%">
            </div>
            <div class="col-4">
              <img src="projects/6.jpg" style="width:100%">
            </div>
          </div>
          <img src="projects/8.png" style="width: 100%;">
          <img src="projects/9.png" style="width: 100%;">
          <img src="projects/12.png" style="width: 100%;">
          <img src="projects/13.png" style="width: 100%;">
          <img src="projects/14.png" style="width: 100%;">
        </div>
      </section>

      <section id="contact">
        <div class="ps-5 pe-5 pt-5 pb-5 bg-dark">
          <h1 class="text-center fw-bold text-light">CONTACT</h1>
          <form action="/action_page.php" method="get" onsubmit="return validate()">
            <div class="mb-3 mt-3">
              <label for="name" class="form-label text-light">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label text-light" id="email-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
              <label for="number" class="form-label text-light">Phone Number:</label>
              <input type="text" class="form-control" id="number" placeholder="Enter phone number" name="number">
            </div>
            <div class="mb-3">
              <label for="comment" class="text-light mb-2">Write your message:</label>
              <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-light">Submit</button>
          </form>
        </div>
      </section>

    </main>
  </body>
</html>
