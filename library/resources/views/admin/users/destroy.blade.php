<h2>Вы действительно хотите удалить пользователя {{ $user->name }}?</h2>
<form method="POST" action="{{ route('admin.users.destroy', $user) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Да, удалить</button>
</form>
<a href="{{ route('admin.users.index') }}">Нет, вернуться назад</a>
