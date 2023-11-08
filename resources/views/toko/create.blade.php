@extends('home')
@section('content')

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-6">
            <div class="card-body ">
                    <div class="col-lg-12">
                        <h2>Tambah data toko</h2>
                        <div class="p-12">
                            <form action="{{ url('/toko') }}" method="POST" type="submit">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="npwp" name="npwp">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="nama toko" name="nama_toko">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="alamat" name="alamat">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="no telepon" name="no_telepon">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <a href="{{ url('/toko')}}" class="btn btn-success">kembali</a>
                                    <button class="btn btn-warning">tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>


@endsection
