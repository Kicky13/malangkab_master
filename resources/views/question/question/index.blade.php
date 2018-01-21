@extends('layouts.superApp')

@section('konten')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Question Data</h4>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Code</th>
                                        <th>Dimension</th>
                                        <th>Question</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($data as $row)
                                    <tr>
                                        <td class="text-center">{{ $row['question_label'] }}</td>
                                        <td>{{ $row['dimension_name'] }}</td>
                                        <td>{{ $row['question_content'] }}</td>
                                        <td class="td-actions text-right">
                                            <a href="/kuesioner/update/{{ $row['question_id'] }}" type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <button type="button" data-id="{{ $row['question_id'] }}" rel="tooltip" class="btn btn-danger btn-simple hapus">
                                                <i class="material-icons">close</i>
                                            </button>
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
           console.log('ready');
           $('.hapus').click(function () {
              console.log('click');
              var id = $(this).attr('data-id');
               swal({
                   title: 'Are you sure?',
                   text: "You won't be able to revert this!",
                   type: 'warning',
                   showCancelButton: true,
                   confirmButtonColor: '#3085d6',
                   cancelButtonColor: '#d33',
                   confirmButtonText: 'Yes, delete it!'
               }).then(function () {
                   window.location.replace('/kuesioner/question/delete/'+id);
               });
           });
        });
    </script>
@endsection