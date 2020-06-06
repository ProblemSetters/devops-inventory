override IMAGE_NAME:=problemsetters/$(shell git rev-parse --abbrev-ref HEAD)

build:
	docker build -t $(IMAGE_NAME) .

push:
	docker login
	docker push $(IMAGE_NAME)
