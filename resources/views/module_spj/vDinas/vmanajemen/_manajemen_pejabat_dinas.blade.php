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
            <li class="active">Pejabat Dinas</li>
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
                        <span class="widget-caption"><i class="fa fa-th-large"></i> Pejabat Dinas </span>
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

                        <table class="table table-striped table-responsive table-hover" id="tblpejabat">
                            <thead>
                                <tr>
                                    <th width="5%">No.</th>
                                    <th width="25%">NIP.</th>
                                    <th width="25%">Nama.</th>
                                    <th style="text-align:center" width="15%">Status.</th>
                                    <th style="text-align:center">Info.</th>
                                    <th style="text-align:center">Aksi.</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="widget">
                    <div class="widget-header bg-lightred">
                        <span class="widget-caption"><i class="fa fa-user"></i> Identitas Pejabat </span>
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
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-1 control-label no-padding-right">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP (Nomor Induk Pegawai)">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" id="btncek" class="btn btn-circle btn-blue btn-xs">...</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">P/G</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="pang" name="pang" placeholder="Pangkat">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="gol" name="gol" placeholder="Golongan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-1 control-label no-padding-right">Status</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="Status Pejabat">
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-header bg-lightred">
                                    <span class="widget-caption"><i class="fa fa-th-large"></i> Kegiatan Dinas </span>
                                </div>
                                <div class="widget-body">
                                    <table class="table table-striped table-responsive table-hover" id="tblkegiatan">
                                        <thead>
                                            <tr>
                                                <th width="5%">No.</th>
                                                <th width="25%">Kodek.</th>
                                                <th width="25%">KET Kegiatan.</th>
                                                <th style="text-align:center" width="15%">Anggaran.</th>
                                                <th style="text-align:center">Aksi.</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-10">
                                    <button type="button" style="float: right;" class="btn btn-blue btn-lg">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="mdlcek">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">List Pegawai</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-responsive table-hover" id="tblpgw">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th width="25%">NIP.</th>
                            <th>Nama.</th>
                            <th style="text-align:center" width="25%">Pangkat.</th>
                            <th style="text-align:center" width="10%">Gol.</th>
                        </tr>
                    </thead>
                    <tbody id="bdpgw">
                        @php $no=1; @endphp
                        @foreach ($pegawai as $pg)
                        <tr style="cursor:pointer;" class="plh" data-nip="{{$pg->nip}}" data-nama="{{$pg->gdp.' '.$pg->nama.' '.$pg->gdb}}" data-pang="{{$pg->pangkat}}" data-gol="{{$pg->golru}}">
                            <td>{{$no++}}</td>
                            <td>{{$pg->nip}}</td>
                            <td>{{$pg->gdp.' '.$pg->nama.' '.$pg->gdb}}</td>
                            <td>{{$pg->pangkat}}</td>
                            <td>{{$pg->golru}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        $('#tblpejabat').DataTable();
        $('#tblpgw').DataTable();
    })

    $('#btncek').on('click', function() {
        $('#mdlcek').modal('show');
    })
    $('#bdpgw').on('click', '.plh', function() {
        $('[name="nip"]').val($(this).attr('data-nip'));
        $('[name="nama"]').val($(this).attr('data-nama'));
        $('[name="pang"]').val($(this).attr('data-pang'));
        $('[name="gol"]').val($(this).attr('data-gol'));
        $('#mdlcek').modal('hide');
    })
</script>
@endsection