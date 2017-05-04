---
layout: blog-article
title: Working with javascript modules
description: Implement javascript modules using ES2015, browserify, babel, babelify, babel and gulp.
tags:
- javascript
- modules
- ES2016
- browserify
- babel
- gulp
---

## 1. ES2015 Modules

Javascript has introduced built-in modules in ES2015. The modules are stored in files and there are two ways of exporting things from a module:

**A. Multiple named exports**

{% highlight javascript %}
//------ languages.js ------
export function english() {
    console.log('computer');
}
export function spanish() {
    console.log('ordenador');
}

//------ main.js ------
import { english, spanish } from 'languages';
english(); // 'computer'
spanish(); // 'ordenador'
{% endhighlight %}

**B. Single default export**

{% highlight javascript %}
//------ languages.js ------
export default spanish () { ··· } // no semicolon!

//------ main1.js ------
import spanish from 'languages';
spanish();
{% endhighlight %}

## 2. Babel
ES2015 modules are not well supported by browsers [http://caniuse.com/#feat=es6-module](http://caniuse.com/#feat=es6-module){:target="_blank"}. So we need to use a transpiler like Babel to compile ES2015 code to ES5.

{% highlight javascript %}
$ npm install babel-cli
$ npm install babel-preset-es2015
{% endhighlight %}

 [```babel-preset-es2015```](https://babeljs.io/docs/plugins/preset-es2015){:target="_blank"} contains multiple plugins. For this case it would be enough to install the es2015 modules plugin. But in a big project you would normally install the whole preset to benefit of all the ES2015 features being transpiled by babel.

But even after installing a preset, you need to tell Babel to use it. You do this using .babelrc file

{% highlight javascript %}
.babelrc
{
  "presets": ["es2015"]
}
{% endhighlight %}

This tells babel to use the ES2015 preset.

## 3. Babelify

Babelify is transforming the ES2015 modules into code that uses the ```require``` function to load the modules.

## 4. Browserify

So after Babelify transforms the code, we now have a ```require()``` function, but browsers don't know how to interpret this function. There's where Browserify comes into play.

So this is how the code would looks like after the ES2015 modules would be transpiled by babelify.

{% highlight javascript %}
//------ add.js ------
module.exports = function add(x, y) {
  return x + y;
}

//------ main.js ------
var add = require('./add');
console.log(add(4, 3)); // => 7
{% endhighlight %}

So Browserify make the browsers be able to run this code.

## 5. Gulp

So now all the browsers will be able to interpret the ES2015 syntax for modules. However we would like to have this process being done automated. And for that we would use Gulp. Here's how the syntax would look like:

{% highlight javascript %}
var gulp = require('gulp');
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');

gulp.task('build', function () {
    return browserify({ entries: [
        'index.js'
    ]}, { debug: true })
        .transform(babelify, { sourceMaps: true })
        .bundle()
        .pipe(source('bundle.js'))
		.pipe(buffer())
        .pipe(gulp.dest('dist'));
});
{% endhighlight %}

Basically you can say that vinyl-source-stream convert the readable stream you get from browserify into a vinyl stream that is what gulp is expecting to get. A vinyl stream is a Virtual file format, and it is fundamental for Gulp. Thanks to this vinyl streams Gulp doesn't need to write a temporal file between different transformations. And this is one of the main advantages it have over Grunt.

## Conclusion

It might seem like a complicated process having to use all these tools. But that is something that you would do on bigger projects and only in the beginning of the development process. And it pays off considering that the modules are one of the coolest features of ES2015.

However I'm courious how this could be achived using Webpack. Something to look at in the future.
