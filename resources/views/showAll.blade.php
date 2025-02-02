<h2>Students</h2>

@foreach($students as $student)
<ul>
    <li>{{ $student->id }} {{ $student->firstName }} {{ $student->lastName }}</li>
    
    <a href="{{ route('flow.toSingle', $student->id) }}">Show</a>
    <a href="{{ route('flow.showUpdateForm', $student->id) }}">Update</a>
    <a href="{{ route('flow.showDeleteForm', $student->id) }}">Delete</a>
</ul>
@endforeach

<a href="{{ route('flow.showCreateForm') }}">Create a new student</a>