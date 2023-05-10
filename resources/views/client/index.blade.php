@extends('layouts.client.dashboard')

@section('content')

 <!DOCTYPE html>
<html>
<head>
    <br> <br>
    <title>ID Number Search</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 3px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #4CAF50;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>I.D Number</h1>
        <form method="post" action="search.php">
            <input type="text" name="id_number" placeholder="Enter Your Tracking Number">
            <input type="submit" value="Track">
        </form>
    </div>
</body>
</html>

@endsection
