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
                            <h5 class="m-b-10">Form Elements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Karyawan</h5>
                    </div>
                    <div class="card-body">
                        <a href="/pegawai"><button class="btn  btn-outline-primary">Kembali</button></a>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- @foreach($pegawai as $p) --}}
                                <form action="/pegawai/store" method="POST">
                                    {{ csrf_field() }}

                                    {{-- <input type="hidden" name="id" value="{{ $p->id_pegawai }}"> --}}
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="masukkan nama" required="required" name="nama">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="required" name="email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="masukkan alamat" required="required" name="alamat"> 
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_ho">Nomor Telpone</label>
                                        <input type="integer" class="form-control" id="no_hp" aria-describedby="emailHelp" placeholder="masukkan No. Telpon" required="required" name="no_hp">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="integer" class="form-control" id="username" aria-describedby="emailHelp" placeholder="masukkan No. Telpon" required="required" name="username">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn  btn-primary">Submit</button>
                                </form>
                                {{-- @endforeach --}}
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Input group -->
                
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>


@endsection