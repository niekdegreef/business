#Personal starter theme & dev notes for small WP sites. #

##Local tools
 * MAMP
 * Codekit
 * Github client
 * Susy grids - https://github.com/ericam/susy
 * SCSS
 * Devdocs - http://devdocs.io

##Online tools

* Typekit where necesarry
* Typecast
* Gridlover

##Process

1. Design & set up styles in AI
1. Configure servers: MAMP / remote dev server [check php versions are same]
1. Set up folder structure, drop into codekit [check libsass comiler & autoprefixr checked]
1. Download latest underscores starter theme: http://underscores.me/
1. Get latest version of susy https://github.com/ericam/susy (or use via Codekit)
1. Include " @import "susy"; " in the mains.scss to use Susy via Codekit
1. Set basic variables, colours, padding, margin (with susy so these are relative to the grid)
1. Edit the styles document, change colour names & classes where needed
1. Define typography (http://www.gridlover.net/app/)
1. Take parts from the underscores.css and put them in correct files


## File structure

* ### styles
[http://brettjankord.com/projects/style-guide-boilerplate/ OR https://github.com/adactio/Pattern-Primer]

	* index.php 				 [ style guide accesible at site.styles ]
	* style.css 				 [ import from site's css: @import '../../style.css'; ]

* ### scss
	* **base**
		* _reset.scss 			 [ reset ] 
		* _normalize.scss 		 [ normalize (instead of reset when applicable) ] 
		* _underscores.scs		 [ underscores.me style - check if necesarry, pref. copy to scss files ]
		* _susy        			 [ susy https://github.com/ericam/susy ]
		* _global.scss        		 [ global.scss ]
		* _typography.scs		 [ Typography rules  ]
		* _shittybrowser.scs		 [ IE rules  ]
		* _touch.scss   		 [ touch rules  ]
		* _genericons.scss  		 [ icons ]
	* **helpers**
		* _variables.scss  		 [ Sass Variables ]
		* _mixins.scss     		 [ Sass Mixins ]
	* **components**
		* _navigation.scss  		 [ Navigation ]
		* _buttons.scss     		 [ Buttons ]
	* **layout**
		* _grid.scss       		 [ Grid system ]
		* _header.scss     		 [ Header ]
		* _footer.scss     		 [ Footer ]
		* _sidebar.scss    		 [ Sidebar ]
		* _forms.scss      		 [ Forms ]
	* **pages**
		* _home.scss      		 [ Home specific styles ]
		* _gallery.scss   		 [ Gallery specific styles ]
		* _contact.scss   		 [ Contact specific styles ]
	* **themes**
		* _mailer.scss     		 [ Mailer theme ]
	* **vendors**
		* _slider.scss   	 	 [ slider ]
		* _lightgallery.scss  		 [ lightgallery ]
	* **quick fixes**
		* _bits.scss 
		* _shame.scss
	* **main.scss**				 [ imports everything, compile compressed ]
	* **admin.scss**			 [ for WP admin styles ]

* ### js
	* **vendors**
		* _jquery.js     	
		* _modernizr.js 
		* _masonry.js   
		* _stellar.js   
	* **min**
		* _myscripts.min.js	# minified
		* _vendor.min.js	# minified - combined all vendor .js

* ### images

* ### for Wordpress sites 
[as per the Underscores theme https://github.com/Automattic/underscores.me]:

	* 404.php				#
	* archive.php				#
	* comments.php				#
	* content-none.php			#
	* content-page.php			#
	* content-search.php			#
	* content-single.php			#
	* content.php				#
	* footer.php				#
	* functions.php				#
	* header.php				#
	* index.php				# start
	* page.php				#
	* screenshot.png			#
	* search.php				#
	* sidebar.php				#
	* single.php				#
	* style.css				#
	* style.scss				# imports css/css/style.css, but includes wp-theme statement at top 

### import block:

		@import "variables.scss";
		@import "mixins.scss";
		@import "susy";
		@import "reset.scss";
		@import "genericons.scss";
		@import "global.scss";
		@import "lightgallery.scss";
		@import "underscores.scss";
		@import "typography.scss"; 
		@import "shittybrowser.scss";
		@import "touch.scss";
		@import "buttons.scss";
		@import "navigation.scss";
		@import "grid.scss";
		@import "header.scss";
		@import "footer.scss";
		@import "sidebar.scss";
		@import "forms.scss";
		@import "home.scss";
		@import "gallery.scss";
		@import "contact.scss";
		@import "admin.scss";
		@import "mailer.scss";
		@import "slider.scss";
		@import "bits.scss";
		@import "shame.scss";
