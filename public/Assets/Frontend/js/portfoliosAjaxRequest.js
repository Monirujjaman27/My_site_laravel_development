$(document).ready(function () {


    $('#myTab').on('click', '.nav-link .categoryItems', function () {
       var id = $('#categoryItems').attr('data-id');
       console.log(id);
       
    })





    // $.ajax({
    //     type: 'GET', //THIS NEEDS TO BE GET
    //     url: '/data' + '/' + id,
    //     dataType: JSON,
    //     success: function (data) {
    //         console.log(data);
    //         var obj = JSON.parse(data);
    //         var your_html = "";
    //         $.each(obj['getstamps'], function (key, val) {
    //             your_html += "<p>My Value :" + val + ") </p>"
    //         });
    //         $("#data").append(you_html); //// For Append
    //         $("#mydiv").html(your_html)   //// For replace with previous one
    //     },
    //     error: function () {
    //         console.log(data);
    //     }
    // });


})