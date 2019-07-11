var path = require('path');
var webpack = require('webpack');
var port = '8082';
module.exports = {
   entry: [
    './src/index'
  ],
  output: {
        path: path.join(__dirname, 'build'),
        filename: 'bundle.js',
        publicPath: '/wawantest/'

  },
  resolve: {
      modulesDirectories: ['node_modules', 'src'],
      extensions: ['', '.js']
  },
  plugins: [
    new webpack.HotModuleReplacementPlugin(),
    new webpack.ContextReplacementPlugin(/moment[\/\\]locale$/, /en|id/),
    new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery"
    })
  ],
  module: {
    loaders: [{ test: /\.js$/, loaders: ['babel'],exclude: /node_modules/},
              { test: require.resolve("jquery"), loader: "imports?jQuery=jquery" }, 
              { test: /\.css$/, loader: 'style-loader!css-loader' },
              { test: /\.woff|\.woff2|\.svg|.eot|\.ttf|\.jpg/, loader : 'url?prefix=font/&limit=10000' }
             ]
  }
};