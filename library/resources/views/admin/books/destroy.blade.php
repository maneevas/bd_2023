<h2>Вы действительно хотите удалить книгу {{ $book->title }}?</h2>
<form method="POST" action="{{ route('admin.books.destroy', $book) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Да, удалить</button>
</form>
<a href="{{ route('admin.books.index') }}">Нет, вернуться назад</a>
