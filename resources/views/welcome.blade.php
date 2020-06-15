<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f3f3f6;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .container {
                display: flex;
                align-items: center;
                flex-direction: column;
            }

            .table {
                width: 60%;
                background: #fff;
                display: grid;
                padding: 20px 40px 20px 40px;
                margin: 10px 0 30px 0;
                border-radius: 10px;
                row-gap: 20px;
            }

            .row {
                display: grid;
                grid-template-columns: 100px 1fr 100px;
                column-gap: 30px;
            }

            .row:not(:last-child) {
                padding-bottom: 20px;
                border-bottom: 1px solid #f0f0f0;
            }

            .row.titles {
                font-weight: bold;
            }

            .pagination {
                width: 66% !important;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(40px, max-content));
                list-style-type: none;
                padding-inline-start: 0;
                padding-top: 30px;
                column-gap: 10px;
            }

            .pagination li {
                background: #fff;
                text-align: center;
                border-radius: 5px;
            }

            .pagination li a {
                text-decoration: none;
                color: #33a5e0;
                display: block;
                padding: 5px;
                border-radius: 5px;
            }

            .pagination li.active a {
                background: #33a5e0;
                color: #fff;
            }

            .pagination li a:hover {
                background: #33a5e0;
                color: #fff;
                transition: all 0.2s ease-in-out;
            }
        </style>
    </head>
    <body>
        <div class="container">
            {{ $products->links("pagination") }}

            <div class="table">
                <div class="row titles">
                    <span>id</span>
                    <span>Наименование</span>
                    <span>Код</span>
                </div>

                @foreach ($products as $product)
                    <div class="row">
                        <span>{{ $product->id }}</span>
                        <span>{{ $product->name }}</span>
                        <span>{{ $product->code }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
