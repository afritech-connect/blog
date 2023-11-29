ssh:
	ssh afritech@165.227.234.167

sshr:
	ssh root@165.227.234.167

vendor: composer.lock
	composer install

composer.lock: composer.json
	composer update

node_module: package.json
	yarn

.PHONY=
prod: $(wildcard resources/js) $(wildcard resources/css)
	yarn build


