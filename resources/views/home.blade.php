@extends('layout.master')

@section('content')
    @guest
        <div class="d-flex justify-content-center my-5">
            <div
                style="display: flex; align-items: center; justify-content: center; padding: 20px; border: 7px solid #AFCAE8; width: 500px; height: 500px; border-radius: 50%;">
                <span style="font-size: 2rem; text-align: center">{{ __('lang.guest') }}</span>
            </div>
        </div>
    @endguest

    @auth
        <div style="padding: 50px">
            @if ($ebooks->isEmpty())
                <h2>{{ __('lang.nodata') }}</h2>
            @else
                <table style="width: 75%; margin: auto" class="table table-bordered border-0">
                    <thead>
                        <tr class="border-0">
                            <th class="text-center border-0" scope="col">{{ __('lang.author') }}</th>
                            <th class="text-center border-0" scope="col">{{ __('lang.title') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ebooks as $ebook)
                            <tr>
                                <td>{{ $ebook->author }}</td>
                                <td>
                                    <a href="/ebookdetail/{{ $ebook->ebook_id }}"
                                        style="color: blue; text-decoration: underline;">{{ $ebook->title }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endauth
@endsection
