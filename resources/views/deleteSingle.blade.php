<h2>Student</h2>
<ul>
    <li>{{ $student->firstName }} {{ $student->lastName }}</li>
</ul>

<!-- Where do we end up when we click on the submit button of this form? -->
<form class method="POST" action="{{ route('flow.toDelete', ['id' => $student->id]) }}">
    @csrf
    @method('DELETE') <!-- What is this tag? Why do we need to add a DELETE method to this form? -->

    <button type="submit">Delete</button>
</form>

<!-- Where do we end up if we click on this link? -->
<a href="{{ route('flow.toAll') }}">Back</a>