@extends('layouts.app')

@section('content')
    <v-container>
        <v-form method="post" action="{{ route('assigns.update', $assign) }}">

            @csrf
            @method('PUT')

            <v-text-field label="Assign Name" name="name" value="{{ old('name', $assign->name) }}" required autofocus></v-text-field>

            <v-btn type="submit">submit</v-btn>

        </v-form>
    </v-container>
@endsection
