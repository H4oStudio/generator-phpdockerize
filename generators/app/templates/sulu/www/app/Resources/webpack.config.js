// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore

    .setOutputPath('../../web/assets/')
    .setPublicPath('/assets')
    .configureBabel(function(babelConfig) {
        babelConfig.presets.push('es2017');
    })
    .addEntry('main', './assets/js/app.js')
    .enableSassLoader()
    .autoProvidejQuery()
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()    
    .enableVersioning(Encore.isProduction())
;

module.exports = Encore.getWebpackConfig();