<!-- JQUERY -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery.unveil.js" type="text/javascript"></script>
<!-- JS HAMBURGER -->
<script type="text/javascript">
 jQuery(function($){
			 $( '.menu-btn' ).click(function(){
			 $('.responsive-menu').toggleClass('expand')
			 })
		})
</script>	
<!-- JS Image Lazy Loader -->
<script>
	$(document).ready(function() {
	  $("img").unveil();
	});
</script>
<!-- GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58943873-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- SCROLL BAR -->
<script>
$(document).scroll(function() {
    var body_height = ($('.container-fluid')[0].offsetHeight - document.documentElement.clientHeight);
    var cal_prog = ($(document).scrollTop() * 100) / body_height;
    $("#prog").css("width", cal_prog + "%");
});
</script>