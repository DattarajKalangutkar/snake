<?php
	$transcation_config = array(
		'iRescuerId'=>array(
			'validate'=>'1',
			'clientname'=>'transRescuerId',
			'type'=>'string',
			'data_fetch'=>'rescuer',
			'html'=>'dropdown',
			'table'=>'1',
			'phase1'=>'1',
			'phase2'=>'0',
			'phase3'=>'0'
		),
		'iUserId'=>array(
			'validate'=>'1',
			'clientname'=>'transUserId',
			'type'=>'string',
			'data_fetch'=>'user',
			'html'=>'dropdown',
			'table'=>'1',
			'phase1'=>'1',
			'phase2'=>'0',
			'phase3'=>'0'
		),
		'iSnakeId'=>array(
			'validate'=>'1',
			'clientname'=>'transSnakeId',
			'type'=>'string',
			'data_fetch'=>'snake',
			'html'=>'dropdown',
			'table'=>'1',
			'phase1'=>'0',
			'phase2'=>'1',
			'phase3'=>'0'
		),
		'vImage'=>array(
			'validate'=>'0',
			'clientname'=>'transImage',
			'type'=>'string',
			'html'=>'file',
			'table'=>'0',
			'phase1'=>'0',
			'phase2'=>'1',
			'phase3'=>'0'
		),
		'dRescuerDate'=>array(
			'validate'=>'1',
			'clientname'=>'transRescuerDate',
			'type'=>'string',
			'html'=>'date',
			'table'=>'0',
			'phase1'=>'0',
			'phase2'=>'1',
			'phase3'=>'0'
		),
		'tRescuerAddress'=>array(
			'validate'=>'1',
			'clientname'=>'transRescuerAddress',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0',
			'phase1'=>'0',
			'phase2'=>'1',
			'phase3'=>'0'
		),
		'ilength'=>array(
			'validate'=>'1',
			'clientname'=>'transSnakeLength',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0',
			'phase1'=>'0',
			'phase2'=>'1',
			'phase3'=>'0'
		),
		'iWeight'=>array(
			'validate'=>'1',
			'clientname'=>'transSnakeWeight',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0',
			'phase1'=>'0',
			'phase2'=>'1',
			'phase3'=>'0'
		),
		'vTranStatus'=>array(
			'validate'=>'1',
			'clientname'=>'transStatus',
			'data_fetch'=>'statustrans',
			'type'=>'string',
			'html'=>'dropdown',
			'table'=>'1',
			'phase1'=>'1',
			'phase2'=>'1',
			'phase3'=>'1'
		),
		'tComment'=>array(
			'validate'=>'1',
			'clientname'=>'transComment',
			'type'=>'string',
			'html'=>'textarea',
			'table'=>'0',
			'phase1'=>'0',
			'phase2'=>'0',
			'phase3'=>'1'
		),
		'vRate'=>array(
			'validate'=>'1',
			'clientname'=>'transRate',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0',
			'phase1'=>'0',
			'phase2'=>'0',
			'phase3'=>'1'
		),
		'dCreatedDate'=>array(
			'validate'=>'1',
			'clientname'=>'createdDate',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'vStatus'=>array(
			'validate'=>'1',
			'clientname'=>'vStatus',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0',
			'phase1'=>'1',
		)        
	) 
?>
