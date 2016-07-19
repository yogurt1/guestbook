submodule:
	@git submodule init
	@git submodule update

frontend: submodule
	$(MAKE) -C frontend
	@cp -R frontend/dist/* ./web/

build: frontend submodule
all: frontend
