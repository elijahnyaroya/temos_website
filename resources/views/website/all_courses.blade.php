
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
            <h2>all courses</h2>
            <ul class="list-inline">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="/aboutus">all courses</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

<!-- coures start here -->
<div class="coures">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12 hidden-xs">
                <div class="left">
                    <h4>POPULAR COURSES</h4>
                    <div class="popular">
                        @for($i=0;$i<count($popular);$i++)
                            <div class="box">
                                <img style="height: 40px!important;"  src="{{$courses[$i]['imageFilePath'].$courses[$i]['imageFileName']}}" class="img-responsive" alt="img" title="img" />
                                <p>{{$courses[$i]['coursetitle']}}</p>
                                <a href="/login_register"><span class="color">Register</span></a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-xs-12 mainpage">
                <div class="col-sm-12 sort">
                    <div class="col-md-6 col-sm-5">
                        <h3>ALL COURSES</h3>
                        <p>TOTAL {{count($courses)}} COURSES</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <select id="input-sort" class="form-control selectpicker bs-select-hidden">
                                <option value="" selected="selected">Select Categories</option>
                                @if(count($courses)>0)
                                    @for($i=0;$i<count($courses);$i++)
                                     <option value="{{$courses[$i]['id']}}">{{$courses[$i]['courseName']}}</option>
                                    @endfor
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 list hidden-xs">
                        <div class="btn-group btn-group-sm">
                            <button type="button" id="grid-view" class="btn btn-default btngrid" data-toggle="tooltip" title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i></button>
                            <button  type="button" id="list-view" class="btn btn-default btngrid" data-toggle="tooltip" title="List"><i class="fa fa-list-ul" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for($i=0;$i<count($courses);$i++)
                      <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb">
                            <div class="image">
                                {{--<a href="all_courses_singleview.html">--}}
                                <a href="#">
                                    <img  style="max-height: 150px!important; width: 100%"  src="{{$courses[$i]['imageFilePath'].$courses[$i]['imageFileName']}}" class="img-responsive" alt="img" title="img" />
                                </a>
                            </div>
                            <div class="caption">
                                <h3>{{$courses[$i]['coursetitle']}} <span class="price"></span></h3>
                                <h4>{{$courses[$i]['courseName']}}</h4>
                                <h5>{{$courses[$i]['courseName']}} <span class="price"></span></h5>
                                <h6>{{$courses[$i]['coursetitle']}} </h6>
                                <p>{{$courses[$i]['description']}}</p>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#"><i class="icofont icofont-ui-user"></i>{{$courses[$i]['likes']}}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont icofont-comment"></i>{{$courses[$i]['dislike']}}</a>
                                    </li>
                                    <li>
                                        @for($ii=0;$ii<$courses[$i]['rating'];$ii++)
                                            <i class="icofont icofont-star"></i>
                                        @endfor
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endfor
                    <!--pagination code start here-->
                   {{-- <div class="col-sm-12 col-xs-12">
                        <ul class="list-inline pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="icofont icofont-bubble-left"></i>Prev
                                </a>
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
                    </div>--}}
                    <!--pagination code end here-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- coures end here -->

<!-- newsletter start here -->
@include("website.includes.emailsubscription")
<!-- newsletter end here -->

<!-- footer start here -->
{{View::make("website.headerfooter.footer")}}
</body>
</html>
