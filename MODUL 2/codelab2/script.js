document.getElementById('daftarButton').addEventListener('click', function () {
  var nama = document.getElementById('nama').value.trim();
  var email = document.getElementById('email').value.trim();
  var alamat = document.getElementById('alamat').value.trim();

  if (nama === '' || email === '' || alamat === '') {
    alert('Semua data harus diisi.');
  } else {
    alert('Pendaftaran berhasil!');
  }
});