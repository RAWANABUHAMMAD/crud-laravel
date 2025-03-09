<h1> edit doctors</h1>

<form action="{{route('doctors.update', $doctors->id)}}" method="post">
    @csrf
    {{-- #1 --}}
    @method('PUT')
    {{-- #2 --}}
    {{-- Value --}}
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$doctors->name}}" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$doctors->email}}" required><br><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="{{$doctors->phone}}" required><br><br>

    <button type="submit">update</button>