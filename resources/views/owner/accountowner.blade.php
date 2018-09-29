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
                    <form method="POST" action={{ url("/accountowner/update") }} aria-label="{{ __('Account Details') }}">
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
                                <input id="contactnumber" type="text" class="form-control{{ $errors->has('contactnumber') ? ' is-invalid' : '' }}" name="contact_number" value="{{ $user->contact_number ? $user->contact_number : old('contactnumber') }}" required autofocus>

                                @if ($errors->has('contactnumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contactnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="businessname" class="col-md-4 col-form-label text-md-right">{{ __('Business Name') }}</label>

                            <div class="col-md-6">
                                <input id="businessname" type="text" class="form-control{{ $errors->has('business_name') ? ' is-invalid' : '' }}" name="business_name" value="{{ $user->business_name ? $user->business_name : old('businessname') }}" required autofocus>

                                @if ($errors->has('businessname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('businessname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="businessaddress" class="col-md-4 col-form-label text-md-right">{{ __('Business Address') }}</label>

                            <div class="col-md-6">
                                <input id="businessaddress" type="text" class="form-control{{ $errors->has('businessaddress') ? ' is-invalid' : '' }}" name="business_address" value="{{ $user->business_address ? $user->business_address : old('businessaddress') }}" required autofocus>

                                @if ($errors->has('businessaddress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('businessaddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="creditcardname" class="col-md-4 col-form-label text-md-right">{{ __('Credit Card Type') }}</label>

                            <div class="col-md-6">
                                <input id="creditcardname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="credit_card_name" value="{{ $user->credit_card_name ? $user->credit_card_name : old('creditcardname') }}" required autofocus placeholder="Visa, Mastercard, Amex, JCB, Discover Card">

                                @if ($errors->has('creditcardname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('creditcardname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="creditcardnumber" class="col-md-4 col-form-label text-md-right">{{ __('Credit Card Number') }}</label>

                            <div class="col-md-6">
                                <input id="creditcardnumber" type="number" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="credit_card_number" value="{{ $user->credit_card_number ? $user->credit_card_number : old('creditcardnumber') }}" required autofocus>

                                @if ($errors->has('creditcardnumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('creditcardnumber') }}</strong>
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
