@extends('layouts.app')
@section('title', 'Verif KTP - AreaGamer')

@section('content')
<div class="container pt-4">
    <div class="mt-5 pt-3">
        <div class="card shadow bg-white rounded">
            <div class="card-body">
                <h5 class="card-title">Verification KTP</h5>
                <div class="border-top"></div>
                <form method="POST" action="/veritKTP">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card p-3">
                                <div id="my_camera"></div>
                                <br>
                                <button type="button" class="btn btn-primary"  onClick="take_snapshot()">
                                    <i class="bi bi-camera"></i>
                                    Take Snapshot
                                </button>
                                <input type="hidden" name="image" class="image-tag">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="results">Your captured image verification KTP will appear here...</div>
                        </div>
                        <div class="col-md-12 text-center">
                            <br>
                            <button class="btn btn-primary">
                                <i class="bi bi-file-earmark-arrow-up"></i>
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script language="JavaScript">
        Webcam.set({
            width: 475,
            height: 350,
            image_format: 'jpeg',
            jpeg_quality: 90
        });

        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
            });
        }
    </script>
@endsection
