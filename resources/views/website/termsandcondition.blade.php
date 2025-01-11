<?php
use App\Http\Controllers\generalController;
$faqs = generalController::getFaqs();
?>
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
            <h2>Terms and Conditions</h2>
            <ul class="list-inline">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="/termsandcondition">Our terms and conditions</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

<!-- faq start here -->
<div class="faq">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @include("website.includes.termsandconditions_")
            </div>

        </div>
    </div>
</div>
<!-- faq end here -->

<!-- newsletter start here -->
@include("website.includes.emailsubscription")
<!-- newsletter end here -->
{{View::make("website.headerfooter.footer")}}
</body>
</html>
