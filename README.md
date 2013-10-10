zf2-tutorial-to-go
==================

Ready to run version of the ZF2 tutorial


Installation
------------

From the command line:

    $ git clone git@github.com:akrabat/zf2-tutorial-to-go.git
    $ cd zf2-tutorial-to-go
    $ php composer.phar self-update
    $ php composer.phar install


Run
---

From the command line in the ``zf2-tutorial-to-go`` directory:

    $ php -S 0.0.0.0:8080 -t public

Now open http://localhost:8080 in your browser



(Note: This should be obvious, but don't use the built in PHP
webserver in production!)
