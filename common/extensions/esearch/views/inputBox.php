<?php echo CHtml::beginForm($url, 'get', $htmlOptions) ?>
	<?php //if($label) echo CHtml::label($label, 'q') ?>
	<?php echo CHtml::textField('q', Yii::app()->request->getQuery('q'), array('class'=>$htmlOptions['class'].'-input')) ?>
	<?php if($htmlOptions['label']) echo CHtml::submitButton($htmlOptions['label'], array('class'=>$htmlOptions['class'].'-button btn', 'name'=>null,'style'=>'margin-bottom:10px;')) ?>
<?php echo CHtml::endForm() ?>

