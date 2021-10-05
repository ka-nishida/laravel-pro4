up:
	docker-compose up -d --build
down:
	docker-compose down
ps:
	docker-compose ps
app4:
	docker-compose exec app bash
sql4:
	docker-compose exec sql bash
web4:
	docker-compose exec web bash
migration:
	php artisan migrate