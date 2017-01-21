# Welcome To Factory

## First things

- Clone the repository
- Add your name to the contributors list (using GIT). *The name should match your slack name*
- Push the code using `git push origin dev`
- Pull all changes using `git pull`

## Setting up the framework

CD into the `factory` directory and run `composer install` if you don't have composer installed, install it using instructions available [here](https://getcomposer.org/download).

## Running your application

You can easily get up and running. Using PHP's in-built development server, from the `factory` directory, run

```shell
$ php -S localhost:8234 -t public
```

Now you open [http://localhost:8234](http://localhost:8234) in your browser to see your application.

### Your first hello world.
Open your `routes.php` file, and add a new route

```php
$router->get('/greetings', function () {
    return 'Hello world';
});
```

Visit [http://localhost:8234/greetings](http://localhost:8234/greetings). You're done.

<br/><br/>

<p align="center">
    <a href="https://neoighodaro.com" target="_blank">Creator</a> |
    <a href="https://github.com/neoighodaro/nimble/graphs/contributors" target="_blank">Contributors</a>
</p>

Then open [http://localhost:8234](http://localhost:8234) in your browser to see your application.

> make your push to the dev branch instead of master branch
