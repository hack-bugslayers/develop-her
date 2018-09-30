@extends('layouts.nav2')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<nav class="navbar navbar-light bg-white">
    <a href="#" class="navbar-brand">News Feed</a>
</nav>

<div class="container-fluid gedf-wrapper">
    <div class="row">
        <div class="col-md-6 gedf-main">
            <div class="card gedf-card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Share your thoughts.</a>
                            <meta name="csrf_token" content="{{ csrf_token() }}">
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ url('/update/post') }}" method="POST">
                            @csrf
                            <textarea class="form-control" name="message" rows="3" placeholder="What are you thinking?"></textarea>
                            <button class="btn btn-primary" style="float: right; margin: 5px;">Post</button>
                        </form>
                    </div>
                </div>
            </div>

            @foreach($updates as $update)
            <div class="card gedf-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">{{ $update->user->username }}</div>
                                <div class="h7 text-muted">{{ $update->updated_at }}</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $update->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <button id="{{ 'like'.$update->id }}" class="btn btn-primary like-update" value="{{ $update->id }}">{{ count($update->likes) }} <i class="fa fa-gittip"></i>
                        {{ count($update->likes) > 1 ? 'Likes' : 'Like' }}
                    </button>
                    <button id="{{ 'comment'.$update->id }}" class="btn btn-info comment-update" value="{{ $update->id }}">{{ count($update->comments) }} <i class="fa fa-comment"></i>
                        {{ count($update->comments) > 1 ? 'Comments' : 'Comment' }}
                    </button>
                    <div>
                        @foreach($update->comments as $comment)
                            <p>
                                {{ $comment->comment  }}
                            </p>
                            {{-- <div class="mr-2">
                                <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">{{ $update->user->username }}</div>
                                <div class="h7 text-muted">{{ $update->updated_at }}</div>
                            </div> --}}
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection

@section('individual_javascript')

    <script>

        $(document).ready(function() {
            $('.like-update').click(function() {
                var update_id = $(this).val();
                var btnTxt = $(this).text();
                var token = $('[name="csrf_token"]').attr('content');
                // alert(token);
                btnTxtSanitized = btnTxt.replace(/\d+\s+/g, '');
                // alert(btnTxtsanitized);
                $.post('/update/like',
                    {
                        update_id: update_id,
                        btnTxt: btnTxtSanitized,
                        _token: token
                    },
                    function(data, status) {
                        $('#like'+update_id).html(data);
                    });
            });

            $('.comment-update').click(function() {
                var update_id = $(this).val();
                var token = $('[name="csrf_token"]').attr('content');
                // alert(update_id);

                // $.post('/update/comment',
                //     {
                //         update_id: update_id,
                //         _token: token
                //     },
                //     function(data, status) {
                //         //
                //     });

            });
        });

    </script>


@endsection