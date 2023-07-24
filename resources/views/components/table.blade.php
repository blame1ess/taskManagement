<div>
    <table class="table">
        <tr class="table-primary">
            @foreach( $columns as $column )
                <th>{{ $column }}</th>
            @endforeach
            <th>Actions</th>
        </tr>
        @foreach($values as $row)
            <tr>
                @foreach($row as $cell)
                    <td> {{ $cell }} </td>
                @endforeach
                <td>
                    <button class="btn btn-warning">
                        edit
                    </button>
                    <button class="btn btn-danger">
                        delete
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
