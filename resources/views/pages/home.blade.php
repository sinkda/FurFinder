@extends('mainlayout')

@section('content')
{{-- Welcome Card --}}
<v-layout mb-5>
    <v-flex xs12>
        <v-card>
            <v-card-title primary-title>
                <div>
                    <h2 class="headline mb-1">Welcome to FurFinder!</h2>
                    <div>
                        Here at FurFinder, we are dedicated to helping dogs find their furever home! Look through a selection of our pet-wrothy
                        dogs and the organizations that are helping them while they wait to meet you!
                    </div>
                </div>
            </v-card-title>
        </v-card>
    </v-flex>
</v-layout>

{{-- Show 4 Random Dogs --}}
<v-layout wrap row justify-space-between id="randomDogs" mb-5>
    @foreach ($dogs as $dog)
    <v-flex pa-2>
        <v-card>
            <a href="/dog/{{$dog->id}}">
                <v-img src="https://images.dog.ceo/breeds/{{ $dog->breed }}/{{ $dog->image }}"
                       alt="Image of {{ $dog->name }}" cover aspect-ratio="1"></v-img>
            </a>

            <v-card-title primary-title>
                <div>
                    <a href="/dog/{{$dog->id}}"><h3 class="headline mb-1"> {{ $dog->name }}</h3></a>
                    <div class="dog-desc">
                        {{ $dog->description }} {{ (new \joshtronic\LoremIpsum())->sentence()  }}
                    </div>
                </div>
            </v-card-title>

            <v-card-actions>
                <v-btn flat color="primary" href="/dog/{{$dog->id}}">See Me!</v-btn>
                <v-btn flat color="primary">Share Me!</v-btn>
            </v-card-actions>
        </v-card>
    </v-flex>
     @endforeach
</v-layout>

{{-- See More Dogs --}}
<v-layout mb-5 align-center column>
    <v-flex pa-2>
        <v-btn color="primary" href="/dog" large>See More Dogs!</v-btn>
    </v-flex>
</v-layout>

{{-- Organization Spotlight --}}
<v-layout mb-5>
    <v-flex xs12>
        <v-card>
            <v-card-title primary-title>
                <div>
                    <h2 class="headline mb-1">Checkout our great partner organizations!</h2>
                    <h3 class="mb-4">Organization Spotlight: {{ $spotlight->name }}</h2>
                    <v-layout id="spotlight" row>
                        <v-flex class="spotlight__user-image">
                            <img src="/img/faces/{{ $spotlight->randomUser->avatar }}"
                                alt="Image of {{ $spotlight->randomUser->name }}">
                        </v-flex>
                        <v-flex>
                            <v-layout column wrap fill-height>
                                <v-flex>
                                    <p><strong>About {{ $spotlight->name }}:</strong><br>
                                        {{ $spotlight->description }}</p>
                                </v-flex>
                                <v-flex>
                                    <strong>Number of Dogs:</strong> {{ $spotlight->count }}
                                </v-flex>
                                <v-flex>
                                    <v-btn color="primary">Check them out!</v-btn>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                    </v-layout>
                </div>
            </v-card-title>
        </v-card>
    </v-flex>
</v-layout>
@endsection