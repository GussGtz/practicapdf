<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cardex del Estudiante</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 40px;
            padding: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        img {
            display: block;
            margin: 20px auto;
            width: 150px;
            height: auto;
            border-radius: 75px;
        }
        .student-details {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .student-detail {
            color: #666;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .student-detail strong {
            color: #000;
            font-weight: normal;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>{{$title}}</h1>
    <img src="{{public_path('images/studiante.png')}}" alt="Imagen del Estudiante">
    <div class="student-details">
        <p class="student-detail"><strong>Nombre del estudiante:</strong>{{$details->name_student}}</p>
        <p class="student-detail"><strong>Edad:12</strong>{{$details->age}}</p>
        <p class="student-detail"><strong>Curso:Matematicas</strong>{{$details->course}}</p>
        <p class="student-detail"><strong>Promedio General:10</strong>{{$details->average}}</p>
    </div>
</body>
</html>
