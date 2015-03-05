<html>
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' type='text/css'>
        <title>Search for a car</title>
    </head>
    <body>
        <div class='container'>
            <h2>Enter your search:</h2>
            <form action="/search_display" method="get">
                <label for="max_mile">Enter Max Miles</label>
                <input type="number" name="max_mile" id="max_mile">

                <label for="max_price">Enter Max Price</label>
                <input type="number" name="max_price" id="max_price">
                <button type="submit">Search</button>
            </form>
        </div>
    </body>
</html>
