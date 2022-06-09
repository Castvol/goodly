<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
    'Popup preview',
);
?>
<h1>Popup preview</h1>

<p>На этой странице пример работы popup.</p>
<script src="<?php echo $this->createAbsoluteUrl('/') . '/popup/js/';?>1"></script>
