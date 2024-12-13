<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Categories Report</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Game Name</th>
                <th>Category Name</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->game_name }}</td>
                    <td>{{ $category->categories_name }}</td>
                    <td>
                        @if($category->photo)
                            <img src="{{ public_path('storage/' . $category->photo) }}" alt="Photo" width="50">
                        @else
                            No Image
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
