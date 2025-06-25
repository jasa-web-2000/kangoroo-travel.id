<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitemap</title>

    <style>
        div {
            max-width: 100%;
            overflow: auto;
        }

        table {
            min-width: 600px;
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }


        table,
        th,
        td {
            border: 1px solid #999;
            padding: 8px 20px;
            text-align: left;
        }

        tbody tr:nth-child(odd) {
            background: #ddd;
        }

        tbody tr:hover {
            background: #a1b9fc;
        }
    </style>
</head>

<body>
    <h1>Sitemap</h1>
    <p>Sitemap ini memiliki {{ count($data) ?? 0 }} URL</p>
    <div class="">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Sitemap</th>
                    <th>Last Modified</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><a href="{{ $item }}">{{ $item }}</a></td>
                        <td>{{ \Carbon\Carbon::now()->setTimezone('UTC')->format('Y-m-d H:i P') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
