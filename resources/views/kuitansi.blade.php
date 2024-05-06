<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cetak Kuitansi</title>
</head>

<style>

</style>

<body>
    <table border="0" align="center" width="90%">
        <tr>
            <td width="60px"><img src="{{ asset('img/gsc/gsc.png') }}" width="50px" /></td>
            <td width="100px">Gerak Sedekah Cilacap</td>
            <td colspan="2"
                style="text-align: center; font-size: 22px; font-family:Arial, Helvetica, sans-serif; font-weight:700; letter-spacing:10px">
                KUITANSI</td>
            <td width="33%" style="text-align: right; font-size:12px;">Jalan Sulawesi, Perum Puri Tanjung Intan No.B2
                Gunungsimping
            </td>
        </tr>

        <tr>
            <td colspan="5">
                <hr />
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-family:'Poppins'; font-size:14px; font-weight: 600; font-style:italic;">
                Bismillahirahmanirrahim</td>
        </tr>
        <tr>
            <td colspan="5" style="font-family:'Poppins'; font-size:14px; font-weight: normal; ">
                Dengan ini saya, atas nama (diri sendiri/lembaga/perusahaan)</td>
        </tr>
        <tr>
            <td colspan="5"
                style="font-family:'Poppins'; font-size:14px; font-weight: normal; font-style:italic; padding-bottom:10px;">
                Yudistira Ramadan Kalimasada</td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" name="" id="">&nbsp; Zakat</td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2">Pembangunan Rumah Sholeh <span
                    style="font-family:'Nunito'; font-size: 10px; font-style:italic;">(keperluan)</span></td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" name="" id="">&nbsp; Tabung Kebaikan</td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" name="" id="">&nbsp; Kotak Infaq</td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2">Rp. 50.000.000</td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" name="" id="">&nbsp; Wakaf</td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2">LIMA PULUH JUTA RUPIAH</td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" name="" id="">&nbsp; Sedekah</td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2" style="text-transform:uppercase;"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" name="" id="">&nbsp; Kemanusiaan</td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2" style="text-transform:uppercase;"></td>
        </tr>
        {{-- <tr>
            <td colspan="2" height="30px">TERIMA DARI</td>
            <td style="text-align: center">:</td>
            <td colspan="2" style="text-transform:uppercase;"></td>
        </tr>
        <tr>
            <td colspan="2" height="30px">GUNA PEMBAYARAN</td>
            <td style="text-align: center">:</td>
            <td colspan="2" style="text-transform:uppercase;">KOTAK INFAQ</td>
        </tr> --}}
        <tr>
            <td colspan="5">
                <hr />
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: left">
                Cilacap, 06 Mei 2024
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td colspan="2" style="text-align: center">
                <img src="{{ asset('img/gsc/ttd-bendahara.png') }}" width="130px" />
            </td>
            <td colspan="3" style="text-align: center">
                <img src="{{ asset('img/gsc/ttd-bendahara.png') }}" width="130px" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td colspan="2" style="text-align: center;">(Yudistira Ramadan Kalimasada)</td>
            <td colspan="2" style="text-align: center;">(Kholifatun Mualfiyah)</td>
        </tr>
        <tr>
            <td colspan="5">
                <hr />
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" colspan="2"><img style="width: 80%;"
                    src="{{ asset('img/gsc/MANDIRI.png') }}">
            </td>
            <td style="text-align:center;" colspan="2"><img style="width: 50%;" src="{{ asset('img/gsc/BSI.png') }}">
            </td>
            <td style="text-align:center;" colspan="2"><img style="width: 70%; padding-top:8px;"
                    src="{{ asset('img/gsc/BRI.png') }}">
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <hr />
            </td>
        </tr>


    </table>
</body>

</html>
