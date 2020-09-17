#!/bin/bash

# create localhost CA cert/key pair
openssl req -x509 -newkey rsa:4096 -nodes -keyout localhost-ca.key -out localhost-ca.crt -days 365 -subj '/CN=localhost-ca'

# create cjp.local private key
openssl genrsa -out cjp.local.key 2048

# create cjp.local csr
openssl req -new -sha256 -key cjp.local.key -subj "/CN=cjp.local" -out cjp.local.csr

# create cjp.local certificate
openssl x509 -req -extfile <(printf "subjectAltName=DNS:cjp.local,IP:127.0.0.1") -days 365 -in cjp.local.csr -CA localhost-ca.crt -CAkey localhost-ca.key -CAcreateserial -out cjp.local.crt
