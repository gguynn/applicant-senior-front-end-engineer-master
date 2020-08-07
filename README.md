# Installation

### Requirements

- [Composer](https://getcomposer.org/)

### 1. Install WordPress via Composer
```bash
composer install
```

### 2. Map DNS to the public directory

Note: I will be using [Laravel Valet](https://laravel.com/docs/7.x/valet) to map the domain: http://eats.test

`cd dist/public && valet link eats && cd ../../`

### 3. Configure your database and copy theme foloder

Note:
* I will forgo using environment variables for this exercise.
* This is a development project.  `WP_DEBUG` is set to `true`.

1. Create a SQL database.  Mine is called: `eats`
1. Run: `cp src/wp-config.php dist/public/wp-config.php && cp -rf src/theme/sfee/ dist/public/wp-content/themes/sfee/`
1. Update the database name and credentials in: `dist/public/wp-config.php`
1. Import this SQL file into your database: `src/eats_2020-08-06.sql`

### 4. Login to WordPress

[http://eats.test/wp-login.php](http://eats.test/wp-login.php)
* user: demo
* pass: Nn3hbaS7Qi1nXRv)KWJXaX*D

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
