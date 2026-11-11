<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak3_tabel</title>
</head>
<body>
    <a href="<?= site_url('portofolio') ?>">
    <button>Kembali</button>
    </a> <br>
    <br>
<h3>Daftar barang</h3>
<table border="1">
    <caption>Tabel Harga Produk</caption>
    <tr>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Gambar</th>
    </tr>
    <tr>
        <td>P001</td>
        <td>Kipas angin</td>
        <td>4.000.000</td>
        <td><img src="image/kipasangin.jpg" width="70" height="70"></td>
    </tr>
    <tr>
        <td>P002</td>
        <td>Lemari Es</td>
        <td>1.700.000</td>
        <td><img src="image/lemari_es.jpg" width="70" height="70"></td>
    </tr>
    <tr>
        <td>P003</td>
        <td>Mesin Cuci</td>
        <td>2.000.000</td>
        <td><img src="image/mesincuci.jpg" width="70" height="70"></td>
    </tr>

</table>
<table border="" >
    <tr>
        <td>A</td>
        <td colspan="2">B</td>
    </tr>
    <tr>
        <td rowspan="2">C</td>
        <td>D</td>
        <td>E</td>
    </tr>
    <tr>
        <td>F</td>
        <td>G</td>
    </tr>
</table>
<table border="">
    <tr>
        <td>A</td>
        <td>B</td>
        <td rowspan="3">C</td>
    </tr>
    <tr>
        <td>D</td>
        <td>E</td>
    </tr>
    <tr>
        <td>F</td>
        <td>G</td>
    </tr>
</table>
<table border="">
    <tr>
        <td>A</td>
        <td>B</td>
        <td>C</td>
    </tr>
    <tr>
        <td colspan="3">D</td>
    </tr>
    <tr>
        <td>E</td>
        <td>F</td>
        <td>G</td>
    </tr>
</table>
<table border="">
    <tr>
        <td>A</td>
        <td>B</td>
        <td>C</td>
    </tr>
    <tr>
        <td>D</td>
        <td>E</td>
        <td>F</td>
    </tr>
    <tr>
        <td colspan="3">G</td>
    </tr>
</table>
<table border="">
    <tr>
        <td rowspan="2">A</td>
        <td rowspan="3">B</td>
        <td>C</td>
    </tr>
    <tr>
        <td rowspan="2">E</td>
    </tr>
    <tr>
        <td rowspan="2">D</td>
    </tr>
</table>
    
</body>
</html>