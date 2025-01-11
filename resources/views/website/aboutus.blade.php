
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
    <img src="website/images/banner-top.jpg" class="img-responsive" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2>About us</h2>
            <ul class="list-inline">
                <li>
                    <a href="index.html">HOME</a>
                </li>
                <li>
                    <a href="about.html">About us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

<!-- abouts start here -->
<div class="abouts">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="commontop text-center">
                    <h2>About us</h2>
                    <p>Our Online Tutoring is live one-on-one help, in which learners and teacher mentors interact continuously to tackle subjects, topics, questions and talk about homework concerns.</p>
                    <hr>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <p class="des">We are a team of the best teachers who appreciate education and who want to impart our ability and teaching learning experiences to learners far and wide. We have broad involvement in working with learners who require help and those looking for propelled learning opportunities.
                    From the most essential to cutting-edge levels in </p>
                <ul class="list-unstyled">
                    <li>
                        <i class="icofont icofont-arrow-right"></i>Mathematics.
                    </li>
                    <li>
                        <i class="icofont icofont-arrow-right"></i>	Science(s).
                    </li>
                    <li>
                        <i class="icofont icofont-arrow-right"></i>	Kiswahili.
                    </li>
                    <li>
                        <i class="icofont icofont-arrow-right"></i>	English.
                    </li>
                    <li>
                        <i class="icofont icofont-arrow-right"></i>	Languages.
                    </li>
                    <li>
                        <i class="icofont icofont-arrow-right"></i>	Literature and many more subjects taught in Competency Based Curriculum (CBC), International Curriculum (Cambridge, IGCE) and 8:4:4.
                    </li>
                </ul>
                <p class="des">Our platform will automatically generate an online learning program to suit your particular academic needs. We believe every learner is a GENIUS!
                </p>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="image">
                    <img src="website/images/about-img.jpg" class="img-responsive" alt="img" title="img" />
                    <div class="icon">
                        <div class="ico">
                            <a href="#"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- abouts end here -->

<!-- inner start here -->
<div class="inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12 feature">
                <div class="commontop text-left">
                    <h2>our features</h2>
                    <p>{{env("OURFEATURE_1")}} </p>
                    <hr>
                </div>
                <p class="des">{{env("OURFEATURE_2")}}... <a href="#">view more</a></p>
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
            <div class="col-sm-4 col-xs-12 feature">
                <div class="commontop text-left">
                    <h2>why {{env("APP_NAME")}}</h2>
                    <p>Our expert teachers can identify the most important ways of representing the subjects they teach.</p>
                    <hr>
                </div>
                <p class="des">They take a more integrative approach to organizing and using content knowledge.
                    This deeper understanding allows them to be able to apply more strategies,
                    anticipate student mistakes and adapt to student responses more effectively.
                    <a href="#">view more</a></p>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default active">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <h4 class="panel-title">Expert Teachers <i class="fa fa-minus" aria-hidden="true"></i></h4>
                            </a>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <h6>Our expert teachers can identify the most important ways of representing the subjects they teach. They take a more integrative approach to organizing and using  content knowledge. This deeper understanding allows them to be able to apply more strategies, anticipate student mistakes and adapt to student responses  more effectively.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <h4 class="panel-title">Practical approach <i class="fa fa-plus" aria-hidden="true"></i></h4>
                            </a>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h6>What do you mean by  practical subjects? In simple terms, it means that a topic contains  numerical problems that you can solve using a calculator and some formulas. The reason you like or appreciate it is because more of your senses are involved in the process, namely sight, touch and hearing.But can you solve a specific problem without knowing the concept and understanding the logic behind it? Absolutely not. </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 feature">
                <img src="{{asset("website/images/ads1.jpg")}}" class="img-responsive ad1" alt="ads" title="ads" />
            </div>
        </div>
    </div>
</div>
<!-- inner end here -->

<!-- aboutweek start here -->
<div class="aboutweek">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <div class="caption">
                        <img src="website/images/icon.png" class="img-responsive" alt="img" title="img" />
                        <h1>New Student Join Every Week Hurry Up!</h1>
                        <p>Hurry up to get discount when you sign up with us this month.</p>
                    </div>
                    <a href="/login_register"><button type="button"> APPLY NOW</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- aboutweek end here -->

<!-- service start here -->
@include("website.includes.services")
<!-- service end here -->

<!-- featured start here -->
{{--<div class="featured">
    <div class="image"><img src="website/images/features/bg.jpg" class="img-responsive" alt="bg" title="bg" /></div>
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-inline">
                        <li>
                            <div class="box">
                                <div class="icon">
                                    <div class="icons">
                                        <img src="website/images/features/icon1.png" class="img-responsive" alt="image" title="image" />
                                    </div>
                                </div>
                                <h4>Country Reached</h4>
                                <p>15</p>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="icon">
                                    <div class="icons">
                                        <img src="website/images/features/icon2.png" class="img-responsive" alt="image" title="image" />
                                    </div>
                                </div>
                                <h4>User Registers</h4>
                                <p>25k</p>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="icon">
                                    <div class="icons">
                                        <img src="website/images/features/icon3.png" class="img-responsive" alt="image" title="image" />
                                    </div>
                                </div>
                                <h4>Staff Members</h4>
                                <p>566</p>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="icon">
                                    <div class="icons">
                                        <img src="website/images/features/icon4.png" class="img-responsive" alt="image" title="image" />
                                    </div>
                                </div>
                                <h4>Courses Published</h4>
                                <p>1150</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!-- featured end here -->

<!-- team start here -->
{{--<div class="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="commontop text-center">
                    <h2>experts team members</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <hr>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="box">
                    <div class="image">
                        <a href="our_team.html">
                            <img src="website/images/t1.jpg" class="img-responsive" alt="img" title="img" />
                        </a>
                    </div>
                    <div class="caption">
                        <h4>John Doe</h4>
                        <h3>Photoshop Designer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum tortor vitae sodales laoreet. Nulla facilisi. Sed condimentum egestas viverra...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="box">
                    <div class="image">
                        <a href="our_team.html">
                            <img src="website/images/t2.jpg" class="img-responsive" alt="img" title="img" />
                        </a>
                    </div>
                    <div class="caption">
                        <h4>Jassica Smith</h4>
                        <h3>PHP Developer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum tortor vitae sodales laoreet. Nulla facilisi. Sed condimentum egestas viverra...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="box">
                    <div class="image">
                        <a href="our_team.html">
                            <img src="website/images/t3.jpg" class="img-responsive" alt="img" title="img" />
                        </a>
                    </div>
                    <div class="caption">
                        <h4>Johnson Smith</h4>
                        <h3>Wordpress Developer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum tortor vitae sodales laoreet. Nulla facilisi. Sed condimentum egestas viverra...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!-- team end here -->

<!-- testimonail start here -->
{{--<div class="testimonail">
    <div class="image">
        <img src="website/images/test_bg.jpg" class="img-responsive" alt="bg" title="bg" />
    </div>
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="icon">
                            <img src="website/images/test.png" class="img-responsive" alt="image" title="image" />
                        </div>
                        <h4>Jane Kimani</h4>
                        <h5>English Teacher</h5>
                        <p><i class="icofont icofont-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!-- testimonail end here -->

<!-- newsletter start here -->
<!-- aboutweek start here -->
@include("website.includes.emailsubscription")
<!-- aboutweek end here -->
<!-- newsletter end here -->
{{View::make("website.headerfooter.footer")}}
</body>
</html>
