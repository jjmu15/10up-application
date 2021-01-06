let mix = require('laravel-mix');

mix.js('src/js/menu.js', 'js').react()
   .sass('src/css/theme.scss', 'css').options({
        processCssUrls: false,
      })
   .setPublicPath('dist');
