<html>
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' type='text/css'>
        <title>Successfully added</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>You have added this car!</h1>
            <ul>
                <img src= "{{addedcar.getImage}}" />
                <li>{{addedcar.getMake_model}}</li>
                <li>{{addedcar.getPrice}}</li>
                <li>{{addedcar.getMiles}}</li>

            </ul>
            <a href='/'>Go back home. View all cars.</a>
        </div>
    </body>
</html>
