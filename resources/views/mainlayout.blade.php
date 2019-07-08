<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <base href="http://localhost:8000">

    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <script type="text/javascript">
        window.App = {};
        window.App.LoggedIn = false;
    </script>

    <title>FurFinder</title>
</head>
<body>
    <div id="app">
        <v-app>
            <v-toolbar app dark color="primary">
                <v-toolbar-title class="white--text title-link">
                    <a href="/" >
                        <v-icon>pets</v-icon> FurFinder
                    </a>
                </v-toolbar-title>
                <v-spacer></v-spacer>

                <v-btn icon>
                    <v-icon>search</v-icon>
                </v-btn>
                <v-btn :href="loginLinks.href">@{{ loginLinks.name }}</v-btn>
            </v-toolbar>

            <v-content>
                <div id="paws"></div>
                <v-container>
                    @yield('content')
                </v-container>
            </v-content>

            
            <v-footer app height="auto" color="primary lighten-1" >
                <v-layout justify-center row wrap>
                    <v-btn
                        v-for="link in links"
                        :href="link.href"
                        :key="link.name"
                        color="white" flat round>
                        @{{ link.name }}
                    </v-btn>

                    <v-btn 
                        :href="loginLinks.href"
                        color="white" flat round>
                        @{{ loginLinks.name }}
                    </v-btn>

                    <v-flex primary lighten-2 text-xs-center py-3 xs12>
                        &copy; @{{ currentYear }} -- <strong>FurFinder</strong>
                    </v-flex>
                </v-layout>
            </v-footer>
        </v-app>

    </div>

    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>