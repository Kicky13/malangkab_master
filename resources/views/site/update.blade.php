@extends('layouts.superApp')

@section('konten')
    <div class="content">
        <div class="container-fluid">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <span>{{ $error }}</span>
                    </div>
                @endforeach
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="post" action="/site/update/{{ $data['site_id'] }}" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="card-header card-header-text" data-background-color="rose">
                                <h4 class="card-title">Add Form</h4>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Site Name</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" value="{{ $data['site_name'] }}" name="nama" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">City</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" name="city" value="{{ $data['site_city'] }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Province</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" name="province" value="{{ $data['site_province'] }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Description</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <textarea class="form-control" name="description" required>{{ $data['site_description'] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">URL</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input placeholder="Please insert active url" value="{{ $data['site_url'] }}" type="text" class="form-control" id="url" name="url" required>
                                            <iframe src="{{ $data['site_url'] }}" width="100%" height="500" id="web"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-fill btn-rose">update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            console.log('window');
            $('#url').keyup(function () {
                console.log('ganti');
                $('#web').attr('src', $('#url').val());
            });
        });
    </script>
@endsection