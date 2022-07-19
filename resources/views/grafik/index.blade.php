<!DOCTYPE html>
<html lang="en-US">

<head>
</head>

<body>

    <h1>Hasil Suara</h1>
    <h1> {{ $jum }} Calon</h1>

    @for ($i = 1; $i <= $jum; $i++)

        <table cellpadding="10px">
            <tr>
                <td>
                    suara ke{{ $i }}=
                    
                    {{ $a[$i] }}
                </td>
            </tr>
        </table>


    @endfor

</body>

</html>
