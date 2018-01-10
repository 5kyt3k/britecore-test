const path              = require('path');
const webpack           = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = () => {
  return {
    entry: {
      './dist/js/bundle.js': './src/main.js',
      './dist/css/styles.css': './src/scss/styles.scss',
    },
    output: {
      path: path.resolve(__dirname, '../'),
      filename: '[name]'
    },
    resolve: {
      extensions: ['.js', '.vue', '.json']
    },
    module: {
      rules: [
        {
          test: /\.vue$/,
          loader: 'vue-loader',
        },
        {
          test: /\.js?$/,
          exclude: /node_modules/,
          use: 'babel-loader'
        },
        {
          test: /\.scss$/,
          use: ExtractTextPlugin.extract({
            fallback: 'style-loader',
            use: ['css-loader', 'sass-loader']
          })
        },
      ]
    },
    resolve: {
      alias: {
        'vue$': 'vue/dist/vue.esm.js'
      }
    },
    plugins: [
      new ExtractTextPlugin({
        filename: '[name]'
      }),
      new BrowserSyncPlugin({
        host: 'localhost',
        port: 8000, //Change this to an open/different port for each project
        proxy: 'http://britecore-test', //change to your vhost name
        reload: false,
        files: ["**/*.php","dist/css/*.css", "dist/js/*.js"]
      })
    ]
  };
};
