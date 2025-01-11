$(document).ready(function (e) {
    /*showMyEducationSelection();*/
    $(".selectEducationSystem").on("click",function (e) {
        e.preventDefault()
        var educationsystemID = $(this).data("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/addmyeducationsystem',
            type: 'POST',
            data: {educationsystemID:educationsystemID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                    window.location.reload();
                }else {
                    toastr.warning(dataResult['message']);
                }

            },
        });
    })

    $(".deleteTrainingContent").on("click",function (e) {
        e.preventDefault()
        var trainingcontentID = $(this).data("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/teacherdeletetrainingcontent',
            type: 'POST',
            data: {trainingcontentID:trainingcontentID},
            success: function (dataResult) {
                if (dataResult['success']==true){
                  document.getElementById("row"+trainingcontentID).style.display="none"
                }else {
                    toastr.warning(dataResult['message']);
                }

            },
        });
    })


/*
    function showMyEducationSelection(){
        var myeducationsystemselection = $("#myeducationsystemselection");
        myeducationsystemselection.empty();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/getmyeducationsystem',
            type: 'GET',
            success: function (dataResult) {
                if (dataResult['success']==true){
                    var data = dataResult['result'];
                    for (var i=0;i<data.length;i++) {
                        myeducationsystemselection.append(
                            '<div className="col-md-12 card">' +
                            '<div className="row mt-3 mb-3 ml-3 mr-3">' +
                            '<div className="col-md-12">' +
                            '<p  class="text-capitalize">' + data[i]['educationSystem'] + '</p>' +
                            '</div>' +
                            '</div>');
                    }
                }else {
                    toastr.warning(dataResult['message']);
                }

            },
        });

    }
*/

});
