<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png" sizes="32x32">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title> {{ env('APP_NAME') }} | @yield('title') </title>

        {{-- Bootstrap v5.0 CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        {{-- Custom CSS file --}}
        <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/custom.css">

        {{-- Variable direction for JS --}}
        <script> var direction = "{{ env("APP_URL") }}/" </script>

        {{-- Style section for every blades --}}
        @yield('styles')
    </head>
    <body class="d-flex flex-column h-100">
        {{-- Header --}}
        @include('layout.header')

        {{-- Main section --}}
        @yield('content')

        {{-- Footer --}}
        @include('layout.footer')

        {{-- Modal section for every blade --}}
        @yield('modal-section')

        {{-- jQuery v3.5.1 --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" i></script>

        {{-- Bootstrap v5.0 JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        {{-- FontAwesome Script --}}
        <script src="https://kit.fontawesome.com/286437046b.js" crossorigin="anonymous"></script>

        {{-- Custom Script --}}
        <script src="{{ env('APP_URL') }}/assets/js/custom.js"></script>
        
        {{-- JS section for every blades --}}
        @yield('scripts')
    </body>
</html>
