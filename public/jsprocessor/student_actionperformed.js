$(document).ready(function (e) {
    /*showMyEducationSelection();*/
    $(".addTriningSlots").on("click", function (e) {
        e.preventDefault()
        var trainingID = $(this).data("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/addtrainingSlots',
            type: 'POST',
            data: {trainingID: trainingID},
            success: function (dataResult) {
                if (dataResult['success'] == true) {
                    window.location.reload();
                } else {
                    toastr.warning(dataResult['message']);
                }

            },
        });
    })
});
