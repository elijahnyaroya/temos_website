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

<!-- slider start here -->
{{View::make("website.navigation.sliders")}}
<!-- slider end here -->

<!-- service start here -->
@include("website.includes.services")
<!-- service end here -->

<!-- about start here -->
{{--<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <div class="commontop text-left">
                    <h2>About us</h2>
                    <p>{{env("ABOUT_1")}}</p>
                    <hr>
                </div>
                <p class="des"> We are a team of the best teachers who appreciate education and who want to impart our ability and teaching learning experiences to learners far and wide. We have broad involvement in working with ...<a href="/aboutus">View more</a></p>
                <div class="image">
                    <img src="{{asset("website/images/about-img.jpg")}}" class="img-responsive" alt="img" title="img" />
                    <div class="icon">
                        <div class="ico"><a href="#"><i class="icofont icofont-ui-play"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 feature">
                <div class="commontop text-left">
                    <h2>our features</h2>
                    <p>{{env("OURFEATURE_1")}} </p>
                    <hr>
                </div>
                <p class="des">{{env("OURFEATURE_2")}}  ... <a href="/aboutus">view more</a></p>
                <div class="box">
                    <img src="{{asset("website/images/icon01.png")}}" class="img-responsive" alt="icon" title="icon" />
                    <p>Learn Courses online</p>
                    <a href="#">View more</a>
                </div>
                <div class="box">
                    <img src="{{asset("website/images/icon02.png")}}" class="img-responsive" alt="icon" title="icon" />
                    <p>Online Library Store</p>
                    <a href="#">View more</a>
                </div>
                <img src="{{asset("website/images/ads.jpg")}}" class="img-responsive" alt="ads" title="ads" />
            </div>
        </div>
    </div>
</div>--}}
<!-- about end here -->


<!-- newsletter start here -->
<div id="newsletter">
    <div class="container">
        <div class="row">
            <div id="subscribe">
                <form class="form-horizontal" name="subscribe">
                    <div class="col-sm-12">
                        <p class="news">Subscribe to our <span>newsletter</span></p>
                    </div>
                    <div class="col-sm-12 form-group">
                        <div class="input-group">
                            <input  value="" name="subscribe_email" id="subscribe_email" placeholder="Type your e-mail..." type="text">
                            <button class="btn btn-news" type="submit" value="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter end here -->
{{View::make("website.headerfooter.footer")}}
</body>
</html>
