<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Data Barang</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }

        .container {
            width: 500px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        th {
            background: #ddd;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Input Data Barang</h2>

    <form id="formBarang">
        <input type="text" id="kode" placeholder="Kode Barang" required>
        <input type="text" id="nama" placeholder="Nama Barang" required>
        <input type="number" id="jumlah" placeholder="Jumlah Barang" required>
        <input type="number" id="harga" placeholder="Harga" required>

        <button type="submit">Simpan</button>
    </form>

    <h2>Daftar Barang</h2>

    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody id="tabelBarang">
        </tbody>
    </table>
</div>

<script>
document.getElementById("formBarang").addEventListener("submit", function(e){
    e.preventDefault();

    // Ambil data dari input
    let kode = document.getElementById("kode").value;
    let nama = document.getElementById("nama").value;
    let jumlah = document.getElementById("jumlah").value;
    let harga = document.getElementById("harga").value;

    // Ambil tabel
    let tabel = document.getElementById("tabelBarang");

    // Tambah baris baru
    let row = tabel.insertRow();

    row.insertCell(0).innerText = kode;
    row.insertCell(1).innerText = nama;
    row.insertCell(2).innerText = jumlah;
    row.insertCell(3).innerText = harga;

    // Reset form
    document.getElementById("formBarang").reset();
});
</script>

</body>
</html>
});
</script>

</body>
</html>