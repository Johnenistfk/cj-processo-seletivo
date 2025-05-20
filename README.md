## Processo Seletivo Contajá

## Por onde começar?

```
git clone git@github.com:ContajaContabilidade/cj-processo-seletivo.git
cd cj-processo-seletivo
cp .env.example .env  
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
sail up -d
sail composer install
sail artisan migrate:fresh --seed

```