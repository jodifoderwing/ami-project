<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Bukti Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 1px;
            margin-left: 20px;
            margin-right: 20px;
        }
        .header {
            margin-top: 1px;
            text-align: center;
        }
        .content {
            margin-top:10px;
            line-height: 1.4;
        }
        .footer {
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>
<body>
    @php
        use App\Utils\NumberUtils;
        $terbilang = ucwords(NumberUtils::terbilang($berkas->biaya_daftar)) . ' Rupiah';
        // dd($biaya);
    @endphp
<div style="margin-top: 0; width: auto; height: auto; position :absolute">
    <div>
        <center>
            <table>
                <tr>
                    <td><img src="images/logo.jpg" width="80" height="80"></td>
                    <td>
                        <center>
                            <font size="5">KARATON NGAYOGYAKARTA HADININGRAT</font><br>
                            <font size="4"><strong>KAWEDANAN HAGENG PUNOKAWAN DATU DANA SUYASA</strong></font><br>
                            <font size="2">Alamat : Alun-alun Utara Komplek Prcimasana Karaton Ngayogyakarta Hadiningrat</font><br>
                            <font size="2"></font>
                        </center>
                    </td>
                </tr>
            </table>
            <hr style="border: 1px solid black;">
        </center>
    </div>

    <div class="header">
        <u><font size="3"><strong>SURAT BUKTI PEMBAYARAN<strong></font></u><br>
        <font size="3">No. Kwitansi : {{ $berkas->nokwit }}</font><br>
    </div>

    <div class="content">
        <font size="3">Telah terima dari :</font><br>
        <table style="width: 100%">
            <tr>
                <td style="width: 3%;"></td>
                <td style="width: 17%; vertical-align: top;">Nama</td>
                <td style="width: 2%;">:</td>
                <td style="width: 78%;">{{ $berkas->nama }}</td>
            </tr>
            <tr>
                <td style="width: 3%;"></td>
                <td style="width: 17%;">Alamat</td>
                <td style="width: 2%;">:</td>
                <td style="width: 78%;">{{ $berkas->alamat }}</td>
            </tr>
            <tr>
                <td style="width: 3%;"></td>
                <td style="width: 17%; vertical-align: top;">Uang sejumlah</td>
                <td style="width: 2%;">:</td>
                <td style="width: 78%;">Rp {{ number_format($berkas->biaya_daftar,0,',','.') }},-</td>
            </tr>
            <tr>
                <td style="width: 3%;";></td>
                <td style="width: 17%;">Terbilang</td>
                <td style="width: 2%;">:</td>
                <td style="width: 78%;">{{ $terbilang }}</td>
            </tr>
        </table>

        <font size="3">Untuk membayar biaya Administrasi Permohonan Kekancingan/Palilah No. Berkas {{ $berkas->noberkas }}</font>
        <br><br>

        <table style="width: 100%">
            <tr>
                <td style="width: 40%"></td>
                <td style="width: 60%; text-align: center">Karaton Ngayogyakarta, {{ date('d/m/Y',strtotime($berkas->tglkwit)) }}</td>
            </tr>
            <tr>
                <td style="width: 40%"></td>
                <td style="width: 60%; text-align: center">Petugas Penerimaan</td>
            </tr>
            <br><br>
            <tr>
                <td style="width: 40%"></td>
                <td style="width: 60%; text-align: center">{{ Auth::user()->name }}</td>
            </tr>
        </table>
        <font size="2"><strong>PERHATIAN:</strong> Dokumen ini digunakan untuk pengambilan Kekancingan/Palilah</font>
        <br><br>
        <font size="3">--------------------------------------------------------------------------------------------------------------------------------</font><br>

        <div>
        <center>
            <table>
                <tr>
                    <td><img src="images/logo.jpg" width="80" height="80"></td>
                    <td>
                        <center>
                            <font size="5">KARATON NGAYOGYAKARTA HADININGRAT</font><br>
                            <font size="4"><strong>KAWEDANAN HAGENG PUNOKAWAN DATU DANA SUYASA</strong></font><br>
                            <font size="2">Alamat : Alun-alun Utara Komplek Prcimasana Karaton Ngayogyakarta Hadiningrat</font><br>
                            <font size="2"></font>
                        </center>
                    </td>
                </tr>
            </table>
            <hr style="border: 1px solid black;">
        </center>
    </div>

    <div class="header">
        <u><font size="3"><strong>SURAT BUKTI PEMBAYARAN<strong></font></u><br>
        <font size="3">No. Kwitansi : {{ $berkas->nokwit }}</font><br>
    </div>

    <div class="content">
        <font size="3">Telah terima dari :</font><br>
        <table style="width: 100%">
            <tr>
                <td style="width: 3%;"></td>
                <td style="width: 17%; vertical-align: top;">Nama</td>
                <td style="width: 2%;">:</td>
                <td style="width: 78%;">{{ $berkas->nama }}</td>
            </tr>
            <tr>
                <td style="width: 3%;"></td>
                <td style="width: 17%;">Alamat</td>
                <td style="width: 2%;">:</td>
                <td style="width: 78%;">{{ $berkas->alamat }}</td>
            </tr>
            <tr>
                <td style="width: 3%;"></td>
                <td style="width: 17%; vertical-align: top;">Uang sejumlah</td>
                <td style="width: 2%;">:</td>
                <td style="width: 78%;">Rp {{ number_format($berkas->biaya_daftar,0,',','.') }},-</td>
            </tr>
            <tr>
                <td style="width: 3%;"></td>
                <td style="width: 17%;">Terbilang</td>
                <td style="width: 2%;">:</td>
                <td style="width: 78%;">{{ $terbilang }}</td>
            </tr>
        </table>

        <font size="3">Untuk membayar biaya Administrasi Permohonan Kekancingan/Palilah No. Berkas {{ $berkas->noberkas }}</font>
        <br><br>

        <table style="width: 100%">
            <tr>
                <td style="width: 40%"></td>
                <td style="width: 60%; text-align: center">Karaton Ngayogyakarta, {{ date('d/m/Y',strtotime($berkas->tglkwit)) }}</td>
            </tr>
            <tr>
                <td style="width: 40%"></td>
                <td style="width: 60%; text-align: center">Petugas Penerimaan</td>
            </tr>
            <br><br>
            <tr>
                <td style="width: 40%"></td>
                <td style="width: 60%; text-align: center">{{ Auth::user()->name }}</td>
            </tr>
        </table>
        <font size="2"><strong>PERHATIAN:</strong> Dokumen ini digunakan untuk pengambilan Kekancingan/Palilah</font>
        <br>
    </div>
</div>
</body>
</html>
