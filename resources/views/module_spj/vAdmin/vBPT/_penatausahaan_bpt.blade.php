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
        </ul>
    </div>
    <!-- /Page Breadcrumb -->
    <!-- Page Header -->
    <div class="page-header position-relative">

        <!--Header Buttons-->
        <div class="header-buttons">
            <a class="sidebar-toggler" href="#">
                <i class="fa fa-arrows-h"></i>
            </a>
            <a class="refresh" id="refresh-toggler" href="">
                <i class="glyphicon glyphicon-refresh"></i>
            </a>
            <a class="fullscreen" id="fullscreen-toggler" href="#">
                <i class="glyphicon glyphicon-fullscreen"></i>
            </a>
        </div>
        <!--Header Buttons End-->
    </div>
    <!-- /Page Header -->
    <!-- Page Body -->
    <div class="page-body">
        <!-- Your Content Goes Here -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="widget">
                    <div class="widget-header bg-lightred">
                        <span class="widget-caption"><i class="fa fa-th-large"></i> Kegiatan Tahun <?= date('Y'); ?> </span>
                        <div class="widget-buttons">
                            <a href="#" data-toggle="maximize">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="#" data-toggle="collapse">
                                <i class="fa fa-minus"></i>
                            </a>
                            <a href="#" data-toggle="dispose">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>

                    <div class="widget-body">

                        <table class="table table-striped table-responsive table-hover" id="tblkegbpt">
                            <thead>
                                <tr>
                                    <th width="5%">No.</th>
                                    <th width="25%">Program.</th>
                                    <th width="25%">KET Kegiatan.</th>
                                    <th style="text-align:center" colspan="2">PPTK</th>
                                    <th style="text-align:center" width="10%">Anggaran.</th>
                                </tr>
                                <tr>
                                    <th width="5%">1.</th>
                                    <th width="5%">2.</th>
                                    <th width="25%">3.</th>
                                    <th style="text-align:center">NIP</th>
                                    <th style="text-align:center">Nama</th>
                                    <th style="text-align:center" width="10%">6.</th>
                                </tr>
                            </thead>
                            <tbody id="bdkegbpt">
                                @foreach ($kegiatan as $index=>$keg)
                                <tr style="cursor: pointer;" class="rinckeg" data-kodek="{{$keg->kodek}}" data-ketkeg="{{$keg->ket_kegiatan}}" data-ketpro="{{$keg->ket_program}}">
                                    <td>{{$index+1}}</td>
                                    <td>{{$keg->ket_program}}</td>
                                    <td>{{$keg->ket_kegiatan}}</td>
                                    <td style="text-align: center;">{{$keg->nip_pptk}}</td>
                                    <td style="text-align: center;">{{$keg->gdp.' '.$keg->nama.' '.$keg->gdb}}</td>
                                    <td style="text-align: right;">Rp. {{number_format($keg->anggaran)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-12" id="rinckegiatan">
                <div class="widget">
                    <div class="widget-header bg-lightred">
                        <span class="widget-caption" id="labelrinc"><i class="fa fa-th-large"></i> </span>
                        <div class="widget-buttons">
                            <a href="#" data-toggle="maximize">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="#" data-toggle="collapse">
                                <i class="fa fa-minus"></i>
                            </a>
                            <a href="#" data-toggle="dispose">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <table class="table table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                </tr>
                            </thead>
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
    var rk = document.getElementById('rinckegiatan');
    $().ready(function() {
        $('#tblkegbpt').DataTable();
        rk.style.display = "none";
    })
    $('#bdkegbpt').on('click', '.rinckeg', function() {
        var kd = $(this).attr('data-kodek');
        var url = '<?php URL::to('/') ?>' + 'rinciankegiatan/' + kd;
        window.location.href = url;
    })
</script>
@endsection