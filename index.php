<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tugas 4 - Home</title>

     <!-- Sytle CSS -->
     <link rel="stylesheet" href="style.css">
     <!-- Boostrap CSS -->
     <link rel="stylesheet" href="../assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">

</head>
<body>
     
     <div class="container-fluid">

          <!-- Judul -->
          <div class="row p-3" style="background-color: whitesmoke;">
               <header class="col-12 text-center">
                    <h3>Selamat Datang di Pemrograman Web 1</h3>
               </header>
          </div>

          <!-- Navbar -->
          <div class="row">
               <ul class="nav col-10">
                    <li class="nav-item active">
                         <a class="nav-link" aria-current="page" href=""><h5>Home</h5></a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" style ="color:black" href="" onclick="alert('Harap Login Dulu')"><h5>Rencana Belajar</h5></a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" style ="color:black"  href="" onclick="alert('Harap Login Dulu')"><h5>About</h5></a>
                    </li>
                    <li class="nav-item" >
                         <a class="nav-link" style ="color:black"  href="" onclick="alert('Harap Login Dulu')"><h5>Contact</h5></a>
                    </li>
               </ul>
               <div class="col-2 d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="login.php" class="btn btn-primary py-md-2 px-md-4" style="text-align : center"><i class="fa-regular fa-user" aria-hidden="true"></i> Login</a>
               </div>
          </div>

          
          <!-- Content -->
          <div class="row">
               <div class="col-3">
                    <!-- Materi -->
                    <h4>Materi</h4>
                    <ul class="list-group pb-2">
                         <a href="../Pertemuan 1/Pertemuan_1.html" class="btn list-group-item list-group-item-action">
                              Pertemuan 1  - Penegenalan HTML</a>
                         <a href="../Pertemuan 2/index.html" class="btn list-group-item list-group-item-action">
                              Pertemuan 2  - Tag Table</a>
                         <a href="../Pertemuan 3/index.html" class="list-group-item list-group-item-action">
                              Pertemuan 3  - Tag From</a>
                         <a href="../Pertemuan 4/index.html" class="btn list-group-item list-group-item-action">
                              Pertemuan 4  - Tag Audio Video</a>
                         <a href="../Pertemuan 5/index.html" class="btn list-group-item list-group-item-action">
                              Pertemuan 5  - CSS</a>
                         <a href="../Pertemuan 6/index.html" class="btn list-group-item list-group-item-action">
                              Pertemuan 6  - Boostrap</a>
                         <!-- <a href="" class="btn list-group-item list-group-item-action">
                              Pertemuan 7</a> -->
                         <a href="../Pertemuan 8/index.html" class="btn list-group-item list-group-item-action">
                              Pertemuan 8  - JavaScript Dasar</a>
                         <a href="../Pertemuan 9/index.html" class="btn list-group-item list-group-item-action">
                              Pertemuan 9  - JavaScript Fungsi, Percabangan & Perulangan</a>
                         <a href="../Pertemuan 10/index.html" class="btn list-group-item list-group-item-action">
                              Pertemuan 10 - JQuery</a>
                         <a href="" class="btn list-group-item list-group-item-action">
                              Pertemuan 11</a>
                         <a href="../Pertemuan 12/index.php" class="btn list-group-item list-group-item-action">
                              Pertemuan 12</a>
                         <a href="../Pertemuan 13/index.php" class="btn list-group-item list-group-item-action">
                              Pertemuan 13</a>
                         <a href="" class="btn list-group-item list-group-item-action">
                              Pertemuan 14</a>
                    </ul>

                    <!-- Tugas -->
                    <h4>Tugas</h4>
                    <ul class="list-group pb-2">
                         <a href="tugas_1.html" class="btn list-group-item list-group-item-action">
                              Tugas 1</a>
                         <a href="tugas_2.html" class="btn list-group-item list-group-item-action">
                              Tugas 2</a>
                         <a href="tugas_3.html" class="btn list-group-item list-group-item-action ">
                              Tugas 3</a>
                         <a href="index.php" class="btn list-group-item list-group-item-action active">
                              Tugas 4</a>
                    </ul>
               </div>

               <div class="col-9">
                    <h4>Pokok Pembahasan</h4>
                    <ul>
                         <li>Website</li>
                         <li>HTML</li>
                         <li>CSS</li>
                         <li>JavaScript</li>
                         <li>PHP</li>
                    </ul>
               </div>
          </div>

          <!-- Footer -->
          <footer class="row p-2" style="background-color: whitesmoke;">
               <div class="text-center">&copy; Genap 2023/2024</div>
          </footer>

     </div>

</body>
</html>