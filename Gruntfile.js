module.exports = function(grunt) {

	grunt.initConfig({
	  watch: {
	    options: {
	      livereload: true,
	    },
	    all: {
	      files: ['**/*.+(php|css|html|js|less)', '!node_modules/**'],
	    },
	  }
	});
	grunt.loadNpmTasks('grunt-contrib-watch');
};