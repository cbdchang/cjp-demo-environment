<?php

$config = array(

    'baseurlpath' => 'idp/',
    'certdir' => 'cert/',
    'loggingdir' => 'log/',
    'datadir' => 'data/',
    'tempdir' => '/tmp/simplesaml',
    'debug' => true,
    'showerrors' => true,
    'errorreporting' => true,
    'debug.validatexml' => false,
    'auth.adminpassword' => ((getenv('SIMPLESAMLPHP_ADMIN_PASSWORD') != '') ? getenv('SIMPLESAMLPHP_ADMIN_PASSWORD') : 'secret'),
    'admin.protectindexpage' => false,
    'admin.protectmetadata' => false,
    'secretsalt' => ((getenv('SIMPLESAMLPHP_SECRET_SALT') != '') ? getenv('SIMPLESAMLPHP_SECRET_SALT') : 'defaultsecretsalt'),
    'technicalcontact_name' => 'Administrator',
    'technicalcontact_email' => 'na@example.org',
    'timezone' => null,
    'logging.level' => SimpleSAML_Logger::DEBUG,
    'logging.handler' => 'errorlog',
    'logging.facility' => defined('LOG_LOCAL5') ? constant('LOG_LOCAL5') : LOG_USER,
    'logging.processname' => 'simplesamlphp',
    'logging.logfile' => 'simplesamlphp.log',

    'statistics.out' => array(// Log statistics to the normal log.
    ),

    'database.dsn' => 'mysql:host=localhost;dbname=saml',
    'database.username' => 'simplesamlphp',
    'database.password' => 'secret',
    'database.prefix' => '',
    'database.persistent' => false,
    'database.slaves' => array(
    ),

    'enable.saml20-idp' => true,
    'enable.shib13-idp' => false,
    'enable.adfs-idp' => false,
    'enable.wsfed-sp' => false,
    'enable.authmemcookie' => false,

    'module.enable' => array(
            'authcrypt' => TRUE,
    ),

    'session.duration' => 8 * (15 * 60), // 8 hours
    'session.datastore.timeout' => (4 * 60 * 60), // 4 hours
    'session.state.timeout' => (60 * 60), // 1 hour
    'session.cookie.name' => 'SimpleSAMLSessionIDIdp',
    'session.cookie.lifetime' => 0,
    'session.cookie.path' => '/',
    'session.cookie.domain' => null,
    'session.cookie.secure' => false,
    'enable.http_post' => false,
    'session.phpsession.cookiename' => 'PHPSESSIDIDP',
    'session.phpsession.savepath' => null,
    'session.phpsession.httponly' => true,
    'session.authtoken.cookiename' => 'SimpleSAMLAuthTokenIdp',
    'session.rememberme.enable' => false,
    'session.rememberme.checked' => false,
    'session.rememberme.lifetime' => (14 * 86400),

    'language.available' => array(
        'en', 'no', 'nn', 'se', 'da', 'de', 'sv', 'fi', 'es', 'fr', 'it', 'nl', 'lb', 'cs',
        'sl', 'lt', 'hr', 'hu', 'pl', 'pt', 'pt-br', 'tr', 'ja', 'zh', 'zh-tw', 'ru', 'et',
        'he', 'id', 'sr', 'lv', 'ro', 'eu'
    ),
    'language.rtl' => array('ar', 'dv', 'fa', 'ur', 'he'),
    'language.default' => 'en',
    'language.parameter.name' => 'language',
    'language.parameter.setcookie' => true,
    'language.cookie.name' => 'language',
    'language.cookie.domain' => null,
    'language.cookie.path' => '/',
    'language.cookie.lifetime' => (60 * 60 * 24 * 900),
    'attributes.extradictionary' => null,
    
    'theme.use' => 'default',
    'default-wsfed-idp' => 'urn:federation:pingfederate:localhost',
    'idpdisco.enableremember' => true,
    'idpdisco.rememberchecked' => true,
    'idpdisco.validate' => true,
    'idpdisco.extDiscoveryStorage' => null,
    'idpdisco.layout' => 'dropdown',

    'shib13.signresponse' => true,
    'authproc.idp' => array(
        30 => 'core:LanguageAdaptor',
        45 => array(
            'class'         => 'core:StatisticsWithAttribute',
            'attributename' => 'realm',
            'type'          => 'saml20-idp-SSO',
        ),
        50 => 'core:AttributeLimit',
        99 => 'core:LanguageAdaptor',
    ),
    'authproc.sp' => array(
        90 => 'core:LanguageAdaptor',
    ),
    'metadata.sources' => array(
        array('type' => 'flatfile'),
    ),
    'store.type'                    => 'phpsession',
    'store.sql.dsn'                 => 'sqlite:/path/to/sqlitedatabase.sq3',
    'store.sql.username' => null,
    'store.sql.password' => null,
    'store.sql.prefix' => 'SimpleSAMLphp',
    'memcache_store.servers' => array(
        array(
            array('hostname' => 'localhost'),
        ),
    ),
    'memcache_store.prefix' => null,
    'memcache_store.expires' => 36 * (60 * 60), // 36 hours.
    'metadata.sign.enable' => false,
    'metadata.sign.privatekey' => null,
    'metadata.sign.privatekey_pass' => null,
    'metadata.sign.certificate' => null,
    'proxy' => null,
    'trusted.url.domains' => array(),
);
