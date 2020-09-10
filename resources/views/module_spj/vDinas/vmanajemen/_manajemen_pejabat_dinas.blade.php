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
                            <tbody id="bdpejabat">

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
                        <form class="form-horizontal" role="form" id="formaddpjb" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" hidden id="kodes" name="kodes" value="<?= $kodes; ?>">
                            <input type="text" hidden id="idtrans" name="idtrans">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-1 control-label no-padding-right">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP (Nomor Induk Pegawai)">
                                </div>
                                <div class="col-sm-1">
                                    <a type="button" id="btncek" class="btn btn-circle btn-blue btn-xs">...</a>
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
                                    <select name="statuspjb" id="statuspjb" class="form-control" onchange="statpilih()">
                                        <option value="0">--Pilih Status Pejabat--</option>
                                        @foreach ($statuspjb as $statuspjb)
                                        <option value="<?= $statuspjb->kdstat; ?>"><?= $statuspjb->ketstatus . ' - ' . $statuspjb->ket; ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="widget flat" id="showkeg">
                                <div class="widget-header bg-lightred">
                                    <span class="widget-caption"><i class="fa fa-th-large"></i> Kegiatan Dinas </span>
                                </div>
                                <div class="widget-body">
                                    <table class="table table-striped table-responsive table-hover" id="tblkegiatan">
                                        <thead>
                                            <tr>
                                                <th width="5%">No.</th>
                                                <th width="10%">Kodek.</th>
                                                <th>KET Kegiatan.</th>
                                                <th style="text-align:center" width="20%">Anggaran.</th>
                                                <th style="text-align:center" width="5%">Aksi.</th>
                                            </tr>
                                        </thead>
                                        <tbody id="bdkegiatan">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-10">
                                    <a type="button" style="float: right;" class="btn btn-maroon btn-lg">Batal</a>
                                    <a type="button" style="float: right;" class="btn btn-sky btn-lg" id="btnsimpan">Simpan</a>
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
                            <th style="text-align:center">Pangkat.</th>
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
        var showkeg = document.getElementById('showkeg');
        showkeg.style.display = "none";
        pejabatdinas();
    })

    function pejabatdinas() {
        var bdpejabat = '';
        $.ajax({
            url: "{{route('dinas.manajemen.list.pejabat')}}",
            type: 'GET',
            dataType: 'JSON',
            cache: false,
            async: true,
            success: function(e) {
                for (let i = 0; i < e.length; i++) {
                    var n = 1 + i;

                    bdpejabat += '<tr>' +
                        '<td>' + n + '</td>' +
                        '<td>' + e[i].nip + '</td>' +
                        '<td>' + e[i].gdp + ' ' + e[i].nama + ' ' + e[i].gdb + '</td>' +
                        '<td>' + e[i].ketstatus + ' - ' + e[i].ket + '</td>' +
                        '<td></td>' +
                        '<td></td>' +
                        +'</tr>';
                }
                $('#bdpejabat').html(bdpejabat);
            }
        })
    }

    function statpilih() {
        var kdstat = $('#statuspjb').val();
        var kodes = $('#kodes').val();
        if (kdstat == 6 || kdstat == 4) {
            showkeg.style.display = "block";
            listkegiatanopd(kodes);
        } else {
            showkeg.style.display = "none";
        }
    }
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

    function formatNumber(num) {
        return 'Rp. ' + num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    }

    function listkegiatanopd(kodes) {
        var bdkegiatan = '';
        $.ajax({
            url: "{{route('dinas.manajemen.list.kegiatan')}}",
            data: {
                kodes: kodes
            },
            dataType: 'JSON',
            type: 'GET',
            cache: false,
            async: true,
            success: function(e) {

                for (let i = 0; i < e.length; i++) {
                    var no = 1 + i;
                    bdkegiatan += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + e[i].kodek + '</td>' +
                        '<td>' + e[i].ket_kegiatan + '</td>' +
                        '<td style="text-align: center;">' + formatNumber(e[i].anggaran) + '</td>' +
                        '<td style="text-align: center;"><label><input type="checkbox" id="plhkeg" name="plhkeg[]" value="' + e[i].kodek + '"><span class="text"></span></label></td>' +
                        '</tr>';
                }
                $('#bdkegiatan').html(bdkegiatan);
                datakegiatan();
            }
        })
    }

    function datakegiatan() {
        $('#tblkegiatan').DataTable({
            "aLengthMenu": [
                [-1],
                ["All"]
            ],
            "language": {
                search: ""
            },
            "deferRender": true,
            "scrollY": 500,
            "scrollCollapse": true,
            "scroller": true
        });
        $('#tblkegiatan').each(function() {
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
        var formaddpjb = new FormData($('#formaddpjb')[0]);
        var idtr = $('#idtrans').val();
        var url;
        if (idtr == "") {
            url = "{{route('dinas.manajemen.pejabat.post')}}";
        } else {
            url = "";
        }
        $.ajax({
            url: url,
            data: formaddpjb,
            type: 'POST',
            dataType: 'JSON',
            processData: false,
            contentType: false,
            success: function(e) {
                if (e.stat == true) {
                    Notify('Berhasil simpan data', 'top-right', '5000', 'success', 'fa-check', true);
                    document.getElementById("formaddpjb").reset();
                    pejabatdinas();
                    showkeg.style.display = "none";
                    return false;
                }
            }
        })
    })
</script>
@endsection