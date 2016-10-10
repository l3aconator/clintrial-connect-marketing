<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Volumes/l3acon Data/development/clintrial-connect-marketing/grav-admin/user/config/site.yaml',
    'modified' => 1476125230,
    'data' => [
        'title' => 'ClinTrialConnect',
        'author' => [
            'name' => 'ClinTrialApp, LLC',
            'email' => 'sales@clintrialapp.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Clinical trials can be complex. ClinTrialConnect helps educate patients about clinical trials and their disease. In addition, it provides background information about the pharmaceutical or medical device company, and detailed information about what to expect from a specific clinical trial.',
            'keywords' => 'clinical, trials, education, connection, connect, help, pharma, doctors, physicians, help, language, patients'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
