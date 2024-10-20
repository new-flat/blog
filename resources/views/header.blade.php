<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ブログ</a>
  <div>
    <div class="navbar-nav">
      <a  href="{{ route('blogs') }}">ブログ一覧 <span class="sr-only"></span></a>
      <a  href="{{ route('create') }}">ブログ投稿</a>
      <a href="{{ route('register') }}">新規登録</a>
      <a href="{{ route('login') }}">ログイン</a>
    </div>
  </div>
</nav>