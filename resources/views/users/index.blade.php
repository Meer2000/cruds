<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <title>cruds</title>
</head>
<body>
<div class="container">
    <h1>LISTA DE USUARIOS</h1>
<table class ="table table-striped table-hover bg-danger">
    <thead class="bg-info">
    <tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>DOCUMENTO</th>
    <th>CORREO</th>
        <th>ACCION</th>
    </tr>
    </thead>
    <tbody >

    @foreach($users as $user)
        <tr class="">
            <td>{{$user->id}}</td>
            <td>{{$user->nombre}}</td>
            <td>{{$user->apellido}}</td>
            <td>{{$user->documento}}</td>
            <td>{{$user->correo}}</td>
            <td>
                <form action="{{route('users.destroy',$user->id)}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bnt btn-danger btn-sm" >ELIMINAR

                    </button>



                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    </tbody>


</table>
</div>






</body>
</html>l
