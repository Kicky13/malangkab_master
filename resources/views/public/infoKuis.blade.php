@extends ('layouts.pubApp')

@section('konten')
        <!-- start:main -->
        <div class="container">
            <div id="main">
                <!-- start:breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Cover</a></li>
                    <li class="active">Kuesioner</li>
                </ol>
                <!-- end:breadcrumb -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Kuesioner Evaluasi
                        </h2>
                    </div>
                </div>
                <!-- start:Form Biodata -->
                <form role="form" method="post"
                      action="/kuesioner/tempInfor">
                    {{ csrf_field() }}
                    <section id="biodata">
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Masukkan Biodata singkat anda sebelum mengisi kuesioner
                                    </header>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama"
                                                   placeholder="Masukkan nama anda" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="usia">Usia</label>
                                            <input type="number" max="200" class="form-control" id="usia"
                                                   placeholder="Usia Anda Sekarang" name="age" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat"
                                                   placeholder="Alamat Rumah Anda" name="address" required min="5">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                @foreach($web as $value)
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <header class="panel-title">
                                            <input required type="radio" name="web" value="{{ $value->site_id }}"> {{ $value->site_name }}
                                        </header>
                                    </div>
                                    <div class="panel-body">
                                        <iframe src="{{ $value->site_url }}" width="100%" height="100%"></iframe>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <a href="/" type="button"
                           class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-info">Next</button>
                    </section>
                </form>
                <!-- Start: Kuesioner-->
            </div>
        </div>
        <!-- end:main -->
@endsection
@section('script')

@endsection