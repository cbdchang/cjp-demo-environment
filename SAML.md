# CJP demo with SAML

CJP demo with SAML IdP (SimpleSAMLphp) 

## Additions

* SimpleSAMLphp IdP at https://idp.local:8443/idp/
* TLS termination at Nginx proxy

## Subtractions

* Removed CJE "prod" at https://cjp.local/cje-prod/
* Removed CJE "test" at https://cjp.local/cje-prod/
* Removed docker-service
* Removed ssh-slave

## Prerequisites

1. Create host entry for idp.local

        sudo vi /etc/hosts

    then add (or append) this entry:

        127.0.0.1 idp.local

2. Use `certs/create-certs.sh` to create

* self-signed certificate (root CA), e.g. localhost-ca
* private key for cjp.local
* CSR for cjp.local
* certificate for cjp.local
* private key for idp.local
* CSR for idp.local
* certificate for idp.local
        
## How to run

Simply type the following command

    docker-compose up -d

## Post-Startup Checklist

### Get metadata from IdP

1. Access https://idp.local:8443/idp/ and go to Federation

2. Find metadata in XML and copy to clipbboard

### Connect CJOC to IdP

1. Activate CJOC at http://cjp.local/cjoc

2. In CJOC,

    go to *Manage Jenkins* > *Global Security Configuration*
    under *Security Realm* select *SAML 2.0*
    Fill in,

    * metadata XML
    * user attribute `name`
    * email attribute `email`
    * logout URL https://idp.local:8443/idp/module.php/core/authenticate.php?as=hashed-passwords&logout
   
3. Logout as Administrator

4. Reload https://cjp.local/cjoc/ and Login on IdP as 'admin:admin'

5. Verify that you've logged in as Administrator

### Notes

1. Copy simplesamlphp/config/authsources.php and create your own simplesamlphp/config/local-users.php

2. To create local-users.php use idp container to generate new password hashes, e.g.

    docker exec -it idp bash
    bin/pwgen.php  # and follow prompts

3. Default users,

    IdP admin ('secret' password)

    Hashed Passwords (authsources.php)
        admin ('admin' password)
        developer ('developer' password)
