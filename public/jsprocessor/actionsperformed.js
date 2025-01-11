$(document).ready(function() {
    $(".deleteClass").on("click",function (e) {
        e.preventDefault()
        var classID = $(this).data('id')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/deleteclass',
            type: 'POST',
            data: {classID:classID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                    document.getElementById("row"+classID).style.display="none"
                    toastr.success(dataResult['message'])
                }else {
                    toastr.warning(dataResult['message'])
                }

            },
        });
    });

    $(".deleteSubject").on("click",function (e) {
        e.preventDefault()
        var subjectID = $(this).data('id')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/deletesubject',
            type: 'POST',
            data: {subjectID:subjectID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                    document.getElementById("row"+subjectID).style.display="none"
                    toastr.success(dataResult['message'])
                }else {
                    toastr.warning(dataResult['message'])
                }

            },
        });
    })

    $(".deleteUser").on("click",function (e) {
        e.preventDefault()
        var userID = $(this).data('id')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/deleteuser',
            type: 'POST',
            data: {userID:userID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                    document.getElementById("row"+userID).style.display="none"
                    toastr.success(dataResult['message'])
                }else {
                    toastr.warning(dataResult['message'])
                }

            },
        });
    })

    $(".approvedUser").on("click",function (e) {
        e.preventDefault()
        var userID = $(this).data('id')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/approveduser',
            type: 'POST',
            data: {userID:userID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                    document.getElementById("approvedUser"+userID).style.display="none"
                    toastr.success(dataResult['message'])
                }else {
                    toastr.warning(dataResult['message'])
                }

            },
        });
    })


});
