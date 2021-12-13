<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Method Testing</title>
    <style>
        .whitespace{
            padding: 30px 0px;
        }
        .container{
            width: 80%;
            margin: auto;
        }
        .form-group{
            padding: 20px 0px;
        }
        .form-group label{
            height: 30px;
            line-height: 30px;
            width: 30%;
            display: inline-block;
        }
        .form-group input{
            height: 30px;
            line-height: 30px;
            display: inline-block;
            width: 65%;
            background: rgb(235, 231, 231);
            border: none;
            border-radius: 15px;
            padding-left: 40px;
        }
        .form-control{
            align-self: center;
        }
    </style>
</head>
<body>
    <div class="whitespace"></div>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="age">Age: </label>
                <input type="text" name="age" id="age">
            </div>
            <div class="form-control">
                <button class="btn btn-submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>