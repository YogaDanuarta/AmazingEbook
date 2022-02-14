@extends('layout.master')

@section('content')

    <form action="/startregister" enctype="multipart/form-data" method="POST" class="p-5">
        @csrf
        <h2 class="text-decoration-underline">{{ __('lang.signup') }}</h2>
        @if (!$errors->isEmpty())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="row row-cols-2">
            <div class="form-group d-flex align-items-center">
                <label class="w-25 mr-5" for="firstname">{{ __('lang.firstname') }}:</label>
                <input type="text" class="form-control" id="firstname" name="first_name" placeholder="">
            </div>
            <div class="form-group d-flex align-items-center">
                <label class="w-25 mr-5" for="middlename">{{ __('lang.middlename') }}:</label>
                <input type="text" class="form-control" id="middlename" name="middle_name" placeholder="">
            </div>
            <div class="form-group d-flex align-items-center">
                <label class="w-25 mr-5" class="w-25 mr-5" l for="lastname">{{ __('lang.lastname') }}:</label>
                <input type="text" class="form-control" id="lastname" name="last_name" placeholder="">
            </div>
            <div class="form-group d-flex align-items-center">
                <label class="w-25 mr-5" for="exampleInputEmail">{{ __('lang.emailaddress') }}:</label>
                <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                    placeholder="">
            </div>
            <div class="form-group d-flex align-items-center">
                <label class="w-25 mr-3" for="gender_id">{{ __('lang.gender') }}:</label>
                <div class="form-check" style="margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="gender_id" id="gender_id_male" value="1">
                    <label for="gender_id_male" class="form-check-label">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender_id" id="gender_id_female" value="2">
                    <label for="gender_id_female" class="form-check-label">
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group d-flex align-items-center mb-3">
                <label class="w-25 mr-5">{{ __('lang.role') }}:</label>
                <select style="margin-top: 5px" class="form-select" name="role_id" id="role_id">
                    <option value="2">
                        User
                    </option>
                    <option value="1">
                        Admin
                    </option>
                </select>
            </div>
            <div class="form-group d-flex align-items-center">
                <label class="w-25 mr-5" for="password">{{ __('lang.password') }}:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="">
            </div>
            <div class="form-group d-flex align-items-center">
                <label class="w-25 mr-5" class="form-label" for="image">{{ __('lang.displaypicture') }}:</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center flex-column mt-4">
            <button type="submit" class="btn px-5"
                style="background-color: #FADF54;">{{ __('lang.submit') }}</button>
            <p class="text-center">
                <a href="/login">{{ __('lang.haveaccount') }}</a>
            </p>
        </div>
    </form>

@endsection
