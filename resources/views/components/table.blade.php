<div>
    <table class="table">
        <tr class="table-primary">
            @foreach( $columns as $column )
                <th>{{ $column }}</th>
            @endforeach
            <th>actions</th>
        </tr>
        @foreach($values as $row)
            <tr>
                @foreach($row as $cell)
                    <td> {{ $cell }} </td>
                @endforeach
                <td>
                    <button class="btn btn-sm btn-warning rounded-circle">
                        <i class="fa-solid fa-pencil"></i>
                    </button>
                    <button class="btn btn-sm btn-danger rounded-circle">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
