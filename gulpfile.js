//////////////////////////////////////////
//Required
//////////////////////////////////////////

var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	plumber = require('gulp-plumber'),
	autoprefixer = require('gulp-autoprefixer'),
	del = require('del'),
	rename = require('gulp-rename');


//////////////////////////////////////////
//Scripts Task
//////////////////////////////////////////
gulp.task('scripts',function(){
	gulp.src(['henry/js/**/*.js','!henry/js/**/*.min.js'])
	.pipe(plumber())
	.pipe(rename({suffix:".min"}))
	.pipe(uglify())
	.pipe(gulp.dest('henry/js'))
});


// ////////////////////////////////////////////////
// Log Errors
// // /////////////////////////////////////////////

function errorlog(err){
	console.error(err.message);
	this.emit('end');
}


//////////////////////////////////////////
//Styles Sass Task
//////////////////////////////////////////


gulp.task('styles',function(){
	gulp.src('henry/scss/**/*.scss')
	.pipe(plumber())
	.pipe(sass({outputStyle:'compressed'}))
	.on('error',errorlog)
	.pipe(autoprefixer({
		browsers: ['last 2 versions'],
		cascade:false
	}))
	.pipe(gulp.dest('henry/css/'))
	// .pipe(reload({stream:true}));
});



//////////////////////////////////////////
//Build Task
//////////////////////////////////////////

// clear out all files and folders from build folder
gulp.task('build:cleanfolder',function(cb){
	del([
			'build/**'
		],cb);
});

// task to create buid directory for all files
gulp.task('build:copy',function(){
	return gulp.src('henry/**/*/')
	.pipe(gulp.dest('build/'))
});

//task to remove unwanted build Files
//List all file and directories here you don't want to include
gulp.task('build:remove',['build:copy'], function(cb){
	del([
			'build/scss/',
			'build/js/!(*.min.js)'
		],cb);
});


gulp.task('build',['build:copy','build:remove']);



//////////////////////////////////////////
//Watch Task
//////////////////////////////////////////
gulp.task('watch',function(){
	gulp.watch('henry/js/**/*.js',['scripts']);
	gulp.watch('henry/scss/',['styles']);
});





//////////////////////////////////////////
//Default Task
//////////////////////////////////////////

gulp.task('default',['scripts','styles','watch']);