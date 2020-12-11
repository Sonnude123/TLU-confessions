@foreach($posthome as $post)

    <hr>
    <h3>TLU Confession</h3>
    <h4>
        <a href="chitietbaipost/{{ $post->id }}"><b>#{{ $post->id }}:</b> {{ $post->title }}</a>
    </h4>
    <p>{!! $post->content !!}</p>

    @include('layout.like')

@endforeach
