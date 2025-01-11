
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
            <h2>single Blog view</h2>
            <ul class="list-inline">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="/blog_detail">single Blog view</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

<!-- blog start here -->
<div class="blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12 hidden-xs">
                <div class="left">
                    <h4>LATEST BLOGS</h4>
                    <div class="popular">
                        @if(count($blogExtra)>0)
                            @for($i=0;$i<4;$i++)
                                <div class="box">
                                    <img src="{{$blogExtra[$i]['imageFilePath'].$blogExtra[$i]['imageFileName']}}" style="height: 70px!important;" class="img-responsive" alt="img" title="img" />
                                    <p>{{$blogExtra[$i]['title']}}</p>
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">
                <div class="bloggs owl-carousel">
                    <div class="item">
                        <div class="image">
                            <a href="#">
                                <img src="{{$blog->imageFilePath.$blog->imageFileName}}"   style="width: 100%!important;" alt="blog-big" title="blog-big" class="img-responsive" />
                            </a>
                        </div>
                        <div class="caption">
                            <h3>{{$blog->category}}</h3>
                            <h4>{{$blog->title}}</h4>
                            <p>{{$blog->description}}</p>

                            @for($i=0;$i<count($blogDetails);$i++)
                                <h5>{{"0".($i+1).". ".$blogDetails[$i]['title']}}</h5>
                                <p>{{$blogDetails[$i]['description']}}</p>
                            @endfor
                        </div>
                    </div>
                </div>
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
