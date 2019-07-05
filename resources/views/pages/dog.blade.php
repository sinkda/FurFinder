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

                            <h3 class='dogname'>{{ $dog->name }}</h3>
                            <h4 class='dogbreed'>{{ $dog->readableBreed }}</h4>
                        </v-flex>
                        <v-flex pa-2 xs8>
                            <h2>Meet {{ $dog->name }}!</h2>
                            {{ $dog->description }}
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
    </v-flex>
</v-layout>
@endsection