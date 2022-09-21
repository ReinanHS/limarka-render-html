up:
	docker-compose up
down:
	docker-compose down -v
bash:
	docker exec -it limarka-render-app /bin/bash
bash-test:
	docker exec -it limarka-render-test /bin/bash
build-docker:
	docker build -t reinanhs/limarka-render-html:0.0.1 .
build-app:
	vendor/bin/jigsaw build