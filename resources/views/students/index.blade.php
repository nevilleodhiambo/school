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
            font-family: arial;
            box-sizing: border-box;

        }
        body{
            background:white;
            height: 50vh;
            display: grid;
            place-items: center;
            
        }
        table{
            width: 600px;
            box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.4);
        }
        table,td, th{
             padding: 20px;
             border: 1px solid lightgray;
             border-collapse: collapse;
             text-align:center;
        }
        th{
            background-color: #454545;
            color: white;
        }
        h1{
            color:blue;
        }
        td{
            font-size: 18px;
        }
        tr:nth-child(odd){
            background-color: lightblue;
        }
        .del{
            background-color: rgba(255, 50, 40);
            color:white;
            padding: auto;
            border: 1px solid;
            border-radius: 4px;
            height: 40px;
            width: 80px;
            cursor:pointer;
        }
        .ed{
            text-decoration:none;
            border:none;
            border-radius: 4px;
            background: rgb(13, 223, 13);
            height: 50px;
            width: 200px;  
            color: white;         
            
        }
        .btn{
            text-align: center;
            position: right;
            border: none;
            border-radius: 4px;
            background: rgb(13, 223, 13);
            color:white;
            text-decoration: none;
            height: 30px;
            width: 120px;
            padding-top: 5px;
            margin-left:780px;
            
        }
    </style>
</head>
<body>
    <h1>This is students Index page</h1>
    <div>This is students Index page</div>
    <a href="{{route('student.create')}}" class = "btn">Add a Student</a>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>ADMISSION</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>COURSE</th>
                <th>FACULTY</th>
                <th>FEES</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->adm}}</td>
                <td>{{$student->fname}}</td>
                <td>{{$student->lname}}</td>
                <td>{{$student->course}}</td>
                <td>{{$student->faculty}}</td>
                <td>{{$student->fees}}</td>
                <td>
                    <a class="ed" href="{{route('student.edit', ['student' => $student])}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('student.destroy', ['student' => $student])}}" method = "post">
                        @csrf
                        @method('delete')
                        <input class="del" type="Submit" value= "Delete">
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</body>
</html>