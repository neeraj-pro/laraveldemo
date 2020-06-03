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
                    <tr>
                        <td>{{ $geofence->id }}</td>
                        <td>{{ $geofence->name }}</td>
                        <td>{{ $geofence->radius }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
