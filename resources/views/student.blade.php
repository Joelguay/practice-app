<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>

    <div style="width: 100%">
        <div style="justify-content: center; display: flex">
             <h1>Student</h1>
             <br>
             <table>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Age
                    </th>
                </tr>

                @foreach ($students as $student)

                <tr>
                    <td>
                        {{$student->id}}
                    </td>
                    <td>
                        {{$student->name}}
                    </td>
                    <td>
                        {{$student->age}}
                    </td>
                    <td>
                        <a href="{{route('deleteStudent', $student->id)}}">delete</a>
                    </td>
                </tr>
                @endforeach
             </table>
        </div>
    </div>
    
</body>
</html>