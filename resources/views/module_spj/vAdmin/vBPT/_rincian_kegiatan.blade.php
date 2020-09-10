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
        <div class="row">
            <div class="col-xs-12 col-md-12">
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
</div>
@endsection
@section('javascript')
<script>
    $().ready(function() {
        $('#tblrinckeg').DataTable();
    })
</script>
@endsection