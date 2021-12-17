<form action="/create" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title"></br>
    <label for="body">Body</label>
    <input type="text" name="body"></br>
    <button>Send</button>
</form>
