$(document).ready(function (e) {
    $("#submitAdminAddTopics").on("click",function (e) {
        e.preventDefault()
        var form = $("#adminAddTopics");
        var formData = form.serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/adminAddtopics',
            type: 'POST',
            data: formData,
            success: function (dataResult) {
                var responseText = document.getElementById("reponsemessageform");
                if (dataResult['success']==true){
                    responseText.style.display="block"
                    responseText.style.color="green"
                    responseText.innerHTML=dataResult['message']
                    toastr.success(dataResult['message']);
                    setTimeout(function (){
                        responseText.style.display="none"
                    },3000)
                }else {
                    responseText.style.display="block"
                    responseText.style.color="red"
                    responseText.innerHTML=dataResult['message']
                    toastr.warning(dataResult['message']);
                    setTimeout(function (){
                        responseText.style.display="none"
                    },3000)
                }

            },
        });
    })
    $("#submitSubjectSubTopic").on("click",function (e) {
        e.preventDefault()
        var form = $("#SubjectSubTopicForm");
        var formData = form.serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/adminAddsubtopics',
            type: 'POST',
            data: formData,
            success: function (dataResult) {
                var responseText = document.getElementById("reponsemessageformsuptopic");
                if (dataResult['success']==true){

                    responseText.style.display="block"
                    responseText.style.color="green"
                    responseText.innerHTML=dataResult['message']
                    toastr.success(dataResult['message']);
                    setTimeout(function (){
                        responseText.style.display="none"
                    },3000)
                }else {
                    responseText.style.display="block"
                    responseText.style.color="red"
                    responseText.innerHTML=dataResult['message']
                    toastr.warning(dataResult['message']);
                    setTimeout(function (){
                        responseText.style.display="none"
                    },3000)
                }

            },
        });
    })

    $(".deleteTopics").on("click",function (e) {
        e.preventDefault()
        var topicID = $(this).data("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/deletetopics',
            type: 'POST',
            data: {topicID:topicID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                    document.getElementById("row"+topicID).style.display="none"
                    toastr.success(dataResult['message']);
                }else {
                    toastr.warning(dataResult['message']);
                }

            },
        });
    })
    $(".deleteSubTopics").on("click",function (e) {
        e.preventDefault()
        var subTopicID = $(this).data("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/deletesubtopics',
            type: 'POST',
            data: {subTopicID:subTopicID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                    document.getElementById("row"+subTopicID).style.display="none"
                    toastr.success(dataResult['message']);
                }else {
                    toastr.warning(dataResult['message']);
                }

            },
        });
    })

    $("#submitAdminupdateTopics").on("click",function (e) {
        e.preventDefault()
        var form = $("#adminupdateTopics");
        var formData = form.serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/adminupdatetopics',
            type: 'POST',
            data: formData,
            success: function (dataResult) {
                var responseText = document.getElementById("reponsemessageform");
                if (dataResult['success']==true){

                    responseText.style.display="block"
                    responseText.style.color="green"
                    responseText.innerHTML=dataResult['message']

                    setTimeout(function(){
                        responseText.style.display="none"
                        window.location.reload();
                    }, 1000);
                }else {
                    responseText.style.display="block"
                    responseText.style.color="red"
                    responseText.innerHTML=dataResult['message']

                }

            },
        });
    })

    $("#submitAdminupdateTopics").on("click",function (e) {
        e.preventDefault()
        var form = $("#adminupdateTopics");
        var formData = form.serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/adminupdatetopics',
            type: 'POST',
            data: formData,
            success: function (dataResult) {
                var responseText = document.getElementById("reponsemessageform");
                if (dataResult['success']==true){

                    responseText.style.display="block"
                    responseText.style.color="green"
                    responseText.innerHTML=dataResult['message']

                    setTimeout(function(){
                        responseText.style.display="none"
                        window.location.reload();
                    }, 1000);
                }else {
                    responseText.style.display="block"
                    responseText.style.color="red"
                    responseText.innerHTML=dataResult['message']

                }

            },
        });
    })

    $(".deleteTrainingSlot").on("click",function (e) {
        e.preventDefault()
        var trainingSlotID = $(this).data("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/deletetrainingslot',
            type: 'POST',
            data: {trainingSlotID:trainingSlotID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                    document.getElementById("row"+trainingSlotID).style.display="none"
                    toastr.success(dataResult['message']);
                }else {
                    toastr.warning(dataResult['message']);
                }

            },
        });
    })

    $(".deleteEducationSystems").on("click",function (e) {
        e.preventDefault()
        var educationsystemID = $(this).data("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/deleteeducationsystem',
            type: 'POST',
            data: {educationsystemID:educationsystemID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                    document.getElementById("row"+educationsystemID).style.display="none"
                    toastr.success(dataResult['message']);
                }else {
                    toastr.warning(dataResult['message']);
                }

            },
        });
    })


})
