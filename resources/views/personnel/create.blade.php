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
                        <form method="post" action="/personnel/add" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="card-header card-header-text" data-background-color="rose">
                                <h4 class="card-title">Add Form</h4>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Name</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" name="nama" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Register Number</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" name="register_number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Job Position</label>
                                    <div class="col-lg-5 col-md-6 col-sm-3">
                                        <select name="job" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" required>
                                            <option disabled selected>Choose a Job</option>
                                            @foreach ($data as $item)
                                            <option value="{{ $item->position_id }}">{{ $item->job_position }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Password</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="password" class="form-control" name="password" required>
                                            <span class="help-block">Please input easy password for login.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Address</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" name="address" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection