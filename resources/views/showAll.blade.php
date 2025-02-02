<h2>Students</h2>

@foreach($students as $student)
<ul>
    <li>{{ $student->id }} {{ $student->firstName }} {{ $student->lastName }}</li>
    
    <a href="{{ route('student.toSingle', $student->id) }}">Show</a>
    <a href="{{ route('student.showUpdateForm', $student->id) }}">Update</a>
    <a href="{{ route('student.showDeleteForm', $student->id) }}">Delete</a>
</ul>
@endforeach

<a href="{{ route('student.showCreateForm') }}">Create a new student</a>