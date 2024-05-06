<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cetak Kuitansi</title>
</head>

<style>
    /* body::before {
        background-image: url("img/gsc/gsc.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 50%;
        opacity: 0.5;
    } */
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 50%;
        background-image: url("img/gsc/gsc.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 50%;
        opacity: 0.1;
        /* Atur tingkat transparansi di sini */
        z-index: -1;
        /* Pastikan pseudo-element berada di belakang elemen lainnya */
    }


    td {
        color: #222222;
        font-family: 'Montserrat'
    }
</style>

<body>
    <table border="0" align="center" width="90%">
        <tr>
            <td width="40px"><img src="{{ asset('img/gsc/gsc.png') }}" width="50px" /></td>
            <td width="100px" style="font-size:14px; font-weight:500;">Gerak Sedekah Cilacap</td>
            <td colspan="2"
                style="text-align: center; font-size: 22px; font-family:Arial, Helvetica, sans-serif; font-weight:700; letter-spacing:10px">
                KUITANSI</td>
            <td width="33%" style="font-size:12px; font-weight:500; text-align:right">Jalan Sulawesi, Perum Puri
                Tanjung Intan No.B2
                Gunungsimping
            </td>
        </tr>

        <tr>
            <td colspan="5">
                <hr />
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:16px; font-weight:600; font-style:italic; padding-top:10px;">
                Bismillahirahmanirrahim</td>
        </tr>
        <tr>
            <td colspan="5" style="font-size:14px; font-weight:500; padding-top:4px;">
                Dengan ini saya, atas nama (diri sendiri/lembaga/perusahaan)</td>
        </tr>
        <tr>
            <td colspan="5" style="font-size:14px; font-weight:500; padding-top:4px; padding-bottom:10px;">
                Yudistira Ramadan Kalimasada</td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" id="">&nbsp;
                <span style="font-size:14px; font-weight:500;">Zakat</span>
            </td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2" style="font-size:14px; font-weight:500;">Pembangunan Rumah Sholeh <span
                    style="font-family:'Nunito'; font-size: 10px; font-style:italic;">(keperluan)</span></td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" id="">&nbsp;
                <span style="font-size:14px; font-weight:500;">Tabung Kebaikan</span>
            </td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2" style="font-size:14px; font-weight:500;"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" id="">&nbsp;
                <span style="font-size:14px; font-weight:500;">Kotak Infaq</span>
            </td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2" style="font-size:14px; font-weight:500;">Rp. 50.000.000</td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" id="">&nbsp;
                <span style="font-size:14px; font-weight:500;">Wakaf</span>
            </td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2" style="font-size:14px; font-weight:500;">LIMA PULUH JUTA RUPIAH</td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" id="">&nbsp;
                <span style="font-size:14px; font-weight:500;">Sedekah</span>
            </td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2" style="text-transform:uppercase;"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" id="">&nbsp;
                <span style="font-size:14px; font-weight:500; padding-bottom:10px;">Kemanusiaan</span>
            </td>
            <td width="5%" style="text-align: center">:</td>
            <td colspan="2" style="text-transform:uppercase;"></td>
        </tr>
        <tr>
            <td colspan="5">
                <hr />
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: left; font-size:14px; font-weight:500;">
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
            <td colspan="2" style="text-align: center; font-size:14px; font-weight:500;">(Slamet Kopling)</td>
            <td colspan="2" style="text-align: center; font-size:14px; font-weight:500;">(Kholifatun Mualfiyah)</td>
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
