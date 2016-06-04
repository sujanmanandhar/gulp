//////////////////////////////////////////
//Required
//////////////////////////////////////////

var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	compass = require('gulp-compass'),
	rename = require('gulp-rename');


//////////////////////////////////////////
//Scripts Task
//////////////////////////////////////////
gulp.task('scripts',function(){
	gulp.src(['henry/js/**/*.js','!henry/js/**/*.min.js'])
	.pipe(rename({suffix:".min"}))
	.pipe(uglify())
	.pipe(gulp.dest('henry/js'))
});


//////////////////////////////////////////
//Compass Sass Task
//////////////////////////////////////////


gulp.task('compass',function(){
	gulp.src('henry/scss/style.scss')
	.pipe(compass({
		config_file: "./config.rb",
		css:"henry/css",
		sass:'henry.scss',
		require:['susy']
	}))
	
	.pipe(gulp.dest('henry/css/'))
});




//////////////////////////////////////////
//Watch Task
//////////////////////////////////////////
gulp.task('watch',function(){
	gulp.watch('henry/js/**/*.js',['scripts']);
	gulp.watch('henry/scss/style.scss',['compass']);
});




//////////////////////////////////////////
//Default Task
//////////////////////////////////////////

gulp.task('default',['scripts','compass','watch']);