<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
</head>
<body>

<h1>Tambah Peminjaman Baru</h1>

<form action="{{ route('peminjaman.store') }}" method="POST">
    @csrf
    <label for="nama_peminjam">Nama Peminjam:</label>
    <input type="text" id="nama_peminjam" name="nama_peminjam" required><br><br>

    <label for="alamat_peminjam">Alamat Peminjam:</label>
    <input type="text" id="alamat_peminjam" name="alamat_peminjam" required><br><br>

    <label for="no_hp">No HP:</label>
    <input type="text" id="no_hp" name="no_hp" required><br><br>

    <label for="tgl_minjam">Tanggal Pinjam:</label>
    <input type="date" id="tgl_minjam" name="tgl_minjam" required><br><br>

    <label for="tgl_kembali">Tanggal Kembali:</label>
    <input type="date" id="tgl_kembali" name="tgl_kembali" required><br><br>

    <label for="status">Status:</label>
    <select id="status" name="status" required>
        <option value="Dipinjam">Dipinjam</option>
        <option value="Kembali">Kembali</option>
    </select><br><br>

    <button type="submit">Simpan Peminjaman</button>
</form>

</body>
</html>