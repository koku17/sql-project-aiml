DB 		= DistroDB
USER 	= root
INIT 	= init.sql
ADDR 	= localhost
PORT 	= 8080
FILE	= index

setup:
	@mysql -u $(USER) -p $(DB) < $(INIT)

run:
	@sudo systemctl start mysqld
	@php -S $(ADDR):$(PORT)
