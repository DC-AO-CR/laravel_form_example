<div>
    <h2>Student</h2>
    <ul>
        <li>{{ $student->firstName }} {{ $student->lastName }}</li>
    </ul>
</div>

<form method="POST" action="{{ route('flow.toUpdate', ['id' => $student->id]) }}">
    @csrf
    @method('PUT')

    <div>
        <input type="text" name="firstName" id="firstName" required />
        <label for="firstName">* First name</label>
    </div>

    <div>
        <input type="text" name="lastName" id="lastName" required />
        <label for="lastName">* Last name</label>
    </div>

    <button type="submit">Update</button>
</form>

<a href="{{ route('flow.toAll') }}">Back</a>