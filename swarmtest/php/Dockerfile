FROM php:7.3-fpm
WORKDIR /app/
COPY ./index.php /app/index.php

ENTRYPOINT ["php"]
CMD ["-S", "0.0.0.0:8085", "index.php"]