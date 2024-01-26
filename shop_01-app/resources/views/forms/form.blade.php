<h1>Hello!</h1>
<meta name="csrf-token" content="{{ csrf_token() }}">

<form action="form-submit" method="POST">
    @csrf
    <label for="firstname">First name</label>
        <input type="text" name="firstname">
        <br/>
    <label for="lastname">Last name</label>
        <input type="text" name="lastname">
        <br/>
    <button type="submit">Submit</button>

</form>