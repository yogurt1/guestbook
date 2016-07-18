.PHONY: frontend

frontend:
	$(MAKE) -C frontend ${ARGS}

serve:
	$(MAKE) -C frontend serve ${ARGS}

build: frontend
all: frontend
