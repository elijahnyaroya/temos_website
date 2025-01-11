<!-- slider start here
website/sliderimages/slide2.jpeg
-->
<style>
    .slideshow .item img {
        width: 100%;
        max-height: 500px!important;
    }
</style>
<div class="slide">
    <div class="slideshow owl-carousel">
        <div class="item">
            <img src="{{asset("website/sliderimages/slide.jpeg")}}" alt="banner" title="banner" class="img-responsive"/>
        </div>
        <div class="item">
            <img src="{{asset("website/sliderimages/slider4.jpg")}}" alt="banner" title="banner" class="img-responsive"/>
        </div>
        <div class="item">
            <img src="{{asset("website/sliderimages/slider3.jpg")}}" alt="banner" title="banner" class="img-responsive"/>
        </div>
        <div class="item">
            <img src="{{asset("website/sliderimages/slider2.jpg")}}" alt="banner" title="banner" class="img-responsive"/>
        </div>
        <div class="item">
            <img src="{{asset("website/sliderimages/slider1.jpg")}}" alt="banner" title="banner" class="img-responsive"/>
        </div>
        <div class="item">
            <img src="{{asset("website/sliderimages/slider6.jpg")}}" alt="banner" title="banner" class="img-responsive"/>
        </div>
    </div>
    <!-- slide-detail start here -->
    <div class="slide-detail">
        <div class="container">
            <div class="matter">
                <p class="text">Get started with {{env("APP_NAME")}}</p>
                <h4>best online marketing system</h4>
                <p class="des">Come Experience a new way of marketing</p>
            </div>
           {{-- <div class="matter2">
                <h2>Search</h2>
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-sm-10 padd0">
                            <div class="col-sm-4">
                                <select class="selectpicker form-control" name=	"location">
                                    <option value="1">Course Categories</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select class="selectpicker form-control" name=	"location">
                                    <option value="1">Cost Type</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <input name="s" class="form-control" value="" placeholder="Search Text" type="text">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn-primary" type="button">Search</button>
                        </div>
                    </div>
                </form>
            </div>--}}
        </div>
    </div>
    <!-- slide-detail end here -->
</div>
<!-- slider end here -->
