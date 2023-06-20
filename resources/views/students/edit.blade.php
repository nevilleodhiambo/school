<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        body{
            min-height: 100vh;
            background: #eee;
            display:flex;
            font-family: sans-serif;
        }
    .container{
            margin:auto;
            width: 450px;
            max-width:90%;
        }
        .container form{
            width: 100%;
            height:100%;
            padding: 20px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);

        }
        .container form h1{
            text-align:center;
            margin-bottom: 20px;
            color: #222;
        }
        .container form .form-control{
            width: 100%;
            height:40px;
            background-color: white;
            border-radius: 4px;
            border: 1px solid silver;
            margin: 10px 0 18px 0;
            padding: 0 10px;
        }
        .container form .btn{
            margin-left: 50%;
            transform: translate(-50%);
            width:120px;
            height:34px;
            border:none;
            outline:none;
            background:#27a327;
            cursor:pointer;
            font-size: 16px;
            text-transform: uppercase;
            color: white;
            border-radius: 4px;
            transition: .3s;
        }
        .container form .btn:hover{
                opacity: .7;
        }
    </style>
  
</head>
<body>    
    <div class="container">
    <form method = "post" action="{{route('student.update', ['student' => $student])}}">
        <h1>Editing Page</h1>
    @csrf 
    @method('put')
    <div class="form-group">
    <label>Admission Number</label><br>
        <input class="form-control" type="text" name = "adm" placeholder = "Admission Number" value = "{{$student->adm}}"><br>
    </div>
       <div class="form-group">
       <label >First Name</label><br>
        <input class="form-control" type="text" name = "fname" placeholder = "First Name" value = "{{$student->fname}}"><br>
       </div>
        <div class="form-group">
        <label >Last Name</label><br>
        <input class="form-control" type="text" name = "lname" placeholder = "Last Name" value = "{{$student->lname}}"><br>
        </div>
        <div class="form-group">
        <label >course</label><br>
        <input class="form-control" type="text" name = "course" placeholder = "Course"value = "{{$student->course}}"><br>
        </div>
      
      <div class="form-group">
      <label >Faculty</label><br>
        <input class="form-control" type="text" name = "faculty" placeholder = "Faculty" value = "{{$student->faculty}}"><br>
        
      </div> 
      <div class="form-group">
      <label >Fees</label><br>
        <input class="form-control" type="number" name = "fees" placeholder = "Fees" value = "{{$student->fees}}"><br>
        
      </div>
        <input type="Submit" class="btn" value = "Update">

    </form>
    </div>
    
</body>
</html>