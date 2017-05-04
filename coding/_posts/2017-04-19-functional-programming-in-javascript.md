---
layout: blog-article
title: Functional programming in javascript
description: What is functional programming and how it's used in javascript.
tags:
- javascript
- functions
---

Functional programming is a style of coding where you do everything with functions.

First of all functions are values. And they can be assigned to variables just like any other data type in javascript.

{% highlight javascript %}
var double = function(x) {
    console.log(x * 2);
}

var doubleDuplicate = double;
doubleDuplicate(5); // -> 10
{% endhighlight %}

Functions can also be passed into other functions. That is called **composition**. To take one function and put it into another function.

Functions that operate on other functions are called **higher-order functions**. For example a function taking as an input another function, or a function returning other function.

{% highlight javascript %}
function paint(color) {
    return function(car) {
        return color + ' ' + car;
  }
}

var makeRed = paint('red');
console.log(makeRed('ferrari')); // => red ferrari
{% endhighlight %}

## filter()

**filter()** is a function on the array that accepts another function as it's argument, that will be used to return a new filtered version of the array.

{% highlight javascript %}
var teams = [
    {name: 'Real Madrid', country: 'Spain'},
    {name: 'Barcelona', country: 'Spain'},
    {name: 'Bayern', country: 'Germany'},
    {name: 'Arsenal', country: 'England'},
];

// option 1 - using for loop
var spanishTeams = [];
for (var i=0; i<teams.length; i++) {
    if (teams[i].country === 'Spain') {
        spanishTeams.push(teams[i])
    }
}
console.log(spanishTeams);

// option 2 - using functional js
var spanishTeams = teams.filter((team) => {
    return team.country === 'Spain';
});
console.log(spanishTeams);
{% endhighlight %}

## map()

**map()** function from the Array object is another example:

{% highlight javascript %}
var teams = [
    {name: 'Real Madrid', country: 'Spain'},
    {name: 'Barcelona', country: 'Spain'},
    {name: 'Bayern', country: 'Germany'},
    {name: 'Arsenal', country: 'England'},
];

// option 1 - using for loop
var allTeamNames = [];
for (var i=0; i<teams.length; i++) {
    allTeamNames.push(teams[i].name);
}
console.log(allTeamNames);

// option 2 - using functional js
var allTeamNames = teams.map((team) => {
    return team.name;
});
console.log(allTeamNames);
{% endhighlight %}

These are just some examples of functional programming in practice, but there's a lot more to find about the subject. Personally I like coding in javascript using functions where I can and reduce the number of classical iterations to manipulate data. Also using functional programming the code is reduced and easier to read.
