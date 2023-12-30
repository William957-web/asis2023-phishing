FROM dockerfiles/centos-lamp 

COPY index.php /var/www/html/index.php

RUN echo 'ICED{RRR4HHHCE_1s_c00l!}' > /flag-$(xxd -l 6 -p /dev/urandom)
