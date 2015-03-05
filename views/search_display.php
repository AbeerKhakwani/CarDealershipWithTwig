<html>
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' type='text/css'>
        <title>Search for a car</title>
    </head>
    <body>
        <div class='container'>
            {% if cars_matching is empty %}
            <p>Sorry, there are no cars matching your search.</p>
            {% endif %}
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
        </div>
    </body>
</html>
