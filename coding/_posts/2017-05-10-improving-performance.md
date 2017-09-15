---
layout: blog-article
title: Improving a web page loading time
description: Things to look for when doing a performance audit of a page and how can you improve the loading time.
tags:
- javascript
- CSS
- performance
---

Recently at my job I had to do an improvement on the page loading time. While I won't go into details of the results achieved and how I did it, I will however list some articles, videos and tools that helped me. That way I will know next time I will do something similar where to look for. Anyway I learned a lot of things while investigating the performance issues.

Without further ado, here are some things to look for:

## Tools

[WebPageTest](https://www.webpagetest.org/){:target="_blank"}  
It gives you very detailed explanation about how things are loading in the page. I like that you can compare the way two or more websites load and create you can also create a video with the results. It's only working with sites that are live in production. If you want to test site on your machine on deployed on an internal server of the company it won't work. But there are ways to install the tool locally.

[Google pagespeed insights](https://developers.google.com/speed/pagespeed/insights/){:target="_blank"}  
Another good tool that gives a rating of your websites and a list of things you can do to improve it.

[Lighthouse](https://developers.google.com/web/tools/lighthouse/){:target="_blank"}  
A chrome extensions that analysis a page for different things, one of them being the performance.

[Lighthouse](https://compressor.io/){:target="_blank"}  
Compress and optimize images.

## Videos
[Ilya Grigorik: Critical rendering path - Crash course on web performance](https://www.youtube.com/watch?v=PkOBnYxqj3k){:target="_blank"}  
This is the best explanation of the critical rendering path that I found.

[Ilya Grigorik: HTTP/2 best practices](https://vimeo.com/162956685){:target="_blank"}  
HTTP/2 can improve a page load time and in this videos you can find some best practices to use it. One of them being that in HTTP/1 is recommanded to concatenate all the js and css files into one. While in HTTP/2 as more requests can be processed at the same time it is better to have more js and css files. And initially load only the files that are needed to display the page and the load the others.

[Patrick Hamann: CSS and the first meaningful paint](https://www.youtube.com/watch?v=4pQ2byAoIX0){:target="_blank"}  
Using webpagetest, inline critical CSS, preload, server push using HTTP/2

[Una Kravets: The Joy of Optimizing](https://www.youtube.com/watch?v=VzHnudpszmI){:target="_blank"}  
If there's one thing that can drastically improve a page load, then that is the images on the site. In this talk you can find a lot of interesting things about choosing the right format of the image and how to decrease an image size without loosing it's quality.

[Nolan Lawson: Solving the Web Performance Crisis](https://channel9.msdn.com/Blogs/msedgedev/nolanlaw-web-perf-crisis){:target="_blank"}  
Lots of interesting stuff in this presentation. How using babel to transpile ES6 features can increase the code a lot, how tree shaking can hel you get rid of unused code, and more things about server side rendering and lazy loading.

[Tim Kadlec: Once more, with feeling](https://www.youtube.com/watch?v=S8B7oYsjBtM){:target="_blank"}  
Cool things about using webpagetest and how to show something meaningful to the user something before the content is being loaded.

[Addy Osmani: The Browser Hackers Guide To Instantly Loading Everything](https://www.youtube.com/watch?v=7vUs5yOuv-o){:target="_blank"}  
All sort of tips regarding webpagetest, webpack, babel, preload, HTTP/2 and much more.

[Bruce Lawson: Responsive Images The Browser Hackers Guide To Instantly Loading Everything](https://www.youtube.com/watch?v=BHzDvZrUWDU){:target="_blank"}  
If there's one video about responsive images to watch, then this is the one.

## Articles

[Daniel Imms: async vs defer attributes]( http://www.growingwiththeweb.com/2014/02/async-vs-defer-attributes.html){:target="_blank"}  
What's the difference between async and differ and why you should use them to load the scripts in the page.

[Addy Osmani: Preload, Prefetch And Priorities in Chrome](https://medium.com/reloading/preload-prefetch-and-priorities-in-chrome-776165961bbf){:target="_blank"}  
How to use preload and prefetch to load the resources in the page

[Smashing Magazine: Front-End Performance Checklist 2017]( https://www.smashingmagazine.com/2016/12/front-end-performance-checklist-2017-pdf-pages/){:target="_blank"}  
A huge list about things to look for if you want to achieve better performance.

[Philip Walton: Leveraging the Performance Metrics]( https://developers.google.com/web/updates/2017/06/user-centric-performance-metrics){:target="_blank"}  
Defining the notions of: First Paint(FP), First Contentful Paint(FCP), First Meaningful Paint (FMP) and Time To Interactive(TTI)  

[Brian Jackson: Resource Hints – What is Preload, Prefetch, and Preconnect?]( https://www.keycdn.com/blog/resource-hints/){:target="_blank"}  
 Best explanation I found about preload, prefetch and preconnect. Also with a link to Ilya Grigorik's excellent article about preconnect.

 [Vary - Page speed optimization techniques]( https://varvy.com/pagespeed/){:target="_blank"}  
 List of all the things you can do to improve your webpage speed. Very nice explanation for all the steps.  
  
## Courses

[Cameron Pittman, Ilya Grigorik: Website Performance Optimization](https://developers.google.com/web/fundamentals/performance/critical-rendering-path/){:target="_blank"}  
Some nice articles about the critical rendering path a free course on Udacity.

[Cameron Pittman, Paul Lewis: Browser Rendering Optimizations](https://developers.google.com/web/fundamentals/performance/rendering/){:target="_blank"}  

## More  
And finally if you're looking for more about performance, there's a website just for that where you can find courses, videos, articles and much more. Just amazing!  
[www.perf-tooling.today](http://www.perf-tooling.today/){:target="_blank"}  

I've seen lots of videos and articles about performance lately, also Paul Irish has some nice talks and performance audits that you can look for, but the one's that I've listed are some that I enjoyed most and want to have them bookmarked here.
