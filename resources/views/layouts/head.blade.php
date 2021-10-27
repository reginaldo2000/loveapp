<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($pageTitle) ? $pageTitle : 'Login - LoveAPP' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>
        header.loveapp {
            position: fixed;
            top: 0;
            z-index: 10;
            width: 100%;
            padding: 15px;
            background: #6959CD;
        }

        header.loveapp>div#content-button-menu {
            float: left;
            font-size: 24px;
            color: #fff;
            cursor: pointer;
        }

        header.loveapp>span.loveapp-title {
            color: #fff;
            font-size: 24px;
        }

        .love-container {
            margin-top: 100px;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 15px;
            background: #222;
        }

        footer>p {
            color: #fff;
            text-align: center;
            line-height: 0.6;
        }

        section.main-content {
            margin-top: 80px;
            padding: 20px;
            border: 1px solid #483D8B;
            border-radius: 4px;
            box-shadow: 1px 1px 2px 1px #6959CD;
        }

        h3.content-title {
            padding-bottom: 15px;
            border-bottom: 2px solid #483D8B;
        }

        ul.loveapp-navbar {
            width: 100%;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul.loveapp-navbar>li>a {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            color: #483D8B;
        }

        ul.loveapp-navbar>li:hover, ul.loveapp-navbar>li>a:hover {
            background: #483D8B;
            color: #fff;
        }

        @media(min-width: 992px) {
            .love-container {
                margin-top: 150px;
            }
        }


        /*sobrescrita de css*/

        .offcanvas-body {
            padding: 0 !important;
        }

    </style>
</head>
