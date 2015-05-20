
<?php

use miloschuman\highcharts\Highcharts;

$this->registerJsFile('./js/chart_dial.js');
?>
<div style='display: none'>
    <?=
    Highcharts::widget([
        'scripts' => [
            'highcharts-more',
            //'themes/grid'
        //'modules/exporting',
        ]
    ]);
    ?>
</div>

<div class="row"> 
    <div class="col-sm-4"> 
        <div >
            <?php
            $sql = "select 90 as base";
            $base = Yii::$app->db->createCommand($sql)->queryScalar();
            $result= 75;
            $this->registerJs("
                        var obj_div=$('#ch1');
                        gen_dial(obj_div,$base,$result);
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
    $data =  [
                ['พิษณุโลก',   45],
                ['นนทบุรี',       26.8],
                ['กทม',    8.5],
                ['เชียงใหม่',    8.5],
                ['แพร่',     6.2],
                ['สุโขทัย',   0.7]
            ];
    $data = json_encode($data);
    
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
            data:$data
        }]
    });
});
    
     ");
    ?>



</div>



