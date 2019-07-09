@extends('mainlayout')

@section('content')
<v-layout>
    <v-flex xs12>
        <v-card>
            <v-layout row class='content-parent'>
                <v-card-title id='content-card'>
                    <v-layout row>
                        <v-flex pa-2 xs4>
                            <v-img src="https://images.dog.ceo/breeds/{{ $dog->breed }}/{{ $dog->image }}"
                            alt="Portrait of {{ $dog->name }}" class="portrait" aspect-ratio="1"></v-img>

                            <h1 class='dogname'>{{ $dog->name }}</h1>
                            <h2 class='dogbreed'>{{ $dog->readableBreed() }}</h2>
                        </v-flex>
                        <v-flex pa-2 xs8>
                            <h2>Meet {{ $dog->name }}!</h2>
                            <p>{{ $dog->description }}</p>

                            <div class="joined">
                                <strong>Joined FurFinder</strong>
                                    on <u>{{ (new DateTime($dog->created_at))->format('F jS, Y') }}</u> <br>
                                <strong>Last Updated</strong>
                                    on <u>{{ (new DateTime($dog->updated_at))->format('l F jS, Y @ g:i A') }}</u> <br>
                            </div>
                       
                            <v-card>
                                <v-card-title class="elevation-4">
                                    <h3 class="heading">
                                        {{ $dog->name }} is available at: {{ $org->name }}
                                    </h3>
                                </v-card-title>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-card-title>

                <v-navigation-drawer permanent class="blue">
                    <v-list>
                        <v-list-tile
                            v-for="action in dogActions"
                            :key="action.title"
                            @click="dogDoAction(action.action)">

                            <v-list-tile-action>
                                <v-icon class="white--text">@{{ action.icon }}</v-icon>
                            </v-list-tile-action>

                            <v-list-tile-content>
                                <v-list-tile-title class="white--text">@{{ action.title }}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </v-list>
                </v-navigation-drawer>
            </v-layout>
        </v-card>

        {{-- See More Dogs --}}
        <v-layout mb-2 align-center column>
            <v-flex pa-2>
                <v-btn color="primary" href="/dogs" large>See More Dogs!</v-btn>
            </v-flex>
        </v-layout>

    </v-flex>
</v-layout>

{{-- Modal Box--}}
<div class="text-xs-center">
    <v-dialog v-model="notifyDialog" width="500">
        <v-card>
            <v-card-title class="headline grey lighten-2">
                You will be notified!
            </v-card-title>
            <v-divider></v-divider>

            <v-card-text>
                Consider yourself notified once @{{  dogName }} is adopted! Keep an eye on your inbox!
            </v-card-text>
            <v-divider></v-divider>

            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="primary" flat @click="notifyDialog = false">Can't Wait!</v-btn>
            </v-card-actions>
        </v-card>


    </v-dialog>
</div>
@endsection