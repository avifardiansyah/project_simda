<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku Rekapitulasi Pengeluaran</title>
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
        table.uraian-detail{
            width: max-content;
            border: hidden;
        }
        table.uraian-detail td{
            border: hidden;
            padding: -3px -3px !important;
        }
        table.uraian-angka td{
            text-align: right;

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
            width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .sum-jumlah{
            text-align: center;
            font-weight: bold;
        }

        .duit{
            text-align: right;
        }


    </style>
</head>
<body>

    <p class="kop">KABUPATEN CILACAP <br> BUKU REKAPITULASI PENGELUARAN <br> PER RINCIAN OBJEK</p>
    <hr>
    <table>
        <tbody>
            <tr>
                <td>SKPD</td>
                <td>:</td>
                <td class="bold">DINAS EDDI</td>
            </tr>
            <tr>
                <td>Kode Rekening</td>
                <td>:</td>
                <td class="bold">531324</td>
            </tr>
            <tr>
                <td>Nama Rekening</td>
                <td>:</td>
                <td class="bold">Honorarium Panitia Pelaksana Istirahat</td>
            </tr>
            <tr>
                <td>Jumlah Anggaran</td>
                <td>:</td>
                <td class="bold">Rp. 500.000</td>
            </tr>
            <tr>
                <td>Tahun Anggaran</td>
                <td>:</td>
                <td class="bold">2020</td>
            </tr>
            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td class="bold">Agustus 2030</td>
            </tr>
        </tbody>
    </table>
    <div style="height: 30px;"></div>
    <table class="center uraian">

            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Tanggal</th>
                <th rowspan="2">Nomor BKU</th>
                <th rowspan="2">Uraian</th>
                <th colspan="4">Pengeluaran</th>
            </tr>
            <tr>
                <th>LS</th>
                <th>TU</th>
                <th>UP/GU</th>
                <th>Jumlah</th>
            </tr>
        <tbody>
            <tr>
                <td>1</td>
                <td>29 Agustus 2015</td>
                <td>A0</td>
                <td>Beli Krupuk</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>29 Agustus 2015</td>
                <td>A0</td>
                <td>Beli sambel</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
            </tr>
            <!-- summary -->
            <tr>
                <td colspan="4" class="sum-jumlah">Jumlah bulan ini</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
            </tr>
            <tr>
                <td colspan="4" class="sum-jumlah">Jumlah Sampai Dengan Bulan Lalu</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
            </tr>
            <tr>
                <td colspan="4" class="sum-jumlah">Jumlah Sampai Dengan Bulan Ini</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
                <td class="duit">0</td>
            </tr>
            <tr>
                <td colspan="4" class="sum-jumlah">Saldo Anggaran</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="duit">0</td>
            </tr>
        </tbody>
    </table>

    <!-- TTD -->
    <div class="row ttd_atas">
        <div class="column">
            <br>
            <div class=" text-center">
                Pengguna Anggaran
            </div>
            <div class=" text-center" style="padding-top: 50px;">
                <u class="bold">Sugimbreng</u> <br>
                NIP. 194232141293912
            </div>

        </div>
        <div class="column">
            <div class="text-center">
                Cilacap, 34 April 2040
            </div>
            <div class=" text-center">
                Bendahara Pengeluaran Pembantu
            </div>

            <div class=" text-center" style="padding-top: 50px;">
                <u class="bold">Roy Sumarno</u> <br>
                NIP. 194232141293912
            </div>
        </div>
    </div>


    <div class="ttd">
        <div class="ttd_kiri text-center">
            Mengetahui <br> Pengguna Anggaran
        </div>
        <div class="ttd_kiri text-center" style="padding-top: 50px;">
            <u class="bold">M. Wicaksono</u> <br>
            NIP. 194232141293912
        </div>
    </div>


</body>
</html>
