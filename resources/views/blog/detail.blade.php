@extends('layout')
@section('title', 'ブログ詳細')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{ $blog->title }}</h2>
        <span>作成日：{{ $blog->created_at }}</span>
        <span>更新日：{{ $blog->updated_at }}</span>
        <p>{{ $blog->content }}</p>

        <!-- コメント表示 -->
        <h3>コメント</h3>
        @foreach ($blog->comments as $comment)
            <div class="comment">
                <p><strong>{{ $comment->author }}</strong> ({{ $comment->created_at }})</p>
                <p>{{ $comment->comment }}</p>
            </div>
        @endforeach

        <!-- コメント投稿フォーム -->
        <h3>コメントを投稿する</h3>
        <form action="{{ route('blog.comment', $blog->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="author">名前:</label>
                <input type="text" name="author" id="author" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="comment">コメント:</label>
                <textarea name="comment" id="comment" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">投稿</button>
        </form>

        <!-- 成功メッセージの表示 -->
        @if (session('status'))
            <div class="alert alert-success mt-2">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>
@endsection
