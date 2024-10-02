# Makefile

# Variables
DOCKER_COMPOSE=docker compose
CONTAINER_ID=0cb2c26ccb00

# Start the Docker containers
start:
	$(DOCKER_COMPOSE) up -d

# Stop the Docker containers and remove all related resources (containers, networks, volumes, images)
stop:
	$(DOCKER_COMPOSE) down

# Open a bash shell inside a running container
shell:
	sudo docker exec -it $(CONTAINER_ID) /bin/bash
