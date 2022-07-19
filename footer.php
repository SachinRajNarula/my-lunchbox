<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
</svg></div>
<a href="../Website/menu.html" class="float" id="myBtn">
<img src="assets/img/fast-food.svg" style="width: 50px;margin-top: 4px;" /> Menu
</a>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        console.log(document.body.scrollTop);
        if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
</script>
<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.lazy.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js" type="text/javascript"></script>

<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.stellar.min.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="assets/js/aos.js" type="text/javascript"></script>


<script src="assets/js/main.js" type="text/javascript"></script>
<script>
		$(document).on('click', 'a[href^="#"]', function (event) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: $($.attr(this, 'href')).offset().top
			}, 500);
		});
		$(function () {
			$('.lazy').lazy();
		});
	</script>
</body>
</html>
