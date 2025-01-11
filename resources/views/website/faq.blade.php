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
            <h2>frequently asked questions</h2>
            <ul class="list-inline">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="/faq">frequently asked questions</a>
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
            <div class="col-sm-9">
                <div class="panel-group" id="accordion">
                    @for($i=0;$i<count($faqs);$i++)
                    <div class="panel panel-default " {{$i==0?"active":""}}>
                        <div class="panel-heading">
                            <h4 class="panel-title">{{"0".($i+1)}}. {{$faqs[$i]['questions']}} </h4>
                            <a data-toggle="collapse" data-parent="#accordion" href="{{"#collapse".$i}}" class="hidelink">Hide Answer</a>
                        </div>
                        <div id="{{"collapse".$i}}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>{{$faqs[$i]['answer']}}</p>
                            </div>
                        </div>
                    </div>
                    @endfor

                </div>
            </div>
            <div class="col-sm-3 right">
                <img src="{{asset("website/images/ads2.jpg")}}" class="img-responsive" alt="img" title="img" />
{{--
                <img src="{{asset("website/images/call_banner.jpg")}}" class="img-responsive" alt="img" title="img" />
--}}
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
