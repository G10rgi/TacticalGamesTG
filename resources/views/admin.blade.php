<html>
    <head>
        <title>Admin Panel</title>
        <style>
            form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f4f4f4;
            }

            label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            }

            input[type="file"],
            input[type="text"],
            textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type="text"] {
            width: 70%;
            }

            textarea {
            height: 100px;
            }

            button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            button[type="submit"]:hover {
            background: #45a049;
            }

            .success-message {
            color: green;
            margin-top: 10px;
            }

            .download-link {
            margin-bottom: 10px;
            }

            .download-link input[type="text"] {
            width: 100%;
            }

            .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            }

            .form-actions .download-button {
            background: #3498db;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            text-decoration: none;
            }

        </style>
    </head>
<body>
<form action="/add-game" method="POST" enctype="multipart/form-data">
  @csrf
  <div>
    <label for="image">სახელი:</label>
    <input type="texr" name="name" id="name">
  </div>
  <div>
    <label for="image">მთავარი ფოტო:</label>
    <input type="file" name="image" id="background_photo" accept="image/*">
  </div>
  <div>
    <label for="image">უკანა ფონის ფოტო:</label>
    <input type="file" name="background_image" id="background_photo" accept="image/*">
  </div>

  <!-- Game Description -->
  <div>
    <label for="description">თამაშის აღწერა:</label>
    <textarea name="description" id="game_description"></textarea>
  </div>

  <!-- Slider Images -->
  <div>
    <label for="slider_images">სლაიდერის ფოტოები:</label>
    <input type="file" name="additional_images[]" id="slider_images" multiple accept="image/*">
  </div>

  <!-- Computer Requirements -->
  <div>
    <label>კომპიუტერის მოთხოვნილებები:</label>
    <div>
      <label for="os">OS:</label>
      <input type="text" name="os" id="os">
    </div>
    <div>
      <label for="gpu">GPU:</label>
      <input type="text" name="gpu" id="gpu">
    </div>
    <div>
      <label for="cpu">CPU:</label>
      <input type="text" name="cpu" id="cpu">
    </div>
    <div>
      <label for="ram">RAM:</label>
      <input type="text" name="ram" id="ram">
    </div>
  </div>

  <!-- Download Link -->
  <div>
    <label for="download_link">გადმოსაწერი ლინკი:</label>
    <input type="text" name="download_link" id="download_link">
  </div>

  <!-- Submit Button -->
  <div>
    <button type="submit">შენახვა</button>
  </div>

</form>

</body>
</html>

