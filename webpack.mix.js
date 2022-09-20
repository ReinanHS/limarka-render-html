const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/css/main.scss', 'css')
    .options({
        processCssUrls: true,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .version();
