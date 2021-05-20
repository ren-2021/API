<html>
<title>API</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      <div id="main" class="container pt-5">
            <form style="background-color:#DCDCDC;width:30%;border-radius:3px" class="editForm p-4" method="post" enctype="multipart/form-data">
                <h4 class="mb-2">Update Data</h4>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Name: </span>
                        </div>
                        <input type="text" required name="name" id="name" value="<?php echo $_GET['image'];?>">
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Username: </span>
                        </div>
                        <input type="text" required name="username" id="username" value="<?php echo $_GET['pname'];?>">
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email: </span>
                        </div>
                        <input type="text" required name="email" id="emailvalue" value="<?php echo $_GET['price'];?>">
                    </div>
                    <br>
                    <a href="index.php" type="button" class="btn btn-secondary float-right mt-4">Close</a>
                    <button onclick="updateData()" class="btn btn-primary mt-4">Update</button>
            </form>
      </div>
      </body>
      </html>
      <script src="script.js"></script>