@extends('layouts.app')

@section('content')
    <v-container>
        <v-form method="post" action="{{ route('categories.store') }}">

            @csrf

            <v-text-field label="Category Name" name="name" value="{{ old('name') }}" required autofocus></v-text-field>

            <v-btn type="submit">submit</v-btn>

        </v-form>
    </v-container>
@endsection
