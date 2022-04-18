
<!-- rutvij gawas||22-03-2021 -->
<?php
	$priest_config = array(
		'vName'=>array(
			'validate'=>'1',
			'clientname'=>'priestName',
			'type'=>'string',
			'other_validation'=>array('Valid_full_name','Space_between','Exist_bad_word')
		),
		'vCity'=>array(
			'validate'=>'1', 
			'clientname'=>'priestCity',
			'type'=>'array',
			'other_validation'=>array()
		),
		'iPhoneCode'=>array(
			'validate'=>'1',
			'clientname'=>'priestCountryCode',
			'type'=>'number',
			'other_validation'=>array()
		),
		'iContactNo'=>array(
			'validate'=>'1',
			'clientname'=>'priestContactNo',
			'type'=>'string',
			'other_validation'=>array(
				'valid_phone_number'
			)
		),
		'vAddress'=>array(
			'validate'=>'1',
			'clientname'=>'priestAddress',
			'type'=>'string',
			'other_validation'=>array(
				'Exist_bad_word'
			)
		),
		'vLanguage'=>array(
			'validate'=>'1',
			'clientname'=>'priestLanguages',
			'type'=>'string',
			'other_validation'=>array()
		),
		'vExperience'=>array(
			'validate'=>'1',
			'clientname'=>'priestExperience',
			'type'=>'number',
			'other_validation'=>array()
		),
		'vEmail'=>array(
			'validate'=>'1',
			'clientname'=>'priestEmail',
			'type'=>'string',
			'other_validation'=>array(
				'Exist_bad_word','valid_email_address','email_exist'
			)
		),
		'vPassword'=>array(
			'validate'=>'1',
			'clientname'=>'priestPassword',
			'type'=>'string',
			'other_validation'=>array(
				'compare_with_password'
			)
		),
		'iPackage'=>array(
			'validate'=>'1',
			'clientname'=>'priestPackage',
			'type'=>'string',
			'other_validation'=>array()
		),
		'dPackageEndDate'=>array(
			'validate'=>'0',
			'clientname'=>'priestPackageEndDate',
			'type'=>'string',
			'other_validation'=>array()
		),
		'vImage'=>array(
			'validate'=>'0',
			'clientname'=>'priestImage',
			'type'=>'string',
			'other_validation'=>array()
		),
		'iCommissionRate'=>array(
			'validate'=>'0',
			'clientname'=>'priestCommissionRate',
			'type'=>'string',
			'other_validation'=>array()
		),
		'vUnit'=>array(
			'validate'=>'0',
			'clientname'=>'priestUnit',
			'type'=>'string',
			'other_validation'=>array()
		),
		'iIsApproved'=>array(
			'validate'=>'0',
			'clientname'=>'priestIsApproved',
			'type'=>'string',
			'other_validation'=>array()
		),
		'dRegistrationDate'=>array(
			'validate'=>'0',
			'clientname'=>'priestRegistrationDate',
			'type'=>'date',
			'other_validation'=>array()
		),
		'vRemarks'=>array(
			'validate'=>'0',
			'clientname'=>'priestRemark',
			'type'=>'string',
			'other_validation'=>array()
		),
		'iStatFlag'=>array(
			'validate'=>'0',
			'clientname'=>'priestStatFlag',
			'type'=>'string',
			'other_validation'=>array()
		),
		'vStatus'=>array(
			'validate'=>'1',
			'clientname'=>'priestStatus',
			'type'=>'string',
			'other_validation'=>array()
		)
	)	
?>