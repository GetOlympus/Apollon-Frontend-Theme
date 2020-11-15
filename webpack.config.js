// Main constants
const path  = require('path'),
    webpack = require('webpack');

// Plugins
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

// NOVE_ENV vars from command line
const env = process.env.NODE_ENV;


// Main configurations
let config = {
    mode: env || 'development',

    entry: './theme/apollon.js',
    output: {
        filename: 'js/[name].js', // [name].[chunkhash].js
        path: path.resolve(__dirname, './app')
    },

    module: {
        rules: [
        {
            test: /\.less$/,
            use: [
                { loader: MiniCssExtractPlugin.loader },
                {
                    loader: 'css-loader',
                    options: { importLoaders: 1 }
                },
                { loader: 'resolve-url-loader' },
                { loader: 'less-loader' }
            ]
        },
        {
            test: /\.(eot|ttf|woff|woff2)$/,
            loader: 'file-loader',
            options: { name: 'fonts/[name].[hash].[ext]' }
        },
        {
            test: /\.(gif|png|jpe?g|svg)$/i,
            use: [
                'file-loader',
                { loader: 'image-webpack-loader' }
            ]
        }
    ]},
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/apollon.css',
            chunkFilename: '[id].css'
        }),
        new CleanWebpackPlugin()
    ]
};


// Starts
module.exports = config;
