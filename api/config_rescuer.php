<?php
	$rescuer_config = array(
        'vName'=>array(
            'validate'=>'1',
            'clientname'=>'rescuerName',
            'type'=>'string',
            'html'=>'text',
            'table'=>'1'
        ),
        'vPhone'=>array(
            'validate'=>'1',
            'clientname'=>'rescuerPhone',
            'type'=>'string',
            'html'=>'text',
            'table'=>'1',
            'other_validation'=>'vPhone'
        ),
        'vUserName'=>array(
            'validate'=>'1',
            'clientname'=>'rescuerUsername',
            'type'=>'string',
            'html'=>'text',
            'table'=>'1'
        ),
        'vPassword'=>array(
            'validate'=>'1',
            'clientname'=>'rescuerPassword',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'iRoleId'=>array(
            'validate'=>'1',
            'clientname'=>'rescuerRoleId',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'tAddress'=>array(
            'validate'=>'0',
            'clientname'=>'rescuerAddress',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'iAge'=>array(
            'validate'=>'0',
            'clientname'=>'rescuerAge',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'vEmail'=>array(
            'validate'=>'1',
            'clientname'=>'rescuerEmail',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'vGender'=>array(
            'validate'=>'0',
            'clientname'=>'rescuerGender',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'vCertificate'=>array(
            'validate'=>'0',
            'clientname'=>'rescuerCertificate',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'vExperience'=>array(
            'validate'=>'0',
            'clientname'=>'rescuerExperience',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'vImage'=>array(
            'validate'=>'1',
            'clientname'=>'rescuerImage',
            'type'=>'string',
            'html'=>'file',
            'table'=>'0'
        ),
        'vAchievement'=>array(
            'validate'=>'0',
            'clientname'=>'rescuerAchievement',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'vVerificationstatus'=>array(
            'validate'=>'1',
            'clientname'=>'rescuerVerification',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'vLat'=>array(
            'validate'=>'0',
            'clientname'=>'rescuerLatitude',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'vLong'=>array(
            'validate'=>'0',
            'clientname'=>'rescuerLongitude',
            'type'=>'string',
            'html'=>'text',
            'table'=>'0'
        ),
        'iPoints'=>array(
            'validate'=>'0',
            'clientname'=>'rescuerPoints',
            'type'=>'number',
            'html'=>'text',
            'table'=>'0'
        ),
        'dCreatedDate'=>array(
            'validate'=>'0',
            'clientname'=>'createdDate',
            'type'=>'string',
            'html'=>'',
            'table'=>'1'
        ),
        'vStatus'=>array(
            'validate'=>'1',
            'clientname'=>'rescuerStatus',
            'type'=>'string',
            'html'=>'',
            'table'=>'0'
        )	
	) 
?>
