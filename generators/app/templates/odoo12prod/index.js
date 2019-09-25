const mkdir = require('mkdirp');

const { lstatSync, readdirSync } = require('fs')
const { join, basename } = require('path')

module.exports = class{
    process(gen){
        gen.fs.copy(
            gen.templatePath(join(gen.props.stack, 'files')),
            gen.destinationPath('.')
        );
        mkdir.sync('addons')
    }
}