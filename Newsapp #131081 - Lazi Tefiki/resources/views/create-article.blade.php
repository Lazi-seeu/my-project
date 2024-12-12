@extends("layouts/master")

@section("title","Create Article")

@section("content")
    <form method="POST" action="{{ route('articles.store') }}">
        @csrf
        <div>
            <label for="newsid">News ID</label>
            <input type="newsid" name="newsid" required>
        </div>
        <div>
            <label for="headline">Headline</label>
            <input type="text" name="headline" required>
        </div>
        <div>
            <label for="articletext">Article Text</label>
            <input type="mediumtext" name="articletext" required>
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" required>
        </div>
        <div>
            <label for="isactive">Active</label>
            <input type="hidden" name="isactive" value="0">
            <input type="checkbox" name="isactive" value="1">
        </div>
        <div>
            <label for="datecreated">Date</label>
            <input type="date" name="datecreated" required>
        </div>
        <div>
            <label for="priority">Priority</label>
            <input type="number" name="priority" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Article</button>
    </form>
@endsection
