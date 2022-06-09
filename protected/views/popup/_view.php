<?php
/* @var $this PopupController */
/* @var $data Popup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('show')); ?>:</b>
    <?php echo CHtml::encode($data->getOptions()[$data->show]);?>
	<br />

	<b>Ссылка на установку:</b>
    <br />
    <code>&ltscript src="<?php echo $this->createAbsoluteUrl('/');?>/popup/js/<?php echo $data->id?>">&lt/script></code>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('views')); ?>:</b>
	<?php echo CHtml::encode($data->views); ?>
	<br />


</div>