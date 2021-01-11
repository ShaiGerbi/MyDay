<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }}</title>

    {{-- Meta --}}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" />

    {{-- Styles --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>

    <div id="app">
        <v-app>

            {{-- App Header --}}
            @include('layouts.header')
            @include('layouts.navigation')

            {{-- Page Content --}}
            <v-main>
                @yield('content')
            </v-main>

        </v-app>
    </div>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
