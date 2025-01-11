<!-- header start here-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div id="logo">
                    <a href="/">
                        <img class="img-responsive" src="{{asset("assets/images/company/logo.png")}}" style="height: 50px!important;" alt="logo" title="logo" />
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- menu start here -->
                <div id="menu">
                    <nav class="navbar">
                        <div class="navbar-header">
                            <span class="menutext visible-xs">Menu</span>
                            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse padd0">
                            <ul class="nav navbar-nav text-right">
                                <li>
                                    <a href="/">HOME</a>
                                </li>
                                {{--<li>
                                    <a href="/aboutus">about us</a>
                                </li>--}}
                                <li>
                                    <a href="/policy">Policy</a>
                                </li>
                                <li>
                                    <a href="/#termsandcondition" >terms & condition</a>
                                </li>
                                <li>
                                    <a href="/contactus">contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- menu end here -->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <ul class="list-inline icon pull-right">
                    <li>
                        <div class="form-horizontal" method="post" id="srch">
                            <fieldset>
                                <div class="form-group">
                                    <input name="s" value="" class="form-control" placeholder="Search" type="text">
                                </div>
                                <button type="button" value="submit" class="btn">
                                    <i class="icofont icofont-search"></i>
                                </button>
                            </fieldset>
                        </div>
                    </li>
                    <li>
                        <a href="#" type="button" class="btn-primary">Request Demo</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- header end here -->
