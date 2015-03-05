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

    $app->post("/delete", function() use ($app){

            return $app['twig']->render('/delete.php', array('delete'=>Car::deleteAll()));

    });

    $app->get("/search", function() use ($app){



        return $app['twig']->render('search.php');

        });

    $app->get("/search_display", function() use($app){
        $cars_matching_search = array();
        $all_cars=Car::getAll();

        $maxCar=array($_GET['max_price'], $_GET['max_mile']);

    if (empty($_GET['max_price']) || empty($_GET['max_mile'])){

        return $app['twig']->render('error.php');
    }
    else {

        foreach($all_cars as $car)
        {
            if($car->worthBuying($_GET['max_price'], $_GET['max_mile']))
            {
             array_push($cars_matching_search, $car);
            }
        }



    }

        return $app['twig']->render('search_display.php', array('cars_matching'=>$cars_matching_search ));

    });



  return $app;

?>
