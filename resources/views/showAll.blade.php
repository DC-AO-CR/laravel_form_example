<h2>Students</h2>

@foreach($students as $student)
<ul>
    <li>{{ $student->id }} {{ $student->firstName }} {{ $student->lastName }}</li>
    
    <!-- Where do we end up if we click on one of these links? -->
    <a href="{{ route('flow.toSingle', $student->id) }}">Show</a>
    <a href="{{ route('flow.showUpdateForm', $student->id) }}">Update</a>
    <a href="{{ route('flow.showDeleteForm', $student->id) }}">Delete</a>
</ul>
@endforeach

<!-- Where do we end up if we click on this link? -->
<a href="{{ route('flow.showCreateForm') }}">Create a new student</a>