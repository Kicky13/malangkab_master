@extends('layouts.pubApp')

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
            <!-- Start: Kuesioner-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Berikut Tampilan Website yang akan anda nilai.
                        </header>
                        <div class="panel-body">
                            <section id="unseen">
                                <iframe src="{{ session('url') }}" width="100%" height="350px"></iframe>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="form-group">
                                <label for="alamat">Web Pembanding</label>
                                <input type="text" class="form-control" id="url"
                                       placeholder="Masukkan Alamat Web Pembanding" required>
                            </div>
                        </header>
                        <div class="panel-body">
                            <section id="unseen">
                                <iframe id="web" width="100%" height="350px"></iframe>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
            <form role="form" method="post" action="/kuesioner/publicSubmit">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Berilah jawaban pada setiap pertanyaan berdasarkan pengetahuan anda. <strong>SS</strong>
                                =
                                Sangat Setuju, <strong>S</strong> = Setuju, <strong>N</strong> = Netral,
                                <strong>TS</strong>
                                = Tidak Setuju, <strong>STS</strong> = Sangat Tidak Setuju
                            </header>
                            <input name="name" type="hidden" value="{{ session('name') }}">
                            <input name="age" type="hidden" value="{{ session('age') }}">
                            <input name="address" type="hidden" value="{{ session('address') }}">
                            <input name="web" type="hidden" value="{{ session('web') }}">
                            <input name="label" type="hidden" value="PUB">
                            <div class="panel-body">
                                <section id="unseen">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th class="">SS</th>
                                            <th class="numeric">S</th>
                                            <th class="numeric">N</th>
                                            <th class="numeric">TS</th>
                                            <th class="numeric">STS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $value)
                                        <tr>
                                            <td> </td>
                                            <td>{{ $value->question_content }}</td>
                                            <td class="numeric"><input required type="radio" name="{{ $value->question_label }}" value="5"></td>
                                            <td class="numeric"><input required type="radio" name="{{ $value->question_label }}" value="4"></td>
                                            <td class="numeric"><input required type="radio" name="{{ $value->question_label }}" value="3"></td>
                                            <td class="numeric"><input required type="radio" name="{{ $value->question_label }}" value="2"></td>
                                            <td class="numeric"><input required type="radio" name="{{ $value->question_label }}" value="1"></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a href="/" type="submit" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end:main -->
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#url').keyup(function () {
                $('#web').attr('src', $('#url').val());
            });
        });
    </script>
@endsection