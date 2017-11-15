'use strict';
const Generator = require('yeoman-generator');
const chalk = require('chalk');
const yosay = require('yosay');

module.exports = class extends Generator {
  prompting() {
    // Have Yeoman greet the user.
    this.log(yosay(
      'Welcome to the fantastic ' + chalk.red('generator-phpdockerize') + ' generator!'
    ));

    const prompts = [{
      type: 'list',
      name: 'stack',
      choices: ['php7', 'sulu'],
      message: 'Tipo de proyecto ?',
      default: 'php7'
    }];

    return this.prompt(prompts).then(props => {
      // To access props later use this.props.someAnswer;
      this.props = props;
    });s
  }

  writing() {
    this.fs.copy(
      this.templatePath(this.props.stack),
      this.destinationPath('.')
    );
    this.fs.delete('mysql/data/KEEP_ME');
  }

  install() {
   // this.installDependencies();
  }
};
