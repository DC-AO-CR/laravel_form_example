
<!-- QUESTION: What is a view? -->
<!-- QUESTION: Why do we use a view and where does it fit in the MVC model? -->
<!-- QUESTION: Where are we using it in our code? -->

<!-- You can generate this view by using the command: './vendor/bin/sail artisan make:view overview'. -->

<h2>Students</h2>
@foreach($students as $student)
<ul>
    <li>{{ $student->firstName }} {{ $student->lastName }}</li>
</ul>
@endforeach
</div>
