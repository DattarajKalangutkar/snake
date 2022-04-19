<?php
	$transcation_config = array(
		'iRescuerId'=>array(
			'validate'=>'1',
			'clientname'=>'transRescuerId',
			'type'=>'string',
			'data_fetch'=>'rescuer',
			'html'=>'dropdown',
			'table'=>'1'
		),
		'iUserId'=>array(
			'validate'=>'1',
			'clientname'=>'transUserId',
			'type'=>'string',
			'data_fetch'=>'user',
			'html'=>'dropdown',
			'table'=>'1'
		),
		'iSnakeId'=>array(
			'validate'=>'1',
			'clientname'=>'transSnakeId',
			'type'=>'string',
			'data_fetch'=>'snake',
			'html'=>'dropdown',
			'table'=>'1'
		),
		'vImage'=>array(
			'validate'=>'1',
			'clientname'=>'transImage',
			'type'=>'string',
			'html'=>'file',
			'table'=>'1'
		),
		'dRescuerDate'=>array(
			'validate'=>'1',
			'clientname'=>'transRescuerDate',
			'type'=>'string',
			'html'=>'date',
			'table'=>'1'
		),
		'tRescuerAddress'=>array(
			'validate'=>'1',
			'clientname'=>'transRescuerAddress',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0'
		),
		'ilength'=>array(
			'validate'=>'0',
			'clientname'=>'transSnakeLength',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0'
		),
		'iWeight'=>array(
			'validate'=>'0',
			'clientname'=>'transSnakeWeight',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0'
		),
		'vTranStatus'=>array(
			'validate'=>'0',
			'clientname'=>'transStatus',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0'
		),
		'tComment'=>array(
			'validate'=>'0',
			'clientname'=>'transComment',
			'type'=>'string',
			'html'=>'textarea',
			'table'=>'0'
		),
		'vRate'=>array(
			'validate'=>'0',
			'clientname'=>'transRate',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0'
		),
		'dCreatedDate'=>array(
			'validate'=>'0',
			'clientname'=>'createdDate',
			'type'=>'date',
			'html'=>'',
			'table'=>'0'
		),
		'vStatus'=>array(
			'validate'=>'1',
			'clientname'=>'transStatus',
			'type'=>'string',
			'html'=>'',
			'table'=>'0'
		)        
	) 
?>
