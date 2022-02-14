@extends('layout.master')

@section('content')
    <div style="padding: 50px; position: relative;">
        @if ($accounts->isEmpty())
            <h2>{{ __('lang.nodata') }}</h2>
        @else
            <table style="width: 75%; margin: auto" class="table table-bordered border-0">
                <thead class="border-0">
                    <tr class="border-0">
                        <th class="text-center border-0" scope="col">{{ __('lang.account') }}</th>
                        <th class="text-center border-0" scope="col">{{ __('lang.action') }}</th>
                    </tr>
                </thead>
                <tbody class="border-0">
                    @foreach ($accounts as $account)
                        <tr class="border-0">
                            <td class="text-center border-1">{{ $account->first_name }} {{ $account->middle_name }}
                                {{ $account->last_name }} - {{ $account->role->role_desc }}</td>
                            <td class="text-center  border-1">
                                <div class="d-flex justify-content-center" style="gap: 20px;">
                                    <a href="/updaterole/{{ $account->account_id }}"
                                        class="btn text-decoration-underline p-0"
                                        style="background-color: none; color: blue;">{{ __('lang.updaterole') }}</a>
                                    <form action="/deleteaccount/{{ $account->account_id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn text-decoration-underline p-0"
                                            style="background-color: none; color: blue;">{{ __('lang.delete') }}</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
