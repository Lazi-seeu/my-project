@extends("layouts/master")

@section("title","Index Page")

@section("content")
    <table class="table">
        <thead>
            <tr>
                <th>Article ID</th>
                <th>Headline</th>
                <th>Author</th>
                <th>Date Created</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->newsid}}</td>
                    <td>{{$article->headline}}</td>
                    <td>{{$article->author}}</td>
                    <td>{{$article->datecreated}}</td>
                    <td>
                        @if($article->isactive)
                            <input type="checkbox" disabled checked>
                        @else
                            <input type="checkbox" disabled>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('articles.show', ['article' => $article->newsid]) }}" class="btn btn-primary">Details</a>
                        <a href="{{ route('articles.edit', ['article' => $article->newsid]) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('articles.destroy', ['article' => $article->newsid]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection