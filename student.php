<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        *{
            font-family:sans-serif;
        }

         h1{
            color:white;
         }   

        input{
            width: 100%;
            box-sizing:border-box;
            margin:6px 0px;
            padding:5px;
        }

        button{
            width: 100%;
            box-sizing:border-box;
            margin:6px 0px;
            padding:5px;
        }

        form{
            color:white;
            width: 25%;
            background:black;
            padding: 40px 30px;
            position: relative;
            top:70%;
            left:50%;
            transform:translate(-50%,3%);
            border-radius:10px;
        }
        .gender{
            width:8%;
        }
        label{
            color:white;
        }
        input[type=submit] {
            background: blue;
            border-color: blue;
            font-size:18px;
            color:white;
            font-weight: bold;
            cursor:pointer;
        }
    </style>
    <title>student | form</title>
</head>
<body>
    <form action="insertstu.php" method="post">
        <h1>add student</h1>
        <label for="id">id</label>
        <input type="text" name="id" placeholder="your id">
        <label for="name">student names</label>
        <input type="text" name="name" placeholder="student names">
        <label for="age">age</label>
        <input type="text" name="age" placeholder="age">
        male<input class="gender" type="radio" value="male" name="gender">female <input class="gender" type="radio" value="female" name="gender">
        <input type="submit" value="insert student"></button>
    </form>
</body>
</html>