.PHONY: php-8.1
php-8.1:
	@docker-compose run --rm php-8.1 composer install
	@docker-compose run --rm php-8.1 sh
