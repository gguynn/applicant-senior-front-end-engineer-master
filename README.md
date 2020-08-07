# Developer Notes/Logs for Review

### Aug 6, 12p-5p

During this period, I took the following steps:

#### Installed WordPress core

* Created a `composer.json` file configured to install WordPress in the `dist` directory.
* Documented the installation process in the `README.md` file.
* Skipped using environment variables for this exercise.

#### Developed SFEE theme scaffolding

Used WP Underscores starter theme to extract core (preferred standards) theme files and tools: semantic template scaffolding, linter, sass complier, base element classes, WP helpers, partials, includes, and languages. Updates theme's base was structured to resemble [10up Engineering Best Practices](https://10up.github.io/Engineering-Best-Practices/structure/#file-organization).

√, both WordPress core and theme can be bundled together (or separatly) in version control. One expection is the sql database file in `src` which is manually exported.

Next, tackled theme assets. Specifically, stylesheets. Introduced variables and partials. Tested lining and compiling node scripts. Extractred CSS definitions from [HTML5 Boilerplate](https://html5boilerplate.com/) for base and helper classes.

* I could have included `normailize.css` as an npm dependency.
* Skipped minification, Babel, autoprefixing, and all other asset specific bundling for this exercise.

[MERGED PULL REQUEST](https://github.com/gguynn/applicant-senior-front-end-engineer-master/pull/1)

### Aug 6, 6p-1a

#### Developed SFEE theme styles, templates, and functions

Wrote template markup (HTML/PHP) and stylesheets in sass. Worked with template tags and functions. Bounced around quite a bit and commented my commits the best I could. The theme is nearly laid out and complete.

Note: The stylesheet appoach is mobile-first. 

Tommorrow: 

* Add media queries for larger sreens.
* Update and complete template partials, specifically, .type-post in both content and excerpt contexts.
* Devlop UI interactions (menu and search toggle) via jQuery or vanilla JS (including appropriate aria specifications).

# Installation

### Requirements

- [Composer](https://getcomposer.org/)

### 1. Install WordPress via Composer
```bash
composer install
```

### 2. Map DNS to the public directory

Note: I will be using [Laravel Valet](https://laravel.com/docs/7.x/valet) to map the domain: `http://eats.test`

`cd dist/public && valet link eats && cd ../../`

### 3. Configure your database and copy theme foloder

1. Create a SQL database. Mine is called: `eats`
1. Import this SQL file into your database: `src/eats_2020-08-07.sql`
1. Run: `cp src/wp-config.php dist/public/wp-config.php && cp -rf src/theme/sfee/ dist/public/wp-content/themes/sfee/ && cp -rf src/media/uploads/ dist/public/wp-content/uploads/`
1. Update the database name and credentials in: `dist/public/wp-config.php`

Note: For this exercise, `WP_DEBUG` is set to `true`.

### 4. Login to WordPress

[http://eats.test/wp-login.php](http://eats.test/wp-login.php)

user/pass:
demo
Nn3hbaS7Qi1nXRv)KWJXaX*D

1. Login and click `Save Changes` on [Permalink Settings](http://eats.test/wp-admin/options-permalink.php)

# 10up Senior Front End Engineering Technical Challenge
Your task is to create the attached design within a WordPress theme environment. The theme should use a WordPress menu for the main navigation, a standard loop output for displaying the article under the navigation, and the WP search. All the necessary design files are inside this directory as well as any information you need to complete the exercise.

The designs are given for large screen (1200px) and small screen (360px), you should adjust the UI as you see fit to accommodate your chosen breakpoints - it is OK to deviate from the design for this purpose as long as the largest and smallest breakpoints match the design.

Please use your best judgement for any decisions that need to be made about the implementation including potential task runners, modules, plugins, and libraries you feel are necessary to create the interface. The goal of this exercise is to help us gauge your knowledge with HTML, CSS, and JavaScript, so be sure you display anything you want us to see!

Please also track your time, our goal is to make these exercises thorough, but not overwhelming so getting your feedback very much helps the process.

## ATTN: Please do not use a starter theme to complete this exercise.
We are testing certain aspects of front-end implementations that are often invalidated or incorrect with some popular WordPress starter themes. To get a true submission, please build from as near scratch as you can.

## Fonts
Raleway: https://fonts.google.com/specimen/Raleway

### Sizes
- Headings: 36px
- Navigation: 18px
- Forms: 16px
- Content: 14px

## Colors
- Orange: #CC4B00 (Links)
- Yellow: #FFC700 (Navigation highlight)
- Light Blue: #006EF5 (Branding)
- Blue: #004EAE (Search and Small screen navigation)
- Dark Blue: #013371 (hover/focus in navigation)
- Gray: #767676 (Meta info and placeholder text)
- Dark Gray: #333333 (Content and in-form search icon)
- White: #FFFFFF (Header links / icons and search input)

## Spacing
- Gutters are in increments of 5px although most are set to 20px

## Design Files
- /project/Designs/SFEE__Large-Screen.png (Default large screen state with navigation item hovered/focused)
- /project/Designs/SFEE__Large Screen--Search.png (Search open)
- /project/Designs/SFEE__Small-Screen.png (Default small screen state with navigation item hovered/focused)
- /project/Designs/SFEE__Small-Screen--Navigation.png (Navigation open)
- /project/Designs/SFEE__Small-Screen--Search-Open.png (Search open)
- /project/Designs/SFEE__Small-Screen--Search-Filled.png (Search open and filled)

## Icons
- /project/Icons/cheveron-right.svg
- /project/Icons/close.svg
- /project/Icons/menu.svg
- /project/Icons/search.svg

## Images
- /project/Images/logo.svg
- /project/Images/sandwich.png
