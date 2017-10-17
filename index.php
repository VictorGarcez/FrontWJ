<!DOCTYPE html>
<html>
    <head>
        <title>WBJump Front</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />

    </head>
    <body>
        <div class="container">
            <h1>WBJump Front</h1>
            <div class="row">
                <form id="form">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" class="form-control" id="nome" placeholder="Inserir nome">
                        <span class="input-group-btn">
                            <button class="btn btn-default" id="inserir" type="button">Inserir</button>
                        </span>
                    </div>
                </div>
                </form>
            </div>
            <ul id="names" class="col-md-12 edited-list" ></ul>
        </div>
        
       <script src="script.js"></script>
        
    </body>
</html>
