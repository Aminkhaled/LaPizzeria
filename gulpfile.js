var gulp = require('gulp');
var image = require('gulp-image');
var uglify = require('gulp-uglify') ;
var watch = require('gulp-watch');




gulp.task('js',function () {
    gulp.src('assets/js/*.js').pipe(uglify()).pipe(gulp.dest('assets/js'));
});

var uglifyjs = require('uglify-js'); // can be a git checkout 
                                     // or another module (such as `uglify-es` for ES6 support) 
var composer = require('gulp-uglify/composer');
var pump = require('pump');

var minify = composer(uglifyjs, console);

gulp.task('compress', function (cb) {
    // the same options as described above 
    var options = {};

    pump([
            gulp.src('assets/js/*.js'),
            minify(options),
            gulp.dest('dist')
        ],
        cb
    );
});


//gulp for images
gulp.task('image-task',function () {
    gulp.src('./img/*').pipe(image()).pipe(gulp.dest('img'));
});

gulp.task('default',['compress']);