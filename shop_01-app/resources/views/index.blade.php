<table>
    <th>
        <td>
            product
        </td>
    </th>
    @foreach($datas as $item)
        <tr>
            <td>
                {{$item}}
            </td>
        </tr>
    @endforeach
</table>