@extends('layouts.superApp')

@section('addButton')
    <li>
        <a href="/site/create" class="dropdown-toggle">
            <i class="material-icons">add</i>
            <p class="hidden-lg hidden-md">Add_Data</p>
        </a>
    </li>
@endsection

@section('konten')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Sites Data</h4>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Site Name</th>
                                        <th>City</th>
                                        <th>Province</th>
                                        <th>URL</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($data as $row)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $row['site_name'] }}</td>
                                        <td>{{ $row['site_city'] }}</td>
                                        <td>{{ $row['site_province'] }}</td>
                                        <td>{{ $row['site_url'] }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ $row['site_url'] }}" type="button" rel="tooltip" class="btn btn-success btn-simple" target="_blank">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="/site/update/{{ $row['site_id'] }}" type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection