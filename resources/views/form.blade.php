<form action="/form" method="post">
    @csrf
    <label for="Name">Name</label>
    <input type="text" name="Name" placeholder="Enter Your Name"></br>
    <label for="Email">Email</label>
    <input type="text" name="Email" placeholder="Enter Your Email"></br>
    <label for="Language">Language</label>
    <select name="language">
        <option value="English">English</option>
        <option value="Telugu">Telugu</option>
        <option value="Hindi">Hindi</option>
    </select></br>
    <label for="Gender">Gender</label></br>
    <input type="radio" name="Gender" id="Gender_Male" value="Male" checked="checked"/>
<label for="Gender_Male">Male</label>

<input type="radio" name="Gender" id="Gender_Female" value="Female" />
<label for="Gender_Female">Female</label><br>
<label for="phone">Phone Number</label>
<input type="text" name="Phone" placeholder="Enter phone number"></br>
<label for="Description">Description</label>
<input type="text" name="Description" placeholder="Enter description"></br>
<input type="file" name="file" required></br>
    <button>Send</button>
</form>
