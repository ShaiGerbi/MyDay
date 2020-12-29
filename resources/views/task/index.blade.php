@extends('layouts.app')

@section('content')
    <v-container>

            <v-card>
                <v-list>
                    <v-list-item-group>

                        @foreach ($tasks as $task)

                            <v-list-item href="{{ route('tasks.edit', $task) }}">
                                <v-list-item-action>
                                    <v-checkbox></v-checkbox>
                                </v-list-item-action>
                                <v-list-item-content>
                                    <v-list-item-title>{{ $task->name }}</v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>

                        @endforeach

                    </v-list-item-group>
                </v-list>
            </v-card>

    </v-container>
@endsection
