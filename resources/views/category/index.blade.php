@extends('layouts.app')

@section('content')
    <v-container>

        <v-card>
            <v-list>
                <v-list-item-group>

                    @foreach ($categories as $category)

                        <v-list-item href="{{ route('categories.edit', $category) }}">
                            <v-list-item-content>
                                <v-list-item-title>{{ $category->name }}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                    @endforeach

                </v-list-item-group>
            </v-list>
        </v-card>

    </v-container>
@endsection
