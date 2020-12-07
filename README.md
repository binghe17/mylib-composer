# mylib-composer


composer require binghe17/mylib-composer

-----------
ERROR
~~~
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - Root composer.json requires ...
~~~


1. make composer.json file
~~~
{
    "minimum-stability": "dev",
    "prefer-stable": true,
    "require":{
        "binghe17/mylib-composer": "*"
    }
}
~~~
2. cmd> composer i



-------------
other https://www.phpclasses.org/browse/
~~~
{
    "require":{
        "phpclasses/php-database-class": ">=4.1.3",
        "slim/slim": "^3.12",
        "faapz/pdo": "^2.1"
    },
    "repositories": [
        {
            "type": "composer",
            "url": "https:\/\/www.phpclasses.org\/"
        }
    ]
}
~~~

