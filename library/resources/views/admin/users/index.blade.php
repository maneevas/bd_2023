<a href="{{ route('admin.users.create') }}">Создать нового пользователя</a>
<table>
    <tr>
        <th>Имя</th>
        <th>Email</th>
        <th>Действия</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('admin.users.edit', $user) }}">Редактировать</a>
                <form method="POST" action="{{ route('admin.users.destroy', $user) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $users->links() }}
