
    $app->get("/search", function() use ($app){
        return $app['twig']->render('form.php');

        });
    $app->get("/car", function() {
        $new_car1 = new Car("Ford 2014",300000,5000,"ford.jpg");
        $new_car2 = new Car("Chevy 2014",250000,5600,"chevy.jpg");
        $new_car3 = new Car("Porsche 2014",36034,60093,"ford.jpg");
        $array = array($new_car1,$new_car2,$new_car3);

        $cars_matching_search = array();


        foreach ($array as $car)
          {
              if($car->worthBuying($_GET['price'],$_GET['mileage'])){
                  array_push($cars_matching_search, $car);
              }
          }

        $output="";
        if(!empty($cars_matching_search)){
            foreach ($cars_matching_search as $car){

            $price=$car->getPrice();
            $miles=$car->getMiles();
            $model=$car->getMake_model();
            $output .= "<br/><br/><br/>Price is"."<br/>". $price. " <br/> Miles are"."<br/>". $miles." <br/> Model is". $model."<br/><br/><br/>";
        }
        }
        else{
                $output.= "Error please fill feilds that are empty";
            }

            return $output;


    });
