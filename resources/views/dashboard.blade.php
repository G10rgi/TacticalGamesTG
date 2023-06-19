<!DOCTYPE html>
<html>
<head>
  <title>Game Dashboard</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    .edit-button, .remove-button {
      display: inline-block;
      padding: 6px 12px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      text-decoration: none;
      cursor: pointer;
    }
    
    .edit-button:hover, .remove-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Game Dashboard</h1>
  
  <table>
    <tr>
      <th>Game Name</th>
      <th>Upload Date</th>
      <th>Actions</th>
    </tr>
    @foreach ($games as $game)
    <tr>
      <td>{{$game->name}}</td>
      <td>{{$game->updated_at}}</td>
      <td>
        <a href="/admin/edit/3" class="edit-button">Edit</a>
        <form action="/delete-game/{{$game->id}}" method="POST">
          @csrf
          @method('delete')

          <button type="submit" class="remove-button">Remove</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>