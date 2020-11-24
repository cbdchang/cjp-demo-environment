<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'hashed-passwords' => array(
        'authcrypt:Hash',
        'admin:{SSHA256}i+HWOXoTqqBUHWAZE7SAP2gktqQQYWLYX5jRNfB7ayzhTl620gxDdQ==' => array(
            'uid' => array('1'),
            'displayName' => 'Administrator',
            'name' => 'admin',
            'eduPersonAffiliation' => array('administrator'),
            'email' => 'noreply@cloudbees.com',
        ),
        'developer:{SSHA256}FOz2LyfO1k5dOFMRKHLx7iW6M5ygv+sYpl2/7jMCI8aonhLIDLNJxw==' => array(
            'uid' => array('2'),
            'displayName' => 'Developer',
            'name' => 'developer',
            'eduPersonAffiliation' => array('developer'),
            'email' => 'noreply@cloudbees.com',
        ),
    ),
);
