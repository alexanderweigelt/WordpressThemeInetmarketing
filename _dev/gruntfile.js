module.exports = function(grunt) {
    grunt.initConfig({

        sass: {
            develop: {
                options: {
                    sourceMap: true
                },
                files: {
                    '../css/main.css': '../sass/main.scss',
                    '../style.css': '../sass/main.scss'
                }
            },
            distribution: {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
                    '../style.css': '../sass/main.scss'
                }
            }
        },
        watch: {
            sass: {
                files: ['../sass/**/*.scss'],
                tasks: ['sass:develop']
            },
        },

    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass:develop']);
    grunt.registerTask('deployment', ['sass:distribution']);
};