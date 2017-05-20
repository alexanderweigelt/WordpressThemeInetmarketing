/*!
 * Theme Gruntfile
 * Author: Alexander Weigelt
 * Author URI: http://alexander-weigelt.de
 * Version: 0.2.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

module.exports = function(grunt) {
  'use strict';

  // Force use of Unix newlines
  grunt.util.linefeed = '\n';

  grunt.initConfig({

    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    banner: '/*!\n' +
            ' * Theme Bootstrap v<%= pkg.version %> (<%= pkg.homepage %>)\n' +
            ' * Author: <%= pkg.author.name %>, <%= pkg.author.url %>\n' +
            ' * \n' +
            ' * Bootstrap v4.0.0-alpha.6 (https://getbootstrap.com)\n' +
            ' * Copyright 2011-<%= grunt.template.today("yyyy") %> \n' +
            ' * The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors) \n' +
            ' * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)\n' +
            ' */\n',

    // Task configuration.
    clean: {
      css: ['./*.css', '*.css.map']
    },

    jshint: {
      options: {
        force: true,
        curly: true,
        eqeqeq: true,
        eqnull: true,
        browser: true,
        globals: {
          jQuery: true
        },
      },
      all: [
        'Gruntfile.js',
        'javascripts/bootstrap/*.js',
        '!javascripts/bootstrap.min.js',
        '!javascripts/jquery-1.11.2.min.js',
        '!javascripts/modernizr-2.8.3-respond-1.4.2.min.js'
      ]
    },

    uglify: {
      options: {
        banner: '<%= banner %>'
      },
      dist: {
        files: [{
          expand: true,
          src: ['javascripts/*.js', '!javascripts/*.min.js'],
          dest: '.',
          cwd: '.',
          rename: function (dst, src) {
            // To keep the source js files and make new files as `*.min.js`:
            return dst + '/' + src.replace('.js', '.min.js');
            // Or to override to src:
            // return src;
          }
        }]
      }
    },

    sass: {
      develop: {
        options: {
          sourceMap: true
        },
        files: {
          'style.css': 'sass/style.scss',
          'style-grid.css': 'sass/style-grid.scss',
          'normalize.css': 'sass/normalize.scss'
        }
      },
      distribution: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'style.css': 'sass/style.scss',
          'style-grid.css': 'sass/style-grid.scss',
          'normalize.css': 'sass/normalize.scss'
        },
        tasks: ['cssmin']
      }
    },

    // minifying css task
    cssmin: {
      dist: {
        files: {
          'style.min.css': 'style.css'
        }
      }
    },

    watch: {
      sass: {
        files: 'sass/**/*.scss',
        tasks: ['sass:develop']
      },
      js: {
        files: [
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'uglify']
      }
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');

  // Register tasks
  grunt.registerTask('default', [
    'sass:develop'
  ]);

  grunt.registerTask('deploy', [
    'clean',
    'sass:distribution',
    'jshint',
    'uglify'
  ]);

};