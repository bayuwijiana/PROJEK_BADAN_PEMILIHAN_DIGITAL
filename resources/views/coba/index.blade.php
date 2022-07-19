<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CETAK</title>
</head>

<body>

    <table style="border: 1px" cellpadding="20">
        <tr>
            <td>nama</td>
            <td>nik</td>
        </tr>
        @foreach ($data as $key)
            <tr>
                <td>{{ $key->nama }}</td>
                <td>{{ $key->dapen->email }}</td>

            </tr>
        @endforeach
    </table>
</body>

</html>
