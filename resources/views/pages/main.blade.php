@extends('layouts.app')

@section('content')
    <h1>News Today</h1>
    @forelse($news as $new)
        <ul>
                <li>
                    <span>{{$new->id}}</span>
                    <h4>{{$new->title}}</h4>
                    <p>{{$new->content}}</p>
                    <p>{{$new->created_at}}</p>
                </li>
                <form action="{{route('news.remove', $new->id)}}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
        </ul>
    @empty
        <p>There is no news for today</p>
    @endforelse
    <hr>
    <h2>Add news</h2>
    <form action="{{ route('news.create') }}" method='POST'>
        @csrf
        <input type='text' placeholder='News title' name='title' required>
        <input type='text' placeholder='News content' name='content' required>
        <button type='submit'>Add news</button>
    </form>
@endsection
