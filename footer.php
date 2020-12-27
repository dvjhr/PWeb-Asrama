<?php 

?>

<!-- footer part start-->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-5">
                <div class="single-footer-widget">
                    <h4>Asrama ITS</h4>
                    <p>Kampus ITS Sukolilo</p>
                    <p>Jl. Teknik Elektro, Keputih, Sukolilo, Surabaya, Jawa Timur 60111</p>
                </div>
            </div>
            <!-- <div class="col-sm-6 col-md-4">
                <div class="single-footer-widget">
                    <h4>Subscribe Newsletter</h4>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                    type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                    <p>Subscribe our newsletter to get update news and offers</p>
                </div>
            </div> -->
            <div class="col-sm-6 col-md-5">
                <div class="single-footer-widget footer_icon">
                    <h4>Contact Us</h4>
                    <p>(031) 592 5965 (Telepon dan Fax)</p>
                    <p>asrama@its.ac.id (E Mail)</p>
                    <p>Public relation office : Kurnia Ardiyani (085648101073)</p>
                    <p>Administrative service : Monday – Friday at 08.00 – 16.00 WIB</p>
                    <!-- <span>asrama@its.ac.id</span> -->
                    <div class="social-icons">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- magnific js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="js/owl.carousel.min.js"></script>
<!-- masonry js -->
<script src="js/masonry.pkgd.js"></script>
<!-- masonry js -->
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/gijgo.min.js"></script>
<!-- contact js -->
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- Tambahan Sendiri -->
<!-- <script>
function fungsi_login() {
  document.getElementById("gagal_login").innerHTML = "Gagal Lur!";
}
</script> -->
<script>
function call_login(){
	var userName = document.getElementById("nrp").value;
	var password = document.getElementById("sandi").value;
	xmlHttpRequest=new XMLHttpRequest();
	// For Older browsers
	// xmlHttpRequest=new ActiveXObject("MSXML2.XmlHttp");
	xmlHttpRequest.onreadystatechange=function() {
		if (xmlHttpRequest.readyState==4 && xmlHttpRequest.status==200) {
			var response = xmlHttpRequest.responseText;
			if(response > 0) {
				var welcome_message = '<p class="welcome-message">Selamat datang, Anda telah berhasil masuk!!</p>';
				document.getElementById("gagal_login").innerHTML = welcome_message;
			} else {
				document.getElementById("gagal_login").innerHTML="Invalid Credentials";
				document.getElementById("gagal_login").className="error-message";
			}
		}
	}
	xmlHttpRequest.open("POST","login.php?nrp="+nrp+"&sandi="+sandi,true);
	xmlHttpRequest.send();
}
</script>
</body>

</html>

<?php

?>