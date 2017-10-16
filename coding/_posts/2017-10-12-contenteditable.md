---
layout: blog-article
title: Little magic with contenteditable
description: Edit css live on the page
tags:
- CSS
---

So apparently the ```<style>``` tag that we use to define the css has a property set by all the browser to ```display:none```. If we woud set it to block we could see it in the page. 

And it has another property that can be set to true: ```contenteditable=true```. The result is that you can edit the css right in the page and see the results immediately. 

I've seen this used in the presentations during UI conferences and it looked like magic. A page that is making use of this property is [https://css-tricks.com/examples/ShapesOfCSS](https://css-tricks.com/examples/ShapesOfCSS){:target="_blank"}. 