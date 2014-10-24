This is my own starter theme for small business sites. 

It's structure is as follows:


* // styles/ 			# style guide accesible at site.styles, should import from scss folder

* // scss/ 			# import block for main.scss below
* // | 
* // |– base/ 
* // |   |– _reset.scss           # Reset/normalize 
* // |   |– _underscores.scss     # underscores.me style - check if necesarry, pref. copy to scss files
* // |   |– _susy        			# susy https://github.com/ericam/susy
* // |   |– _global.scss        	# global.scss
* // |   |– _typography.scss      # Typography rules 
* // |   |– _shittybrowser.scss   # IE rules 
* // |   |– _touch.scss   		# touch rules 
* // |   |– _genericons.scss  	# icons
* // |
* // |– helpers/ 
* // |   |– _variables.scss   # Sass Variables 
* // |   |– _mixins.scss      # Sass Mixins 
* // | 
* // |– components/ 
* // |   |– _navigation.scss  # Navigation 
* // |   |– _buttons.scss     # Buttons
* // | 
* // |– layout/ 
* // |   |– _grid.scss        # Grid system 
* // |   |– _header.scss      # Header 
* // |   |– _footer.scss      # Footer 
* // |   |– _sidebar.scss     # Sidebar 
* // |   |– _forms.scss       # Forms 
* // | 
* // |– pages/ 
* // |   |– _home.scss        # Home specific styles 
* // |   |– _gallery.scss     # Gallery specific styles 
* // |   |– _contact.scss     # Contact specific styles 
* // | 
* // |– themes/ 
* // |   |– _admin.scss       # Admin theme 
* // |   |– _mailer.scss      # Mailer theme 
* // | 
* // |– vendors/ 
* // |   |– _royalslider.scss    # royalslider 
* // |   |– _lightgallery.scss   # lightgallery 
* // |
* // | main.scss			#imports everything, compile compressed
* // |
* // js/ 	
* // | 
* // |– vendors/ 				# untouched
* // |   |– _jquery.js     	
* // |   |– _modernizr.js 
* // |   |– _masonry.js   
* // |   |– _stellar.js   
* // |   
* // |- min/
* // |   |– _myscripts.min.js	# minified
* // |   |– _vendor.min.js	# minified - combined all vendor .js
* // |
* // |
* // images/
* // |
* // |
* // |- 404.php					#
* // |
* // |- archive.php				#
* // |
* // |- comments.php				#
* // |
* // |- content-none.php			#
* // |
* // |- content-page.php			#
* // |
* // |- content-search.php		#
* // |
* // |- content-single.php		#
* // |
* // |- content.php				#
* // |
* // |- footer.php				#
* // |
* // |- functions.php				#
* // |
* // |- header.php				#
* // |
* // |- index.php					# start
* // |
* // |- page.php					#
* // |
* // |- screenshot.png			#
* // |
* // |- search.php				#
* // |
* // |- sidebar.php				#
* // |
* // |- single.php				#
* // |
* // |- style.css					#
* // |
* // |- style.scss				# imports scss/main.scss, include wp-theme statement at top 
* 								# (main.scss is compressed) compiles to /style.css
* // import block:

@import "susy";
@import "reset.scss";
@import "default.scss";
@import "genericons.scss";
@import "global.scss";
@import "lightgallery.scss";
@import "underscores.scss";
@import "variables.scss";  
@import "mixins.scss";  
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
@import "royalslider.scss";  
