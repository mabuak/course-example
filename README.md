```bash
cd storage
openssl genrsa -out private.pem -aes256 4096
openssl rsa -pubout -in private.pem -out public.pem

php artisan jwt:secret
```