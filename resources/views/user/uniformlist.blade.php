<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        a:link { color: red; text-decoration: none;}
        a:visited { color: black; text-decoration: none;}
        a:hover { color: black;text-decoration: none; }
    </style>

</head>
<body>
@include('layouts.navigation')

<br/>
    <h1 style="text-align:center; margin-top:4%; margin-bottom:2%;">Uniform List</h1>
    <div class="set" style="text-align:center;">
    @foreach ($product as $item)
    <div class="card uniform" style="width: 18rem;">
        <a href="/uniformlist/{{$item -> product_number}}">
            <img class="card-img-top" style="width:300px; height:300px;" src='img\{{$item -> product_image}}' class="rounded float-start" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$item -> product_name}}</h5>
            </div>
        </a>
            <ul class="list-group list-group-flush">
                <li class="list-group-item price">{{$item -> product_price}}円</li>
            </ul>
        </div>
    @endforeach
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

<style>
    .price{
        font-size: 16px;
        font-weight:bold;
        font-family: Tahoma,sans-serif;
        color: #ae0000;
        line-height: 40px;
    }

    .uniform{
        width:30%;
        margin:3%;
        display:inline-block;
    }
</style>
</html>