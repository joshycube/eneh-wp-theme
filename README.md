Eneh Wordpress themes - Eneh art
================================

Build
====================

Presume that you already have nodejs installed with npm, bower, grunt and compass with compass-normalize

- sudo npm install
- grunt build

Grid system - Greedo
====================

Greedo - 12 columns content first SCSS based grid system with 4 breakpoints:

- Death Star for larger screens (big displays)
- Star destroyer for large screens (laptops, desktops, large tablets)
- AT-AT for smaller screens (tablets portraits and tablet/mobile landscapes)
- Tie fighter for small screens (mobile portraits)

Grido follows the content based breakpoint idea which means you have to set up your breakpoints based on your content needs.
You can modify the settings under the /* Breakpoints */ section and also under /* Grid settings  */ sections in settings.scss.

EMS (em) is the main unit used by Greedo. 
The formula is target ÷ context = result,
body font-size: 100% (16px) then 1em = 16px.
Usage: 21px / 16px = 1.3125em.

http://bradfrostweb.com/blog/post/7-habits-of-highly-effective-media-queries/

CSS3 - SASS
===========

Used libraries:

- Greedo
- Normalize
- Compass support
- Compass css3

Modules:

- Base
- Font
- Layout
- Menu
- Page
- Gallery

Responsive images
=================
- responsive-images.js https://github.com/kvendrik/responsive-images.js
- functions.php add_image_size():
  - thumbnail: 520x250
  - smallest: 50x
  - smaller: 150x
  - small: 250x
  - med: 500x
  - large: 900x
  - larger: 1000x

Grunt
=====

- cleaning dist
- usemin and prepare: concat, uglify, replace
- cssmin
- copy to dist

Required WP plugins
===================

- Advanced custom fields
- Custom post type UI

Templates
=========

Real word example
=================
- http://www.matesandor.hu

TODO
====

- Enviromnents
- Greedo is content first but not mobile first yet
- Identation issues (2 spaces should be applied everywhere)
- Admin functions

