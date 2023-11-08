@extends('home')
@section('content')

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-6">
            <div class="card-body ">
                    <div class="col-lg-12">
                        <h2>Tambah data toko</h2>
                        <div class="p-12">
                            <form action="{{ url('/gudang') }}" method="POST" type="submit">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="nama" name="nama_gudang">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="id_toko" name="toko_id">
                                </div>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected >Pilih Toko</option>
                                    @foreach ($toko as $value)
                                    <option value="1">{{ $value->id }}</option>
                                    @endforeach
                                  </select>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="kapasitas" name="kapasitas">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <a href="{{ url('/gudang')}}" class="btn btn-success">kembali</a>
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
