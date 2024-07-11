<div>
    @forelse($posts as $post)
        <table class="table-auto my-6">
            @foreach($post as $key => $value)
                @if(is_string($value))
                    <tr>
                        <td class="font-bold">{{ $key }}</td>
                        <td>{{ $value }}</td>
                    </tr>
                @endif
            @endforeach
        </table>
        <hr>
    @empty
        <div>empty</div>
    @endforelse
</div>
