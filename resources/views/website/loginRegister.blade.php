
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
            <h2>register now</h2>
            <ul class="list-inline">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="/login_register">register now</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

<!-- login start here -->
<div class="login">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12 box padd0">
            <div class="col-md-6 col-sm-6 col-xs-12 bor">
                <h5>sign in</h5>
                <hr>
                <form method="post" id="loginform" action="/login" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Username/Email*</label>
                        <input type="text" name="email" id="email" value="" placeholder="" id="input-email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>password*</label>
                        <input type="password" name="password" id="password" value="" placeholder="********" id="input-password" class="form-control" />
                    </div>
                    <div class="links ">
                        <input type="checkbox"  name="credit" class="checkclass checkbox-inline"/>Remember me
                        <a href="#" class="pull-right">Forgot Password?</a>
                    </div>
                    <br>
                    <p id="responseLogin"class="mt-3" style="display: none"></p>
                    <button type="button"  class="btn btn-primary btn-block loginUSersButton" >Login Now</button>
                </form>
                <div class="or">
                    <span>OR</span>
                    <hr/>
                </div>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" class="fb"><i class="fa fa-facebook"></i> Login Via Facebook</a>
                    </li>
                    <li>
                        <a href="#" class="tw"><i class="fa fa-twitter"></i> Login Via Twitter</a>
                    </li>
                </ul>
                <div class="donot">Don't have an account? <a href="#">Create a New Account</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h5>sign UP</h5>
                <hr>
                <form method="post" action="/signup" id="registerForm" enctype="multipart/form-data">
                   <div class="row">
                       <div class="form-group col-md-6">
                           <label>FIRST NAME*</label>
                           <input type="text" name="fname" id="fname" value="" placeholder="Example : John"  class="form-control" />
                       </div>
                       <div class="form-group col-md-6">
                           <label>SECOND NAME*</label>
                           <input type="text" name="lname" id="lname" value="" placeholder="Example :  Doe"  class="form-control" />
                       </div>
                   </div>
                   <div class="row">
                       <div class="form-group col-md-6">
                           <label>phone*</label>
                           <input type="text" name="phone" value="" placeholder="Example : 0720000000" id="phone" class="form-control" />
                       </div>
                       <div class="form-group col-md-6">
                           <label>Email*</label>
                           <input type="text" name="emailAddress" value="" placeholder="Johndoe@example.com" id="emailAddress" class="form-control" />
                       </div>
                   </div>
                    <div class="form-group">
                        <label>Select Category*</label>
                        <select name="usercategory" id="usercategory" class="form-control" required>
                            <option selected disabled>Select Category</option>
                            <option value="student">Student</option>
                            <option value="parent">Parent</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>password*</label>
                            <input type="text" name="passwordsignup" value="" placeholder="********" id="passwordsignup" class="form-control" />
                        </div>
                        <div class="form-group col-md-6">
                            <label>comfirm password*</label>
                            <input type="text" name="confirmpassword" id="confirmpassword" value="" placeholder="********"  class="form-control" />
                        </div>
                    </div>
                    <div class="links">
                        <input type="checkbox"  name="credit" class="checkclass checkbox-inline"/>
                        By register, I read & accept the terms.
                    </div>
                    <br>
                    <p id="responseSignup"class="mt-3" style="display: none"></p>
                    <button type="submit" class="btn btn-primary btn-block registerUserButton" >Register now</button>
                </form>
                <div class="donot">
                    Have an account?
                    <a href="#">Login Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login end here -->

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
<script src="{{asset("jsprocessor/loginregister.js")}}"></script>
{{View::make("website.headerfooter.footer")}}
</body>
</html>
