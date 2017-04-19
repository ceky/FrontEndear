---
layout: blog-article
title: Practical javascript&#58; Variable scope
description: Looking in detail at what defines a scope in javascript and how can we make a variable exist in a certain scope.
tags:
- javascript
- ES2015
---

## Scopes
There are two scopes in the following example. First one is the global scope which defines the ```mainBlock``` variable. And the second scope is defined by the ```newBlock()``` function. So each function creates a new scope. And inside a nested scope we can access parent variables. But not the other way around. From the parent scope we don't have access to variables defined in child scopes.

{% highlight javascript %}
var mainBlock = 'parent';

function newBlock() {
    var childBlock = 'child'
    console.log(mainBlock); // -> 'parent'
    console.log(childBlock); // -> 'child'
}

newBlock();
console.log(mainBlock); // -> 'parent'
console.log(childBlock); // -> Uncaught ReferenceError: childBlock is not define
{% endhighlight %}

## Shadowing
If we have a variable with the same name in both the parent and the child scope, then access to the parent variable is blocked in the child scope. Changing the variable in the child scope does not affect the variable in the paren scope.

{% highlight javascript %}
var x = 'parent';

function innerScope() {
    var x = 'local';
    console.log(x); // -> 'local'
}

innerScope();
console.log(x); // -> 'parent'
{% endhighlight %}

## let

We saw that a function creates a new scope. But what if we need to define a variable that exists only inside a ```for``` block?

{% highlight javascript %}
for (var i=0; i<10; i++) {
    console.log(i);
}

console.log(i) // -> 10
{% endhighlight %}

or inside an ```if``` block?

{% highlight javascript %}
var isAvailable = true;

if (isAvailable) {
    var inner = false;
    console.log(inner);
}

console.log(inner) // -> false
{% endhighlight %}

In the two examples above we are using the ```i``` and the ```inner``` variables only inside the for and if statements. But ```if``` and ```for``` do not create a new scope when defining a variable using ```var```. That's why you can see those variables output ```10``` and ```false``` when printed outside the scope that we wanted to define them.

The solution to this problem would be using ```let``` instead of ```var```. The ```let``` keyword was introduced in ES2015. The ```let``` keyword attaches the variable declaration to the scope of whatever block it's contained in. So now printing the variable outside the ```for``` or ```if``` block will return an error.

{% highlight javascript %}
for (let i=0; i<10; i++) {
    console.log(i);
}

console.log(i) // -> ReferenceError
{% endhighlight %}

Also unlike the variables defined using ```var```, the declarations made with ```let``` won't hoist. The variable will exist in the block only after is defined.

However, declarations made with let will not hoist to the entire scope of the block they appear in. Such declarations will not observably "exist" in the block until the declaration statement.

{% highlight javascript %}
if (isAvailable) {
    console.log(inner); // -> ReferenceError
    var inner = false;
}
{% endhighlight %}

## const

ES2015 comes with a new way to declare a constant. Using the ```const``` keyword the variable cannot be changed once defined, returning an error if we try to do so. Also ```const``` works like ```let``` in terms of scoping.
In addition to let, ES6 introduces const, which also creates a block-scoped variable, but whose value is fixed (constant). Any attempt to change that value at a later time results in an error.

{% highlight javascript %}
if (isAvailable) {
    const inner = true;
    inner = false // -> Error
}

console.log(inner); // -> ReferenceError
{% endhighlight %}
