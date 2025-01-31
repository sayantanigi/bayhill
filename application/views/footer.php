<?php $site_setting = $this->db->query("select * from  settings")->row(); ?>
<footer class="main-footer">
    <div class="main-footer__middle">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 order-xl-2">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <h3 class="footertitle">Helpful Stuff</h3>
                            <div class="footer-widget">
                                <div class="footer-widget--links">
                                    <ul class="list-unstyled footer-widget__links">
                                        <li><a href="#">DMV Useful Links</a></li>
                                        <li><a href="#">Register For Drivers Ed</a></li>
                                        <li><a href="#">Register For Driving School</a></li>
                                        <li><a href="#">BayHill Traffic School</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <h3 class="footertitle">Quick Links</h3>
                            <div class="footer-widget">
                                <div class="footer-widget--links footer-widget--links2">
                                    <ul class="list-unstyled footer-widget__links">
                                        <li><a href="#">FAQ Drivers Ed</a></li>
                                        <li><a href="#">FAQ Driving School</a></li>
                                        <li><a href="#">In-Car Driving Lessons</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <h3 class="footertitle">Get our app right now</h3>
                            <div class="d-flex gap-3 align-items-center appicon">
                                <div>
                                    <a href="#"><img src="assets/images/appstore.png" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="assets/images/google-play.png" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-7">
                    <h3 class="footertitle">Contact Us</h3>
                    <div class="footer-widget footer-widget__right">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="footer-widget--about">
                                    <ul class="list-unstyled footer-widget__info">
                                        <li>
                                            <i class="icon-map-pin" aria-hidden="true"></i>
                                            <a href="#">3769 Peralta Blvd ,Suite # A, Fremont CA</a>
                                        </li>
                                        <li>
                                            <i class="icon-telephone-call-1" aria-hidden="true"></i>
                                            <a href="#">510-943-4301</a>
                                        </li>
                                        <li>
                                            <i class="icon-envelope" aria-hidden="true"></i>
                                            <a href="#">Info@bayhilldrivingschool.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="footer-widget--about">
                                    <ul class="list-unstyled footer-widget__info">
                                        <li>
                                            <i class="icon-map-pin" aria-hidden="true"></i>
                                            <a href="#">97 E Brokaw Rd , ,San Jose CA</a>
                                        </li>
                                        <li>
                                            <i class="icon-telephone-call-1" aria-hidden="true"></i>
                                            <a href="#">408-384-4458</a>
                                        </li>
                                        <li>
                                            <i class="icon-envelope" aria-hidden="true"></i>
                                            <a href="#">Info@bayhilldrivingschool.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="footer-widget--about">
                                    <ul class="list-unstyled footer-widget__info">
                                        <li>
                                            <i class="icon-map-pin" aria-hidden="true"></i>
                                            <a href="#">4457 Willow Rd, Pleasanton CA 94588</a>
                                        </li>
                                        <li>
                                            <i class="icon-telephone-call-1" aria-hidden="true"></i>
                                            <a href="#">925-464-2899</a>
                                        </li>
                                        <li>
                                            <i class="icon-envelope" aria-hidden="true"></i>
                                            <a href="#">Info@bayhilldrivingschool.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="footertitle">Social Network</h3>
                                <div class="main-footer__inner-social">
                                    <a href="https://facebook.com/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    <a href="https://twitter.com/"><i class="icon-twitter" aria-hidden="true"></i></a>
                                    <a href="https://pinterest.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
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
                </div>
                <p class="main-footer__copyright order-lg-1"> &copy; Copyright <span class="dynamic-year"></span> BayHill. All Rights Reserved. Designed and Developed by <a href="" class="fw-semibold text-primary">GOIGI.COM</a></p>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="fa fa-times"></i>
        </span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image">
                <img src="assets/images/logo.png" width="155" alt="logo drivschol">
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
const slots = [
    { time: '09:00 - 10:30 am', status: 'available' },
    { time: '10:30 - 12:00 pm', status: 'available' },
    { time: '12:00 - 01:30 pm', status: 'available' },
    { time: '01:30 - 03:00 pm', status: 'available' },
    { time: '03:00 - 04:30 pm', status: 'unavailable' },
    { time: '04:30 - 06:00 pm', status: 'available' },
    { time: '06:00 - 07:30 pm', status: 'available' },
    { time: '07:30 - 09:00 pm', status: 'available' },
    { time: '09:00 - 10:30 pm', status: 'available' }
];

let selectedSlot = null;

$(function() {
    const calendarElement = $('#calendar');
    const today = new Date();
    let selectedDate = null;

    function renderCalendar(month, year) {
        calendarElement.empty();
        const firstDay = new Date(year, month).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        const monthYearHeader = $('<div></div>').addClass('month-year-header');
        const prevButton = $('<button><i class="fas fa-chevron-left"></i></button>').click(() => {
            if (month === 0) {
                renderCalendar(11, year - 1);
            } else {
                renderCalendar(month - 1, year);
            }
        });
        const nextButton = $('<button><i class="fas fa-chevron-right"></i></button>').click(() => {
            if (month === 11) {
                renderCalendar(0, year + 1);
            } else {
                renderCalendar(month + 1, year);
            }
        });
        const monthYearText = $('<span></span>').text(`${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`);

        monthYearHeader.append(prevButton, monthYearText, nextButton);
        calendarElement.append(monthYearHeader);

        const dayNames = $('<div></div>').addClass('day-names');
        ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'].forEach(day => {
            dayNames.append($('<div></div>').text(day));
        });
        calendarElement.append(dayNames);

        const daysGrid = $('<div></div>').addClass('days-grid');
        for (let i = 0; i < firstDay; i++) {
            daysGrid.append($('<div></div>'));
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const date = new Date(year, month, day);
            let dayElement = $('<div></div>').text(day);

            if (date < today.setHours(0, 0, 0, 0)) {
                dayElement.addClass('disabled');
            }else if (month === 5 && (day === 20 || day === 21)) {
                dayElement.addClass('blocked');
            } else {
                dayElement.addClass('available');
                dayElement.click(() => {
                    selectedDate = date.toDateString();
                    $('#selected-date').text(`Selected Date: ${selectedDate}`);
                    $('#calendar-container').hide();
                    $('#slot-container').show();
                    renderSlots();
                });
            }

            if (date.toDateString() === new Date().toDateString()) {
                dayElement.addClass('today');
            }
            daysGrid.append(dayElement);
        }
        calendarElement.append(daysGrid);
    }

    function renderSlots() {
        const slotsElement = $('#slots');
        slotsElement.empty();
        slots.forEach(slot => {
            const slotElement = $('<label></label>').addClass(slot.status);
            const radioButton = $('<input>')
                .attr('type', 'radio')
                .attr('name', 'slot')
                .attr('disabled', slot.status === 'unavailable')
                .change(() => selectSlot(slot.time));
            const label = $('<span></span>').text(slot.time);
            slotElement.append(radioButton, label);
            slotsElement
            .append(slotElement);
        });
    }

    function selectSlot(time) {
        selectedSlot = time;
    }

    $('#back-to-calendar').click(function() {
        $('#slot-container').hide();
        $('#calendar-container').show();
    });

    renderCalendar(today.getMonth(), today.getFullYear());
});
</script>
</body>
</html>