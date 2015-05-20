
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
