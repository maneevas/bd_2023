<h2>Вы действительно хотите удалить пользователя {{ $author->name }}?</h2>
<form method="POST" action="{{ route('admin.authors.destroy', $author) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Да, удалить</button>
</form>
<a href="{{ route('admin.users.index') }}">Нет, вернуться назад</a>
