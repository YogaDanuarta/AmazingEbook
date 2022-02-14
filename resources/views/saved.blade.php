@extends('layout.master')

@section('content')
    <div class="d-flex justify-content-center my-5">
        <div
            style="display: flex; align-items: center; justify-content: center; padding: 20px; border: 7px solid #AFCAE8; width: 500px; height: 500px; border-radius: 50%; flex-direction: column;">
            <span style="font-size: 2rem; text-align: center">{{ __('lang.saved') }}</span>
            <a href="/">{{ __('lang.tohome') }}</a>
        </div>
    </div>
@endsection
