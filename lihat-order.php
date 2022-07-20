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
                        <center>Tabel Orderan yang Sudah Masuk   </center>
                        <hr>
                    </div>
                    <p>
                    <?php
                        echo "<head><title>My Guest Book</title></head>";
                        $fp = fopen("Struk-Laundry.txt","r");   // r mode untuk membaca isi file saja
                        echo "<center><a href='order-link.html'>Klik disini untuk kembali ke form orderan</a></center>";
                        echo "<hr>";    // untuk garis baru  
                        echo "<table border=1>";  // border tabel1
                        echo "<tr>              
                        <td>Tanggal </td>
                        <td>Nama </td>
                        <td>Alamat </td>
                        <td>No.Telp </td>
                        <td>Jenis layanan dan Harga</td>
                        <td>Keterangan </td>
                        </tr>";
                        while ($isi = fgets($fp,200))        // fgets mengambil baris-baris dari suatu file
                        {
                            $pisah = explode("|",$isi);   // explode berfungsi untuk pemisah string, jadi string yang di pisah akan menjadi sebuah array
                            echo "<tr>
                            <td>$pisah[0]</td>
                            <td>$pisah[1]</td>
                            <td>$pisah[2]</td>
                            <td>$pisah[3]</td>
                            <td>$pisah[4]</td>
                            <td>$pisah[5]</td>
                        </tr>";
                         } 
                        echo "</table>";
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
                        Pekerja kami telah lulus training dalam bekerja di laundry. </center>
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

