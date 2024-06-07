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
                                <form action="{{ route('tidakmasuk') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alasan</label>
                                        <input type="text" class="form-control" id="alasan" aria-describedby="alasan" placeholder="alasan" required="required" name="alasan">
                                        <small id="alasan" class="form-text text-muted">isikan alasan anda tidak masuk.</small>
                                    </div> 
                                    <button type="submit" class="btn  btn-primary">Submit</button>
                                </form>
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