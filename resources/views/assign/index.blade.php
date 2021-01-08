@extends('layouts.app')

@section('content')
    <v-container>

        <v-card>
            <v-list>
                <v-list-item-group>

                    @foreach ($assigns as $assign)

                        <v-list-item href="{{ route('assigns.edit', $assign) }}">
                            <v-list-item-content>
                                <v-list-item-title>{{ $assign->name }}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                    @endforeach

                </v-list-item-group>
            </v-list>
        </v-card>

    </v-container>
@endsection
