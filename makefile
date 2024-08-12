DB 		= DistroDB
USER 	= root
INIT 	= init.sql
ADDR 	= localhost
PORT 	= 8080

setup:
	@mysql -u $(USER) -p $(DB) < $(INIT)

run:
	@php -S $(ADDR):$(PORT)
