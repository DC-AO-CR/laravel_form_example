<h2>Student</h2>
<ul>
    <li>{{ $student->firstName }} {{ $student->lastName }}</li>
</ul>

<form class method="POST" action="{{ route('flow.toDelete', ['id' => $student->id]) }}">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>

<a href="{{ route('flow.toAll') }}">Back</a>