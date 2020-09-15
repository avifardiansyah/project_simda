@extends('module_spj.layout.lay_master')

@section('content')
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{route('admindinas.dashboard')}}">Beranda</a>
            </li>
            <li>Penatausahaan</li>
            <li class="active">SPJ</li>
            <li>{{$detkeg->ket_kegiatan}}</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->
    <!-- Page Header -->
    <div class="page-header position-relative">

        <!--Header Buttons-->
        <!-- <div class="header-buttons">
            <a class="sidebar-toggler" href="#">
                <i class="fa fa-arrows-h"></i>
            </a>
            <a class="refresh" id="refresh-toggler" href="">
                <i class="glyphicon glyphicon-refresh"></i>
            </a>
            <a class="fullscreen" id="fullscreen-toggler" href="#">
                <i class="glyphicon glyphicon-fullscreen"></i>
            </a>
        </div> -->
        <!--Header Buttons End-->
    </div>
    <!-- /Page Header -->
    <!-- Page Body -->
    <div class="page-body">
        <!-- Your Content Goes Here -->
        <div class="row">
            <div class="col-md-12">
                <div class="profile-container">
                    <div class="profile-header row">
                        <div class="col-xs-4 col-md-4">
                            <div class="widget">
                                <div class="widget-header bg-lightred">
                                    <span class="widget-caption"><i class="fa fa-th-large"></i> Detail Kegiatan</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Kode</td>
                                                <td>:</td>
                                                <td>{{$detkeg->kodek}}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kegiatan</td>
                                                <td>:</td>
                                                <td>{{$detkeg->ket_kegiatan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Anggaran</td>
                                                <td>:</td>
                                                <td><strong>Rp. {{number_format($detkeg->anggaran)}}</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8 col-md-8">
                            <div class="widget">
                                <div class="widget-header bg-lightred">
                                    <span class="widget-caption"><i class="fa fa-th-large"></i> Mengetahui</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <table class="table">
                                        <tr>
                                            <td><strong>Pejabat Pengendalian Teknis Kegiatan (PPTK)</strong></td>
                                            <td><strong>Bendahara Pengeluaran Pembantu (BPT)</strong></td>
                                            <td><strong>Pengguna Anggaran (PA)</strong></td>
                                        </tr>
                                        <tr>
                                            <td>{{$detkeg->gdp.' '.$detkeg->nama.' '.$detkeg->gdb}}</td>
                                            <td>{{session('user')['nama']}}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>{{$detkeg->nip_pptk}}</td>
                                            <td>{{session('user')['nip']}}</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-body">
                        <div class="col-lg-12">
                            <div class="tabbable">
                                <ul class="nav nav-tabs tabs-flat  nav-justified" id="myTab11">
                                    <li class="active">
                                        <a data-toggle="tab" href="#rinciankegiatan">
                                            <strong>RINCIAN KEGIATAN</strong>
                                        </a>
                                    </li>
                                    <li class="tab-darkorange">
                                        <a data-toggle="tab" href="#spj">
                                            <strong>S P J</strong>
                                        </a>
                                    </li>
                                    <li class="tab-warning">
                                        <a data-toggle="tab" id="contacttab" href="#cetak">
                                            <strong>CETAK</strong>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content tabs-flat">
                                    <div id="rinciankegiatan" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget">
                                                    <div class="widget-header bg-sky">
                                                        <span class="widget-caption"><i class="fa fa-th-large"></i> Rincian Kegiatan</span>
                                                        <div class="widget-buttons">
                                                            <a href="#" data-toggle="collapse">
                                                                <i class="fa fa-minus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="widget-body">
                                                        <table class="table table-striped table-responsive table-hover" id="tblrinckeg">
                                                            <thead>
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>Kode Rek.</th>
                                                                    <th>Keterangan Rek.</th>
                                                                    <th>Keterangan.</th>
                                                                    <th>Qty.</th>
                                                                    <th>Satuan.</th>
                                                                    <th>Harga.</th>
                                                                    <th>Total.</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($rinckeg as $ind=>$rinckeg)
                                                                <tr>
                                                                    <td>{{$ind+1}}</td>
                                                                    <td>{{$rinckeg->kd_rek}}</td>
                                                                    <td>{{$rinckeg->ket}}</td>
                                                                    <td>{{$rinckeg->keterangan}}</td>
                                                                    <td>{{$rinckeg->qty}}</td>
                                                                    <td>{{$rinckeg->satuan}}</td>
                                                                    <td style="text-align: right;">{{number_format($rinckeg->harga)}}</td>
                                                                    <td style="text-align: right;">{{number_format($rinckeg->total)}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="spj" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget">
                                                    <div class="widget-header bg-darkorange">
                                                        <span class="widget-caption"><i class="fa fa-edit"></i> Surat Pertanggungjawaban Online ( S P J )</span>
                                                        <div class="widget-buttons">
                                                            <a href="#" data-toggle="collapse">
                                                                <i class="fa fa-minus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="widget-body">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <form class="form-horizontal" role="form" id="formspj" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="text" name="xrujukan" id="xrujukan" hidden>
                                                                    <input type="text" name="idtransrinc" id="idtransrinc" hidden>
                                                                    <input type="text" name="kodeks" id="kodeks" value="{{$kodek}}" hidden>
                                                                    <div class="form-group">
                                                                        <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">Tanggal</label>
                                                                        <div class="col-sm-10">
                                                                            <div class="input-group">
                                                                                <input class="form-control date-picker" id="id-date-picker-1" name="tgl_trans_perincian" type="text" data-date-format="yyyy-mm-dd" readonly placeholder="Tanggal">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">No. Rek</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" class="form-control" id="trans_kd_rek" name="trans_kd_rek" placeholder="Nomor Rekening" readonly>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <input type="text" class="form-control" id="trans_ket_rek" name="trans_ket_rek" placeholder="Keterangan Rekening" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group" id="fieldrujukan">
                                                                        <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">Rujukan</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" class="form-control" id="trans_kd_rek_rujuk" name="trans_kd_rek_rujuk" placeholder="Nomor Rekening" readonly>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <input type="text" class="form-control" id="trans_ket_rek_rujuk" name="trans_ket_rek_rujuk" placeholder="Keterangan Rekening" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">Ket. Rincian</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea type="textarea" rows="3" class="form-control" id="ket_trans_rincian" name="ket_trans_rincian" placeholder="Keterangan Rincian"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">Jenis</label>
                                                                        <div class="col-sm-3">
                                                                            <label>
                                                                                <input class="form-control" type="radio" id="TR" name="jt" value="1">
                                                                                <span class="text">Transfer </span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <label>
                                                                                <input class="form-control" type="radio" id="TU" name="jt" value="2">
                                                                                <span class="text">Tunai </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">Urut</label>
                                                                        <div class="col-sm-2">
                                                                            <input type="number" class="form-control" id="urut" name="urut" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">Nomor Bukti</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="nobukti" name="nobukti" placeholder="Nomor Bukti Pembayaran / Nomor Kuitansi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">Anggaran</label>
                                                                        <div class="col-sm-5">
                                                                            <input type="text" class="form-control" id="ang_masuk" name="ang_masuk" placeholder="Anggaran Masuk">
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <input type="text" class="form-control" id="ang_keluar" name="ang_keluar" placeholder="Anggaran Keluar">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-offset-1 col-sm-10">
                                                                            <a type="button" style="float: right;" class="btn btn-maroon btn-lg" id="btnbatal">Batal</a>
                                                                            <a type="button" style="float: right;" class="btn btn-sky btn-lg" id="btnsimpan">Simpan</a>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-5" style="height:323px; overflow:auto;">
                                                                <table class="table table-responsive table-hover table-bordered" id="tblrek">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="15%">Kode Rek.</th>
                                                                            <th>KET Rek.</th>
                                                                            <th width="25%">Anggaran Rek.</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="bdrek">
                                                                        @foreach ($rincrekkeg as $rincrek)
                                                                        <tr style="cursor:pointer;" class="plhrekkeg" data-kd="{{$rincrek->kd_rek}}" data-ket="{{$rincrek->ket}}">
                                                                            <td>{{$rincrek->kd_rek}}</td>
                                                                            <td>{{$rincrek->ket}}</td>
                                                                            <td style="text-align: right;">{{number_format($rincrek->totangrek)}}</td>
                                                                        </tr>
                                                                        @endforeach
                                                                        @foreach ($rincrekpjk as $rincrekpjk)
                                                                        <tr style="cursor:pointer;" class="plhrekpjk" data-kd="{{$rincrekpjk->kd_rek}}" data-ket="{{$rincrekpjk->ket}}">
                                                                            <td>{{$rincrekpjk->kd_rek}}</td>
                                                                            <td>{{$rincrekpjk->ket}}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-responsive table-hover" id="tblrincspj" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th width="10%">Tanggal.</th>
                                                            <th colspan="2" style="text-align: center;">Rekening</th>
                                                            <th width="5%">Urut.</th>
                                                            <th width="5%">No Bukti.</th>
                                                            <th width="5%">Jns.</th>
                                                            <th>KET Transaksi.</th>
                                                            <th colspan="2" style="text-align: center;">Transaksi.</th>
                                                            <th width="5%">JENIS.</th>
                                                            <th colspan="2" style="text-align: center;">Rek Rujukan.</th>
                                                            <th style="text-align: center;" width="7%">#</th>
                                                        </tr>
                                                        <tr>
                                                            <th>1.</th>
                                                            <th>Kode</th>
                                                            <th>KET</th>
                                                            <th>4.</th>
                                                            <th>5.</th>
                                                            <th>6.</th>
                                                            <th>7.</th>
                                                            <th>Masuk.</th>
                                                            <th>Keluar.</th>
                                                            <th>10.</th>
                                                            <th>Kode.</th>
                                                            <th>KET.</th>
                                                            <th>13.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="bdrincspj"> </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cetak" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget">
                                                    <div class="widget-header bg-warning">
                                                        <span class="widget-caption"><i class="fa fa-print"></i> CETAK</span>
                                                        <div class="widget-buttons">
                                                            <a href="#" data-toggle="collapse">
                                                                <i class="fa fa-minus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="widget-body">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm" id="mdlhps" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="mySmallModalLabel"><i class="fa fa-bullhorn"></i> Information</h4>
            </div>
            <div class="modal-body">
                <input type="text" id="xidtrans" name="xidtrans" hidden>
                <p>Apakah anda yakin untuk menghapus transaksi ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-danger" id="btnhapus" data-dismiss="modal">Hapus</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection
@section('javascript')
<script>
    var fieldrujukan = document.getElementById('fieldrujukan');
    $().ready(function() {
        // $('#tblrinckeg').DataTable();
        datatablerinckeg();
        $('#tblrincspj').DataTable();
        $('.date-picker').datepicker();
        fieldrujukan.style.display = "none";
        listrincianspj();
    })
    $('#btnbatal').on('click', function() {
        document.getElementById("formspj").reset();
        fieldrujukan.style.display = "none";
    })

    function convertDateDBtoIndo(string) {
        bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        tanggal = string.split("-")[2];
        bulan = string.split("-")[1];
        tahun = string.split("-")[0];

        return tanggal + " " + bulanIndo[Math.abs(bulan)] + " " + tahun;
    }

    function convertcurrencyIDR(number) {
        var number_string = number.toString(),
            sisa = number_string.length % 3,
            rupiah = number_string.substr(0, sisa),
            ribuan = number_string.substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        return rupiah;
    }

    function listrincianspj() {
        var bdrincspj = '';
        var bdrincspj2 = '';
        var kds = $('#kodeks').val();
        var jns;
        var nobkt;
        var kdrjk;
        var ketrjk;
        var totanggaranmsk = 0;
        var totanggaranklr = 0;

        $.ajax({
            url: "{{route('admindinas.penatausahaan.list.rincian')}}",
            type: 'GET',
            data: {
                kds: kds
            },
            dataType: 'JSON',
            cache: false,
            async: true,
            success: function(w) {
                for (let k = 0; k < w.length; k++) {
                    totanggaranmsk += parseFloat(w[k].ang_masuk);
                    totanggaranklr += parseFloat(w[k].ang_keluar);
                    if (w[k].jns_trans == 1) {
                        jns = "T";
                    } else {
                        jns = "B";
                    }

                    if (w[k].nobukti == null) {
                        nobkt = "-";
                    } else {
                        nobkt = w[k].nobukti;
                    }

                    if (w[k].kd_rek_rujukan == null) {
                        kdrjk = "-";
                        ketrjk = "-";
                    } else {
                        kdrjk = w[k].kd_rek_rujukan;
                        ketrjk = w[k].ket_rek_rujukan;
                    }

                    bdrincspj2 = '<tr style="background-color:#89f0d9">' +
                        '<td style="text-align:center"><strong>Total</strong></td>' +
                        '<td></td>' +
                        '<td></td>' +
                        '<td></td>' +
                        '<td></td>' +
                        '<td></td>' +
                        '<td></td>' +
                        '<td style="text-align:right"><strong>' + convertcurrencyIDR(totanggaranmsk) + '</strong></td>' +
                        '<td style="text-align:right"><strong>' + convertcurrencyIDR(totanggaranklr) + '</strong></td>' +
                        '<td></td>' +
                        '<td></td>' +
                        '<td></td>' +
                        '<td></td>' +
                        +'</tr>';
                    bdrincspj += '<tr>' +
                        '<td>' + convertDateDBtoIndo(w[k].tgl_trans_perincian) + '</td>' +
                        '<td>' + w[k].kd_rek + '</td>' +
                        '<td>' + w[k].ket_rek + '</td>' +
                        '<td>' + w[k].urut + '</td>' +
                        '<td>' + nobkt + '</td>' +
                        '<td>' + jns + '</td>' +
                        '<td>' + w[k].ket_trans_perincian + '</td>' +
                        '<td style="text-align:right;">' + convertcurrencyIDR(w[k].ang_masuk) + '</td>' +
                        '<td style="text-align:right;">' + convertcurrencyIDR(w[k].ang_keluar) + '</td>' +
                        '<td>' + w[k].jns_trans_ang + '</td>' +
                        '<td>' + kdrjk + '</td>' +
                        '<td>' + ketrjk + '</td>' +
                        '<td>' +
                        '<a class="btn btn-warning btn-sm icon-only white edit" data-id="' + w[k].idtransperincian + '" data-tgl="' + w[k].tgl_trans_perincian + '" data-kdrek="' + w[k].kd_rek + '" data-ketrek="' + w[k].ket_rek + '" data-kdrekrjk="' + w[k].kd_rek_rujukan + '" data-ketrekrjk="' + w[k].ket_rek_rujukan + '" data-kettrans="' + w[k].ket_trans_perincian + '" data-urut="' + w[k].urut + '" data-jns="' + w[k].jns_trans + '" data-nobkt="' + w[k].nobukti + '" data-angmsk="' + w[k].ang_masuk + '" data-angklr="' + w[k].ang_keluar + '"><i class="fa fa-pencil"></i></a>&nbsp' +
                        '<a class="btn btn-danger btn-sm icon-only white delete" data-id="' + w[k].idtransperincian + '" ><i class="fa fa-trash"></i></a>&nbsp' +
                        '<a class="btn btn-azure btn-sm icon-only white print" data-id="' + w[k].idtransperincian + '" ><i class="fa fa-print"></i></a>&nbsp' +
                        '</td>' +
                        '</tr>';
                }
                //alert(totanggaranmsk);
                $('#bdrincspj').html(bdrincspj2);
                $('#bdrincspj').append(bdrincspj);
            }
        })
    }
    $('#bdrek').on('click', '.plhrekkeg', function() {
        var xr = $('#xrujukan').val();
        if (xr == 1) {
            $('[name="trans_kd_rek_rujuk"]').val($(this).attr('data-kd'));
            $('[name="trans_ket_rek_rujuk"]').val($(this).attr('data-ket'));
        } else {
            $('[name="trans_kd_rek"]').val($(this).attr('data-kd'));
            $('[name="trans_ket_rek"]').val($(this).attr('data-ket'));
        }
    })
    $('#bdrek').on('click', '.plhrekpjk', function() {
        $('[name="trans_kd_rek"]').val($(this).attr('data-kd'));
        $('[name="trans_ket_rek"]').val($(this).attr('data-ket'));
        $('#xrujukan').val(1);
        fieldrujukan.style.display = "block";
    })

    function datatablerinckeg() {
        $('#tblrinckeg').DataTable({
            "aLengthMenu": [
                [-1],
                ["All"]
            ],
            "language": {
                search: ""
            },
            "deferRender": true,
            "scrollY": 500,
            // "scrollY": ,
            "scrollCollapse": true,
            "scroller": true
        });
        $('#tblrinckeg').each(function() {
            var datatable = $(this);
            // SEARCH - Add the placeholder for Search and Turn this into in-line form control
            var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            search_input.attr('placeholder', 'Search');
            search_input.removeClass('form-control-sm');
            // LENGTH - Inline-Form control
            var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
            length_sel.removeClass('form-control-sm');
        });
    }

    $('#btnsimpan').on('click', function() {
        var formspj = new FormData($('#formspj')[0]);
        var id = $('#idtransrinc').val();
        var url;
        if (id == "") {
            url = "{{route('admindinas.penatausahaan.rincian.post')}}";
        } else {
            url = "{{route('admindinas.penatausahaan.rincian.update')}}"
        }
        $.ajax({
            url: url,
            data: formspj,
            dataType: 'JSON',
            type: 'POST',
            processData: false,
            contentType: false,
            success: function(e) {
                if (e.stat == true) {
                    Notify('Berhasil simpan data', 'top-right', '5000', 'success', 'fa-check', true);
                    document.getElementById("formspj").reset();
                    fieldrujukan.style.display = "none";
                    listrincianspj();
                    return false;
                } else {
                    Notify('Terjadi kesalahan', 'top-right', '5000', 'danger', 'fa-bolt', true);
                    return false;
                }
            }
        })
    })

    $('#bdrincspj').on('click', '.edit', function() {

        $('[name="idtransrinc"]').val($(this).attr('data-id'));
        $('[name="tgl_trans_perincian"]').val($(this).attr('data-tgl'));
        $('[name="trans_kd_rek"]').val($(this).attr('data-kdrek'));
        $('[name="trans_ket_rek"]').val($(this).attr('data-ketrek'));
        $('[name="ket_trans_rincian"]').val($(this).attr('data-kettrans'));
        $('[name="urut"]').val($(this).attr('data-urut'));

        $('[name="ang_masuk"]').val($(this).attr('data-angmsk'));
        $('[name="ang_keluar"]').val($(this).attr('data-angklr'));
        var kd_rek_rjk = $(this).attr('data-kdrekrjk');
        var nobkt = $(this).attr('data-nobkt');
        if (kd_rek_rjk != "null") {
            fieldrujukan.style.display = "block";
            $('[name="trans_kd_rek_rujuk"]').val($(this).attr('data-kdrekrjk'));
            $('[name="trans_ket_rek_rujuk"]').val($(this).attr('data-ketrekrjk'));
        } else {
            fieldrujukan.style.display = "none";
        }
        if (nobkt != "null") {
            $('[name="nobukti"]').val(nobkt);
        } else {
            $('[name="nobukti"]').val("");
        }
        var jns = $(this).attr('data-jns');
        if (jns == "1") {
            document.getElementById("TR").checked = true;
        } else {
            document.getElementById("TU").checked = true;
        }

    })

    $('#bdrincspj').on('click', '.delete', function() {
        $('#mdlhps').modal('show');
        $('#xidtrans').val($(this).attr('data-id'));
    })
    $('#btnhapus').on('click', function() {
        var xid = $('#xidtrans').val();
        $.ajax({
            url: "{{route('admindinas.penatausahaan.rincian.delete')}}",
            type: 'GET',
            data: {
                xid: xid
            },
            dataType: 'JSON',
            cache: false,
            success: function(r) {
                if (r.stat == true) {
                    Notify('Berhasil hapus data', 'top-right', '5000', 'blue', 'fa-check', true);
                    $('#xidtrans').val("");
                    listrincianspj();
                    return false;
                } else {
                    Notify('Terjadi kesalahan', 'top-right', '5000', 'danger', 'fa-bolt', true);
                    return false;
                }
            }
        })
    })
</script>
@endsection