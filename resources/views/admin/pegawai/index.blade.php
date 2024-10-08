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
                            <h5 class="m-b-10">Selamat Memulai aktifitas dengan semangat</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#!">pegawai</a></li>
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
                        <h5>PEGAWAI</h5>
                        <span class="d-block m-t-5"></span>
                        <a href="{{ route('create') }}"><button class="btn btn-primary">Tambah Data</button></a>
                    </div>
                    <div class="card-body table-border-style">
                        <form action="{{ route('export.user') }}">
                            <button type="submit" class="btn btn-primary">Export Pegawai</button>
                        </form>
                        <div class="table-responsive">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pegawai</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No.hp</th>
                                        <th>Username</th>
                                        <th>aksi</th>
                                        
                                        {{-- <th>test</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($pegawai as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>{{ $p->alamat}}</td>
                                        <td>{{ $p->no_hp}}</td>
                                        <td>{{ $p->username}}</td>

                                        <td>
                                            <a href="/pegawai/edit/{{ $p->id }}"><button class="btn  btn-outline-primary">Update</button></a>
                                            <a href="/delete/{{ $p->id }}"><button class="btn  btn-outline-primary">Delete</button></a>
                                            <!-- <a href="/pegawai/hapus/{{ $p->id }}"><button class="btn  btn-outline-primary">Delete</button></a>
                                            {{-- <a href="{{ route('destroy', $p->id) }}"><button type="button" class="btn btn-primary">Delete</button></a> --}} -->
                                        </td>
                                        <!-- <td>
                                            <form action="{{ route('destroy', $p->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                            </form>
                                        </td> -->
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
