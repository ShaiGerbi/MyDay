@extends('layouts.app')

@section('content')
    <v-container>

        <v-card>
            <v-list>
                <v-list-item-group>

                    @foreach ($equipment as $item)

                        <v-list-item href="{{ route('equipment.edit', $item) }}">
                            <v-list-item-content>
                                <v-list-item-title>{{ $item->name }}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                    @endforeach

                </v-list-item-group>
            </v-list>
        </v-card>

    </v-container>
@endsection
