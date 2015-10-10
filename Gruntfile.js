module.exports = function(grunt) {

  grunt.initConfig({

    sass: {
      dist: {
        options: {
            style: 'compressed'
        },
        files: {
            'style.css': 'assets/stylesheets/scss/style.scss'
        }
      } 
    },
  
    watch: {
      css: {
        files: ['**/*.scss'],
        tasks: ['sass'],
        options: {
            spawn: false,
        }
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  grunt.registerTask('default', ['sass']);

};