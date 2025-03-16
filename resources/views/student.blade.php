<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f4f4f4;
        }

        .container {
            max-width: 600px;   
            margin: auto;
            background: white;
            padding: 20px;
        }       

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background: #007BFF;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Student List</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td><a href="{{route('deleteStudent', $student->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>