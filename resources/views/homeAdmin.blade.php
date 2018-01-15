@extends('layouts.superApp')

@section('konten')
    <div class="content">
        <div class="container-fluid">
            <div class="header text-center">
                <h3 class="title">Welcome To Malangkab Website</h3>
                <p class="category">Please Visit Our Sites
                    <a target="_blank" href="http://malangkab.go.id/">Malangkab</a>
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-content">
                            <div class="iframe-container hidden-sm hidden-xs">
                                <iframe src="http://malangkab.go.id/">
                                    <p>Your browser does not support iframes.</p>
                                </iframe>
                            </div>
                            <div class="col-md-6 hidden-lg hidden-md text-center">
                                <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. Check the
                                    <a href="http://malangkab.go.id/" target="_blank">Malangkab</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            // Javascript method's body can be found in /js/demos.js
            demo.initDashboardPageCharts();

            demo.initVectorMap();
        });
    </script>
@endsection