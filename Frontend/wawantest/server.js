var webpack = require('webpack');
var WebpackDevServer = require('webpack-dev-server');
var config = require('./webpack.config.dev');
config.entry.unshift('webpack-dev-server/client?/', 'webpack/hot/dev-server');
new WebpackDevServer(webpack(config), {
  compress: false,
  publicPath: config.output.publicPath,
  hot: true,
  historyApiFallback: true
}).listen(8080,'0.0.0.0', function (err, result) {
  if (err) {
    return console.log(err);
  }

  console.log('Listening at http://localhost:8080/');
});
