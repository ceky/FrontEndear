---
layout: blog-article
title: Dependencies in package.json
description: Exploring the ways to define dependencies in package.json. And looking into the difference between dependencies and devDependencies property.
tags:
- dependencies
- javascript
- npm
---

## dependencies vs devDependencies

A dependency specifies a package which the project is using. Some examples could be angular, lodash, jquery or bootstrap.

And a dev dependency specifies a package which the project is using in the development phase only. That means that it’s not needed anymore for the end user when using the component you’re developing. It often makes sense to include build and test tools as dev dependencies, so end users don’t have to install them if they aren't required to use the package. devDependencies work exactly the same as dependencies, but they are not installed when a user installs your package.

To give an example let’s say we’re developing a login form. We use bootstrap to implement the form and jasmine to test our code. If another project is using our login form, it will need bootstrap to run the project, because there are some CSS classes we’re using or maybe some tooltips implemented in bootstrap. But Jasmine would not be required. It was used just in the development phase.

{% highlight jsonnet %}
{
  name: 'login-form',
  dependencies: {
    'Bootstrap': '3.2.0'
  },
  devDependencies: {
    'Jasmine': '1.7.0'
  }
}
{% endhighlight %}

## Defining dependencies

Dependencies are specified in a simple object that maps a package name to a version range. You can get the package name from [www.npmjs.com](https://www.npmjs.com). Then write in the console:

{% highlight javascript %}
npm install <package>@<version>
{% endhighlight %}

For example: {% highlight javascript %}
npm install react@15.4.0
{% endhighlight %}

You can also add the ```--save flag``` to that command to add it to your package.json dependencies, or ```--save --save-exact``` flags if you want that exact version specified in your package.json dependencies.

## Ways to declare the version

A version is composed of three numbers called major, minor and patch.

There are multiple ways to define the version range of the dependency in package.json. Some of the most commons are:
1. Simple ranges   
Using less than and greater than or equal to symbols:
```'react': '>=15.0.0 <=16.0.0'```

2. Hyphen ranges   
Defining ```'react': '1.2 - 2.3.4'``` means >=1.2.0 and <=2.3.4  


3. X-Ranges   
Any of X, x, or * may be used to replace one of the numeric values in the [major, minor, patch] tuple.  
So ```'react': '1.x'``` is >=1.0.0 <2.0.0  
And ```'react': '1.2.x'``` is >=1.2.0 <1.3.0

4. Tilde ranges   
Allows patch-level changes if a minor version is specified on the comparator. Allows minor-level changes if not.  
So ```'react': '~1.2'``` is >=1.2.0 <1.3.0 (Same as 1.2.x)  
And ```'react': '~1'``` is >=1.0.0 <2.0.0 (Same as 1.x)  
And ```'react': '~0.2.3'``` is >=0.2.3 <0.3.0

5. Caret ranges   
Allows changes that do not modify the left-most non-zero digit in the [major, minor, patch] tuple  
So ```'react': '^1.2.3'``` is >=1.2.3 <2.0.0  
And ```'react': '^0.2.3'``` is >=0.2.3 <0.3.0



Resources:  
[https://docs.npmjs.com/files/package.json](https://docs.npmjs.com/files/package.json)  
[http://package.json.is](http://package.json.is/)  
[https://docs.npmjs.com/misc/semver](https://docs.npmjs.com/misc/semver)
