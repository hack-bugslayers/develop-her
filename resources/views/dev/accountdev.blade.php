@extends('layouts.nav')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- css: text-transform -->
                <div class="card-header"><strong>{{ __('ACCOUNT DETAILS') }}</strong></div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif

                <div class="card-body">
                    <form method="POST" action={{ url("/accountdev/update") }} aria-label="{{ __('Account Details') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="first_name" value="{{ $user->first_name ? $user->first_name : old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="last_name" value="{{ $user->last_name ? $user->last_name : old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contactnumber" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="contactnumber" type="tel" class="form-control{{ $errors->has('contactnumber') ? ' is-invalid' : '' }}" name="contact_number" value="{{ $user->contact_number ? $user->contact_number : old('contactnumber') }}" required autofocus>

                                @if ($errors->has('contactnumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contactnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="skills" class="col-md-4 col-form-label text-md-right">{{ __('Skills') }}</label>

                            <div class="col-md-6">
                                @foreach($skills as $skill)
                                    @if (in_array($skill->name, $user_skills) && count($user_skills))
                                     <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$skill->name}}" id="{{$skill->name}}" name="skills[]" checked>
                                        <label class="form-check-label" for="{{$skill->name}}">{{$skill->name}}</label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$skill->name}}" id="{{$skill->name}}" name="skills[]">
                                        <label class="form-check-label" for="{{$skill->name}}">{{$skill->name}}</label>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="portfolio" class="col-md-4 col-form-label text-md-right">{{ __('Portfolio Website') }}</label>

                            <div class="col-md-6">
                                <input id="portfolio" type="text" class="form-control{{ $errors->has('portfolio') ? ' is-invalid' : '' }}" name="portfolio" value="{{ $user->portfolio ? $user->portfolio : old('portfolio') }}" autofocus>

                                @if ($errors->has('portfolio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('portfolio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>
</div>
@endsection
