var elixir = require('laravel-elixir');

elixir(function(mix) {
    //css
    mix.sass('app.scss');

    //js
    mix.browserify('app.js');

    mix.version([
      'js/app.js',
      'css/app.css'
    ]);

    // mix.browserSync({
    //   proxy: 'twitter.dev'
    // });
});
