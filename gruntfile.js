'use strict';
var _ = require('lodash');
var path = require('path');

module.exports = function(grunt) {

  // load the blog template from the desired path
  var postTemplate = grunt.file.read('./src/posts/post.hbs');
  
  // expand the data files and loop over each filepath
  var posts = _.flatten(_.map(grunt.file.expand('./src/data/post*.json'), function(filepath) {
    
    // read in the data file
    var data = grunt.file.readJSON(filepath);
    
    // create a 'page' object to add to the 'pages' collection
    return {
      // the filename will determine how the page is named later
      filename: path.basename(filepath, path.extname(filepath)),
      // the data from the json file
      data: data,
      // add the recipe template as the page content
      content: postTemplate
    };
  }));
  
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    http: {
      flowers101: {
        options: {
          url: 'https://cdn.contentful.com/spaces/9ew8teutdtu7/entries?access_token=ba38d30d31bcf3a2e067c705e8acf4a3ba64374d000d737e5decd56dade119ec&content_type=flowers',
        },
        dest: './src/data/flowers101.json'
      },
      galleries: {
        options: {
          url: 'https://cdn.contentful.com/spaces/9ew8teutdtu7/entries?access_token=ba38d30d31bcf3a2e067c705e8acf4a3ba64374d000d737e5decd56dade119ec&content_type=galleries',
        },
        dest: './src/data/galleries.json'
      }
    },
    assemble: {
      options: {
        layout: 'page.hbs',
        layoutdir: './src/templates/layouts',
        partials: './src/templates/partials/**/*.hbs',
        plugins: ['permalinks'],
        data: ['./src/data/flowers101.json','./src/data/galleries.json'],
        expand: true,
        assets: 'dist',
      },
      site: {
        files: [{
          cwd: './src/views/',
          dest: './dist/',
          expand: true,
          src: '**/*.hbs'
        }]
      },
      posts: {
        options: {
          //pages: posts,
          pages: [
            "post-one.html",
            "post-two.html",
            "post-three.html"
          ],
          flatten: true,
          layoutdir: './src/templates/layouts',
          assets: 'dist',
          partials: './src/templates/partials/**/*.hbs'
        },
        files: [{
          dest: './dist/',
          src: '!*'
        }]
      }
    },
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          './dist/css/styles.css': './src/scss/styles.scss'
        }
      }
    },
    concat: {
      dist: {
        src: ['./src/js/**/*.js'],
        dest: './dist/js/scripts.js'
      }
    },
    jshint: {
      beforeconcat: ['./src/js/**/*.js'],
      afterconcat: ['./dist/js/scripts.js']
    },
    watch: {
      scripts: {
        files: [
        	'**/*.hbs',
        	'./src/{,*/}*.scss',
        	'./src/{,*/}*.css',
        	'./src/{,*/}*.js',
        	'./src/{,*/}*.json'
      	],
        tasks: ['http','assemble','sass','concat','jshint','copy'],
        options: {
          spawn: false,
          livereload: true
        },
      },
    },
    copy: {
      main: {
        expand: true,
        cwd: './src/assets/',
        src: '**',
        dest: './dist/',
      },
    },
		connect: {
			server: {
				options: {
					livereload:true,
					open: true,
					hostname:'localhost',
					base:'./dist/'
				}
			}
		}
  });

  // Load handlebars template compiler
  grunt.loadNpmTasks('assemble');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-http');

  // Default task(s).
  grunt.registerTask('default', ['http','assemble','sass','concat','jshint','copy']);
  grunt.registerTask('serve', ['http','assemble','sass','concat','jshint','copy','connect','watch']);

};