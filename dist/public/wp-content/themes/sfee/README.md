# Notes/Logs for Review

### Aug 6, 12p-5p

During this period, I took the following steps:

#### Installed WordPress

* I created a `composer.json` file configured to install WordPress in the `dist` directory.
* I documented the installation process in the `README.md` file.
* I skipped using environment variables since it's not part of this exercise.

#### Created WordPress Theme

Theme Structure

While there is a note that `Please do not use a starter theme to complete this exercise.`, it is also stated `please build from as near scratch as you can`.  With that, I DID use WordPress Underscores starter theme, but stripped it down the barebones and  built forward.  It was critical that specific standards that exist in WordPress Underscores were applied to this project.  Those include semantic markup, linter, sass complier, base classes assinged to elements, WP helper functions, and WP template partials.  The theme was furthar updated to adhere closely to the theme standards defined in the [10up Engineering Best Practices](https://10up.github.io/Engineering-Best-Practices/structure/#file-organization)

#### Created WordPress Theme

At this point, both WordPress and the WordPress theme can be bundled together or separatly in version control.  The only expection is the database/sql file needs to be manually exported the the `src` folder.  That could be accomplished with a bash script.

Theme assets can be compiled and linted.

* I skipped Babel, minification and all other asset specific bundling since it's not part of this exercise.

Finally, I spent time in the theme assets, specifically, the SASS files.  I used a basic structure, introduced variables and partials. I used CSS from [HTML5 Boilerplate](https://html5boilerplate.com/) including base and helper classes and definitions.

* Depending on scope, I may have included `normailize.css` as an npm dependency.

I'm now ready to start building out the Theme!

MERGED PULL REQUEST

# Installation

### Requirements

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Setup

```sh
$ composer install
$ npm install
```

### Available CLI commands

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `language/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.
