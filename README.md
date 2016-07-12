# Your web application

This is a skeleton of your web application wired up with the Piccolo Framework. It's called Piccolo because it's 
really, really small. Your code should, as per S.O.L.I.D., never depend on the framework directly, and that's what 
this does.

## Installing

The installation is simple. You can either `git clone` and then run `composer update` or simply create a new project:

```
composer create-project opsbears/piccolo-skel -s dev
```

## Using

To use it, simply configure the DIC to your liking in the `config/config.php` file and create your controllers and 
what not in `src/App/Web`. The web-independent parts, like your business logic, should obviously be outside the `Web`
folder, in case you need to build a CLI tool for it later.

You may notice that the existing sample code is under the `AcmeCorp` namespace, which you should change. You can do 
that by changing composer.json and the code itself, then running `composer dump-autoload`.

The dev server can be started from the command line in the `htdocs` folder using this command: `php -S 127.0.0.1:8000`.

Enjoy!