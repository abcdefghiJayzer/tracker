<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Users Data</h2>

<a href="{{route('employee.add') }}">Add Employee</a>


    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Work</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee )
            <tr>
                <td>{{ $employee->name}}</td>
                <td>{{ $employee->age}}</td>
                <td>{{ $employee->work}}</td>
                <td>{{ $employee->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $employees->links() }}



</body>
</html>

