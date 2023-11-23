# 初回実行
build:
	docker-compose build
	docker-compose up -d
	docker exec selenium-php-1 composer install
# テスト実行
test:
	docker exec selenium-php-1 ./vendor/bin/phpunit
# phpコンテナに入る
bash:
	docker exec -it selenium-php-1 /bin/bash
