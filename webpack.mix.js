const mix = require('laravel-mix');
const path = require('path');
const styleLintPlugin = require('stylelint-webpack-plugin');

const autoprefixer = require('autoprefixer');
const cssMqpacker = require('css-mqpacker');
const postcssCustomMedia = require('postcss-custom-media');
const cpx = require('cpx');

require('laravel-mix-eslint');

const sourcesPath = path.resolve('src');
const outputPath = mix.inProduction() ? 'dist' : 'public';

const copyFiles = `${sourcesPath}/**/*.{html,php,css,png,jpg,gif,svg,woff,eot,ttf,txt,md,pdf,webm,mp4}`;

mix.autoload({
  jquery: ['$', 'jQuery']
});

if (process.env.NODE_ENV === 'watch') {
  cpx.watch(copyFiles, outputPath);
} else {
  cpx.copy(copyFiles, outputPath);
}

mix
  .setPublicPath(outputPath)
  .sass(`${sourcesPath}/scss/all.scss`, `${outputPath}/css`)
  .js(`${sourcesPath}/js/main.js`, `${outputPath}/js`)
  .eslint({
    fix: false,
    cache: false
  });

mix.webpackConfig({
  plugins: [
    new styleLintPlugin({
      configFile: path.resolve('.stylelintrc'),
      files: ['**/*.scss'],
      syntax: 'scss'
    })
  ]
});

mix.options({
  cache: true,
  keepalive: true,
  processCssUrls: false,
  postCss: [
    autoprefixer,
    postcssCustomMedia,
    cssMqpacker({
      sort: true
    })
  ],
  clearConsole: true,
  autoprefixer: {
    options: {
      browsers: [
        '> 1%, last 8 versions, Firefox ESR, ie > 8',
      ]
    }
  }
});

if (mix.inProduction()) {
  mix.options({
    cache: false,
    postCss: [
      require('csswring')({
        removeAllComments: false
      })
    ]
  });
}

mix.disableNotifications();
