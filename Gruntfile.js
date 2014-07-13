module.exports = function(grunt) {

  grunt.initConfig({

    sass: {
      dist: {
        options: {
            style: 'compressed'
        },
        files: {
            'style.css': 'scss/style.scss'
        }
      } 
    },
  
    watch: {
      css: {
        files: ['scss/*.scss'],
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