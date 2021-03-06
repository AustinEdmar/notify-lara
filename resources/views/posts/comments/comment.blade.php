<hr>
@if (auth()->check())

@if (session('success'))

    <div class="alert alert-success">
        {{ session('success')}}
    </div>

@endif

@if ($errors->any())

    <div class="alert alert-danger">
        @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
        @endforeach
    </div>

@endif



<form action="{{ route('comment.store')}}" method="POST" class="form">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id}}">
    <div class="form-group">
        <input type="text" name="title" placeholder="Titulo" class="form-control">
    </div>

    <div class="form-group">
        <textarea name="body" id=""  placeholder="comentario" class="form-control">

        </textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
@else
        <p>Precisa logar</p>
@endif


<hr>
<h3>Comentarios</h3>

@forelse ($post->comments as $comment)

        <p>
            <b>{{ $comment->user->name}} comentou :</b>
            {{ $comment->title}} - {{ $comment->body}}
        </p>
@empty

@endforelse
