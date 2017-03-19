---
layout: blog-article
title: Classes in javascript
description: ES2015 classes are not something really new. Just the syntax is so much better than in the previous version of javascript.
tags: 
- OOP
- javascript
- ES2015
---

ES2015 classes offer a much nicer syntax than the previous version where we had to use objects and prototypes to achieve the same results.

{% highlight javascript %}
class Chocolate {
    constructor(name) {
        this.name = name;
    }
    toString() {
        return this.name;
    }
}

class DarkChocolate extends Chocolate {
    constructor(name, cocoaPercentage) {
        super(name, cocoaPercentage);
        this.cocoaPercentage = cocoaPercentage;
    }
    toString() {
        return super.toString() + ' with ' + this.cocoaPercentage + '% cocoa';
    }
    static getTaste() {
        return 'bittersweet';
    }
}

let chocolate = new DarkChocolate('Lindt', 80);
console.log(chocolate.toString());  // -> 'Lindt with 80% cocoa'
console.log(DarkChocolate.getTaste());  // -> 'bittersweet'
{% endhighlight %}

We still set properties through the ```this.property```, but defining methods on the class is done differently, not containing the function keyword.

**Static** methods are called without instantiating their class and cannot be called through a class instance.

The **extends** keyword is used to create a class as a child of another class.

If there is a constructor present in a sub-class, it needs to first call **super()** before using "this". The super keyword is used to call functions on an object's parent.