<?php
/* @var $this PopupController */
/* @var $model Popup */

$this->breadcrumbs=array(
	'Popups'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Popup', 'url'=>array('index')),
	array('label'=>'Create Popup', 'url'=>array('create')),
	array('label'=>'Update Popup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Popup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Popup', 'url'=>array('admin')),
);
?>

<h1>View Popup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
        array(
            'label'=>'Статус',
            'value'=>$model->getOptions()[$model->show],
        ),
		'views',
        array(
            'label'=>'Ссылка на установку',
            'value'=>'<script src="' . $this->createAbsoluteUrl('/') . '/popup/js/' . $model->id . '"></script>',
        ),
	),
)); ?>
