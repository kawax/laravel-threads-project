<div>
    @forelse($posts as $post)
        <table class="table-auto my-6">
            @foreach($post as $key => $value)
                <tr>
                    <td class="font-bold pr-3">{{ $key }}</td>
                    <td>{{ is_string($value) ? $value: json_encode($value) }}</td>
                </tr>
            @endforeach
        </table>
        <hr>
    @empty
        <div>empty</div>
    @endforelse
</div>
