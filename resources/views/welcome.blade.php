@foreach($posts as $post)
    <li>{{ $post->title }}</li>
    <textarea>{{$post->content }}</textarea>
    @endforeach
