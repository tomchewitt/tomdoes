module.exports = function(grunt) {

	// LOAD TASKS FROM PACKAGE MANEFEST
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	// GRUNT CONFIG
	grunt.initConfig({

		// IMPORT MANIFEST
		pkg: grunt.file.readJSON('package.json'),

	    // CONCAT
		concat: {
			dist: {
				src: [
					// 'asset/src/js/vendor/*/**.min.js',
					'asset/src/js/module/*.js',
					'asset/src/js/script/init.js'],
				dest: 'asset/src/js/bundle.js'
			}
		},

		// MINIFY
		uglify: {
			options: {
				compress: {
			    	drop_console: true
			    }
			},
			my_target: {
				src: ['asset/src/js/bundle.js'],
				dest: 'asset/dist/js/bundle.min.js'
			}
		},

		// JSHINT
		jshint: {
			beforeconcat: ['asset/src/js/bundle.js']
		},

		// COMPASS
		compass: {
			dist: {
				options: {
					sassDir: 'asset/src/scss/',
					cssDir: 'asset/src/css/',
					environment: 'production',
					outputStyle: 'compressed'
				}
			}
		},

		// AUTOPREFIX
		autoprefixer: {
			options: {
				formatting : {
					indent_size : 4
				}
			},
			files: {
				src: 'asset/src/css/bundle-noprefix.css',
				dest: 'asset/dist/css/bundle.css'
			}
		},

		// WATCH
		watch: {
			all: {
				files: 'index.html',
				options: {
					livereload: true
				}
			},
			scripts: {
				files: 'asset/src/js/**/*.js',
				tasks: ['concat', 'jshint', 'uglify'],
				options: {
					livereload: true
				}
			},
			scss: {
				files: 'asset/src/scss/*.scss',
				tasks: ['compass'],
				options: {
					livereload: true
				}
			},
			css: {
				files: 'asset/src/css/bundle-noprefix.css',
				tasks: ['autoprefixer'],
				options: {
					livereload: true
				}
			},
		}
	});

	// CREATE TASK 'default'
	grunt.registerTask('default', ['concat', 'uglify', 'compass', 'autoprefixer']); // 'jshint', 

};



