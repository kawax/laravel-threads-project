<div>
    @forelse($posts as $post)
        <div class="my-6">
            <table class="table-auto">
                @foreach($post as $key => $value)
                    @if(is_string($value))
                        <tr>
                            <td class="font-bold">{{ $key }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    @empty
        <div>empty</div>
    @endforelse
</div>
