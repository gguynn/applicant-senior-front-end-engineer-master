# Developer Notes/Logs for Review

### Aug 6, 12p-5p

#### Setup WordPress Environment (Root CLI)

- Added Composer configuration and installed WP via Composer.
- Added documentation to README.
- Added database and site: Eats.
- Added repo and initial commit.
- * Skipped using environment variables for this exercise.

#### Added SFEE Theme (Theme CLI)

- Added theme files from WP Underscores (test/build scripts, functions, template files, languages, comments) excluding any CSS.
- Organized structure similar to [10up Engineering Best Practices](https://10up.github.io/Engineering-Best-Practices/structure/#file-organization).
- Added theme assets.
- Added sass variables and partials.
- Tested and compiled styles and scripts including Composer build scripts.
- Added initial CSS basing on [HTML5 Boilerplate](https://html5boilerplate.com/) and normalize.
- * Skipped using minification, Babel, autoprefixing, and all other asset specific bundling for this exercise. Used manual linting and IDE.

√ Core and Theme files can be bundled, compiled, and version control independently.

[MERGED PULL REQUEST 1](https://github.com/gguynn/applicant-senior-front-end-engineer-master/pull/1)

### Aug 6, 6p-12a

#### Theme Development: Root

- Added root components: header, navigation, search, content and styles.
- Added pages, menu items, logo, and styles.
- Added svg to buttons.
- Added search form and styles.

[MERGED PULL REQUEST 2](https://github.com/gguynn/applicant-senior-front-end-engineer-master/pull/2)

### Aug 7, 12p-

#### Theme Development: Content

- Added/updated partials and tags for main content.
- Added markup and styles for entry partials.
- Added hover and focus states.
- Added UI interactions (menu and search toggle) via jQuery with aria specifications and active states.

Next:
- Add media queries for larger screens.
- Should add notes to README explaining decision not to use fixed header (admin bar, pushing down content with acitive dropdowns).  Not taking liberties with hover/focus states, animations, etc.
- Should explain reasoning for jQuery and not overabstrating easy to read JS code.
- Add installation notes about developer being able to pluck theme folder from source and setting up own WP.

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

# Project

## 10up Senior Front End Engineering Technical Challenge

Your task is to create the attached design within a WordPress theme environment. The theme should use a WordPress menu for the main navigation, a standard loop output for displaying the article under the navigation, and the WP search. All the necessary design files are inside this directory as well as any information you need to complete the exercise.

The designs are given for large screen (1200px) and small screen (360px), you should adjust the UI as you see fit to accommodate your chosen breakpoints - it is OK to deviate from the design for this purpose as long as the largest and smallest breakpoints match the design.

Please use your best judgement for any decisions that need to be made about the implementation including potential task runners, modules, plugins, and libraries you feel are necessary to create the interface. The goal of this exercise is to help us gauge your knowledge with HTML, CSS, and JavaScript, so be sure you display anything you want us to see!

Please also track your time, our goal is to make these exercises thorough, but not overwhelming so getting your feedback very much helps the process.

### ATTN: Please do not use a starter theme to complete this exercise.

We are testing certain aspects of front-end implementations that are often invalidated or incorrect with some popular WordPress starter themes. To get a true submission, please build from as near scratch as you can.

## Fonts

Raleway: https://fonts.google.com/specimen/Raleway

### Sizes

- Headings: 36px
- Navigation: 18px
- Forms: 16px
- Content: 14px

### Colors

- Orange: #CC4B00 (Links)
- Yellow: #FFC700 (Navigation highlight)
- Light Blue: #006EF5 (Branding)
- Blue: #004EAE (Search and Small screen navigation)
- Dark Blue: #013371 (hover/focus in navigation)
- Gray: #767676 (Meta info and placeholder text)
- Dark Gray: #333333 (Content and in-form search icon)
- White: #FFFFFF (Header links / icons and search input)

### Spacing

- Gutters are in increments of 5px although most are set to 20px

### Design Files

- /project/Designs/SFEE__Large-Screen.png (Default large screen state with navigation item hovered/focused)
- /project/Designs/SFEE__Large Screen--Search.png (Search open)
- /project/Designs/SFEE__Small-Screen.png (Default small screen state with navigation item hovered/focused)
- /project/Designs/SFEE__Small-Screen--Navigation.png (Navigation open)
- /project/Designs/SFEE__Small-Screen--Search-Open.png (Search open)
- /project/Designs/SFEE__Small-Screen--Search-Filled.png (Search open and filled)

### Icons

- /project/Icons/cheveron-right.svg
- /project/Icons/close.svg
- /project/Icons/menu.svg
- /project/Icons/search.svg

### Images

- /project/Images/logo.svg
- /project/Images/sandwich.png
