<div>
    <h1>show tweets</h1>

    <p>{{ $content }}</p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">

        @error('content')
            {{ $message }}
        @enderror
        <button type="submit">Criar Tweet</button>
    </form>
    
<hr>
    @foreach ($tweets as $tweet)
        @if ($tweet->user->photo)
        <img src="{{ url("storage/{$tweet->user->photo}") }}" width="70px" height="70px" alt="">
        @else
            <img src="{{ url('image/users.png') }}" width="70px" height="70px" alt="">
        @endif

        {{ $tweet->user->name }} - {{ $tweet->content }}

        @if($tweet->likes->count())
            <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Deslike</a>
        @else
        <a href="#" wire:click.prevent="like({{ $tweet->id }})">Like</a>
        @endif
        <br>
    @endforeach
</div>

<hr>
<div>
    {{ $tweets->links() }}
</div>
