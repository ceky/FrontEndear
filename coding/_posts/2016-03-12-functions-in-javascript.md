---
layout: blog-article
title: Functions in javascript
description: Functions in javascript. ES5 and ES2015.
tags: [functions, javascript, ES2015]
---

I will explore the different ways of declaring a functions and some new related features introduced with ES2015.
## **Function constructor vs. function declaration vs. function expression**

### **Function constructor**
{% highlight javascript %}
// Create a function that takes two arguments and returns the sum of those arguments
var sum = new Function('a', 'b', 'console.log(a + b)');
sum(2, 6);
{% endhighlight %}

but having to enclose everything in quotes isn't exactly convenient.

### **Function declaration**
{% highlight javascript %}
function sum(a, b) {  
   console.log(a + b);
}
{% endhighlight %}

A function defined by a function declaration is the only one that can be used before the function declaration itself. For example:
{% highlight javascript %}
sum(2, 6); // returns 8

function sum(a, b) {  
   console.log(a + b);
}
{% endhighlight %}

While:

{% highlight javascript %}
sum(2, 6); // sum is not a function

var sum = function(a, b) {  
   console.log(a + b);
}
{% endhighlight %}

### **Function expression**
The main difference between a function expression and a function declaration is the function name, which can be omitted in function expressions.

{% highlight javascript %}
var sum = function(a, b) {  
   console.log(a + b);
}
{% endhighlight %}

## **The arrow function expression (=>)**

Arrow functions are new in ES2015 and they are supported by most of the browsers [http://caniuse.com/#feat=arrow-functions](http://caniuse.com/#feat=arrow-functions){:target="_blank"}. An arrow function expression has a shorter syntax. Also simplifies function scoping and the ```this``` keyword:

{% highlight javascript %}
var sum = (a, b) => {
   console.log(a + b);
}
{% endhighlight %}

One common use case for arrow functions is when dealing with promises and callbacks. Without arrow functions, the promise code needs to be written something like this:

{% highlight javascript %}
// ES5
API.get = function() {
    var self = this;
    return new Promise(function(resolve, reject) {
        http.get(self.uri, function(data) {
            resolve(data);
        });
    });
};
{% endhighlight %}

Using an arrow function, the same result can be achieved more concisely and clearly:

{% highlight javascript %}
// ES2015 (or ES6)
API.get = function() {
    return new Promise((resolve, reject) => {
        http.get(this.uri, function(data) {
            resolve(data);
        });
    });
};
{% endhighlight %}

 Arrow function expressions are best suited for non-method functions. Let's see what happens when we try to use them as methods:

{% highlight javascript %}
var obj = {
    i: 10,
    b: () => console.log(this.i, this),
    c: function() {
        console.log(this.i, this);
    }
}
obj.b(); // prints undefined, Object window
obj.c(); // prints 10, Object {...}
{% endhighlight %}

## **Default parameters**
Also a new feature in ES2015:

{% highlight javascript %}
function sum(a, b=2) {  
   console.log(a + b);
}

sum (3);  // returns 5
{% endhighlight %}

## **Rest parameters**
Are another ES2015 feature. If the last named argument of a function is prefixed with ..., it becomes an array whose elements are supplied by the actual arguments passed to the function.

{% highlight javascript %}
function fun1(...theArgs) {
  console.log(theArgs.length);
}

fun1();  // 0
fun1(5, 6, 7); // 3
{% endhighlight %}