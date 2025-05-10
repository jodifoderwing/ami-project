<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Penerimaan Permohonan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 1px;
            margin-left: 30px;
            margin-right: 20px;
        }
        .header {
            margin-top: 20px;
            text-align: center;
        }
        .content {
            margin-top:20px;
            line-height: 1.6;
        }
        .footer {
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>
<body>
<div style="width: auto; height: auto; position :absolute">
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
        <u><font size="3"><strong>SURAT PENERIMAAN PERMOHONAN<strong></font></u><br>
        <font size="3">No. Berkas : {{ $berkas->noberkas }}</font><br>
    </div>

    <div class="content">
        <font size="3">Telah terima Berkas Permohonan Ijin Pemanfaatan Tanah Kasultanan dari :</font><br>
        <table style="width: 100%">
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%; vertical-align: top;">Nama</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">{{ $berkas->nama }}</td>
            </tr>
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%;">No. Handphone</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">{{ $berkas->nohp }}</td>
            </tr>
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">{{ $berkas->alamat }}</td>
            </tr>
        </table>

        <font size="3">Mengajukan Permohonan :</font><br>

        <table style="width: 100%">
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%; vertical-align: top;">Prosedur</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;"><ul style="margin: 0; padding-left: 20px;">
                    @foreach ($berkas->permohonan as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%;">Biaya Pendaftaran</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">Rp {{ number_format($berkas->biaya_daftar,0,',','.') }},-</td>
            </tr>

        </table>

        <font size="3">Atas sebidang Tanah Kasultanan :</font><br>
        <table style="width: 100%">
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%;">Alas Hak / Persil</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">{{ $berkas->alashak }}</td>
            </tr>
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%;">Luas Bidang Tanah</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">{{ number_format($berkas->luas,0,',','.') }} M2</td>
            </tr>
        </table>

        <font size="3">Terletak di :</font><br>
        <table style="width: 100%">
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%;">Padukuhan / Kampung</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">{{ ucwords(strtolower($berkas->padkam->nama)) }}</td>
            </tr>
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%;">Kalurahan / Kelurahan</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">{{ ucwords(strtolower($berkas->kalkel->nama)) }}</td>
            </tr>
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%;">Kapanewon / Kemantren</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">{{ ucwords(strtolower($berkas->kapkem->nama)) }}</td>
            </tr>
            <tr>
                <td style="width: 3%"></td>
                <td style="width: 30%;">Kabupaten / Kota</td>
                <td style="width: 2%";>:</td>
                <td style="width: 65%;">{{ ucwords(strtolower($berkas->kabkota->nama)) }}</td>
            </tr>
        </table>
        <br>
        <table style="width: 100%">
            <tr>
                <td style="width: 40%"></td>
                <td style="width: 60%; text-align: center">Karaton Ngayogyakarta, {{ date('d/m/Y',strtotime($berkas->tglberkas)) }}</td>
            </tr>
            <tr>
                <td style="width: 40%"></td>
                <td style="width: 60%; text-align: center">Petugas Pendaftaran</td>
            </tr>
            <br><br><br>
            <tr>
                <td style="width: 40%"></td>
                <td style="width: 60%; text-align: center">{{ Auth::user()->name }}</td>
            </tr>
        </table>

    </div>
</div>
</body>
</html>
