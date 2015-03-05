<!DOCTYPE html>
<html>
    <head>
        <title>Enter New Car</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' type='text/css'>
    </head>
    <body>
        <div class="container">
        <form id="form_id" action="/add" method="post">
            <div class='form-group'>
            <label for="model">Enter Make and Model</label>
            <input type="text" name="model" id="model">
        </div>
        <div class='form-group'>
            <label for="price">Enter Price</label>
            <input type="number" name="price" id="price">
       </div>
       <div class='form-group'>
            <label for="miles">Enter Miles</label>
            <input type="number" name="miles" id="miles">
        </div>
        <div class='form-group'>
             <label for="image">Enter Image</label>
             <input type="text" name="image" id="image">
         </div>
            <button type="submit">Submit</button>

        </form>
        <form id="form_id" action="/delete" method="post">
            <button type="submit">Clear List</button>
        </form>


        {% for car in cars %}
        <h2>{{car.Make_model}}</h2>
        <img src=  "{{car.getImage}}" />
        <ul>
            <li>{{car.price}}</li>
            <li>{{car.miles}}</li>
        </ul>
        {% endfor %}

</div>
    </body>
</html>
