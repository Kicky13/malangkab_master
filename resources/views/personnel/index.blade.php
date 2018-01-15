@extends('layouts.superApp')

@section('addButton')
    <li>
        <a href="/personnel/add" class="dropdown-toggle">
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
                        <h4 class="card-title">Personnel Data</h4>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Register Number</th>
                                        <th>Job Position</th>
                                        <th>Address</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($data as $row)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $row['admin_name'] }}</td>
                                            <td>{{ $row['register_number'] }}</td>
                                            <td>{{ $row['job_position'] }}</td>
                                            <td>{{ $row['admin_address'] }}</td>
                                            <input type="hidden" name="id" value="{{ $row['admin_id'] }}">
                                            <td class="td-actions text-right">
                                                <a href="/personnel/update/{{ $row['admin_id'] }}" type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a type="button" rel="tooltip" data-id="{{ $row['admin_id'] }}" class="btn btn-danger btn-simple hapus">
                                                    <i class="material-icons">close</i>
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

@section('script')
    <script>
        $(document).ready(function () {
           $('.hapus').click(function () {
               var id = $(this).attr('data-id');
               console.log(id);
               swal({
                   title: 'Are you sure?',
                   text: "You won't be able to revert this!",
                   type: 'warning',
                   showCancelButton: true,
                   confirmButtonColor: '#3085d6',
                   cancelButtonColor: '#d33',
                   confirmButtonText: 'Yes, delete it!'
               }).then(function () {
                   window.location.replace('/personnel/delete/'+id);
               });
           });
        });
    </script>
@endsection