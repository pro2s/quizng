@extends('layouts.app')

@section('content')
<div class="uk-grid-medium uk-flex-center uk-child-width-1-3@m" uk-grid>
    <div class="uk-card uk-card-default uk-card-body">
        <h3 class="uk-card-title">{{ __('Login') }}</h3>
        <form method="POST" action="{{ route('login') }}" class="uk-form-stacked">
            @csrf

            <div class="uk-margin">
                <label class="uk-form-label" for="email">{{ __('E-Mail Address') }}</label>
                <div class="uk-form-controls">
                    <input id="email" type="email" class="uk-input @error('email') uk-form-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="uk-text-meta uk-text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="password">{{ __('Password') }}</label>
                <div class="uk-form-controls">
                    <input id="password" type="password" class="uk-input @error('password') uk-form-danger @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                    @error('password')
                        <span class="uk-text-meta uk-text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label><input class="uk-checkbox" type="checkbox" {{ old('remember') ? 'checked' : '' }} name="remember" id="remember"> {{ __('Remember Me') }}</label>
            </div>

            <div class="uk-margin">
                <button class="uk-button uk-button-primary">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="uk-link-text" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
