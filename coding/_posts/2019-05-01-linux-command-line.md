---
layout: blog-article
title: Linux command line
description: Some useful linux command line
tags:
  - Linux
---

A nice youtube playlist that goes over some basic commands can be found [here](https://www.youtube.com/playlist?list=PLS1QulWo1RIb9WVQGJ_vh-RQusbZgO_As){:target="\_blank"}.

The followin are some that I used or learned while watching this:

{% highlight javascript %}
clear // clears the terminal
{% endhighlight %}

If you want to see what a command is doing or what options can you pass to it. For example for the `cat` command:
{% highlight javascript %}
cat --help // works in Windows (git bash)
man cat
{% endhighlight %}

A common options that can be used with all the commands is `-v`. It stands for verbose, explaining things that have happened
{% highlight javascript %}
mv -v file3.txt dir3 // displays 'file3.txt -> dir3/file3.txt'
{% endhighlight %}

`ls` is a Linux shell command that lists directory contents of files and directories. The current directory by default.

`cat` command is used to display the content of text files and to combine several files to one file. If a file is too big use the `less` command to scroll through it. `cat` is not changing the content of the file.
{% highlight javascript %}
cat aa.txt bb.txt // combines two files
{% endhighlight %}

I/O Redirection (Input/Output):
{% highlight javascript %}
ls > text.txt // copies the result of the 'ls' command to text.txt
ls >> text.txt // copies the result of the 'ls' command to text.txt, appending it to the end, without overwritting the text.txt
cat list1.txt list2.txt > out.txt // combining cat and output commands
{% endhighlight %}

Directory operations:
{% highlight javascript %}
mkdir test // create directory
rmdir test // delete directory
rm test // delete directory and files from the directory
{% endhighlight %}

`cp` command is used to copy files.
{% highlight javascript %}
cp existingFile.txt newCopiedFile.txt
cp -R directory1 directory3 // copy a directory with files inside
{% endhighlight %}

`mv` command is used to move files and directories. Also used to rename a file.
{% highlight javascript %}
mv oldFileName.txt newFileName.txt // renamed
mv file3.txt dir1 // copy a file to a directory
{% endhighlight %}

`less` command shows the content of a file. Can be used as Pagers to display contents of large files page by page or scroll line by line up and down.
Use **space** to navigate down page by page. Press **b** to navigate up page by page. Use capital **G** to navigate to the end of the file. Use small **g** to navigate to the top of the file.
Use **/textToSearch** to find a text. If it appears multiple times in the document pressing **n** will navigate to the next found instance.

`touch` command is used to create file. That file is by default txt. By touching a file you either create it if it did not exists. Or you update it’s last modification and access times.

`watch` command runs a script periodically on a specified amount of time.
{% highlight javascript %}
watch -n 2 ls // runs ls command every 2 seconds
{% endhighlight %}

`head` and `tail` commands shows the first or last n number of lines of a file. By default it's 10 lines. It's useful to monitor logs in real time: \$ watch tail -n 15 mylogfile.txt. This can also be achieved by using the -f parameter for tail (tail -f file).
{% highlight javascript %}
tail -n3 name_of_file // shows the last 3 lines from the file
{% endhighlight %}

`find` command is used to search for file in a directory and it's subdirectory.
{% highlight javascript %}
find /home/programming -name \*.txt // search using a file extension
sudo find / -name dmesg // search a file dmesg in the root directory
{% endhighlight %}

`grep` command searches inside a file. Use **-i** flag to search for insensitve text (grep -i "options" file.txt).
{% highlight javascript %}
grep "options" file.txt
{% endhighlight %}

`wc` command prints lines, words, charachters counts for each file.
{% highlight javascript %}
// say we have a file test.txt with the following content: Linux Command Line tutorial
wc test.txt // returns 1 4 25 -> number of lines, words and characters
{% endhighlight %}
