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

  // Get Contentful Token
  var contentfulToken = grunt.file.read('./contentful.txt');
  // Build API Endpoints
  var flowers101Url = 'https://cdn.contentful.com/spaces/v6p6js5cdr2w/entries?content_type=flowers101&access_token=' + contentfulToken;
  var galleriesUrl = 'https://cdn.contentful.com/spaces/v6p6js5cdr2w/entries?content_type=gallery&access_token=' + contentfulToken;

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    http: {
      flowers101: {
        options: {
          url: flowers101Url,
        },
        dest: './src/data/flowers101.json'
      },
      galleries: {
        options: {
          url: galleriesUrl,
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
        data: [
          './src/data/flowers101.json',
          './src/data/galleries.json'
        ],
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
    stylus: {
      compile: {
        files: {
          './dist/css/styles.css': './src/styl/styles.styl',
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
        	'./src/**/*.styl',
        	'./src/**/*.css',
        	'./src/**/*.js',
        	'./src/**/*.json',
          './src/**/*.hbs'
      	],
        tasks: ['http','assemble','stylus','concat','jshint','copy'],
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
  grunt.loadNpmTasks('grunt-contrib-stylus');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-http');

  // Default task(s).
  grunt.registerTask('default', ['http','assemble','stylus','concat','jshint','copy']);
  grunt.registerTask('serve', ['http','assemble','stylus','concat','jshint','copy','connect','watch']);

};
