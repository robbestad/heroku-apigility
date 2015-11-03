# Apigility ZF2 for Heroku

Apigility skeleton application for Heroku.

![Apigility](http://quiet-garden-8853.herokuapp.com/zf-apigility-welcome/img/ag-hero.png)

## Examples

Example base deploy: [Apigility Heroku](http://quiet-garden-8853.herokuapp.com/apigility/welcome)

Example real world use: <a href="https://uvapi.herokuapp.com">UV API</a> running on Heroku

    curl -i -H "Accept: application/json" -H "Content-Type: application/json" "http://uvapi.herokuapp.com/forecast/longitude=10,77&latitude=59,94"

### Requirements

* Heroku account

### Installation

> $ heroku create

> $ git push heroku master

> $ heroku open

### For using with latest version of Apigility

> $ git clone https://github.com/zfcampus/zf-apigility-skeleton.git 

> $ cd zf-apigility-skeleton

> $ heroku create

> $ heroku config:set BUILDPACK_URL=https://github.com/svenanders/heroku-apigility.git

> $ heroku config:set WWWROOT=/public

> $ echo "web: vendor/bin/heroku-php-apache2 public/" >> Procfile

> $ composer install

> $ git commit -am"Initial commit"

> $ git push heroku master

> $ heroku open
