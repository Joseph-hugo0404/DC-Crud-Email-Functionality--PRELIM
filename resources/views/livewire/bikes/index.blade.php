<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID No</th>
                <th>Buyers Name</th>
                <th>Email Address</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Date Purchase</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bikes as $bike)
                <tr> 
                    <td class="text-white">{{ $bike->id }}</td>
                    <td class="text-white">{{ $bike->name }}</td>
                    <td class="text-white">{{ $bike->email }}</td>
                    <td class="text-white">{{ $bike->contact_number }}</td>
                    <td class="text-white">{{ $bike->address }}</td>
                    <td class="text-white">{{ $bike->brand }}</td>
                    <td class="text-white">{{ $bike->price }}</td>
                    <td class="text-white">{{ $bike->buy_date }}</td>
                    <td>
                        <a href="{{ url('edit', ['bike' => $bike->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['bike' => $bike->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td> 
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

