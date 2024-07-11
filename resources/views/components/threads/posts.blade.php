<div>
    @forelse($posts as $post)
        <table class="w-auto table-auto border-2 border-spacing-2 rounded my-6">
            @foreach($post as $key => $value)
                @if(is_string($value))
                    <tr>
                        <td class="font-bold">{{ $key }}</td>
                        <td>{{ $value }}</td>
                    </tr>
                @endif
            @endforeach
        </table>
    @empty
        <div>empty</div>
    @endforelse
</div>
