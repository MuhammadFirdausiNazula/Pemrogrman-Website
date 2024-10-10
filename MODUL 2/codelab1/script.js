function tambah() {
  var angka1 = parseFloat(document.getElementById("angka1").value);
  var angka2 = parseFloat(document.getElementById("angka2").value);

  if (isNaN(angka1) || isNaN(angka2)) {
    document.getElementById("hasil").innerHTML = "Masukkan kedua angka dengan benar!";
  } else {
    var hasil = angka1 + angka2;
    document.getElementById("hasil").innerHTML = "Hasil: " + hasil;
  }
}

function ngulang() {
  document.getElementById("myForm").reset();
  document.getElementById("hasil").innerHTML = "";
}
