!function($){wp.customize("blogname",function(t){t.bind(function(t){$(".site-title a").text(t)})}),wp.customize("blogdescription",function(t){t.bind(function(t){$(".site-description").text(t)})}),wp.customize("header_textcolor",function(t){t.bind(function(t){$(".site-title, .site-description").css("blank"===t?{clip:"rect(1px, 1px, 1px, 1px)",position:"absolute"}:{clip:"auto",color:t,position:"relative"})})})}(jQuery);