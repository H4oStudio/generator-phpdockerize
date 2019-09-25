'use strict';
const Generator = require('yeoman-generator');
const chalk = require('chalk');
const yosay = require('yosay');
const mkdir = require('mkdirp');

const { lstatSync, readdirSync } = require('fs')
const { join, basename } = require('path')



module.exports = class extends Generator {
  prompting() {
    // Have Yeoman greet the user.
    this.log(yosay(
      'Bootstraps docker environments for many platforms'
    ));
    const isDirectory = source => lstatSync(source).isDirectory()
    const getDirectories = source => readdirSync(source).map(name => join(source, name)).filter(isDirectory)
    const friendlyName = source => source.map(name => basename(name) )

    const prompts = [{
      type: 'list',
      name: 'stack',
      choices: friendlyName(getDirectories(this.sourceRoot())),
      message: 'Project template:'
    }];

    return this.prompt(prompts).then(props => {
      // To access props later use this.props.someAnswer;
      this.props = props;
    });
  }

  writing() {
    var Processor = require(join(this.sourceRoot(), this.props.stack, 'index.js'))
    var writer = new Processor()
    writer.process(this)
  }

  install() {
   // this.installDependencies();
  }
};
