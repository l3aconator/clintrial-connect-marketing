<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Volumes/l3acon Data/development/clintrial-connect-marketing/grav-admin/user/config/plugins/email.yaml',
    'modified' => 1476125563,
    'data' => [
        'enabled' => true,
        'from' => 'sales@clintrialapp.com',
        'from_name' => 'ClinTrialConnect',
        'to' => 'sales@clintrialapp.com',
        'to_name' => 'ClinTrialConnect',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
