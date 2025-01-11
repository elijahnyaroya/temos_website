<!DOCTYPE html>
<html lang="en" dir="ltr">
{{View::make("website.headerfooter.header")}}
<body>
<!--top start here -->
{{View::make("website.navigation.topnav")}}
<!--top end here -->

<!-- header start here-->
{{View::make("website.navigation.navmenus")}}
<!-- header end here -->

<!-- bread-crumb start here -->
<div class="bread-crumb">
    <img src="{{asset("website/images/banner-top.jpg")}}" class="img-responsive" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2>contact us</h2>
            <ul class="list-inline">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="/contactus">contact us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

<!-- contactus start here -->
<div class="contactus">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <div method="post" enctype="multipart/form-data" class="form-horizontal">
                    <h5>get in touch</h5>
                    <hr />
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>Name*</label>
                            <input name="name" value="" id="input-name" class="form-control" placeholder="John doe" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>Email*</label>
                            <input name="email" value="" id="input-email" class="form-control" placeholder="Johndoe@example.com" type="text">
                        </div>
                    </div>
                  {{--  <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Website*</label>
                            <input name="phone" value="" id="input-phone" class="form-control" placeholder="www.example.com" type="text">
                        </div>
                    </div>--}}
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Message*</label>
                            <textarea name="enquiry" id="input-enquiry" class="form-control"></textarea>
                        </div>
                    </div>
                    <input class="btn btn-primary" value="Send Message" type="submit">
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="address">
                    <h5>Contact Info</h5>
                    <hr>
                    <p>Temos we are here to make your sales .</p>
                    <ul class="list-unstyled">
                        <li>
                            <i class="icofont icofont-home"></i>{{env("LOCATIONS")}}
                        </li>
                        <li>
                            <i class="icofont icofont-phone"></i> {{env("PHONENO")}}
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
    </div>
</div>
<!-- contactus end here -->

<!-- newsletter start here -->
@include("website.includes.emailsubscription")
<!-- newsletter end here -->
{{View::make("website.headerfooter.footer")}}
</body>
</html>
