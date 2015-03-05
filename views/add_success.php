<html>
    <head>
        <title>Success</title>
    </head>
    <body>
        <h1>You have added this car!</h1>
        <ul>
            <img src=  "{{addedcar.getImage}}" />
            <li>{{addedcar.getMake_model}}</li>
            <li>{{addedcar.getPrice}}</li>
            <li>{{addedcar.getMiles}}</li>

        </ul>
        <p><a href='/'>View your list of things to do.</a></p>
    </body>
</html>
