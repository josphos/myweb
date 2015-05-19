<?php
use yii\helpers\Url;
?>
<div class="alert alert-danger">
   <h3>หมวดรายงาน</h3> 
</div>


<ul>
    <li><a href="<?=Url::to(['report/report1'])?>">รายงานตัวที่ 1</a></li>
    <li><a href="<?=Url::to(['report/report2'])?>">รายงานตัวที่ 2</a></li>
    <li><a href="<?=Url::to(['report/report3'])?>">รายงานตัวที่ 3</a></li>
    
</ul>