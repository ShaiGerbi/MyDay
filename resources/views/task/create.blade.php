@extends('layouts.app')

@section('content')
    <v-container>
        <v-form method="post" action="{{ route('tasks.store') }}">

            @csrf

            <v-text-field label="Task Name" name="name" value="{{ old('name') }}" required autofocus></v-text-field>


            <v-row>
                <v-col cols="12" md="6">
                    <v-select label="Category" :items="categories"></v-select>
                </v-col>

                <v-col cols="12" md="6">
                    <v-select label="Color" :items="colors"></v-select>
                </v-col>
            </v-row>


            <v-row>
                <v-col cols="12" md="6">
                    <v-select label="Equipment" :items="equipments"></v-select>
                </v-col>

                <v-col cols="12" md="6">
                    <v-select label="Assign" :items="assigns"></v-select>
                </v-col>
            </v-row>


            <v-select label="Priority" :items="priorities"></v-select>

            <v-textarea label="Notes" rows="3"></v-textarea>


            <v-btn type="submit">submit</v-btn>


        </v-form>
    </v-container>
@endsection
