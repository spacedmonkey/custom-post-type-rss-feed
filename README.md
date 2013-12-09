# Custom Post Type RSS Feed 

This is a simple plugin designed to make it super easy to add custom post types RSS feed into a theme. This plugin automatically queries post types that have archives enabled and generates a markup and adds it to head. 

## Features

* This Plugin is fully-based on the WordPress [Plugin API](http://codex.wordpress.org/Plugin_API).
* Uses [PHPDoc](http://en.wikipedia.org/wiki/PHPDoc) conventions to document the code.
* Example values are given, so you can see what needs to be changed.
* Uses a strict file organization scheme to make sure the assets are easily maintainable.
* Note that this boilerplate includes a `.pot` as a starting translation file.
* Notes on managing assets prior to deployment are covered below
* Tools used for translation are below

## Contents

The Custom Post Type RSS Feed includes the following files:

* This README, a ChangeLog, and a `gitignore` file.
* A subdirectory called `plugin-name` that represents the core plugin file.

## Installation

1. Copy the `custom_post_type_rss` directory into your `wp-content/plugins` directory
2. Navigate to the *Plugins* dashboard page
3. Click on *Activate*

This will activate the Custom Post Type RSS Feed. Because the Boilerplate has no real functionality, nothing will be added to WordPress; however, this demonstrates exactly how your plugin should behave while you're working with the Boilerplate.

## Recommended Tools

### Localization Tools

The Custom Post Type RSS Feed uses a variable to store the text domain used when internationalizing strings throughout the Boilerplate. To take advantage of this method,
there are tools that are recommended for providing correct, translatable files:

* [Poedit](http://www.poedit.net/)
* [makepot](http://i18n.svn.wordpress.org/tools/trunk/)
* [i18n](https://github.com/grappler/i18n)

Any of the above tools should provide you with the proper tooling to localize the plugin.

## License

The Custom Post Type RSS Feed is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

> You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

## Important Notes

### Licensing

The Custom Post Type RSS Feed is licensed under the GPL v2 or later; however, if you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).
