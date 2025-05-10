<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Daftar Surat Ukur</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <td><img src="images/logo.jpg" width="90" height="90"></td>
                <td>
                    <center>
                        <font size="5">KARATON NGAYOGYAKARTA HADININGRAT</font><br>
                        <font size="4">KAWEDANAN HAGENG PUNOKAWAN DATU DANA SUYASA</font><br>
                        <font size="2">Alamat : Alun-alun Utara Komplek Pracimasono</font><br>
                        <font size="2"></font>
                    </center>
                </td>
            </tr>
        </table>
        <hr>
    </center>


    <h3 style="text-align: center">DAFTAR SURAT UKUR</h3>
    {{-- $date = now();
    <p>Tanggal : {{ $date }}</p> --}}

    <table class="table table-striped" border="1">
        <tr>
            <th>No</th>
            <th>No. SU</th>
            <th>Tgl. SU</th>
            <th>Luas</th>
            <th>Kalurahan</th>
            <th>Kapanewon</th>
            <th>Kab/Kota</th>
        </tr>

        @php
            $no = 1;
        @endphp
        @foreach ($records as $record)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $record->nomor }}</td>
            <td>{{ date('d-m-Y',strtotime($record->tanggal)) }}</td>
            <td>{{ $record->luas }}</td>
            <td>{{ $record->kalkel->nama }}</td>
            <td>{{ $record->kapkem->nama }}</td>
            <td>{{ $record->kabkota->nama }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>
