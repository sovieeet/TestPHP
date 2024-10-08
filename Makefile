.PHONY: docker-build docker-down docker-down-all

docker-build: #levantar los contenedores (base de datos y app)
	docker-compose up --build
docker-down: #Detener contenedores sin eliminar datos
	docker-compose down
docker-down-all: #Detener contenedores y eliminar datos
	docker-compose down -v