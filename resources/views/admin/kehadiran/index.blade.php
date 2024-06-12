
 @extends('admin.layout.index')
@section('content')
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#!">Kehadiran</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>KEHADIRAN</h5>
                        <span class="d-block m-t-5"> </span>
                    </div>
                    <form action="{{ route('export.hadir') }}">
                        <button type="submit" class="btn btn-primary">Export Kehadiran</button>
                    </form>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pegawai</th>
                                        <th>jam Masuk</th>
                                        <th>jam Keluar</th>
										<th>insentive</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pegawai as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->user[0]->name }}</td>
                                        <td>{{ $p->jam_datang }}</td>
                                        <td>{{ $p->jam_pulang }}</td>
                                        <td>{{ $p->insentive }}</td>
										<td></td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection






