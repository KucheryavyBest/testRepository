<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: left;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
			ul {list-style-type: none;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
            </div>
        </div>
		
  	    <div id="app"></div>

		<script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
