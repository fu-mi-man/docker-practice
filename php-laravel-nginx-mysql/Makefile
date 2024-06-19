DOCKER_COMPOSE = docker-compose

shapp:
	$(DOCKER_COMPOSE) exec app bash

shapi:
	$(DOCKER_COMPOSE) exec api bash

shweb:
	$(DOCKER_COMPOSE) exec web bash

shdb:
	$(DOCKER_COMPOSE) exec db bash

up:
	$(DOCKER_COMPOSE) up -d

upb:
	$(DOCKER_COMPOSE) up -d --build

down:
	$(DOCKER_COMPOSE) down

start:
	$(DOCKER_COMPOSE) start

stop:
	$(DOCKER_COMPOSE) stop

restart:
	$(DOCKER_COMPOSE) restart

logs:
	$(DOCKER_COMPOSE) logs -f

clean:
	$(DOCKER_COMPOSE) down -v --remove-orphans
