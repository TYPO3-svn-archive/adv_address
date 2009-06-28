<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_advaddress_persons'] = Array (
	'ctrl' => $TCA['tx_advaddress_persons']['ctrl'],
	'interface' => Array (
		'showRecordFieldList' => 'hidden,firstname,middlename,lastname,title,letter_title,gender,birthday,picture,note,employer,addresses,type,status'
	),
	'feInterface' => $TCA['tx_advaddress_persons']['feInterface'],
	'columns' => Array (
		'hidden' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => Array (
				'type' => 'check',
				'default' => '0'
			)
		),
		'type' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.type',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.type.I.0', '0'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.type.I.1', '1'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'firstname' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.firstname',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'middlename' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.middlename',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'lastname' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.lastname',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'letter_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.letter_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'gender' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.gender',
			'config' => Array (
				'type' => 'radio',
				'items' => Array (
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.gender.I.0', '0'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.gender.I.1', '1'),
				),
			)
		),
		'birthday' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.birthday',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '10',
			)
		),
		'picture' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.picture',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size' => 500,
				'uploadfolder' => 'uploads/tx_advaddress',
				'show_thumbs' => 1,
				'size' => 3,
				'minitems' => 0,
				'maxitems' => 10,
			)
		),
		'note' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.note',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
		'employer' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.employer',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_advaddress_staff',
				'foreign_field' => 'personid',
				'foreign_sortby' => 'personsort',
				'foreign_label' => 'companyid',
				'maxitems' => 10,
			)
		),
		'addresses' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.addresses',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_advaddress_addresses',
				'foreign_field' => 'parentid',
				'foreign_table_field' => 'parenttable',
				'maxitems' => 10,
			)
		),
		'status' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.status',
		'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_advaddress_status',
				'foreign_field' => 'parentid',
				'foreign_table_field' => 'parenttable',
				'foreign_label' => 'status',
				'maxitems' => 10,
			)
		),

	),
	'types' => Array (
		'0' => Array('showitem' => 'hidden;;1;;1-1-1, type, firstname, middlename, lastname, title;;;;2-2-2, letter_title;;;;3-3-3, gender, birthday, picture, note, employer, addresses, status')
	),
	'palettes' => Array (
		'1' => Array('showitem' => '')
	)
);



$TCA['tx_advaddress_addresses'] = Array (
	'ctrl' => $TCA['tx_advaddress_addresses']['ctrl'],
	'interface' => Array (
		'showRecordFieldList' => 'hidden,title,street,zip,city,country,parentid,parenttable,contacts,is_main'
	),
	'feInterface' => $TCA['tx_advaddress_addresses']['feInterface'],
	'columns' => Array (
		'hidden' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => Array (
				'type' => 'check',
				'default' => '0'
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_addresses.title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'is_main' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_addresses.is_main',
			'config' => Array (
				'type' => 'check',
			)
		),
		'street' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_addresses.street',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '2',
			)
		),
		'zip' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_addresses.zip',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '10',
			)
		),
		'city' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_addresses.city',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'country' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_addresses.country',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'parentid' => Array (
			'config' => Array (
				'type' => 'passthrough',
			)
		),
		'parenttable' => Array (
			'config' => Array (
				'type' => 'passthrough',
			)
		),
		'contacts' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_addresses.contacts',
			'config' => Array (
				'type' => 'inline',
				'appearance' => Array(
					'useSortable' => 1,
				),
				'foreign_table' => 'tx_advaddress_contacts',
				'foreign_field' => 'parentid',
				'foreign_table_field' => 'parenttable',
				'foreign_label' => 'title',
				'maxitems' => 20,
			)
		),
	),
	'types' => Array (
		'0' => Array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2, is_main, street;;;;3-3-3, zip, city, country, parentid, parenttable, contacts')
	),
	'palettes' => Array (
		'1' => Array('showitem' => '')
	)
);



$TCA['tx_advaddress_contacts'] = Array (
	'ctrl' => $TCA['tx_advaddress_contacts']['ctrl'],
	'interface' => Array (
		'showRecordFieldList' => 'hidden,parentid,parenttable,title,value'
	),
	'feInterface' => $TCA['tx_advaddress_contacts']['feInterface'],
	'columns' => Array (
		'hidden' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => Array (
				'type' => 'check',
				'default' => '0'
			)
		),
		'parentid' => Array (
			'config' => Array (
				'type' => 'passthrough',
			)
		),
		'parenttable' => Array (
			'config' => Array (
				'type' => 'passthrough',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.0', '0'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.1', '1'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.2', '2'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.3', '3'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.4', '4'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.5', '5'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.6', '6'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.7', '7'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.8', '8'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.9', '9'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.10', '10'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.11', '11'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.12', '12'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.13', '13'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.14', '14'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.15', '15'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.16', '16'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.17', '17'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.18', '18'),
					Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.title.I.19', '19'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'value' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_contacts.value',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
	),
	'types' => Array (
		'0' => Array('showitem' => 'hidden;;1;;1-1-1, parentid, parenttable, title;;;;2-2-2, value;;;;3-3-3')
	),
	'palettes' => Array (
		'1' => Array('showitem' => '')
	)
);



$TCA['tx_advaddress_companies'] = Array (
	'ctrl' => $TCA['tx_advaddress_companies']['ctrl'],
	'interface' => Array (
		'showRecordFieldList' => 'hidden,name,description,note,addresses,employees'
	),
	'feInterface' => $TCA['tx_advaddress_companies']['feInterface'],
	'columns' => Array (
		'hidden' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => Array (
				'type' => 'check',
				'default' => '0'
			)
		),
		'name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_companies.name',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'description' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_companies.description',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
		'note' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_companies.note',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
		'addresses' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_companies.addresses',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_advaddress_addresses',
				'foreign_field' => 'parentid',
				'foreign_table_field' => 'parenttable',
				'maxitems' => 10,
			)
		),
		'employees' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_companies.employees',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_advaddress_staff',
				'foreign_field' => 'companyid',
				'foreign_sortby' => 'companysort',
				'foreign_label' => 'personid',
				'maxitems' => 100,
			)
		),
	),
	'types' => Array (
		'0' => Array('showitem' => 'hidden;;1;;1-1-1, name, description, note, addresses, employees')
	),
	'palettes' => Array (
		'1' => Array('showitem' => '')
	)
);



$TCA['tx_advaddress_staff'] = Array (
	'ctrl' => $TCA['tx_advaddress_staff']['ctrl'],
	'interface' => Array (
		'showRecordFieldList' => 'hidden,starttime,endtime,companyid,personid,companysort,personsort,jobtitle,department'
	),
	'feInterface' => $TCA['tx_advaddress_staff']['feInterface'],
	'columns' => Array (
		'hidden' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => Array (
				'type' => 'check',
				'default' => '0'
			)
		),
		'starttime' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => Array (
				'type' => 'input',
				'size' => '8',
				'max' => '20',
				'eval' => 'date',
				'default' => '0',
				'checkbox' => '0'
			)
		),
		'endtime' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => Array (
				'type' => 'input',
				'size' => '8',
				'max' => '20',
				'eval' => 'date',
				'checkbox' => '0',
				'default' => '0',
				'range' => Array (
					'upper' => mktime(0,0,0,12,31,2020),
					'lower' => mktime(0,0,0,date('m')-1,date('d'),date('Y'))
				)
			)
		),
		'companyid' => Array (
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_staff.companyid',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_advaddress_companies',
				'maxitems' => 1,
			)
		),
		'personid' => Array (
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_staff.personid',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_advaddress_persons',
				'maxitems' => 1,
			)
		),
		'companysort' => Array (
			'config' => Array (
				'type' => 'passthrough',
			)
		),
		'personsort' => Array (
			'config' => Array (
				'type' => 'passthrough',
			)
		),
		'jobtitle' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_staff.jobtitle',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'department' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_staff.department',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
			)
		),
	),
	'types' => Array (
		'0' => Array('showitem' => 'hidden;;1;;1-1-1, companyid, personid, companysort, personsort, jobtitle, department')
	),
	'palettes' => Array (
		'1' => Array('showitem' => 'starttime, endtime')
	)
);


$TCA['tx_advaddress_status'] = array (
    'ctrl' => $TCA['tx_advaddress_status']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'hidden,starttime,endtime,status,statustype,statusdate'
    ),
    'feInterface' => $TCA['tx_advaddress_status']['feInterface'],
    'columns' => array (
        'hidden' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config'  => array (
                'type'    => 'check',
                'default' => '0'
            )
        ),
        'starttime' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
            'config'  => array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'default'  => '0',
                'checkbox' => '0'
            )
        ),
        'endtime' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
            'config'  => array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0',
                'range'    => array (
                    'upper' => mktime(3, 14, 7, 1, 19, 2038),
                    'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
                )
            )
        ),
				'parentid' => Array (
						'config' => Array (
								'type' => 'passthrough',
						)
				),
				'parenttable' => Array (
						'config' => Array (
								'type' => 'passthrough',
						)
				),
        'status' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.status',
            'config' => array (
                'type' => 'select',
                'items' => array (
                    array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.status.I.0', '0'),
                    array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.status.I.1', '1'),
                    array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.status.I.2', '2'),
                    array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.status.I.3', '3'),
										array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.status.I.4', '4'),
										array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.status.I.5', '5'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
				'statustype' => Array (
						'exclude' => 1,
						'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.statustype',
						'config' => Array (
								'type' => 'select',
								'items' => Array (
										Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.statustype.I.0', '0'),
										Array('LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.statustype.I.1', '1'),
								),
								'size' => 1,
								'maxitems' => 1,
						)
				),
        'statusdate' => array (
            'exclude' => 0,
            'label' => 'LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_status.statusdate',
            'config' => array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'hidden;;1;;1-1-1, parentid, parenttable, status, statustype, statusdate')
    ),
    'palettes' => array (
        '1' => array('showitem' => 'starttime, endtime')
    )
);

?>