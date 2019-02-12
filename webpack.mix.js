const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.js('resources/js/app.js', 'public/js');
    // .extract(['lodash', 'popper.js', 'jquery', 'bootstrap', 'axios', 'vue']);
mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
    });
mix.copyDirectory('resources/img', 'public/img');
mix.browserSync({
    proxy: '127.0.0.1',
    open: false,
});

/*mix.webpackConfig({
    plugins: [
        new BrowserSyncPlugin(
            {
                // host: '192.168.10.10',
                // port: 8000,
                proxy: 'http://resume.local',
                reload: true,
                open: false,
                aggregateTimeout: 300,
                poll: false,
                files: [
                    'app/!**!/!*',
                    'public/!**!/!*',
                    'resources/views/!**!/!*',
                    'routes/!**!/!*'
                ]
            }
        )
    ]
});*/

if (mix.inProduction()) {
    mix.version();
}

