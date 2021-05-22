<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Ahmad Atsnal Fikri 1461900129</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            <a class="nav-link" href="/Artikel">Artikel</a>
            <a class="nav-link" href="/Contact Us">Contact Us</a>
        </div>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-10">
            <h2 class="mt-2">Pengertian MVC</h2>
            <p class="left">Model View Controller ­– MVC adalah sebuah pola pemrograman 
            yang bertujuan memisahkan logika bisnis, logika data dan logika tampilan (interface), 
            atau metode untuk membuat sebuah aplikasi dengan memisahkan data (model) dari tampilan (view) 
            dan cara bagaimana memprosesnya (controller). Dalam implementasinya kebanyakan framework dalam 
            aplikasi websiteadalah berbasis arsitektur MVC. MVC memisahkan pengembang aplikasi berdasarkan 
            komponen utama yang membangun sebuah aplikasi seperti manipulasi data, antarmuka pengguna dan 
            bagian yang menjadi control dalam sebuah aplikasi website.<p>
            <h2 class="mt-2">Bagian MVC</h2>
            <ul type="circle">
            <li>Model adalah komponen MVC yang bertugas mengambil data dari database dan juga memasukkan 
            data ke database. Isi utamanya berupa perintah SQL. Hasilnya dikirim ke controller</li>
            <li>View adalah komponen dari MVC yang bertugas menampilkan apa yang harus 
            ditampilkan ke pengunjung website. Isinya dapat berupa form, table, gambar, animasi ataupun 
            lainya yang boleh dilihat oleh pengunjung. Jadi view mengatur bagaimana data yang diperoleh 
            dari controller di tampilkan pada user.</li>
            <li>Control adalah komponen MVC yang bertugas untuk mengirim perintah ke model untuk mendapatkan
            data yang diinginkan. Controller tidak mengetahui bagaimana data diambil dari database, karena 
            controller tidak berisi kode perintah SQL. Karena itu adalah tugas model. Controller mengolah 
            data dari inputan user dan data dari model kemudian data olahan tersebut dikirim ke view untuk 
            ditampilkan sesuai dengan aturan controller. Controller menghubungkan antara model dengan
            view dan mengatur hubungan tersebut. Begitulah seterusnya.</li>
            </ul>
            <h2 class="mt-2">Jenis MVC pada website</h2>
            <ul type="circle">
            <li>Server Side MVC</li>
            <li>Mixed Client Side and Server Side MVC</li>
            <li>Rich Internet Application MVC</li>
            </ul>
            <h2 class="mt-2">Manfaat Menggunakan MVC</h2>
            <ul type="circle">
            <li>Kemudahan dalam pengembangan (meningkatkan skalibilitas program), karena pemisahan komponen,
             sehingga apabila terdapat perubahan terhadap salah satu komponen, 
             tidak mempengaruhi komponen yang lain.</li>
            <li>Kemudahan dalam perawatan (maintenance), apabila terjadi perbaikan terhadap salah satu komponen,
             maka tidak berpengaruh langsung terhadap yang lain.</li>
            <li>Bisa digunakan berulang-ulang (reuse), misalnya sebuah model bisa digunakan oleh lebih dari 
            satu macam view, contohnya aplikasi yang diakses melalui desktop browser dan mobile browser.</li>
            </ul>
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>