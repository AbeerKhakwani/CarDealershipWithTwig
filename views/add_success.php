<html>
    <head>
        <title>Successfully added</title>
    </head>
    <body>
        <h1>You have added this car!</h1>
        <ul>
            <img src= "{{addedcar.getImage}}" />
            <li>{{addedcar.getMake_model}}</li>
            <li>{{addedcar.getPrice}}</li>
            <li>{{addedcar.getMiles}}</li>

        </ul>
        <a href='/'>Go back home. View all cars.</a>
    </body>
</html>
