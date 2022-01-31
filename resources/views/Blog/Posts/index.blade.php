<table>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->creater_at }}</td>
        </tr>
    @endforeach
</table>
