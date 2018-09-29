@extends('layouts.nav')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- css: text-transform -->
                <div class="card-header"><h2 style="display: inline-block;"><strong>Aling Bebang Specialty Cakes</strong></h2>
                                      
                            <button value="{{ $project->id }}" id="joinProject" type="button" class="btn btn-success" style="display: inline; float: right; width: 100px;">Completed</button>

                <div class="card-body">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <hr>
                    <h6>Files:</h6>
                            <img src="{{ asset("/images/$file->name") }}" alt="{{ $file->name }}" class="img-thumbnail" style="height: 100px; width:100px;">
                            <img src="{{ asset("/images/$file->name") }}" alt="{{ $file->name }}" class="img-thumbnail" style="height: 100px; width:100px;">
                            <img src="{{ asset("/images/$file->name") }}" alt="{{ $file->name }}" class="img-thumbnail" style="height: 100px; width:100px;">

                    <h6>Link to Prototype:</h6>
                    <a href="">www.prototype.com</a>

                    <h6>Developers:</h6>
                    <a href=""><h6>Mars</h6></a> &  <a href=""><h6>Des</h6></a>
                    <h6>Client:</h6>
                    <a href=""><h6>Aling Bebang</h6></a>

                    <h6>Programming Languages:</h6>
                    <button>html</button><button>html</button><button>css</button><button>php</button>

                    <h6>Ratings:</h6>
                    <textarea></textarea>
    

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
