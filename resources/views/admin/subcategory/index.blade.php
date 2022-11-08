@extends('adminlte::page')

@section('title', 'Subcategory')

@section('content_header')
    <a href="{{route('admin.subcategories.create')}}" class="btn btn-success btn-sm float-right">Nueva Subcategoria</a>
    <h1>Lista de Subcategorias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($subcategories as $subcategory)
                        <tr>
                            <td>{{$subcategory->id}}</td>
                            <td>{{$subcategory->name}}</td>
                            <td>{{$subcategory->category->name}}</td>
                            <td width="10px">
                                <a href="{{route('admin.subcategories.edit', $subcategory)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            @if (count($subcategory->courses))
                            <td width="10px">
                                <p>SubCategoria en Cursos</p>
                            </td>
                            @else
                            <td width="10px">
                                <form action="{{route('admin.subcategories.destroy', $subcategory)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                            @endif
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$subcategories->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop