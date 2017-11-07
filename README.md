```bash
cd storage
openssl genrsa -out private.pem -aes256 4096
openssl rsa -pubout -in private.pem -out public.pem

php artisan jwt:secret
```

[Postman JSON Collection](https://www.getpostman.com/collections/265d0f8c610c85101f67)

[Schema Database](https://www.dropbox.com/sh/cae00nam0mq7kry/AABXO2OwIbbgQuXMMZ6kwJAaa?dl=0)
