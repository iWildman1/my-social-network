const path = require('path');
const ExtractTextPlugin =  require('extract-text-webpack-plugin');

module.exports = {
    entry: __dirname + "/src/js/main.js",
    output: {
        filename: 'bundle.js',
        path: __dirname + "/js",
        publicPath: '/js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: [
                    /node_modules/
                ]
            },
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader?url=false', 'sass-loader']
                })
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin('../styles.css')
    ]
}