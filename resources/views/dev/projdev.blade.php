@extends('layouts.nav')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- css: text-transform -->
                <div class="card-header"><h2 style="display: inline-block;"><strong>{{ $project->name }}</strong></h2>
                    @if (Auth::check())
                        @if ($project->devs->whereIn('id', Auth::user()->id)->isNotEmpty())
                            <button value="{{ $project->id }}" id="joinProject" type="button" class="btn btn-danger" style="display: inline; float: right; width: 100px;">Disjoin</button>
                        @else
                            <button value="{{ $project->id }}" id="joinProject" type="button" class="btn btn-success" style="display: inline; float: right; width: 100px;">Join</button>
                        @endif
                    @else
                        <a href={{ url('/project/redirect-to-login') }}><button value="{{ $project->id }}" id="joinProject" type="button" class="btn btn-success" style="display: inline; float: right; width: 100px;">Join</button></a>
                    @endif

                    <meta name="csrf_token" content="{{ csrf_token() }}">
                    <h4>{{ $project->type->name }}</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('warning'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('warning') }}
                        </div>
                    @endif

                    <p>{{ $project->description }}</p>

                    <hr>
                    <h6>Files:</h6>
                    @if ($project->files->isNotEmpty())
                        @foreach ($project->files as $file)
                        <button value="{{ $file->id }}" type="button" class="btn btn-light">
                            <img src="{{ asset("/images/$file->name") }}" alt="{{ $file->name }}" class="img-thumbnail" style="height: 100px; width:100px;">
                        </button>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('individual_javascript')

<script>
    $(window).on("load", function() {
        setTimeout(function() {
            $(".alert").remove();
        }, 5000);
    });

    $(document).ready(function() {
        $('#joinProject').click(function() {
            var projectID = $(this).val();
            var btnText = $(this).text();
            var token = $('[name="csrf_token"]').attr('content');
            // console.log(projectID + btnText + token);
            $.post('/project/join',
            {
                project_id: projectID,
                btnText: btnText,
                _token: token
            },
            function(data, status) {
                $('#joinProject').html(data);
                if (data == 'Join') {
                    $('#joinProject').removeClass("btn-danger").addClass("btn-success");
                } else {
                    $('#joinProject').removeClass("btn-success").addClass("btn-danger");
                }
            });
        });
    });
</script>

@endsection
