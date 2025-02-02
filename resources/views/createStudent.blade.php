<form method="POST" action="{{ route('students.toCreate') }}">
    @csrf

    <div>
        <input type="text" name="firstName" id="firstName" required />
        <label for="firstName">* First name</label>
    </div>

    <div>
        <input type="text" name="lastName" id="lastName" required />
        <label for="lastName">* Last name</label>
    </div>

    <button type="submit">Create</button>
</form>