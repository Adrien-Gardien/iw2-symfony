# Makefile

DOCKER_COMPOSE=docker compose
CONTAINER_NAME=php
CONTAINER_ID_FILE=.container_id

start:
	$(DOCKER_COMPOSE) up -d
	docker ps -q -f name=$(CONTAINER_NAME) > $(CONTAINER_ID_FILE)

stop:
	$(DOCKER_COMPOSE) down
	rm -f $(CONTAINER_ID_FILE)

shell:
	@if [ ! -s $(CONTAINER_ID_FILE) ]; then \
		exit 1; \
	fi
	sudo docker exec -it $$(cat $(CONTAINER_ID_FILE)) /bin/bash

apache-stop:
	sudo systemctl stop apache2.service
