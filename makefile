DOCKER_COMPOSE=docker compose
CONTAINER_NAME=symfony-docker-php-1
CONTAINER_ID_FILE=.container_id

start:
	$(DOCKER_COMPOSE) up -d
	docker ps -q -f name=$(CONTAINER_NAME) > $(CONTAINER_ID_FILE)

stop:
	$(DOCKER_COMPOSE) down
	rm -f $(CONTAINER_ID_FILE)

shell:
	sudo docker exec -it $(CONTAINER_NAME) /bin/bash

apache-stop:
	sudo systemctl stop apache2.service
