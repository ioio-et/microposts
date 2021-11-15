@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorite($user->id))
        {{-- unfavoriteボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => 'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
    @else
        {{-- favoriteボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => 'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
    @endif
@endif