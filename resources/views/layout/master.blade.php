<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amazing E-Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

@php
$lang = Session::get('locale');
$change = $lang == 'en' ? 'id' : 'en';
@endphp

<body>

    @include('layout.navbar')

    <div style="min-height: 90vh; position: relative;">
        @yield('content')
        <div class="position-absolute" style="right: 30px; bottom: 30px;">
            <button type="button" class="btn" style="background-color: #FADF54;">
                <a href="/lang/{{ $change }}"
                    style="text-decoration: none; color: black;">{{ __('lang.changelanguage') }}</a>
            </button>
        </div>
    </div>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>