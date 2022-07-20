function validasi() {
    var namastr = document.getElementById("nama").value;
    var alamatstr = document.getElementById("alamat").value;
    var telpstr = document.getElementById("telp").value;
    var pelayananstr = document.getElementById("SubCat").value;
    if (namastr != "" && alamatstr !="" && telpstr  !="" && pelayananstr   !="") {
        return true;
    }
    else{
        alert('Anda harus mengisi data orderan dengan lengkap!');
        alert('Inputan anda sebelumnya telah masuk ke sistem.');
    }
} 
