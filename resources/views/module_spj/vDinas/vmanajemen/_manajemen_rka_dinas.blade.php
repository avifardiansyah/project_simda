@extends('module_spj.layout.lay_master')

@section('content')
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{route('dinas.dashboard')}}">Home</a>
            </li>
            <li class="active">RKA</li>
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
                        <span class="widget-caption"><i class="fa fa-th-large"></i> Rencana Kegiatan dan Anggaran <?= date('Y'); ?></span>
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
                        <table class="table table-striped table-responsive table-hover" id="tblrka">
                            <thead>
                                <tr>
                                    <th width="5%">No.</th>
                                    <th width="25%">Program.</th>
                                    <th width="25%">Kegiatan.</th>
                                    <th style="text-align:center" width="15%">Anggaran.</th>
                                    <th style="text-align:center">PPTK.</th>
                                    <th style="text-align:center">BPT.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;
                                @endphp
                                @foreach ($datakeg as $value)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$value->ket_program}}</td>
                                    <td>{{$value->ket_kegiatan}}</td>
                                    <td style="text-align: right;">Rp. {{number_format($value->anggaran,0,',','.')}}</td>
                                    <td></td>
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
    <!-- /Page Body -->
</div>
@endsection

@section('javascript')
<script>
    $().ready(function() {
        $('#tblrka').DataTable();
    })
</script>
@endsection