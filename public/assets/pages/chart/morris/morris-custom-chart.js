"use strict";

setTimeout(function(){
$(document).ready(function() {
   // lineChart();
    ///areaChart();
     donutChart();
    loadBarGraphdata();
    loadUserGrowthGraph()
     contactChart();
    $(window).on('resize',function() {
        //window.lineChart.redraw();
        //window.areaChart.redraw();
        //window.donutChart.redraw();
    });

});


//donut two
    function contactChart() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"/loadUserContacts",
            method:"POST",
            cache:false,
            success:function(data) {
                window.areaChart = Morris.Donut({
                    element: 'contactChart',
                    redraw: true,
                    data:data,
                    colors: ['#448aff', '#158FAD']
                });
            }
        });
    }


/*Donut chart*/
function donutChart() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:"/loaddonutgrap",
        method:"POST",
        cache:false,
        success:function(data) {
            window.areaChart = Morris.Donut({
                element: 'donut-example',
                redraw: true,
                data:data,
                colors: ['#5FBEAA', '#34495E', '#FF9F55']
            });
        }
    });
}

// Morris bar chart
    function loadBarGraphdata() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"/loadbargrap",
            method:"POST",
            cache:false,
            success:function(data)
            {
                Morris.Bar({
                    element: 'morris-bar-chart',
                    data: data,
                    xkey: 'y',
                    //ykeys: ['a', 'b', 'c','d','e', 'f'/*, 'g','h', 'i', 'j','k', 'l'*/],
                    ykeys: ['a', 'b', 'c','d','e', 'f'],
                    //labels: ['MATH', 'SCI','SOCI', 'KIS', 'ENG', 'CRE'/*,'JUL', 'AUG', 'SEP','OCT', 'NOV', 'DEC'*/],
                    labels: ['MAT', 'SCI','SOC', 'KIS', 'ENG', 'CRE'],
                    //barColors: ['#B82255F','#DB4035', '#FF9933', '#FAD000','#AFB83B','#7ECC49', '#299438', '#6ACCBC','#158FAD','#14AAF5', '#96C3EB', '#4073FF',],
                    barColors: ['#B82255F','#DB4035', '#FF9933', '#FAD000','#AFB83B','#7ECC49'],
                    hideHover: 'auto',
                    gridLineColor: '#eef0f2',
                    resize: true
                });
            }
        });
    }


    function loadUserGrowthGraph() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"/loadusergrouthgraph",
            method:"POST",
            cache:false,
            success:function(data)
            {
                Morris.Bar({
                    element: 'userGrowthchart',
                    data: data,
                    xkey: 'y',
                    ykeys: ['a', 'b', 'c'],
                    labels: ['STUDENTS', 'PARENTS','TEACHERS'],
                    barColors: ['#DB4035', '#FF9933', '#FAD000'],
                    hideHover: 'auto',
                    gridLineColor: '#eef0f2',
                    resize: true
                });
            }
        });
    }


/*Site visit Chart*/

Morris.Area({
    element: 'morris-site-visit',
    data: [{
        period: '2010',
        SiteB: 0,
        SiteC: 4,

    }, {
        period: '2011',
        SiteB: 100,
        SiteC: 4,

    }, {
        period: '2012',
        SiteB: 60,
        SiteC: 4,

    }, {
        period: '2013',
        SiteB: 200,
        SiteC: 4,

    }, {
        period: '2014',
        SiteB: 150,
        SiteC: 4,

    }, {
        period: '2015',
        SiteB: 90,
        SiteC: 4,

    }, {
        period: '2016',
        SiteB: 150,
        SiteC: 4,

    }],
    xkey: 'period',
    ykeys: ['SiteA', 'SiteB', 'SiteC'],
    labels: ['JAN', 'Site B'],
    pointSize: 0,
    fillOpacity: 0.4,
    pointStrokeColors: ['#b4becb', '#01c0c8'],
    behaveLikeLine: true,
    gridLineColor: '#e0e0e0',
    lineWidth: 0,
    smooth: false,
    hideHover: 'auto',
    lineColors: ['#b4becb', '#01c0c8'],
    resize: true

});


},350);
