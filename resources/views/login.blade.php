@extends('layout.master')


@section('content')
    @if (!$errors->isEmpty())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <form action="/startlogin" method="POST" style="padding: 40px; width: 40%">
        @csrf
        <h2 class="text-decoration-underline">{{ __('lang.login') }}</h2>
        <div class="form-group d-flex align-items-center">
            <label class="w-50 mr-5" for="exampleInputEmail">{{ __('lang.emailaddress') }}</label>
            <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                placeholder="">
        </div>
        <div class="form-group d-flex align-items-center">
            <label class="w-50 mr-5" for="password">{{ __('lang.password') }}:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="">
        </div>
        <div class="d-flex align-items-center justify-content-center flex-column mt-5">
            <button type="submit" class="btn px-5"
                style="background-color: #FADF54;">{{ __('lang.submit') }}</button>
            <p class="text-center">
                <a href="/register">{{ __('lang.noaccount') }}</a>
            </p>
        </div>
    </form>
@endsection
