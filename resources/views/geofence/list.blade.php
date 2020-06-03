<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larademo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Radius</th>
                </thead>
                <tbody>
                    @foreach ($geofences as $g)
                        <tr>
                            <td>{{ $g->id }}</td>
                            <td>{{ $g->name }}</td>
                            <td>{{ $g->radius }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
