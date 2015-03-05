<html>
    <head>
        <title>Search for a car</title>
    </head>
    <body>

        {% for car in cars_matching %}
        <h2>{{car.Make_model}}</h2>
        <img src=  "{{car.getImage}}" />
        <ul>
            <li>{{car.getPrice}}</li>
            <li>{{car.getMiles}}</li>
        </ul>
        {% endfor %}
        <a href='/search'>Search for another car</a> <br/>
        <a href="/">Return Home</a>

    </body>
</html>
