@extends('layouts.app')

@section('content')
    <v-container>
        <v-form method="post" action="{{ route('equipment.store') }}">

            @csrf

            <v-text-field label="Equipment Name" name="name" value="{{ old('name') }}" required autofocus></v-text-field>


            <v-row>
                <v-col cols="12" md="6">
                    <v-text-field label="Amount" name="amount" value="{{ old('amount') }}" type="number" min="0"></v-text-field>
                </v-col>

                <v-col cols="12" md="6">
                    <v-text-field label="Cost" name="cost" value="{{ old('cost') }}" type="number" min="0.00" step="0.10"></v-text-field>
                </v-col>
            </v-row>


            <v-btn type="submit">submit</v-btn>

        </v-form>
    </v-container>
@endsection
