<h1>create new doctors</h1>
 <form action="{{route('doctors.store')}}" method="post">
     @csrf
     <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required><br><br>

    <button type="submit">Submit</button>

</form>
