<div>
    @forelse($posts as $post)
        <div class="border my-6">
            <ul>
                @foreach($post as $key => $value)
                    <li><span class="font-bold mr-3">{{ $key }}</span><span>{{ $value }}</span></li>
                @endforeach
            </ul>
        </div>
    @empty
        <div>empty</div>
    @endforelse
</div>
