@extends('layouts.superApp')

@section('addButton')
    <li>
        <a id="tambah" class="dropdown-toggle">
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
                        <h4 class="card-title">Periode Data</h4>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Month Range</th>
                                        <th>Year</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($data as $row)
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td>{{ $row['periode_month'] }}</td>
                                        <td>{{ $row['periode_years'] }}</td>
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
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            console.log('siap123');
            $('#tambah').click(function () {
               console.log('klik');
                $('#msg').html();
                var username = $(this).val();
                $.ajax({
                    type        :   'POST',
                    url         :   '/periode/create',
                    data        :   {
                        "nilai" : 1
                    }
                }).done(function (data) {
                    console.log(data);
                    $('#msg').html(data);
                    if (data=='1'){
                        swal('Sorry...', 'Periode Already Exist!!', 'error');
                    } else {
                        location.reload();
                        swal('Success', 'Periode Added', 'success');
                    }
                });
            });
        });
    </script>
@endsection