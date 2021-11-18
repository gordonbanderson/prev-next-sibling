# Previous and Next Sibling
[![Module CI](https://github.com/gordonbanderson/prev-next-sibling/actions/workflows/ci.yml/badge.svg)](https://github.com/gordonbanderson/prev-next-sibling/actions/workflows/ci.yml)[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/prev-next-sibling/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/gordonbanderson/prev-next-sibling/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/prev-next-sibling/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/gordonbanderson/prev-next-sibling/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/prev-next-sibling/badges/build.png?b=main)](https://scrutinizer-ci.com/g/gordonbanderson/prev-next-sibling/build-status/main)
[![codecov.io](https://codecov.io/github/gordonbanderson/prev-next-sibling/coverage.svg?branch=main)](https://codecov.io/github/gordonbanderson/prev-next-sibling?branch=main)

[![Latest Stable Version](https://poser.pugx.org/weboftalent/prevnextsibling/version)](https://packagist.org/packages/weboftalent/prevnextsibling)
[![Latest Unstable Version](https://poser.pugx.org/weboftalent/prevnextsibling/v/unstable)](//packagist.org/packages/weboftalent/prevnextsibling)
[![Total Downloads](https://poser.pugx.org/weboftalent/prevnextsibling/downloads)](https://packagist.org/packages/weboftalent/prevnextsibling)
[![License](https://poser.pugx.org/weboftalent/prevnextsibling/license)](https://packagist.org/packages/weboftalent/prevnextsibling)
[![Monthly Downloads](https://poser.pugx.org/weboftalent/prevnextsibling/d/monthly)](https://packagist.org/packages/weboftalent/prevnextsibling)
[![Daily Downloads](https://poser.pugx.org/weboftalent/prevnextsibling/d/daily)](https://packagist.org/packages/weboftalent/prevnextsibling)

![codecov.io](https://codecov.io/github/gordonbanderson/prev-next-sibling/branch.svg?branch=main)

## Maintainers

* Gordon Anderson (Nickname: nontgor)
	<gordon.b.anderson@gmail.com>

## Introduction
This module provides convenience methods for previous and next siblings of a
common parent.  It is used for paging through a list of children items.

## Installation
```bash
composer require "weboftalent/prev-next-sibling"
```
## Usage
### Previous Sibling
In a template call ``$PreviousSibling``
```
<% with $PreviousSibling %><a href="$Link">$Title</a><% end_with %>
```
If there is no previous sibling the result will be blank and nothing will render.

### NextSibling
In a template call ``$NextSibling``
```
<% with $NextSibling %><a href="$Link">$Title</a><% end_with %>
```
If there is no next sibling the result will be blank and nothing will render.

##Requirements
* SilverStripe 4
