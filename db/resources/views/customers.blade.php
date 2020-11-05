<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Age</th>
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td> {{$customer->name}} </td>
                <td> {{$customer->city}} </td>
                <td> {{$customer->age}} </td>
            </tr>
        @endforeach

    </table>


</body>
</html>
