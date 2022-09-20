up:
	docker-compose up
down:
	docker-compose down -v
php:
	docker exec -it limarka-render-app /bin/bash
build-docker:
	docker build -t reinanhs/limarka-render-html .
build-app:
	vendor/bin/jigsaw build