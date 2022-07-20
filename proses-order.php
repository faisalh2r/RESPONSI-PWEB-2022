<!DOCTYPE html>
<html>
<head>
    <title>Tentang Kami</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="gambar/logo laundry.png" alt="" height="60" width="60">
              Laundry Putih Bersih 
            </div>
        </header>
        <nav>
             <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="pesan.html">Pesan</a></li>
                <li><a href="list-harga.html">List Harga</a></li>
                <li><a href="tentang-toko.html">Tentang Kami</a></li>
             </ul>
         </nav>
       <article>
                <div class="isi">
                    <div class="judul">
                        <center>Pesanan Berhasil</center>
                        <hr>
                    </div>
                    <p>
                        <?php
                            echo "<head><title>My Guest Book></title></head>";
                            $fp = fopen("Struk-Laundry.txt","a+"); // fopen untuk membuka file, a+ buat membaca atau menulis isi file  
                            $tanggal=date("Y-m-d"); // membuat var tanggal dengan format Tahun-bulan-tanggal                     
                            $nama=$_POST['nama'];   // $_POST buat memanggil data yang di inputkan        
                            $alamat=$_POST['alamat'];  
                            $telp=$_POST['telp'];         
                            $pelayanan=$_POST['SubCat'];
                            $keterangan=$_POST['keterangan'];
                            fputs($fp,"$tanggal|$nama|$alamat|$telp|$pelayanan|$keterangan\n");  // fputs menulis ke file terbuka
                            fclose($fp);                                            // fclose untuk menutup file yang terbuka

                            echo "Orderan anda sudah masuk ke sistem<br>";
                            echo "Terima Kasih Atas Pesanan Anda<br>";    // <br> untuk baris baru
                            echo "jika anda ingin order lagi <a href=order-link.html >klik disini</a> <br>";  // echo untuk output
                        ?>
                    </p>
                </div>
         </article>
         <div class="kontak">
                <div class="isi-kontak">
                    <center><h4>Hubungi Kami</h4></center>
                <p><img src="gambar/telpon.png" alt="">
                    <a href="whatsapp://send?text=Hello&phone=+6287708984366">0877-0898-4366</a>
                    <a href="https://www.instagram.com/faisalhbibie_/"> - Instagram</a>
                    <a href="tentang-toko.html"><center><h4>Tentang Kami</h4></center></a>
                    <center>Jasa Laundry Kami telah berpengalaman dari tahun 2018.
                        Pekerja kami telah lulus training dalam bekerja di laundry.</center>
                 </p>   
            </div>
        </div>
       <footer>
        Copyright © 2022  <a href="https://laundryputihbersihresponsi.000webhostapp.com/">Laundry Putih Bersih</a> 
            · Website By Faisal Habibie
       </footer>    
    </div>


</body>
</html>