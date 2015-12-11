module.exports = function(grunt) {

  grunt.initConfig({

    clean: {
        main: ['dist/'],
        build: ['dist/','release/']
    },
    concat: {
        basic: {
            src: ['src/javascripts/*.js'],
            dest: 'dist/javascripts/juniper.js'
        }
    },
    compass: {
            all: {
                options: {
                    sassDir: 'src/stylesheets',
                    cssDir: 'dist/stylesheets',
                    fontsDir: 'dist/fonts',
                    environment: 'production',
                    outputStyle: 'compressed',
                    relativeAssets: true,
                    noLineComments: true,
                    force: true,
                    specify: 'src/stylesheets/*.scss'
                }
            }
        },
    compress: {
        main: {
            options: {
                archive: 'release/juniper.zip'
            },
            files: [
                {expand: true, cwd: 'dist/', src: ['**']},
            ]
        }
    },
    copy: {
        main: {
            files: [
                { 
                    expand: true, 
                    src: ['src/fonts/*'], 
                    dest: 'dist/fonts/',
                    flatten: true, 
                    filter: 'isFile'
                },
                {
                    expand: true, 
                    src: ['src/images/*'], 
                    dest: 'dist/images/',
                    flatten: true, 
                    filter: 'isFile'
                },
                {
                    expand: true, 
                    src: ['src/images/social_icons/*'], 
                    dest: 'dist/images/social_icons',
                    flatten: true, 
                    filter: 'isFile'
                },
                {
                    expand: true, 
                    src: ['src/*.php'],
                    dest: 'dist/',
                    flatten: true,
                    filter: 'isFile'
                },
                {
                    expand: true, 
                    src: ['src/partials/*.php'],
                    dest: 'dist/partials/',
                    flatten: true,
                    filter: 'isFile'
                },
                {
                    src: ['src/style.css'],
                    dest: 'dist/style.css',
                    filter: 'isFile'
                },
                {
                    src: ['LICENSE.txt'],
                    dest: 'dist/LICENSE.txt',
                    filter: 'isFile'
                },
                {
                    src: ['README.md'],
                    dest: 'dist/README.md',
                    filter: 'isFile'
                },
                {
                    expand: true, 
                    src: ['src/screenshot.png'],
                    dest: 'dist/',
                    flatten: true,
                    filter: 'isFile'
                }
            ]
        }
    },
    watch: {
        html: {
            files: ['src/*.php'], // which HTML files to watch
            tasks: ['copy'],
            options: {
                nospawn: true
            }
        },
        js: {
            files: ['src/js/*.js'],
            tasks: ['concat','copy'],
            options: {
                nospawn: true
            }
        }
    }
});

// No longer used grunt.loadNpmTasks('grunt-contrib-less');
grunt.loadNpmTasks('grunt-contrib-compass');
grunt.loadNpmTasks('grunt-contrib-compress');
grunt.loadNpmTasks('grunt-contrib-clean');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-copy');
// No longer used grunt.loadNpmTasks('grunt-postcss');

grunt.registerTask('default', ['clean:main', 'compass', 'copy', 'concat']);
grunt.registerTask('build', ['clean:build', 'compass', 'copy', 'concat', 'compress']);

};
