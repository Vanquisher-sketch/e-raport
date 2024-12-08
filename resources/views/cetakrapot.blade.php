<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Laporan Hasil Belajar Siswa</h2>
        <h3>MTs Rekayasa</h3>
        <p>NPSN: 69354090 | NSS: 12345678</p>
        <p>Alamat: Jl. Raya Indonesia, Banjar | Kode Pos: 46385</p>
    </div>

    <div class="section">
        <h3>Identitas Siswa</h3>
        <p>Nama: Elfan Saputra</p>
        <p>NISN/NIS: 3035423424 / 024342412</p>
        <p>Tempat, Tanggal Lahir: Ciamis, 5 Januari 2005</p>
        <p>Jenis Kelamin: Laki-Laki</p>
    </div>

    <div class="section">
        <h3>Nilai Pembelajaran</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>KKM</th>
                    <th>Nilai Akhir</th>
                    <th>Predikat</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Al-Quran Hadist</td>
                    <td>70</td>
                    <td>89</td>
                    <td>B</td>
                    <td>Memiliki kemampuan yang baik dalam menganalisis tajwid dan sangat terampil dalam menjelaskan hadist</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Akidah Akhlak</td>
                    <td>70</td>
                    <td>92</td>
                    <td>A</td>
                    <td>Memiliki kemampuan yang sangat baik dalam akidah akhlak dan terampil dalam menyikapi hari akhir</td>
                </tr>
                <!-- Tambahkan mata pelajaran lainnya di sini -->
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>Mengetahui,</p>
        <p>Kepala Sekolah</p>
        <p><strong>Deni Ramdani, M.M</strong></p>
    </div>
</body>
</html>
