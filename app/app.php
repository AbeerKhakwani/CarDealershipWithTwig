<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/car.php";
    session_start();
    if (empty($_SESSION['add_cars'])) {
        $_SESSION['add_cars'] = array();
    }

    $app = new Silex\Application();

    $app->register (new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=> __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app){

        return $app['twig']->render('/add_form.php', array('cars'=>Car::getAll()));

    });


    $app->post("/add", function() use ($app){

        $newCar = new Car($_POST['model'], $_POST['price'], $_POST['miles'],$_POST['image']);
        $newCar->save();
        return $app['twig']->render('add_success.php',array('addedcar'=> $newCar));

    });

  return $app;

?>
