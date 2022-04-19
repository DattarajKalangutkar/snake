<?php
	$master_config = array(
		'color'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'colorName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'colorStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),

		'pattern'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'patternName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'patternStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),

		'snake'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'snakeName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vLocalName'=>array(
				'validate'=>'1',
				'clientname'=>'snakeLocalName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vSize'=>array(
				'validate'=>'1',
				'clientname'=>'snakeSize',
				'type'=>'string',
				'html'=>'number',
				'table'=>'1'
			),
			'iColor'=>array(
				'validate'=>'1',
				'clientname'=>'snakeColor',
				'type'=>'string',
				'data_fetch'=>'color',
				'html'=>'dropdown',
				'table'=>'0'
			),
			'iPattern'=>array(
				'validate'=>'1',
				'clientname'=>'snakePattern',
				'type'=>'string',
				'data_fetch'=>'pattern',
				'html'=>'dropdown',
				'table'=>'1'
			),
			'vImage'=>array(
				'validate'=>'1',
				'clientname'=>'snakeImage',
				'type'=>'string',
				'html'=>'file',
				'table'=>'0'
			),
			'iType'=>array(
				'validate'=>'0',
				'clientname'=>'snakeType',
				'type'=>'string',
				'data_fetch'=>'snaketype',
				'html'=>'dropdown',
				'table'=>'0'
			),
			'iHeadShape'=>array(
				'validate'=>'0',
				'clientname'=>'snakeHeadShape',
				'type'=>'string',
				'data_fetch'=>'headshape',
				'html'=>'dropdown',
				'table'=>'0'
			),
			'tDesc'=>array(
				'validate'=>'0',
				'clientname'=>'snakeDesc',
				'type'=>'string',
				'html'=>'textarea',
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
				'clientname'=>'snakeStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
        ),
        'snaketype'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'snakeTypeName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
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
				'clientname'=>'snakeTypeStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),
        'statustrans'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'statustransName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'dCreated_date'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'date',
				'html'=>'',
				'table'=>'0'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'statustransStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),

        'symptoms'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'symptomsName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'symptomsStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),
		'hospital'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'hospitalName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vAddress'=>array(
				'validate'=>'1',
				'clientname'=>'hospitalAddress',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vImage'=>array(
				'validate'=>'1',
				'clientname'=>'hospitalImage',
				'type'=>'string',
				'html'=>'file',
				'table'=>'0'
			),
			'vContact'=>array(
				'validate'=>'1',
				'clientname'=>'hospitalContact',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vEmail'=>array(
				'validate'=>'1',
				'clientname'=>'hospitalEmail',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vLongitude'=>array(
				'validate'=>'1',
				'clientname'=>'hospitalLongitute',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vLatitude'=>array(
				'validate'=>'1',
				'clientname'=>'hospitalLatitute',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'hospitalStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),
		'wildlife'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'wildlifeName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vAddress'=>array(
				'validate'=>'1',
				'clientname'=>'wildlifeAddress',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vImage'=>array(
				'validate'=>'1',
				'clientname'=>'wildlifeImage',
				'type'=>'string',
				'html'=>'file',
				'table'=>'0'
			),
			'vContact'=>array(
				'validate'=>'1',
				'clientname'=>'wildlifeContact',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vEmail'=>array(
				'validate'=>'1',
				'clientname'=>'wildlifeEmail',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vLongitude'=>array(
				'validate'=>'1',
				'clientname'=>'wildlifeLongitute',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vLatitude'=>array(
				'validate'=>'1',
				'clientname'=>'wildlifeLatitute',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'wildlifeStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		 ),
		'firstaid'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'firstaidName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'vDescription'=>array(
				'validate'=>'1',
				'clientname'=>'firstDescription',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'wildlifeStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),
		'headshape'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'headshapeName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'headshapeStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),
	) 
?>
