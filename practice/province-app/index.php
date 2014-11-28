<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Province App - Informatorio 2014</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <div class="searchbox">
                <form class="form-inline" role="form">
                    <div class="form-group">
                      <div class="input-group">
                        <input class="form-control" type="text" name="inputsearch" placeholder="Search..." id="inputsearch">
                      </div>
                    </div>
                    <input type="button" class="btn btn-default" id="searchbuton" value="Search">
                  </form>
            </div>  
            <div class="content">
                <div class="provinces">
                    <h3>PROVINCES</h3>
                    <ul class="list-group"></ul>
                </div>
                <div class="cities">
                    <h3>CITIES</h3>
                    <ul class="list-group"></ul>
                </div>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>