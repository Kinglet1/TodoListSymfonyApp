module.exports = function (grunt) {
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        cssmin: {
            target: {
                src: 'src/Lucy/TodolistBundle/Resources/public/css/custom.css',
                dest: 'src/Lucy/TodolistBundle/Resources/public/css/custom.min.css'
            }
        }
    });
};