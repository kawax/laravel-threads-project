<div>
    <table class="table-auto my-6">
        @foreach($profiles as $key => $value)
            @if(is_string($value))
                <tr>
                    <td class="font-bold">{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endif
        @endforeach
    </table>
</div>
