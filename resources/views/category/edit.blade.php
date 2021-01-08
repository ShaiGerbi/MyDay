@extends('layouts.app')

@section('content')
    <v-container>
        <v-form method="post" action="{{ route('categories.update', $category) }}">

            @csrf
            @method('PUT')

            <v-text-field label="Category Name" name="name" value="{{ old('name', $category->name) }}" required autofocus></v-text-field>

            <v-btn type="submit">submit</v-btn>

        </v-form>
    </v-container>
@endsection
