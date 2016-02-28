# Laravel PHP Framework (v5.2)

It is a try of using Laravel Redis.

Following this tutorial- 

    https://scaleyourcode.com/blog/article/10

1. Using pradis 

    https://packagist.org/packages/predis/predis

2. Using phpredis

    https://github.com/vetruvet/laravel-phpredis

    Using this tutorial-
        https://www.youtube.com/watch?v=UEpyWEbsrkw&list=PLXM5y5j_b0mMdVF5p_2ug_b5tWqah_tfJ#t=104.528849


    Commands-

```bash
    sudo apt-get update
    sudo apt-get -y install php5-dev
    wget https://github.com/phpredis/phpredis/archive/master.zip
    sudo apt-get install unzip
    unzip master.zip
    sudo rm master.zip
    sudo mv phpredis-master/ /etc
    cd /etc/phpredis-master/
    phpize
    ./configure
    sudo make && make install
        ##Ignore errrs(1)
        #### Now coppy the radis.so files location from the install messages like -
        ######### /etc/phpredis-master/modules/redis.so
    sudo nano /etc/php5/fpm/conf.d/redis.ini
        ## Now Add the directory in there and save the file-
        #### Like this-> extension=/etc/phpredis-master/modules/redis.so
        ### Save with (ctrl+O) and exit with (ctrl+X)
    sudo service php5-fpm restart
    sudo service nginx restart
    ######### Now PHP and phpredis should communicate withh each other

    composer require "vetruvet/laravel-phpredis:1.*"
    # And Then Add the service provider, register that and use that :)
```