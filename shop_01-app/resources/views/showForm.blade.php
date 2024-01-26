<form action="sent-data" method="post" >
    @csrf
<input name="task" type="text" placeholder="Task" />
<input name="description" type="text" placeholder="Description" />
<button>Submit</button>

</form>