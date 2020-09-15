<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kwitansi</title>
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
        }
        .kop{
            text-align: center;
            font-size: 12pt;
            font-weight: bold;
            line-height: 20px;
            font-family: Arial, Helvetica, sans-serif;

            width: 50%;
        }
        .judul{
            text-align: center;
            font-size: 18pt;
            font-weight: bold;
            line-height: 20px;
            font-family: Arial, Helvetica, sans-serif;

        }
        .bold{
            font-weight: bold;
        }
        .ringkasan{
            text-align: center;
            font-size: 12pt;
            line-height: 20px;
        }
        .dataskpd{
            text-align: center;
            font-size: 12pt;
            line-height: 20px;
        }
        table {
            border-collapse: collapse;
        }
        .uraian{
            border: 1px solid black;
        }
        table.uraian{
            border-collapse: collapse;
            width: 100%;
        }
        table.uraian th{
            padding: 3px 3px;
            border: 1px solid black;
            text-align: center;
        }
        table.uraian td{
            padding: 3px 3px;
            border: 1px solid black;
        }
        .kdrek{
            font-size: 11px;
            text-align: center;
        }
        .ttd_kanan {
            position:relative;

        }
        .ttd_kiri {
            position:relative;

        }
        .text-center {
            text-align: center;
        }
        .ttd {
            page-break-inside:avoid; page-break-after:auto;
            padding-top: 50px;
        }
        .ttd_atas {
            padding-top: 50px;
            page-break-inside:avoid; page-break-after:auto;

        }
        .ttd_bp {
            page-break-inside:avoid; page-break-after:auto;
            padding-left: 380px;
        }
        .ttd_pa {

            page-break-inside:avoid; page-break-after:auto;
            position: absolute;
            margin-right: 500px;
            padding-bottom: -100px;
        }

        .column {
            float: left;
            width: 33.33%;
        }

        .column_title {
            float: left;
            width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .nomor{
            padding-left: 20%;
        }

        .parallelogram {
            width: 300px;
            transform: skew(-20deg);
            background: rgb(167, 167, 167);
            margin-left: 5%;
        }

        .container {
            height: 50px;
            position: relative;

        }

        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .garis-bawah {
            width: 900px;; border-bottom:1px solid black;
        }

    </style>
</head>
<body>

    <div class="row">
        <div class="column_title"><p class="kop">PEMERINTAH KABUPATEN CILACAP <hr style="padding-left:150px; margin-right: 250px;"></p></div>
        <div class="column_title">
            <p class="judul"><u>SURAT BUKTI PEMBAYARAN</u></p>
        </div>
    </div>

    <div class="row">
        <div class="column_title">
            <table>
                <tbody>
                    <tr>
                        <td>Tahun Anggaran</td>
                        <td>:</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <td>Kode Rekening</td>
                        <td>:</td>
                        <td>210 21010 01010 52200104</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="column_title">
            <table class="nomor">
                <tbody>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>007</td>
                    </tr>
                    <tr>
                        <td>Lembar</td>
                        <td>:</td>
                        <td>I / II / III / IV</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <p style="text-align: center;">Telah terima dari Bendahara Pengeluaran <u>Pembantu Kegiatan Penyediaan Alat Makan Siang</u></p>
    <hr style="margin-left: 47%; margin-right: 8%">
    <table>
        <tbody>
            <tr>
                <td style="width: 130px;">Uang Sebesar</td>
                <td>:</td>
                <td style="height: 50px; vertical-align: middle">
                    <div class="parallelogram"><p style="text-align: center; font-size: 24px; font-weight: bold; transform: skew(20deg)">300.000.000</p></div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Dengan huruf</td>
                <td>:</td>
                <td><i>(telungatus juta dollar)</i><div class="garis-bawah"></div></td>
            </tr>
            <tr>
                <td>Untuk Pembayaran</td>
                <td>:</td>
                <td style="width: 720px; border-bottom: 1px solid black; !important">Beli sendok dan garpu emas 24 karat </td>
                <td>Rp. </td>
                <td style="width: 145px; text-align: right; border-bottom: 1px solid black; !important""> 100.000.000.0000</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="width: 720px; border-bottom: 1px solid black; !important"></td>
                <td>Rp. </td>
                <td style="width: 145px; text-align: right; border-bottom: 1px solid black; !important""> 100.000.000.0000</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="width: 720px; border-bottom: 1px solid black; !important"></td>
                <td>Rp. </td>
                <td style="width: 145px; text-align: right; border-bottom: 1px solid black; !important""> 100.000.000.0000</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="width: 720px; border-bottom: 1px solid black; !important"></td>
                <td>Rp. </td>
                <td style="width: 145px; text-align: right; border-bottom: 1px solid black; !important""> 100.000</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="text-align: right; padding-right: 20px;">J u m l a h </td>
                <td>Rp. </td>
                <td style="width: 145px; text-align: right; border-bottom: 1px solid black; !important""> 100.000</td>
            </tr>
            <tr>
                <td>Untuk Pekerjaan</td>
                <td>:</td>
                <td><u>Penyediaan Makan Siang</u></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <!-- TTD -->
    <div class="row ttd_atas">
        <div class="column"  style="border: solid black; border-bottom: hidden; border-left: hidden; border-right: hidden;">
            <div class=" text-center">
                Barang tsb telah diterima pada <br>
                tgl  ________________{{date('Y')}}
            </div>
            <div class=" text-center" style="padding-top: 50px;">
                (.....................................)

            </div>
            <div class=" text-center" style="padding-top: 5px;">
                <br>
            </div>
            <div class="text-center">
                Mengetahui <br>
                PPTK
            </div>
            <div class=" text-center" style="padding-top: 50px;">
                <u class="bold">Sugimbreng</u> <br>
                NIP. 194232141293912
            </div>
        </div>

        <div class="column"  style="border: solid black;  border-bottom: hidden; ">
            <div class="text-center">
                Setuju dibayar
                Sekda/Ka. Bag/Ka. Dinas
                Pengguna/Kuasa Pengguna Anggaran
            </div>

            <div class=" text-center" style="padding-top: 50px;">
                <u class="bold">M. Wicaksono</u> <br>
                NIP. 194232141293912
            </div>
            <div class="text-center">
                Dibayarkan pd tgl ________________{{date('Y')}}<br>
                Bendahara Pengeluaran Pembantu
            </div>
            <div class=" text-center" style="padding-top: 50px;">
                <u class="bold">Roy Sumarno</u> <br>
                NIP. 194232141293912
            </div>
        </div>

        <div class="column"  style="border: solid black;  border-bottom: hidden; border-left: hidden; border-right: hidden; padding-left: 20px;">
            <div class="text-center">
                Cilacap, ________________{{date('Y')}}
            </div>
            <div class=" text-center" style="padding-top: 70px;">
                (.....................................)
            </div>
            <div style="padding-top: 50px;">
                Alamat
            </div>

        </div>
    </div>


</body>
</html>
