/*!
 * Theme Gruntfile
 * Author: Alexander Weigelt
 * Author URI: http://alexander-weigelt.de
 * Version: 0.2.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

module.exports = function (grunt) {
  'use strict'

  // Force use of Unix newlines
  grunt.util.linefeed = '\n'

  RegExp.quote = function (string) {
    return string.replace(/[-\\^$*+?.()|[\]{}]/g, '\\$&')
  }

  var path = require('path')

  // Project configuration.
  grunt.initConfig({

    sass: {
      develop: {
        options: {
          sourceMap: true
        },
        files: {
          'style.css': 'sass/main.scss'
        }
      },
      distribution: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'style.css': 'sass/main.scss'
        }
      }
    },
    watch: {
      sass: {
        files: ['sass/**/*.scss'],
        tasks: ['sass:develop']
      },
    },

  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass:develop']);
  grunt.registerTask('deployment', ['sass:distribution']);
}
