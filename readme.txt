=== Title Tag, Evert's simple version ===
Contributors: Evert Mouw
Donate link: http://www.evertmouw.nl/
Tags: title, meta
Requires at least: 4.0.0
Tested up to: 4.1.1
Stable tag: trunk

Title tag: Index page as Site Title, other pages as Page Title - Site Title.

== Description ==

This plugin sets the `<title>` tag in the `<head>` section of the HTML output.

First page / index page:

	title = name of the website | subtitle (short description of the website)

All other posts and pages:

	title = title of the post/page | name of the website

Notes:

- The seperator is the default symbol, probably "|".
- Feeds only receive the page/post title and are not modified.
- Page numbers are handled too.

The code is a very basic copy of:

<http://codex.wordpress.org/Plugin_API/Filter_Reference/wp_title>

== Screenshots ==

1. Result: Page title and Site name in a Firefox window.

