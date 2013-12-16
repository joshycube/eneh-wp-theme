# Require any additional compass plugins here.

require "compass-normalize"

http_path = "/"
css_dir = "/"
sass_dir = "sass"
images_dir = "img"
javascripts_dir = "js"
cache = false 

environment = :development
line_comments = false
preferred_syntax = :sass
output_style = (environment == :production) ? :compressed : :expanded
