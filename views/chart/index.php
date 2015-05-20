
<?php

use miloschuman\highcharts\Highcharts;

$this->registerJsFile('./js/chart_dial.js');
?>
<div style='display: none'>
    <?=
    Highcharts::widget([
        'scripts' => [
            'highcharts-more',
            'themes/grid'
        //'modules/exporting',
        ]
    ]);
    ?>
</div>

<div>
    <?php
    $this->registerJs("
                        var obj_div=$('#ch1');
                        gen_dial(obj_div,90,80);
                    ");
    ?>
    <h4>ประชาชนอายุ 35 ปีขึ้นไปได้รับการคัดกรอง<br>ความดันโลหิต </h4>
    <div id="ch1"></div>
</div>

<div id="chart2">
    พื้นที่แสดง chart2
</div>
 <?php
    $this->registerJs("
        $(function () {
    $('#chart2').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Browser market shares at a specific website, 2014'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Firefox',   45.0],
                ['IE',       26.8],
                {
                    name: 'Chrome',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Safari',    8.5],
                ['Opera',     6.2],
                ['Others',   0.7]
            ]
        }]
    });
});
    
     ");
?>


