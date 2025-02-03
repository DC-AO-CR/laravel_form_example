<!-- Where do we end up when we click on the submit button of this form? -->
<form method="POST" action="{{ route('flow.toCreate') }}">
    @csrf <!-- What is this token? Why do we add it to the form? -->

    <div>
        <input type="text" name="firstName" id="firstName" required />
        <label for="firstName">* First name</label>
    </div>

    <div>
        <input type="text" name="lastName" id="lastName" required />
        <label for="lastName">* Last name</label>
    </div>

    <button type="submit">Create</button>
</form>

<!-- Where do we end up if we click on this link? -->
<a href="{{ route('flow.toAll') }}">Back</a>