const webpackMerge = require('webpack-merge');
// const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const common = require('./common');

module.exports = () => {
  return webpackMerge(common(), {
    watch: true,
    devtool: 'cheap-module-source-map'
    // plugins: [
    //   new BrowserSyncPlugin({
    //     proxy: 'http://localhost/bk-theme-test/',
    //     files: ['**/*.php']
    //   })
    // ]
  });
};
