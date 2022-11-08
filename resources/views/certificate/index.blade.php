<!doctype html>
<html lang="en">

<head>
    @foreach ($courses as $course)
    <title>Certificado del curso: {{$course->title}}</title>
    @endforeach
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
        #fact {
            /*position: relative;*/
            float: right;
            margin-top: 2%;
            margin-left: 2%;
            margin-right: 18%;
            margin-bottom: 2%;
            font-size: 20%;
            font-weight: bold;
            padding: 10px;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <img class="rounded-xl" width="100" height="100" id="fact" src="{{asset('img/cursos/logo SLTC.png')}}">
    <div class="container py-5">
        <h5 class=" font-weight-bold">Certificado Generado</h5>
        @foreach ($user as $item)
        <h6 class="font-weight-bold mt-5">Alunmo Certificado: </h6><a class="font-semibold">{{$item->name}}</a>
        <h6 class="font-weight-bold mt-5">Email del Alumno: </h6><a class="font-semibold">{{$item->email}}</a>
        
        @endforeach
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre del Curso</th>
                    <th>Categoria</th>
                    <th>Subcategoria</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <td>{{$course->id}}</td>
                    <td>{{$course->title}}</td>
                    <td>{{$course->category->name}}</td>
                    <td>{{$course->subcategory->name}}</td>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="visible-print text-center">
        <img src="data:image/png;base64, {!! base64_encode(QrCode::size(200)->generate('http://codersfree.test/view-verfication/'.$course->slug.'?')) !!} ">
        <p>SLTC Copyright Derechos Reservados.</p>
    </div>
</body>

</html>