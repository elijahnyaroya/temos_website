<!-- footer start here -->
<style>
    footer{
        background-color: #0037b4!important;
    }
</style>
<footer>
    <div class="container">
        <div class="row inner">
            <div class="col-md-4">
                <img src="{{asset("assets/images/company/logo.png")}}" style="height: 40px!important;" class="img-responsive img" title="logo" alt="logo">
                <p class="des">Temos Company is dedicated to providing innovative solutions tailored to meet the unique needs of our clients. With a focus on quality, efficiency, and customer satisfaction, we strive to deliver exceptional services across a range of industries. Contact us today to learn how we can help you achieve your goals.</p>
                <a href="/login_register" ><button type="button" >start free a trail</button></a>
            </div>
            <div class="col-md-3 links1">
                <h5>quick links</h5>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <a href="#"><i class="fa fa-link"></i>All Products</a>
                    </li>
                    <li>
                        <a href="/blog"><i class="fa fa-link"></i>Our Blogs</a>
                    </li>
                    <li>
                        <a href="/aboutus"><i class="fa fa-link"></i>About us</a>
                    </li>
                    <li>
                        <a href="/faq"><i class="fa fa-link"></i>FAQ</a>
                    </li>

                </ul>
            </div>
            <div class="col-md-5 links2">
                <h5>contact us</h5>
                <hr>
                <p class="des1">For inquiries or more information about our services, please don't hesitate to contact Temos Company. We're here to assist you with all your needs and provide tailored solutions. Reach out to us today!</p>
                <ul class="list-unstyled contact">
                    <li>
                        <i class="icofont icofont-home"></i>{{env("LOCATIONS")}}
                    </li>
                    <li>
                        <i class="icofont icofont-phone"></i>{{env("PHONENO")}}
                    </li>
                    <li>
                        <i class="icofont icofont-envelope"></i> <a href="#">{{env("EMAILADDRESS")}}</a>
                    </li>
                    <li>
                        <i class="icofont icofont-globe"></i> <a href="#">{{env("WEBSITE")}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="social">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"><i class="icofont icofont-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank"><i class="icofont icofont-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank"><i class="icofont icofont-social-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/uas/login" target="_blank"><i class="icofont icofont-social-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://www.skype.com/en/" target="_blank"><i class="icofont icofont-social-skype"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/" target="_blank"><i class="icofont icofont-social-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="powered">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-inline">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="#">ALL Products</a>
                        </li>
                        <li>
                            <a href="/aboutus">ABOUT</a>
                        </li>
                        <li>
                            <a href="/blog">blog</a>
                        </li>
                        <li>
                            <a href="/contactus">contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 text-right">
                    {{--<p>EDU Courses Online Education © {{date("y")}} TMD Studio, All Rights Reserved.</p>--}}
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end here -->

<!-- jquery -->
<script src="{{asset("website/js/jquery.2.1.1.min.js")}}" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="{{asset("website/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
<!--bootstrap select-->
<script src="{{asset("website/js/dist/js/bootstrap-select.js")}}" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="{{asset("website/js/owl-carousel/owl.carousel.min.js")}}" type="text/javascript"></script>
<!--internal js-->
<script src="{{asset("website/js/internal.js")}}" type="text/javascript"></script>
