---
layout: blog-article
title: Practical javascript&#58; Object prototypes
description: How does object prototype work? And what are the differences between defining a method in constructor vs prototype?
tags:
- javascript
- prototype
---

## Prototype

Each object has an internal link to another object called its  prototype . For example, the ```toString()``` method is defined on the generic Object prototype, but it can be accessed from any object as if it were an own property.

{% highlight javascript %}
var empty = {};
console.log(empty.toString()); // -> [object Object]
{% endhighlight %}

When we try to access a property or function of an object that it doesn't have, like in our case above, it's prototype will be searched for that property. And the the prototype's prototype, and so on. Until an object is reached with ```null``` as it's prototype.

## Methods defined in constructor vs prototype 

 Methods defined in constructor

{% highlight javascript %}
function Person(name) {
    this.name = name;
    this.getName = function() {
        console.log(this.name);
    };
}

var person = new Person('Nick');
person.getName(); // -> 'Nick'
console.log(person); // -> Person{ getName(), name: 'Nick', __proto__: {...} }
{% endhighlight %}

 Methods defined in prototype

{% highlight javascript %}
function Person(name) {
    this.name = name;
}

Person.prototype.getName = function() {
    console.log(this.name);
};

var person = new Person('Nick');
person.getName(); // -> 'Nick'
console.log(person); // -> Person{ name: 'Nick', __proto__: {getName(), ...} }
{% endhighlight %}

So the results are pretty similar.

An important thing about a function's prototype is that, unlike instance properties which are static, it will continue to update live, as its changed - even against all existing instance of the object. While for the methods created in the constructor we would have to assign a new function to every instance like so:

{% highlight javascript %}
function Person(name) {
    this.name = name;
    this.getName = function() {
        console.log(this.name);
    };
}

var person1 = new Person('Nick');
var person2 = new Person('Chloe');
person1.getName = function() {
    console.log('My name is ' + this.name);
};
person2.getName = function() {
    console.log('My name is ' + this.name);
};
person1.getName(); // -> 'My name is Nick'
person2.getName(); // -> 'My name is Chloe'
{% endhighlight %}

And using prototypes changing the method applies to both instances:

{% highlight javascript %}
function Person(name) {
    this.name = name;
}

Person.prototype.getName = function() {
    console.log(this.name);
};

var person1 = new Person('Nick');
var person2 = new Person('Cloe');
Person.prototype.getName = function() {
    console.log('My name is ' + this.name);
};
person1.getName(); // -> 'My name is Nick'
person2.getName(); // -> 'My name is Chloe'
{% endhighlight %}

But of course changing a method definition once it's defined it's not very common, that's why defining methods inside the constructor seems to be the first option for the javascript developers.

Another special case would be defining a method with the same name in both the constructor and the prototype.

{% highlight javascript %}
function Person(name) {
    this.name = name;
    this.getName = function() {
        console.log(this.name);
    };
}

Person.prototype.getName = function() {
    console.log('My name is' + this.name);
};

var person = new Person('Nick');
person.getName(); // -> 'Nick'
{% endhighlight %}

The result is that the within the method defined in the constructor always take precedence over the one defined in prototype.
