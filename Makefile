submodule:
	@git submodule init
	@git submodule update

web:
	$(MAKE) -C frontend
	@cp -R frontend/dist/* ./web/

all: web

.PHONY: web all
