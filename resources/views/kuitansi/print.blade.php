<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kuitansi</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
        }

        .container {
            max-width: 100%;
            /* Sesuaikan dengan ukuran layar */
            height: auto;
            margin: auto;
            padding: 1cm;
            border: 1px solid #ccc;
            background-color: #fff;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            /* border: 1px solid #000; */
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <td width="40px"><img src="{{ asset('img/gsc/gsc.png') }}" width="50px" /></td>
                    <td colspan="1" width="100px" style="font-size:14px;">Gerak Sedekah Cilacap</td>
                    <td colspan="2"
                        style="text-align: center; font-size: 22px; font-family:Arial, Helvetica, sans-serif; font-weight:700; letter-spacing:10px">
                        KUITANSI</td>
                    <td width="33%" style="font-size:14px; text-align:right">Jalan Sulawesi, Perum
                        Puri
                        Tanjung Intan No.B2
                        Karang Lor, Gunungsimping, Cilacap Tengah 53224
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5">
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Bismillahirahmanirrahim,</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5">Dengan ini saya, atas nama (diri sendiri/lembaga/perusahaan)</td>
                </tr>
                <tr>
                    <td colspan="5">{{ $kuitansi->pengaju }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" {{ $kuitansi->jenis_kuitansi == 'Zakat' ? 'checked' : '' }}>
                        <label>Zakat &nbsp;</label>
                    </td>
                    <td width="5%" style="text-align: center">:</td>
                    <td colspan="2">{{ $kuitansi->keperluan }}&nbsp;<span
                            style="font-family:'Nunito'; font-size: 12px; font-style:italic;">(keperluan)</span></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" {{ $kuitansi->jenis_kuitansi == 'Tabung Kebaikan' ? 'checked' : '' }}>
                        <label>Tabung Kebaikan &nbsp;</label>
                    </td>
                    <td width="5%" style="text-align: center">:</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" {{ $kuitansi->jenis_kuitansi == 'Kotak Infaq' ? 'checked' : '' }}>
                        <label>Kotak Infaq &nbsp;</label>
                    </td>
                    <td width="5%" style="text-align: center">:</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" {{ $kuitansi->jenis_kuitansi == 'Wakaf' ? 'checked' : '' }}>
                        <label>Wakaf &nbsp;</label>
                    </td>
                    <td width="5%" style="text-align: center">:</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" {{ $kuitansi->jenis_kuitansi == 'Sedekah' ? 'checked' : '' }}>
                        <label>Sedekah &nbsp;</label>
                    </td>
                    <td width="5%" style="text-align: center">:</td>
                    <td colspan="2">Rp. {{ number_format($kuitansi->nominal, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" {{ $kuitansi->jenis_kuitansi == 'Kemanusiaan' ? 'checked' : '' }}>
                        <label>Kemanusiaan &nbsp;</label>
                    </td>
                    <td width="5%" style="text-align: center">:</td>
                    <td colspan="2">{{ $kuitansi->terbilang }}</td>
                </tr>
                <tr>
                    <td colspan="5">
                        <hr />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: center;">
                        Cilacap, {{ \Carbon\Carbon::parse($kuitansi->tanggal)->isoFormat('D MMMM Y') }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="2" style="text-align: center">
                        {{-- <img src="{{ asset('img/gsc/ttd-bendahara.png') }}" width="130px" /> --}}
                    </td>
                    <td colspan="1" style="text-align: center">
                        <img src="{{ asset('img/gsc/ttd-bendahara.png') }}" width="130px" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="2" style="text-align: center;">({{ $kuitansi->pengaju }})
                    </td>
                    <td colspan="1" style="text-align: center;">(Kholifatun
                        Mualfiyah)</td>
                </tr>
                <tr>
                    <td colspan="5">
                        <hr />
                    </td>
                </tr>
                {{-- <tr>
                    <td style="text-align:center;" colspan="3"><img style="width: 40%;"
                            src="{{ asset('img/gsc/MANDIRI.png') }}">
                    </td>
                    <td style="text-align:center;" colspan="1"><img style="width: 15%;"
                            src="{{ asset('img/gsc/BSI.png') }}">
                    </td>
                    <td style="text-align:center;" colspan="1"><img style="width: 25%; padding-top:8px;"
                            src="{{ asset('img/gsc/BRI.png') }}">
                    </td>
                </tr> --}}

                {{-- <tr>
                    <td>2</td>
                    <td>Barang B</td>
                    <td>150.000</td>
                    <td>1</td>
                    <td>150.000</td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</body>

</html>
