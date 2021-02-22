let mix = require('laravel-mix');


mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    'popper.js/dist/umd/popper.js': ['Popper']     
})
.js('src/app.js', 'assets/js').sass('src/style.scss', 'assets/css')
.options({
      processCssUrls: false, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
});
;