<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Vidizayn </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <!-- Theme initialization -->
</head>
<body>
<table id="customers" class="display">
    <thead>
    <tr>
        <th>No</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Birth Date</th>
        <th>Created Date</th>
        <th>Updated Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->full_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ \Carbon\Carbon::parse( $customer->birth_date)->format('d.m.Y') }}</td>
            <td>{{ \Carbon\Carbon::parse( $customer->createdAt)->format('d.m.Y H:i')  }}</td>
            <td>{{ \Carbon\Carbon::parse( $customer->updatedAt)->format('d.m.Y H:i')  }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#customers').DataTable();
    });
</script>
</body>
</html>
