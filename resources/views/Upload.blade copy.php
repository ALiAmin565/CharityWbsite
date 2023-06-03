<!DOCTYPE html>
<html>

<head>
    <title>Image Upload Form</title>
</head>

<body>
    <h2>Image Upload Slider</h2>

    <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="imageOne" accept="image/*">
        <input type="file" name="imageTwo" accept="image/*">
        <input type="file" name="imageThree" accept="image/*">
        <br>
        <input type="submit" value="Upload">
    </form>

    <h1>Image Upload SectionRight</h1>
    <form action="{{ route('uploadImageSectionRight') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="Image_right" accept="image/*">
        <br>
        <input type="submit" value="Upload">
    </form>

    <h1>Image Upload SectionLeft</h1>
    <form action="{{ route('uploadImageSectionLeft') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="Image_left" accept="image/*">
        <br>
        <input type="submit" value="Upload">
    </form>

</body>

</html>
