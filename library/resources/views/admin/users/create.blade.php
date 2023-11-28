<form method="POST" action="{{ route('admin.users.store') }}">
    @csrf
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name">

    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname">

    <label for="patname">Отчество:</label>
    <input type="text" id="patname" name="patname">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password">

    <label for="is_admin">Администратор:</label>
    <input type="checkbox" id="is_admin" name="is_admin" value="1">
    
    <button type="submit">Создать</button>
</form>
