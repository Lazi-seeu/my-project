@extends("layouts/master")

@section("title","Article Details")

@section("content")
    <table class="table">
        <thead>
            <tr>
                <th>Article ID</th>
                <th>Headline</th>
                <th>Article</th>
                <th>Author</th>
                <th>Date Created</th>
                <th>Active</th>
                <th>Priority</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$article->newsid}}</td>
                <td>{{$article->headline}}</td>
                <td>{{$article->articletext}}</td>
                <td>{{$article->author}}</td>
                <td>
                    @if($article->active)
                        <input type="checkbox" diabled checked>
                    @else
                        <input type="checkbox" disabled>
                    @endif
                </td>
                <td>{{$article->datecreated}}</td>
                <td>{{$article->priority}}</td>
            </tr>
        </tbody>
    </table>
@endsection