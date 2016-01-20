# Previous and Next Sibling

## Maintainers

* Gordon Anderson (Nickname: nontgor)
	<gordon.b.anderson@gmail.com>

##Introduction
This module provides convenience methods for previous and next siblings of a
common parent.  It is used for paging through a list of children items.
 
##Installation
```bash
composer require weboftalent/prev-next-sibling
```
##Usage
##Previous Sibling
In a template call ``$PreviousSibling``
```
<% with $PreviousSibling %><a href="$Link">$Title</a><% end_with %>
```
If there is no previous sibling the result will be blank and nothing will render.

##NextSibling
In a template call ``$NextSibling``
```
<% with $NextSibling %><a href="$Link">$Title</a><% end_with %>
```
If there is no next sibling the result will be blank and nothing will render.

For more documentation about the module see the provided documentation located
inside the docs folder.

##Requirements
* SilverStripe 3.1 or 3.2
