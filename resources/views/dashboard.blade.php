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
    <tr>
      <td>New Game</td>
      <td>2023-06-01</td>
      <td>
        <a href="/admin/edit/3" class="edit-button">Edit</a>
        <a href="/admin/remove/3" class="remove-button">Remove</a>
      </td>
    </tr>
  </table>
</body>
</html>