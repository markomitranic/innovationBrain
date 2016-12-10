index.php
The main template file. It is required in all themes.

front-page.php
The front page template is loaded if a static front page is specified under Admin > Settings > Reading.

header.php
The header template file usually contains your site’s document type, meta information, links to stylesheets and scripts, and other data.

single.php
The single post template is used when a visitor requests a single post. For this, and all other query templates, index.php is used if the query template is not present.

single-{post-type}.php
The single post template used when a visitor requests a single post from a custom post type. For example, single-book.php would be used for displaying single posts from a custom post type named book. The index.php is used if a specific query template for the custom post type is not present.

fluid.php
The page template is used when visitors request individual pages, which are a built-in template.

page-{slug}.php
The page slug template is used when visitors request a specific page, for example one with the “about” slug (page-about.php).
category.php

The category template is used when visitors request posts by category.

tag.php
The tag template is used when visitors request posts by tag.

taxonomy.php
The taxonomy term template is used when a visitor requests a term in a custom taxonomy.

search.php
The search results template is used to display a visitor’s search results.

404.php
The 404 template is used when WordPress cannot find a post, page, or other content that matches the visitor’s request.