<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($models as $model)
        <tr>
            <th scope="row">{{ $model->id }}</th>
            <td>{{ $model->name}}</td>
            <td>{{ $model->category->name }}</td>
            <td>{{ $model->price }}</td>
            <td>
                <a href="{{ route('category.edit',$model->id) }}">Editar</a>
                <a href="{{ route('category.destroy',$model->id) }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>