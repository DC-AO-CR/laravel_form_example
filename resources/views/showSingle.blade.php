<div>
    <h2>Student</h2>
    <ul>
        <li>{{ $student->firstName }} {{ $student->lastName }}</li>
    </ul>
</div>

<a href="{{ route('flow.toAll') }}">Back</a>