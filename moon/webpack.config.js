
var HtmlWebpackPlugin = require('html-webpack-plugin');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
  mode: 'development',
  entry: './public/app.js',
  devtool: 'inline-source-map',
    devServer: {
        contentBase: './dist',
    },
  output: {
    path: __dirname + '/public/dist',
    filename: 'bundle.js'
  },
  module: {
    rules: [{
        test:/\.(s*)scss$/,
        include: /node_modules/,
            use: ExtractTextPlugin.extract({ 
                fallback: 'style-loader',
                use:['style-loader','css-loader', 'sass-loader']
            })
        },
        {
            test: /\.(png|jp(e*)g|svg)$/,  
            use: [{
                loader: 'url-loader',
                options: { 
                    limit: 8000, // Convert images < 8kb to base64 strings
                    name: 'images/[hash]-[name].[ext]'
                } 
            }
           
           ]}]
},
    plugins: [
        new ExtractTextPlugin({filename: 'app.bundle.css'})
    ]
};

