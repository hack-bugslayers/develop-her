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
					      <th scope="col">COMMUNITY DEVELOPERS</th>

					    </tr>
					  </thead>
					  <tbody>
					  	@if ($developers->isNotEmpty())
					  		@foreach($developers as $developer)
						    <tr>
						      <th scope="row">
						      	<a href={{ url("/profiledev/$developer->id") }}><h4>{{ $developer->first_name . ' ' . $developer->last_name }}</h4></a>
						      	@foreach ($developer->ratings as $rating)
									<p>{{ $rating->name . ': ' . $rating->pivot->value }}</p>
						      	@endforeach
								@foreach($developer->skills as $skill)
						      	<button class="btn btn-success" style="display: inline-block; padding: 1px;"><small>{{ $skill->name }}</small></button>
						      	@endforeach
						      </th>
						    </tr>
					    	@endforeach
					    @endif
					  </tbody>
					</table>

                    {{ $developers->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
