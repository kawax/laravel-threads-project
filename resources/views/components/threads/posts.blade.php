<div>
    @forelse($posts as $post)
        <div class="border my-6">
            <ul>
                @foreach($post as $key => $value)
                    @if(is_string($value))
                        <li><span class="font-bold mr-3">{{ $key }}</span><span>{{ $value }}</span></li>
                    @endif
                @endforeach
            </ul>
        </div>
    @empty
        <div>empty</div>
    @endforelse
</div>
