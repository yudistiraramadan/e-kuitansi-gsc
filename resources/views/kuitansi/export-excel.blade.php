<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Kuitansi</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Donatur</th>
                <th>Guna Keperluan</th>
                <th>Nominal</th>
                <th>Terbilang</th>
                <th>Jenis Donasi</th>
                <th>Metode Pembayaran</th>
                <th>Tanggal Pembuatan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($kuitansi as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->pengaju }}</td>
                    <td>{{ $data->keperluan }}</td>
                    <td>{{ $data->nominal }}</td>
                    <td>{{ $data->terbilang }}</td>
                    <td>{{ $data->jenis_kuitansi }}</td>
                    <td>{{ $data->pembayaran }}</td>
                    <td>{{ \Carbon\Carbon::parse($data->tanggal)->locale('id')->isoFormat('D MMMM Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
