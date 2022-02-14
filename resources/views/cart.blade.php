@extends('layout.master')

@section('content')
    <div style="padding: 50px; position: relative;">
        @if ($carts->isEmpty())
            <h2>{{ __('lang.nodata') }}</h2>
        @else
            <table style="width: 75%; margin: auto" class="table table-bordered border-0">
                <thead class="border-0">
                    <tr class="border-0">
                        <th class="text-center border-0" scope="col">{{ __('lang.title') }}</th>
                        <th class="text-center border-0" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carts as $cart)
                        <tr class="border-0">
                            <td class="text-center border-1">{{ $cart->ebook->title }}</td>
                            <td class="text-center border-0">
                                <form action="/deletecart/{{ $cart->order_id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn text-decoration-underline p-0"
                                        style="background-color: none; color: blue;">{{ __('lang.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="position-absolute" style="right: 15%; bottom: 0;">
                <form action="/submitcart" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn px-4 py-2" style="background-color: #FADF54;">
                        {{ __('lang.submit') }}
                    </button>
                </form>
            </div>
        @endif
    </div>
@endsection
