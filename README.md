# [jQuery](http://jquery.com/) - Tagger Widget #

jQuery plugin to turn a HTML select into an auto-suggesting, tagging widget.

There seemed to be other plugins that did auto-suggest, but not allowing for 
multiple tags to be selected. Or plugins to have a multi-select drop down, but 
no auto-suggest feature.

This plugin does both at the same time, hopefully giving the best of both 
worlds.
It was written from the ground up and has support for hierachical data, 
searching for data that isn't displayed, displaying arbitrary HTML in the 
suggestion list, running the original onChange actions, displaying tags for 
items previously selected but no longer in the list, keyboard accessibility and 
many other features.

- [Examples](https://fivium.github.io/jquery-tagger/examples.htm)
- [JSDoc](https://fivium.github.io/jquery-tagger/doc/jQuery.widget.ui.tagger.html)

## Use ##

Clone this repository, check out the examples folder. All you need to do is
include the two files in the src folder on your page and apply the widget to a
select and pass it appropriate options via the constructor.

It should work in everything from IE6 onwards. If you find a feature that fails 
to work in any environment, raise an issue.

## Requirements ##

* jquery : >=1.9
* jqueryui : >=1.10

If you want to build the documentation, use 
[JSDoc](https://github.com/jsdoc3/jsdoc)

Code can run through [JSHint](http://www.jshint.com/) where it will complain 
about my console.log implementation.
