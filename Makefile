composer-install:
	rm -Rf src/vendor/* && docker run -e LOCAL_USER_ID=$$(id -u $(USER)) --rm -v $$(pwd)/src:/app ngtrieuvi92/composer composer -vvv install --ignore-platform-reqs
