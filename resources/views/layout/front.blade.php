<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
    <style type="text/css">

        body{
            background:rgba(0,0,0,0.7) url(images/mm.jpg);
            background-size: cover;
            background-blend-mode: darken;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
        }
        body h1, label,a{
            color: white;
        }    
        footer{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: #111;
            height: auto;
            width: 100vw;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #fff;
        }
        .footer-content{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .footer-content a{
            font-size: 2.1rem;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 3rem;
        }
        .button{
            margin-top:20px;
        }
        .container{
            margin-top:170px;
        }
        .username{
            margin-top:20px;
        }
        .password{
            margin-top:20px;
        }
        .DontAcc{
            margin-top:20px;
        }
        

    </style>
</head>
<body>

        @yield('content')

        <center>
                <footer>
                    <div class="footer-content" >
                        <a  style="font-size: 20px">@COPYRIGHT 2022 All Reserve | RESTO RESERVATION </a>
                    </div>
                </footer>
        </center>
    
</body>
</html>