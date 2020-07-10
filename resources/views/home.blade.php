@extends('layouts.app')

@section('content')
<div class="uk-child-width-expand@s uk-text-center" uk-grid>
    <div></div>
    <div>
        <div class="uk-card uk-card-default uk-card-body uk-width-100">
            <h3 class="uk-card-title">{{ __('Dashboard') }}</h3>
            <p>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </p>
        </div>
    </div>
    <div></div>
</div>
@endsection
