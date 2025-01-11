
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
            <h2>Our Blog</h2>
            <ul class="list-inline">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="/blog">Our Blog</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

<!-- blog start here -->
<div class="blogs">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12 hidden-xs">
                <div class="left">
                    <h4>LATEST BLOGS</h4>
                    <div class="popular">
                        @if(count($blog)>0)
                            @for($i=0;$i<4;$i++)
                                <div class="box">
                                    <img src="{{$blog[$i]['imageFilePath'].$blog[$i]['imageFileName']}}" style="height: 70px!important;" class="img-responsive" alt="img" title="img" />
                                    <p>{{$blog[$i]['title']}}</p>
                                </div>
                            @endfor
                        @endif


                        {{--<div class="box">
                            <img src="website/images/p2.jpg" class="img-responsive" alt="img" title="img" />
                            <p>Introduction to PHP Website Development</p>
                        </div>
                        <div class="box">
                            <img src="website/images/p3.jpg" class="img-responsive" alt="img" title="img" />
                            <p>Android Application Development</p>
                        </div>
                        <div class="box">
                            <img src="website/images/p1.jpg" class="img-responsive" alt="img" title="img" />
                            <p>Introduction to Mobile Application Develop..</p>
                        </div>
                        <div class="box">
                            <img src="website/images/p2.jpg" class="img-responsive" alt="img" title="img" />
                            <p>Introduction to PHP Website Development</p>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-xs-12">
                @for($i=0;$i<count($blog);$i++)
                     <div class="box">
                    <div class="image">
                        <a href="blog_detail/{{$blog[$i]['id']}}">
                            <img src="{{$blog[$i]['imageFilePath'].$blog[$i]['imageFileName']}}" class="img-responsive" style="width: 100%!important;" alt="img" title="img" />
                        </a>
                    </div>
                    <div class="caption">
                        <h3>{{$blog[$i]['category']}}</h3>
                        <h4>{{$blog[$i]['title']}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($blog[$i]['description'],300)}}</p>
                    </div>
                </div>
                @endfor
                <!--pagination code start here-->
                {{--<div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="list-inline pagination">
                            <li>
                                <a href="#" aria-label="Previous"><i class="icofont icofont-bubble-left"></i>Prev</a>
                            </li>
                            <li class="active">
                                <a href="#">01</a>
                            </li>
                            <li>
                                <a href="#">02</a>
                            </li>
                            <li>
                                <a href="#">03</a>
                            </li>
                            <li>
                                <a href="#">04</a>
                            </li>
                            <li>
                                <a href="#">...</a>
                            </li>
                            <li>
                                <a href="#">18</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">Next<i class="icofont icofont-bubble-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>--}}
                <!--pagination code end here-->
            </div>
        </div>
    </div>
</div>
<!-- blog end here -->

<!-- newsletter start here -->
@include("website.includes.emailsubscription")
<!-- newsletter end here -->
{{View::make("website.headerfooter.footer")}}
 </body>
</html>
