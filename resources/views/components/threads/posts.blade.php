<div>
    @forelse($posts as $post)
        <div class="border my-6">
            <ul>
                @forelse($post as $key => $value)
                    <li><span class="font-bold mr-3">{{ $key }}</span><span>{{ $value }}</span></li>
                @endforelse
            </ul>
        </div>
    @empty
    @endforelse
</div>
