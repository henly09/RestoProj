<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<style type="css/text">
    
        .flex-container {
            display: inline-flex;
            font-size: 10px;
        }
       
        div.card {
            flex-direction: column;
        }
        div.font, h1, a{
            color: white;
        }
        .flex-container > div {
            background-color: grey;
            margin: 10px;
            padding: 20px;
            font-size: 12px;
            border-radius: 5px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
        }
        body{
            background:rgba(0,0,0,0.7) url(images/mm.jpg);
            background-size: cover;
            background-blend-mode: darken;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
        }
        table, th, td {
            border: 1px solid black;
            text-align:center;
            padding:5px;
            font-size:15px;
            font-family: 'Arial';
            color: white;
            position: center;
        }
        div.font, h1, a, label{
            color: white;
        }
    </style>
</head>
<body>



                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <a href="{{ route('dashboard')}}">DASHBOARD ||</a>
                    <a href="{{ route('reservations')}}">RESERVATIONS ||</a>
                    <a href="{{ route('createreservations')}}">CREATE RESERVATIONS ||</a>
                    <a href="{{ route('registercustomer')}}">REGISTER CUSTOMER ||</a>
                    <a href="{{ route('customerlist')}}">CUSTOMER LIST ||</a>
                    <a href="{{ route('reservationhistory')}}">RESERVATION HISTORY ||</a>
                    <a href="{{ route('menu')}}">MENU ||</a>
                    <a class="" href="{{ route('logoutmain')}}">LOGOUT ||</a> <!-- revised mugana-->
                  
                    <button style="margin-left: 400px;" href="{{ route('logoutmain')}}">LOGOUT</button> <!-- revised di mugana-->

                    </ol>
                </nav>



@yield('content')
</body>
</html>