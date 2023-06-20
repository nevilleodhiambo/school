<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            outline: none;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            display: flex;
            align-items:center;
            justify-content:center;
            min-height: 100vh;
            background: linear-gradient(-135deg, #c850c0, #4158d0);

        }
        .wrapper{
            width: 450px;
            background: #fff;
            padding: 30px;
            box-shadow: 0px 6px 6px 12px rgba(0,0,0,0.5);
        }
        .wrapper .input-data{
            height: 40px;
            width:100%;
            margin: 10px 0px 18px 0px;
            position: relative;
            border: 1px solid silver;
            border-radius: 4px;
        }
        .wrapper .input-data input{
            height: 100%;
            width: 100%;
            border: none;
            border-radius: 10px;
            font-size: 17px;
        }
        .wrapper .input-data label{
            position : absolute;
            top: 10px;
        }
        .wrapper h1{
            color: lightgray;
            text-align:center;
        }
        .wrapper .btn{
                margin-left:50%;
                background: #27a327;
                height: 30px;
                width: 130px;
                border:none;
                border-radius:4px;
                color:white;
                cursor:pointer;
                transform: translate(-50%);
        }
        .wrapper .btn:hover{
            opacity:0.8;
        }
    </style>
</head>
<body>
    <!-- <h1>This is a Creating Page</h1> -->
    <div class="wrapper">
    <form method = "post" action="{{route('student.store')}}">
        <h1>Create Data</h1>
        @csrf 
        @method('post')
            <label>Admission Number</label><br>
            <input class="input-data" type="text" name = "adm" placeholder = "Admission Number" required><br>
            <label >First Name</label><br>
            <input class="input-data" type="text" name = "fname" placeholder = "First Name" required><br>
            <label >Last Name</label><br>
            <input class="input-data" type="text" name = "lname" placeholder = "Last Name" required><br>
            <label >course</label><br>
            <input class="input-data" type="text" name = "course" placeholder = "Course" required><br>
            <label >Faculty</label><br>
            <input class="input-data" type="text" name = "faculty" placeholder = "Faculty" required><br>
            <label >Fees</label><br>
            <input class="input-data" type="number" name = "fees" placeholder = "Fees" required><br>  
            <input type="Submit" class="btn" value = "Save a Student">
    
        </form>
    </div>
    
</body>
</html>