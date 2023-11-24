<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body style="text-align:center">
        Booking Form
    <br>    
    <div >
        <form action="" method="">
        <label for="">Name</label>
        <br>
        <input type="text" name="name">
        <br>
        <label for="">Pages</label>
        <br>
        <input type="text" name="pages">
        <br>
        <label for="">IBN</label>
        <br>
        <input type="text" name="IBN">
        <br>
        <label for="">Category</label>
        <br>
        <input type="text" name="category">
        <br>
        <label for="">Publisher</label>
        <br>
        <input type="text" name="publisher">
        <br>
        <label for="">Year of Publication</label>
        <br>
        <input type="text" name="yop">
        <br>
        <label for="">Users</label>
        <br>
        <input type="text" name="user_id">
        <br><br>
        <button type="submit">Submit</button>
        <br><br>
        <button type="reset">Reset</button>

        </form>
    </div>   
    </body>
</html>

