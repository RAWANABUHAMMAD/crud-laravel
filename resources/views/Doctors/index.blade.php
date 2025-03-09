<h1>Show All doctors</h1>
<button><a href="{{ route('doctors.create') }}">Add New</a></button><br /><br /><br />


<table>
    <thead>
        <tr>
            <th>#</th>  
            <th>Name</th>  
            <th>phone</th>  
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($doctors as $doctor)
            <tr> 
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->phone }}</td>
                <td>{{ $doctor->email }}</td>
                <td>
                    <a href="{{ route('doctors.edit' , $doctor->id ) }}">Edit</a> 
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr> 
        @endforeach 
    </tbody>
</table>