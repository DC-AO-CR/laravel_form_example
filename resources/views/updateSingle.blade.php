<div>
    <h2>Student</h2>
    <ul>
        <li>{{ $student->firstName }} {{ $student->lastName }}</li>
    </ul>
</div>

<!-- Where do we end up when we click on the submit button of this form? -->
<form method="POST" action="{{ route('flow.toUpdate', ['id' => $student->id]) }}">
    @csrf
    @method('PUT') <!-- What is this tag? Why do we need to add a PUT method to this form? -->

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

<!-- Where do we end up if we click on this link? -->
<a href="{{ route('flow.toAll') }}">Back</a>