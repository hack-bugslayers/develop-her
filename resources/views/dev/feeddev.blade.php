@extends('layouts.nav')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- css: text-transform -->
                <div class="card-body">

                    <table class="table">
                      <thead class="thead-dark text centered">
                        <tr>
                          <th scope="col">COMMUNITY PROJECTS</th>

                        </tr>
                      </thead>
                      <tbody>
                        @if ($projects !== null)
                            @foreach ($projects as $project)
                                <tr>
                                  <th scope="row">
                                    <a href={{ url("/projdev/$project->id") }}>{{ $project->name }}</a>
                                    <p>{{ $project->type->name }}</p>
                                  </th>
                                </tr>
                            @endforeach
                        @endif
                      </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
