<?php $site_setting = $this->db->query("select * from  settings")->row(); ?>
<section class="downloadBox">
    <div class="container">
        <div class="downloadapp" style="background-image: url(./assets/images/appbg.png);">
            <div class="appcontent  wow fadeInUp">
                <p class="text-white mb-2">Get App</p>
                <h3 class="text-white mb-4">Get our app right now</h3>
                <div class="d-flex gap-3 align-items-center appicon">
                    <div>
                        <a href="#"><img src="assets/images/appstore.png"/></a>
                    </div>
                    <div>
                        <a href="#"><img src="assets/images/google-play.png"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="yelpreview  wow fadeInUp">
    <div class="container">
        <div class="yelpBox">
            <div class="row g-5 justify-content-between align-items-center">
                <div class="col-lg-8">
                    <h2 class="h5 mb-3">Why Take California Driver Ed With Us?</h2>
                    <p>We help teens and families navigate through their first-time driver experience to ensure
                        that it is stress, worry and speedbump free. Our courses can be completed on any mobile
                        device and will automatically save your progress each time you log out. Join thousands
                        of teens who chose First Time Driver for their online driver education and get ready to earn
                        your California Learner’s Permit. Join thousands of teens who chose First Time Driver for
                        their online driver education and get ready to earn your California Learner’s Permit. Find
                        our course now.</p>
                    <div class="mt-3">
                        <a href="#" class="enrollbtn">Course FAQ</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img src="assets/images/yelp.png" class="yelplogo"/>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="main-footer">
    <div class="main-footer__top">
        <div class="container">
            <div class="main-footer__inner">
                <a href="<?= base_url()?>" class="main-footer__inner-logo">
                    <img src="<?= base_url('uploads/logos/' . @$site_setting->logo) ?>" width="174" alt="<?= @$site_setting->title?>">
                </a>
            </div>
        </div>
    </div>
    <div class="main-footer__middle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-2">
                    <h3 class="footertitle">Helpful Stuff</h3>
                    <div class="footer-widget">
                        <div class="footer-widget--links">
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="#">DMV Useful Links</a></li>
                                <li><a href="#">Register For Drivers Ed</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <h3 class="footertitle">Quick Links</h3>
                    <div class="footer-widget">
                        <div class="footer-widget--links footer-widget--links2">
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="#">FAQ Drivers Ed</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-5">
                    <h3 class="footertitle">Contact Us</h3>
                    <div class="footer-widget footer-widget__right">
                        <div class="footer-widget--about">
                            <ul class="list-unstyled footer-widget__info">
                                <li> 
                                    <i class="icon-telephone-call-1" aria-hidden="true"></i> 
                                    <a href="#"><?= @$site_setting->phone?></a>
                                </li>
                                <li> 
                                    <i class="icon-envelope" aria-hidden="true"></i> 
                                    <a href="#"><?= @$site_setting->email?></a>
                                </li>
                                <li>
                                    <i class="icon-map-pin" aria-hidden="true"></i>
                                    <a href="#"><?= @$site_setting->address?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <h3 class="footertitle">Social Network</h3>
                    <div class="main-footer__inner-social">
                        <a href="<?= $site_setting->facebook; ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="<?= $site_setting->twitter; ?>"><i class="icon-twitter" aria-hidden="true"></i></a>
                        <a href="<?= $site_setting->linkedin; ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner d-lg-flex align-items-center justify-content-between">
                <div class="d-flex gap-4  order-lg-2 mb-3 mb-lg-0">
                    <a href="#" class="text-dark">Terms & Conditions</a>
                    <a href="#" class="text-dark">Privacy Policy</a>
                </div>
                <p class="main-footer__copyright order-lg-1"> &copy; Copyright <span class="dynamic-year"></span> <?= @$site_setting->title?>. All Rights Reserved. Designed and Developed by <a href="" class="fw-semibold text-primary">GOIGI.COM</a></p>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
            <a href="<?= base_url()?>" aria-label="logo image">
                <img src="<?= base_url('uploads/logos/' . @$site_setting->logo) ?>" width="155" alt="<?= @$site_setting->title?>">
            </a>
        </div>
        <div class="mobile-nav__container"></div>
    </div>
</div>
<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>
<script src="<?= base_url() ?>assets/vendors/jquery/jquery-3.7.0.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/tiny-slider/tiny-slider.js"></script>
<script src="<?= base_url() ?>assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/wow/wow.js"></script>
<script src="<?= base_url() ?>assets/vendors/imagesloaded/imagesloaded.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/isotope/isotope.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery-circleType/jquery.circleType.js"></script>
<script src="<?= base_url() ?>assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>
<script>
$(document).ready(function () {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
document.getElementById('drivinglesson').addEventListener('change', function () {
    if (this.value === 'teenclasses') {
        $('#lessonsModal').modal('show');
    }
});
</script>
</body>
</html>