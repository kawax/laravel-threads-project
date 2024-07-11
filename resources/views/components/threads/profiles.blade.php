<div>
    <table class="table-auto my-6">
        @foreach($profiles as $key => $value)
            <tr>
                <td class="font-bold pr-3">{{ $key }}</td>
                <td>{{ is_string($value) ? $value: json_encode($value) }}</td>
            </tr>
        @endforeach
    </table>
</div>
