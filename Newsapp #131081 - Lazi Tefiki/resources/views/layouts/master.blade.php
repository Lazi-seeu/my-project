<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield("title","Master Page")</title>
</head>
<body>
    <div class="header bg-light p-4 mb-5 d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <a href="{{ route('articles.index') }}" class="heading-5">View All Articles</a>
            <a href="{{ route('articles.create') }}" class="ms-3">Add New Article</a>
        </div>
        <form method="POST" action="{{ route('articles.search') }}" class="d-flex">
            @csrf 
            <input type="search" name="search" placeholder="Search">
            <button type="submit" class="btn btn-primary ms-3">Search</button>
        </form>
    </div>
    <div class="content">
        @section("content")

        @show
    </div>
    <div class="footer bg-light p-4 mt-auto">
        <p>Lazi Tefiki, 131081</p>
    </div>
</body>
</html>