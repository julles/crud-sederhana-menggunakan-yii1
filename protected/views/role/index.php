
<?php
	foreach(Yii::app()->user->getFlashes() as $key => $val)
	{
		echo "
			<div class = '$key' id = '$key'>$val</div>
		";
	}
?>


<div>
	<?php echo CHtml::link('Tambah Data' , array('create')); ?>
</div>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'role',
		array(
			'class'=>'CButtonColumn',
			'template' => '{update}{hapus}',
			'buttons' => array(
				'update' => array(
					'url' => 'inc::root_url("/update/oid/$data->id")'
				),
				'hapus' => array(
					'url' => 'inc::root_url("/hapus/oid/$data->id/token/".inc::enkrip($data->id)."")',
					'imageUrl' => Yii::app()->baseUrl."/images/delete.png",
					'options' => array('onclick' => 'return confirm("Anda yakin menghapus data ini ?")')
				)
			)
		),
	),
)); ?>
