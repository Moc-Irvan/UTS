<?php 
    session_start();
    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/fontawesome-free-6.6.0-web/css/all.min.css">
    
    <script>
        function myFunction() {
        alert("Alopurinol Rp.16.000,00");
        }
        function myFunctio() {
        alert("Ampisilin Rp.36.000,00");
        }
        function myFuncti() {
        alert("Arthemeter Rp.175.000,00");
        }
        function myFunct() {
        alert("Asam Folat Rp.62.000,00");
        }
        function myFunc() {
        alert("Asam Mefenamat Rp.26.800,00");
        }
        function myFun() {
        alert("Atenolol Rp.34.000,00");
        }
        function myFu() {
        alert(" Asiklovir Rp.68.600,00");
        }
        function myF() {
        alert("Cisapride Rp.178.000,00");
        }
    </script>
</head>
<body style="background-color: rgb(50, 252, 50);">
        <!-- HEADER -->
         
        <header>
            <a>
                <img src="img/istockphoto-1415912642-612x612.jpg" alt="" style="width: 80px; height: 80px; border-radius: 50%; position: relative; left: 50px; top: 10px;">
            </a>
            <nav>
                <a href="#home">Home</a>
                <a href="#profil">Profil</a>
                <a href="#harga">Harga</a>
                <a href="#media">Media Sosial</a>
                <form action="dashboard.php" method="POST" style="margin-left: 105%; margin-top: 10px;"> 
                    <button type="submit" name="logout">logout</button>
                </form>
                <form action="pemesanan.html" method="POST" style="margin-left: 105%; margin-top: 10px;"> 
                    <button type="submit" name="logout">Pesan</button>
                </form>
            </nav>
        </header>
        
        <section id="home">
            <h1 style="position: absolute; top: 50%; left: 30%; font-weight: bold; font-size: 3rem; 
            color: black; background-color: whitesmoke; border-radius:10px;">Welcome to Apotek Medis</h1>
           <img src="img/Daftar-apotek-di-Malang-Raya-4029816763.webp" alt="">  
        </section>

        <section1>

            <!-- PROFIL -->

            <div id="profil">
                <div class="box">
                    <img src="img/images.jpg" alt="" style="margin-bottom: 15px;">
                </div>
                <div class="box2">
                    <h1 style="margin-left: 20rem;">APOTEK MEDIS</h1><br> <hr>
                    <p>Apotik medis adalah sebuah tempat atau fasilitas yang 
                      menyediakan berbagai jenis obat-obatan dan produk kesehatan 
                      lainnya untuk masyarakat. Di apotik medis, Anda dapat membeli 
                      obat-obatan resep maupun obat bebas, suplemen, vitamin, alat 
                      kesehatan, serta produk perawatan pribadi.
                      <br><br>
                      Apotik medis biasanya dikelola oleh seorang apoteker, 
                      yang bertanggung jawab dalam memberikan informasi tentang 
                      penggunaan obat dengan benar, dosis yang tepat, serta potensi 
                      efek samping atau interaksi obat. Selain itu, apotek juga dapat 
                      memberikan layanan seperti pemeriksaan tekanan darah atau konsultasi 
                      kesehatan ringan.</p>
                </div>
            </div>

            <div id="H">

            </div>

            <div id="WHY">

                <div id="P"></div>
                
                <div class="box">
                    <p>Kenapa harus menggunakan Web ApDis ?</p>
                </div>
                <div class="box2">
                    <div class="key" style="width: 65rem; margin-right: 5rem;">
                        <h2>Kenyamanan dan Akses Mudah</h2><br><hr>
                        <p style="text-align: justify;">Anda dapat membeli obat atau produk kesehatan 
                          kapan saja dan di mana saja, tanpa perlu pergi ke apotik fisik dan 
                          Tidak perlu antri atau menunggu lama, karena semua <br>
                          transaksi dilakukan secara online.</p>
                    </div>
                    <div class="key" style="width: 65rem;">
                        <h2>Privasi dan Kerahasiaan</h2><br><hr>
                        <p style="text-align: justify;">Bagi beberapa orang, membeli obat secara online lebih nyaman 
                          karena mereka bisa menjaga privasi tentang kondisi medis atau penyakit tertentu. <br>
                          Proses pembelian yang lebih pribadi dapat mengurangi rasa malu atau 
                          ketidaknyamanan saat membeli obat tertentu di apotek fisik.
                          </p>
                    </div>
                    <div class="key" style="width: 65rem; margin-left: 5rem;">
                        <h2>Layanan 24 Jam</h2><br><hr>
                        <p style="text-align: justify;">Banyak apotik medis online yang beroperasi 24 jam, sehingga Anda 
                          bisa membeli obat kapan saja, bahkan saat malam hari atau hari libur.</p>
                    </div>
                </div>
                <div class="box2">
                  <div class="key" style="width: 65rem; margin-right: 5rem">
                      <h2>Keamanan dan Keaslian Produk</h2><br><hr>
                      <p style="text-align: justify;">Web apotik medis yang terpercaya biasanya bekerja sama dengan apotek resmi 
                        dan memiliki izin yang sah, sehingga Anda bisa lebih yakin dengan kualitas <br>
                        dan keaslian produk yang Anda beli. Anda juga bisa mengecek ulasan dan rating 
                        dari pengguna lain mengenai apotik online tersebut.
                        </p>
                  </div>
                  <div class="key" style="width: 65rem;">
                      <h2>Peringatan dan Pengingat Obat</h2><br><hr>
                      <p style="text-align: justify;">Beberapa apotik online menyediakan layanan pengingat obat atau peringatan 
                        untuk mengkonsumsi obat pada waktu yang tepat, serta informasi terkait dosis  <br>
                        dan efek samping.
                      </p>
                  </div>
                  <div class="key" style="width: 65rem; margin-left: 5rem;">
                      <h2>Kemudahan Pembayaran</h2><br><hr>
                      <p style="text-align: justify;">Anda dapat melakukan pembayaran melalui berbagai metode seperti transfer <br>
                        bank, kartu kredit, dompet digital, atau bahkan COD (bayar di tempat). 
                        Pembayaran online juga sering kali lebih cepat dan praktis.
                        </p>
                  </div>
              </div>
                
            </div>
        </section1>

        <content>
          <div id="harga">
            <h1 style="text-align: center; ">Obat-obatan</h1>

            <div class="row">
                <div class="card">
                    <img style="border-radius: 10px; padding: 21px; margin-left:1rem; width: 15.3rem; height: 10rem;" src="img/Amiloride.jpg" alt="">
                    <h1 style="text-align: center;">Alopurinol</h1>
                    <h2 style="text-align: center;">tablet 100 mg</h2>
                    <h2 style="text-align: center;">Rp.16.000,00</h2>
                    <a href="">
                        <button class="button" type="submit" style="margin-top: 2rem;"  onclick="myFunction()">BUY</button>
                    </a>
                </div>
                <div class="card">
                    <img style="border-radius: 10px; padding: 21px; margin-left:1rem; width: 15.3rem; height: 10rem;" src="img/Ampicilin.jpg" alt="">
                    <h1 style="text-align: center;">Ampisilin</h1>
                    <h2 style="text-align: center;">kaplet 250 mg</h2>
                    <h2 style="text-align: center;">Rp.36.000,00</h2>
                    <a href="">
                        <button class="button" type="submit" style="margin-top: 2rem;" onclick="myFunctio()">BUY</button>
                    </a>
                </div>
                <div class="card">
                    <img style="border-radius: 10px; padding: 21px; margin-left:1rem; width: 15.3rem; height: 10rem;" src="img/Artemether.webp" alt="">
                    <h1 style="text-align: center;">Arthemeter</h1>
                    <h2 style="text-align: center;">Injeksi 80 mg/ml</h2>
                    <h2 style="text-align: center;">Rp.175.000,00</h2>
                    <a href="">
                        <button class="button" type="submit" style="margin-top: 2rem;" onclick="myFuncti()">BUY</button>
                    </a>
                </div>
                <div class="card">
                    <img style="border-radius: 10px; padding: 21px; margin-left:1rem; width: 15.3rem; height: 10rem;" src="img/Asam Folat.jpeg" alt="">
                    <h1 style="text-align: center;">Asam Folat</h1>
                    <h2 style="text-align: center;">tablet 5 mg</h2>
                    <h2 style="text-align: center;">Rp.62.000,00</h2>
                    <a href="">
                        <button class="button" type="submit" style="margin-top: 2rem;" onclick="myFunct()">BUY</button>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="card">
                    <img style="border-radius: 10px; padding: 21px; margin-left:1rem; width: 15.3rem; height: 10rem;" src="img/Asam Mefenamat kaplet 500 mg.jpg" alt="">
                    <h1 style="text-align: center;">Asam Mefenamat</h1>
                    <h2 style="text-align: center;">kaplet 500 mg</h2>
                    <h2 style="text-align: center;">Rp.26.800,00</h2>
                    <a href="">
                        <button class="button" type="submit" style="margin-top: 2rem;" onclick="myFunc()">BUY</button>
                    </a>
                </div>
                <div class="card">
                    <img style="border-radius: 10px; padding: 21px; margin-left:1rem; width: 15.3rem; height: 10rem;" src="img/Atenolol.jpg" alt="">
                    <h1 style="text-align: center;">Atenolol</h1>
                    <h2 style="text-align: center;">tablet 100 mg</h2>
                    <h2 style="text-align: center;">Rp.34.000,00</h2>
                    <a href="">
                        <button class="button" type="submit" style="margin-top: 2rem;" onclick="myFun()">BUY</button>
                    </a>
                </div>
                <div class="card">
                    <img style="border-radius: 10px; padding: 21px; margin-left:1rem; width: 15.3rem; height: 10rem;" src="img/Asiklovir tablet.jpg" alt="">
                    <h1 style="text-align: center;">Asiklovir</h1>
                    <h2 style="text-align: center;">tablet 400 mg</h2>
                    <h2 style="text-align: center;">Rp.68.600,00</h2>
                    <a href="">
                        <button class="button" type="submit" style="margin-top: 2rem;" onclick="myFu()">BUY</button>
                    </a>
                </div>
                <div class="card">
                    <img style="border-radius: 10px; padding: 21px; margin-left:1rem; width: 15.3rem; height: 10rem;" src="img/Cisapride.jpg" alt="">
                    <h1 style="text-align: center;">Cisapride</h1>
                    <h2 style="text-align: center;">tablet 10 mg</h2>
                    <h2 style="text-align: center;">Rp.178.000,00</h2>
                    <a href="">
                        <button class="button" type="submit" style="margin-top: 2rem;" onclick="myF()">BUY</button>
                    </a>
                </div>
            </div>
        </div>
       </content>

       <section2 id="media">
        <div style="background: white; border-radius: 10px;">
        <h1 style="padding-top: 1rem;  text-align: center">PROFIL PENGEMBANG</h1>
            
            <div class="cv" style="width:100%; height:auto; padding-top: 1rem;">
                <div class="cv1" style="display: flex;  justify-content: space-around;">
                    <img src="img/MIW.jpg" style="width: 200px; height: 310px; border-radius: 10%; padding: 5px; margin-left: 2rem;" alt="">
                    <div class="isi" style="height: auto; margin: 10px;">
                        <h2 style="margin-top: 15px;">Nama     : Mochammad Irvan Wijaya</h2>
                        <h2 style="margin-top: 15px;">Alamat   : Jl.Haji Aman Rt/Rw 04/02 Cilodong Depok</h2>
                        <h2 style="margin-top: 15px;">Email    : <a href="mailto:mirvanwijaya14@gmail.com">mirvanwijaya14@gmail.com</a></h2>
                        <h2 style="margin-top: 15px;">Nomor Hp :<a href="#">081289883751</a></h2>
                        <h2 style="margin-top: 15px;">Kampus   : STT Terpadu Nurul Fikri</h2>
                    </div>
                    <div class="med">
                    <p><a href="https://www.instagram.com/mochirwi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style="font-size: 50px; text-decoration: none; color: black;" class="fa-brands fa-instagram"></a></p>
                    <br>
                    <p><a href="" style="font-size: 50px; text-decoration: none; color: black;" class="fab fa-telegram"></a></p>
                    <br>
                    <p><a href="https://www.facebook.com/profile.php?id=100092331648564"  style="font-size: 50px; text-decoration: none; color: black;" class="fab fa-facebook"></a></p>
                    </div>
                </div>
                
            </div>

            <footer style="background-color: black; height: 100px;">
                <div class="text" style="text-align: center; color: white; padding-top: 3rem; font-size: 1.5rem;"> create by <i>Mochammad Irvan Wijaya</i> | all rights reserved</div>
            </footer>

        </div>
       </section2>
</body>
</html>