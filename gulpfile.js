var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
        'normalize.scss',
        'app.scss',
    ], './public/css/app.css');

    mix.sass([
        'normalize.scss',
        'install.scss'
    ], './public/css/install.css');
});
