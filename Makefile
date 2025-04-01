.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t kata-entregable .

build-container:
	docker run -dt --name kata-entregable -v .:/540/KataEntregable kata-entregable
	docker exec kata-entregable composer install

start:
	docker start kata-entregable

test: start
	docker exec kata-entregable ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it kata-entregable /bin/bash

stop:
	docker stop kata-entregable

clean: stop
	docker rm kata-entregable
	rm -rf vendor
