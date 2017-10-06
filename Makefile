composer-install:
	rm -Rf src/vendor/* && docker run \
        -e LOCAL_USER_ID=$$(id -u $(USER)) \
        --rm \
        -v $$(pwd)/src:/app \
        -v $$(pwd)/conf/composer:/root/.composer \
        phalconphp/composer:7 \
        composer -vvv install --ignore-platform-reqs
