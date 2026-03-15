install:
	composer install

brain-games:
	 ./bin/brain-games

validate:
	composer validate

.PHONY: install brain-games validate
