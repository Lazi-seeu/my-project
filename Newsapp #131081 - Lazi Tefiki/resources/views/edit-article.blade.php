@extends("layouts/master")

@section("title","Edit Article")

@section("content")
    <form method="POST" action="{{ route('articles.update', ['article' => $article->newsid]) }}">
        @csrf
        {{ method_field('PUT') }}
        <div>
            <label for="newsid">News ID</label>
            <input type="newsid" name="newsid" value="{{$article->newsid}}" required>
        </div>
        <div>
            <label for="headline">Headline</label>
            <input type="text" name="headline" value="{{$article->headline}}" required>
        </div>
        <div>
            <label for="articletext">Article Text</label>
            <input type="mediumtext" name="articletext" value="{{$article->articletext}}" required>
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" value="{{$article->author}}" required>
        </div>
        <div>
            <label for="isactive">Active</label>
            <input type="hidden" name="isactive" value="0">
            <input type="checkbox" name="isactive" value="1" @if($article->isactive) checked @endif>
        </div>
        <div>
            <label for="datecreated">Date</label>
            <input type="date" name="datecreated" value="{{$article->datecreated}}" required>
        </div>
        <div>
            <label for="priority">Priority</label>
            <input type="number" name="priority" value="{{$article->priority}}">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
@endsection