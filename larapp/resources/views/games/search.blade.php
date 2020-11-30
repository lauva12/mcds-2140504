@forelse ($games as $game)
<tr>
    <td>{{ $game->name }}</td>    
    <td><img src="{{ asset($game->category->image) }}" width="36px"></td>
    <td><img src="{{ asset($game->image) }}" width="36px"></td>
    <td>

        <a href="{{ url('games/'.$game->id) }}" class="btn btn-sm btn-light"><i class="fa fa-search"></i></a>
        <a href="{{ url('games/'.$game->id.'/edit') }}" class="btn btn-sm btn-light"><i class="fa fa-pen"></i></a>
        <form action="{{ url('games/'.$game->id) }}" method="POST" class="d-inline">
        @csrf
        @method('delete')
        <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i></button>
        </form>

    </td>
</tr>
@empty
<tr>
    <td class="text-center" colspan="5">
        No hay Juegos con el nombre indicado
    </td>
</tr>
    
@endforelse