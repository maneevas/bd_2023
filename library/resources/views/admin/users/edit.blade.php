<form method="POST" action="{{ route('admin.users.update', $user) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}">
    <button type="submit">Update</button>
</form>
