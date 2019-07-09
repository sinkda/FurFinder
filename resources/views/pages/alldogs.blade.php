@extends('mainlayout')

@section('content')
    {{-- Welcome Card --}}
    <v-layout mb-5>
        <v-flex xs12>
            <v-card>
                <v-card-title primary-title>
                    <div>
                        <h2 class="headline mb-1">View our Dogs</h2>
                        <div>
                            Here are all the dogs we have currently looking for their FurEver home! Find a dog you know a friend would love?
                            Be sure to share them on your social media!
                        </div>
                    </div>
                </v-card-title>
            </v-card>
        </v-flex>
    </v-layout>

    {{-- Show All Dogs --}}
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
                        <v-btn flat color="primary" target="_blank" href="@twitter('/dog/{{$dog->id}}', '{{$dog->name}}')">Share Me!</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        @endforeach
    </v-layout>
@endsection