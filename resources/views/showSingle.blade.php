<div>
    <h2>Student</h2>
    <ul>
        <li>{{ $student->firstName }} {{ $student->lastName }}</li>
    </ul>
</div>

<!-- Where do we end up if we click on this link? -->
<a href="{{ route('flow.toAll') }}">Back</a>