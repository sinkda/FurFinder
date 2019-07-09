@extends('mainlayout')

@section('content')
<v-layout>
    <v-flex>
        <v-card xs12>
            <v-parallax dark src="/img/abby_douglas.png" mb-5>
                <v-layout align-center column justify-center>
                    <h1 class="display-2 mb-3 about-shadow">About Furfinder</h1>
                    <h4 class="subheading about-shadow">The Furever Mission</h4>
                </v-layout>
            </v-parallax>

            <v-card-title primary-title>

                <v-layout row wrap id="about">
                    <v-flex pa-2 xs3>
                            <img src="/img/abby.png" width="100%">
                    </v-flex>
                    <v-flex pa-2 xs9>
                        <v-card class="elevation-4">
                            <v-card-text>
                                <blockquote class="blockquote">
                                    Our Mission is to ensure that all our Dogs find the home they deserve.
                                </blockquote>
                            </v-card-text>
                        </v-card>

                        <br>
    
                        <p class="mb2">It started with a single bark. That is when we knew we needed to help find homes for 
                            all our furfriends. Abby and Douglas are the founders of FurFinder and the official
                            spokespups.<br><br>
    
                            They had a dream of having the best life for themselves and for others. And to achieve
                            this dream they encouraged their father to build this site to help all those puppies in need.
                            And add to their father's programming portfolio at the same time!. All of this, from a single
                            bark.<br><br>

                            {{ (new \joshtronic\LoremIpsum())->paragraph()  }}
                        </p>

                        <p class="caption"> 
                            Abby (German Shepherd Mix) -- Douglas (Corgi / Chihuahua Mix)
                        </p>
                    </v-flex>
                    
                </v-layout>
            </v-card-title>

        </v-card>
    </v-flex>
</v-layout>
@endsection