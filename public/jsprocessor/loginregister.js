$(document).ready(function() {

    $(".loginUSersButton").on("click",function (e) {
        e.preventDefault()
        var formData = $("#loginform");
        var dataSerialized =  formData.serialize();

        var counter = 0;
        var email = $("#email").val();
        var password = $("#password").val();

        counter = counter + errorMessages("email",email);
        counter = counter + errorMessages("password",password);

        if (counter<1){
            submitSignInFormData(dataSerialized);
        }else{
            var responseLogin= document.getElementById("responseLogin");
            responseLogin.innerHTML = "Error submiting the form "
            responseLogin.style.color = "red";
            responseLogin.style.display = "block";
        }
    })
    $(".registerUserButton").on("click",function (e) {
        e.preventDefault()
        var formData = $("#registerForm");
        var dataSerialized =  formData.serialize();

        var counter = 0;
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var phone = $("#phone").val();
        var emailAddress = $("#emailAddress").val();
        var usercategory = $("#usercategory").val();
        var passwordsignup = $("#passwordsignup").val();
        var confirmpassword = $("#confirmpassword").val();

        counter = counter + errorMessages("fname",fname);
        counter = counter + errorMessages("lname",lname);
        counter = counter + errorMessages("phone",phone);
        counter = counter + errorMessages("emailAddress",emailAddress);
        counter = counter + errorMessages("usercategory",usercategory);
        counter = counter + errorMessages("passwordsignup",passwordsignup);
        counter = counter + errorMessages("confirmpassword",confirmpassword);

        if (counter<1){
            if (passwordsignup ===confirmpassword){
                submitSignUpFormData(dataSerialized);
            }else{
                 errorMessages("passwordsignup",passwordsignup);
                 errorMessages("confirmpassword",confirmpassword);
                var responseSignup= document.getElementById("responseSignup");
                responseSignup.innerHTML = "Password are not matching."
                responseSignup.style.color = "red";
                responseSignup.style.display = "block";
            }
        }else{
            var responseSignup= document.getElementById("responseSignup");
            responseSignup.innerHTML = "Error submitting the form "
            responseSignup.style.color = "red";
            responseSignup.style.display = "block";
        }
    })

    function  errorMessages(inputField,value){
        if (value===""){
            document.getElementById(inputField).style.borderColor="red";
            return 1;
        }else {
            document.getElementById(inputField).style.borderColor="black";
            return 0;
        }
    }

    function submitSignInFormData(formData){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/login',
            type: 'POST',
            data: formData,
            success: function (dataResult) {
                if (dataResult['success']==true){
                    var responseLogin= document.getElementById("responseLogin");
                    responseLogin.innerHTML = dataResult['message']
                    responseLogin.style.color = "green";
                    responseLogin.style.display = "block";
                    location.href=dataResult['redirect']
                }else {

                    var responseLogin= document.getElementById("responseLogin");
                    responseLogin.innerHTML = dataResult['message']
                    responseLogin.style.color = "red";
                    responseLogin.style.display = "block";
                }

            },
        });
    }
    function submitSignUpFormData(formData){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/signup',
            type: 'POST',
            data: formData,
            success: function (dataResult) {
                if (dataResult['success']==true){
                    var responseSignup= document.getElementById("responseSignup");
                    responseSignup.innerHTML = dataResult['message']
                    responseSignup.style.color = "green";
                    responseSignup.style.display = "block";
                    location.href="/login_register"
                }else {

                    var responseSignup= document.getElementById("responseSignup");
                    responseSignup.innerHTML = dataResult['message']
                    responseSignup.style.color = "red";
                    responseSignup.style.display = "block";
                }

            },
        });
    }
});
