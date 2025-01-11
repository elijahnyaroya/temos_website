$(document).ready(function (e) {
    $(".deleteGallery").on('click',function (e) {
        var data = $(this).data('id');
        var splitter = data.split('#');
        var recordID = splitter[0];
        var edittype = splitter[1];

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/deletegallery",
            method: "POST",
            data:{
                recordID:recordID,
                edittype: edittype,
            },
            dataType:'JSON',
            success: function(dataResult){
                var row = document.getElementById('row'+recordID);
                 if (dataResult['success']==true){
                     row.style.display='none'
                 }
            }
        });
    })

    //deleting messages
    $(".deleteMessage").on('click',function (e) {
        var recordID = $(this).data('id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/deleteMessages",
            method: "POST",
            data:{
                recordID:recordID,
            },
            dataType:'JSON',
            success: function(dataResult){
                var row = document.getElementById('row'+recordID);
                if (dataResult['success']==true){
                    row.style.display='none'
                }
            }
        });
    })

    //sending email to user
    $('body').on('click', '#submitForm', function(){
        var sendEmailForm = $("#sendEmailForm");
        var formData = sendEmailForm.serialize();
        $( '#email-error' ).html( "" );

        $.ajax({
            url:'/sendemail',
            type:'POST',
            data:formData,
            success:function(data) {
                console.log(data);
                if(data['success']!=true) {
                    $( '#email-error' ).html(data['errors'] );
                }else{
                    $( '#success-msgs' ).html("<strong>Success!</strong> Email has been sent successfully.!!");
                    setInterval(function(){
                        $('#sendEmail').modal('hide');
                        //$('#success-msg').addClass('hide');
                    }, 3000);
                }
            },
        });
    });

    //delete courses
    $(".deleteCourses").on('click',function (e) {
        var recordID = $(this).data('id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/deletecourses",
            method: "POST",
            data:{
                recordID:recordID,
            },
            dataType:'JSON',
            success: function(dataResult){
                var row = document.getElementById('row'+recordID);
                if (dataResult['success']==true){
                    row.style.display='none'
                }
            }
        });
    })

       //delete courses
    $(".deleteCalendarEntries").on('click',function (e) {
        var recordID = $(this).data('id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/deleteCalendarEntries",
            method: "POST",
            data:{
                recordID:recordID,
            },
            dataType:'JSON',
            success: function(dataResult){
                var row = document.getElementById('row'+recordID);
                if (dataResult['success']==true){
                    row.style.display='none'
                }
            }
        });
    })

    //delete courses
    $(".deleteWebinarVideo").on('click',function (e) {
        var recordID = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/deleteWebinarVideo",
            method: "POST",
            data:{
                recordID:recordID,
            },
            dataType:'JSON',
            success: function(dataResult){
                var row = document.getElementById('row'+recordID);
                if (dataResult['success']==true){
                    row.style.display='none'
                }
            }
        });
    })

      //delete courses
    $(".deleteUpcomingwebinar").on('click',function (e) {
        var recordID = $(this).data('id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/deleteUpcomingwebinar",
            method: "POST",
            data:{
                recordID:recordID,
            },
            dataType:'JSON',
            success: function(dataResult){
                var row = document.getElementById('row'+recordID);
                if (dataResult['success']==true){
                    row.style.display='none'
                }
            }
        });
    })

    //edit video data
    $('body').on('click', '#editWebinarVideoForm', function(){
        var sendFormData = $("#editWebinarVideo");
        var formData = sendFormData.serialize();
        $( '#email-error' ).html( "" );

        $.ajax({
            url:'/editWebinarVideo',
            type:'POST',
            data:formData,
            success:function(data) {
                console.log(data);
                if(data['success']!=true) {
                    $( '#email-error' ).html(data['message'] );
                }else{
                    $( '#success-msgs' ).html(data['message']);
                    setInterval(function(){
                        $('#editVideoData').modal('hide');
                        location.href= data['url'];
                        //$('#success-msg').addClass('hide');
                    }, 3000);
                }
            },
        });
    });

    //delete ImageFromGallery
    $(".deleteImageFromGallery").on('click',function (e) {
        var recordID = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/deleteImageFromGallery",
            method: "POST",
            data:{
                recordID:recordID,
            },
            dataType:'JSON',
            success: function(dataResult){
                var row = document.getElementById('row'+recordID);
                if (dataResult['success']==true){
                    row.style.display='none'
                }
            }
        });
    })

})
