<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
<style>
    td{
        text-align: center;
    }
    </style>
</head>
<body>
<table cellspacing="0" border="1" width="100%">
<tr>
<th>Id</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Language</th>
<th>Gender</th>
<th>Description</th>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->phone }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->language }}</td>
<td>{{ $user->gender }}</td>
<td>{{ $user->decription }}</td>
</tr>
@endforeach
</table>

</body>
</html>