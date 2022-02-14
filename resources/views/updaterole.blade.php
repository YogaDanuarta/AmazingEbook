@extends('layout.master')

@section('content')
    <form action="/startupdaterole/{{ $account->account_id }}" method="POST" style="padding: 40px; width: 40%">
        @csrf
        @method('PATCH')
        <h2 class="text-decoration-underline">{{ $account->first_name }} {{ $account->middle_name }}
            {{ $account->last_name }}</h2>
        <div class="form-group d-flex align-items-center mb-3">
            <label class="w-25 mr-5">{{ __('lang.role') }}:</label>
            <select style="margin-top: 5px" class="form-select" name="role_id" id="role_id">
                <option disabled selected>
                    Select a Role
                </option>
                <option value="2">
                    User
                </option>
                <option value="1">
                    Admin
                </option>
            </select>
        </div>
        <div class="d-flex align-items-center justify-content-center flex-column mt-5">
            <button type="submit" class="btn px-5" style="background-color: #FADF54;">Save</button>
        </div>
    </form>
@endsection
