@extends('layout.master')

@section('content')
    <div style="padding: 50px 180px; position: relative;">
        <h2 class="text-decoration-underline mb-4">E-Book Detail</h2>
        <div>
            <div class="d-flex">
                <p style="min-width: 120px;">{{ __('lang.title') }}:</p>
                <p>{{ $ebook->title }}</p>
            </div>
            <div class="d-flex">
                <p style="min-width: 120px;">{{ __('lang.author') }}:</p>
                <p>{{ $ebook->author }}</p>
            </div>
            <div class="d-flex">
                <p style="min-width: 120px;">{{ __('lang.description') }}:</p>
                <p>{{ $ebook->description }}</p>
            </div>
        </div>
        <div class="position-absolute" style="right: 15%; bottom: 0;">
            <form action="/addtocart/{{ $ebook->ebook_id }}" method="POST">
                @csrf
                @method('POST')
                <button class="btn px-4 py-2" style="background-color: #FADF54;">
                    {{ __('lang.rent') }}
                </button>
            </form>
        </div>
    </div>
@endsection
