<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
    <script src="script.js"></script>
</head>
  <body>
      <div class="container pt-5">
            <form style="background-color:#DCDCDC;width:30%;border-radius:3px" class="p-4" method="post" action="" enctype="multipart/form-data">
                <h4 class="mb-2">Add Data</h4>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Name: </span>
                        </div>
                        <input type="text" required name="name" id="name">
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Username: </span>
                        </div>
                        <input type="text" required name="username" id="username">
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email: </span>
                        </div>
                        <input type="text" required name="email" id="email">
                    </div>
                    <a href="index.php" type="button" class="btn btn-secondary float-right mt-4">Close</a>
                    <a onclick="createData();location.reload()" class="btn btn-primary mt-4">Add</a>
            </form>
      </div>
</body>
</html>