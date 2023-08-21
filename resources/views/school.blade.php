<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School listings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
    <thead>
        <tr>
        <th scope="col">Employee</th>
        <th scope="col">Classes</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->surname }}, {{ $employee->forename . $employee->middle_names }}</td>
            <td><a href="/classes/{{ $employee->id }}">Classes</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
  </body>
</html>