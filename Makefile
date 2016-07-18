submodule:
	@git submodule init
	@git submodule update

frontend: submodule
	$(MAKE) -C frontend

build: frontend submodule
all: build
