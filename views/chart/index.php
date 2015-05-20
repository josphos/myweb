
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

<div class="row"> 
    <div class="col-sm-4"> 
        <div >
            <?php
            $this->registerJs("
                        var obj_div=$('#ch1');
                        gen_dial(obj_div,90,80);
                    ");
            ?>
            <h4>ประชาชนอายุ 35 ปีขึ้นไปได้รับการคัดกรอง<br>ความดันโลหิต </h4>
            <div id="ch1"></div>
        </div>
    </div>

    <div id="chart2" class="col-sm-4">
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
        credits:false,
        title: {
            text: 'จังหวัด'
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
            name: 'prov',
            data: [
                ['พิษณุโลก',   45],
                ['นนทบุรี',       26.8],
                {
                    name: 'กทม',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['เชียงใหม่',    8.5],
                ['แพร่',     6.2],
                ['สุโขทัย',   0.7]
            ]
        }]
    });
});
    
     ");
    ?>



</div>



