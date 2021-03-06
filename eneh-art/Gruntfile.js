// Generated on 2013-12-29 using generator-webapp 0.4.6
'use strict';

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to recursively match all subfolders:
// 'test/spec/**/*.js'

module.exports = function (grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    // Define the configuration for all the tasks
    grunt.initConfig({

        // Project settings
        yeoman: {
            // Configurable paths
            app: '',
            dist: 'dist'
        },

        // Watches files for changes and runs tasks based on the changed files
        watch: {
            js: {
                files: ['<%= yeoman.app %>js/{,*/}*.js'],
                tasks: ['jshint'],
                options: {
                    livereload: true
                }
            },
            jstest: {
                files: ['test/spec/{,*/}*.js'],
                tasks: ['test:watch']
            },
            gruntfile: {
                files: ['Gruntfile.js']
            },
            compass: {
                files: ['<%= yeoman.app %>sass/{,*/}*.{scss,sass}', '<%= yeoman.app %>lib/greedo/{,*/}*.{scss,sass}'],
                tasks: ['compass:server', 'autoprefixer']
            },
            styles: {
                files: ['<%= yeoman.app %>{,*/}*.css'],
                tasks: ['newer:copy:styles', 'autoprefixer']
            },
            livereload: {
                options: {
                    livereload: '<%= connect.options.livereload %>'
                },
                files: [
                    '<%= yeoman.app %>/{,*/}*.html',
                    '.tmp/{,*/}*.css',
                    '<%= yeoman.app %>/img/{,*/}*.{gif,jpeg,jpg,png,svg,webp}'
                ]
            }
        },

        // The actual grunt server settings
        connect: {
            options: {
                port: 9000,
                livereload: 35729,
                // Change this to '0.0.0.0' to access the server from outside
                hostname: 'localhost'
            },
            livereload: {
                options: {
                    open: true,
                    base: [
                        '.tmp',
                        '<%= yeoman.app %>'
                    ]
                }
            },
            test: {
                options: {
                    port: 9001,
                    base: [
                        '.tmp',
                        'test',
                        '<%= yeoman.app %>'
                    ]
                }
            },
            dist: {
                options: {
                    open: true,
                    base: '<%= yeoman.dist %>',
                    livereload: false
                }
            }
        },

        // Empties folders to start fresh
        clean: {
            dist: {
                files: [{
                    dot: true,
                    src: [
                        '.tmp',
                        '<%= yeoman.dist %>/*',
                        '!<%= yeoman.dist %>/.git*',
                    ]
                }]
            },
	    distjs: {
	      files: [{
                    dot: true,
                    src: [
		      '<%= yeoman.dist %>/wp-content'
                    ]
               }]
	    },
            server: '.tmp'
        },

        // Make sure code styles are up to par and there are no obvious mistakes
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                reporter: require('jshint-stylish')
            },
            all: [
                'Gruntfile.js',
                '<%= yeoman.app %>js/scripts.js',
                'test/spec/{,*/}*.js'
            ]
        },


        // Mocha testing framework configuration options
        mocha: {
            all: {
                options: {
                    run: true,
                    urls: ['http://<%= connect.test.options.hostname %>:<%= connect.test.options.port %>/index.html']
                }
            }
        },


        // Compiles Sass to CSS and generates necessary files if requested
        compass: {
            options: {
                sassDir: '<%= yeoman.app %>sass',
                cssDir: '.tmp/styles',
                generatedImagesDir: '.tmp/images/generated',
                imagesDir: '<%= yeoman.app %>img',
                javascriptsDir: '<%= yeoman.app %>js',
                importPath: '<%= yeoman.app %>bower_components',
                httpImagesPath: 'img',
                httpGeneratedImagesPath: 'img/generated',
                relativeAssets: false,
                assetCacheBuster: false
            },
            dist: {
                options: {
                    generatedImagesDir: '<%= yeoman.dist %>/images/generated'
                }
            },
            server: {
                options: {
                    debugInfo: true
                }
            }
        },

        // Automatically inject Bower components into the HTML file
        'bower-install': {
            app: {
                html: '<%= yeoman.app %>header.php',
                ignorePath: '<%= yeoman.app %>/'
            }
        },
	
	useminPrepare: {
	    html: ['<%= yeoman.app %>header.php', '<%= yeoman.app %>footer.php'],
	    scripts: {
              src: ['<%= yeoman.app %>header.php', '<%= yeoman.app %>footer.php']
	    },
	    options: {
	      root: '<%= yeoman.app %>',
              dest: '<%= yeoman.dist %>'
            }
        },
		
	usemin: {
	    html: ['<%= yeoman.dist %>/header.php', '<%= yeoman.dist %>/footer.php'],
	    options: {
              assetsDirs: ['<%= yeoman.dist %>', '<%= yeoman.dist %>/js']
            }
	},

        // By default, your `index.html`'s <!-- Usemin block --> will take care of
        // minification. These next options are pre-configured if you do not wish
        // to use the Usemin blocks.
	cssmin: {
             dist: {
                 files: {
                    '<%= yeoman.dist %>/style.css': [
                         '.tmp/styles/{,*/}*.css',
                         '<%= yeoman.app %>{,*/}*.css'
                    ]
                 }
            }
        },
//         uglify: {
//              dist: {
//                  files: {
//                      '<%= yeoman.dist %>/js/scripts.js': [
//                          '<%= yeoman.dist %>/js/scripts.js'
//                      ]
//                  }
//              }
//         },
//         concat: {
//              dist: {}
//         },

        // Copies remaining files to places other tasks can use
        copy: {
            dist: {
                files: [{
                    expand: true,
                    dot: true,
                    cwd: '<%= yeoman.app %>',
                    dest: '<%= yeoman.dist %>',
                    src: [
                        '*.{ico,png,txt}',
                        '.htaccess',
		        //'js/{,*/}*.js',
			'img/{,*/}*.*',
                        'img/{,*/}*.webp',
                        '{,*/}*.php',
			'includes',
			'lib',
			'my-templates'
		        //'style.css'
                    ]
                }, {
		  expand: true,
		  dot: true,
		  cwd: '<%= yeoman.dist %>/wp-content/themes/eneh-wp-theme/eneh-art',
		  dest: '<%= yeoman.dist %>',
		  src: 'js/{,*/}*.js'
		}],
            },
            styles: {
                expand: true,
                dot: true,
                cwd: '<%= yeoman.app %>',
                dest: '.tmp/styles/',
                src: '{,*/}*.css'
            },
        },

        // Run some tasks in parallel to speed up build process
        concurrent: {
            server: [
                'compass:server',
                'copy:styles'
            ],
            test: [
                'copy:styles'
            ],
            dist: [
                'compass',
                'copy:styles',
            ]
        }
    });


    grunt.registerTask('serve', function (target) {
        if (target === 'dist') {
            return grunt.task.run(['build', 'connect:dist:keepalive']);
        }

        grunt.task.run([
            'clean:server',
            'concurrent:server',
            'connect:livereload',
            'watch'
        ]);
    });

    grunt.registerTask('server', function () {
        grunt.log.warn('The `server` task has been deprecated. Use `grunt serve` to start a server.');
        grunt.task.run(['serve']);
    });

    grunt.registerTask('test', function(target) {
        if (target !== 'watch') {
            grunt.task.run([
                'clean:server',
                'concurrent:test'
            ]);
        }

        grunt.task.run([
            'connect:test',
            'mocha'
        ]);
    });

    grunt.registerTask('build', [
        'clean:dist',
	'useminPrepare',
	'concat',
	'uglify',
	'cssmin',
	'copy:dist',
	'usemin',
	'clean:distjs'
        //'concurrent:dist'
    ]);

    grunt.registerTask('default', [
        'newer:jshint',
        'test',
        'build'
    ]);
};
