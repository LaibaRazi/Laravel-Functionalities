<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{ url('/pet') }}" method="post">
        @csrf
        <h3>{{ $title }}</h3>
        <label for="">Pet Name :</label>
        <br>
        <input type="text" name="PetName" id="" placeholder="{{ $pet->PetName }}">
        <br>
        <label>Quantity of pets</label>
        <br>
        <input type="text" name="Quantity" id="" placeholder="{{ $pet->Quantity }}">
        <br>
        <input type="submit" value="submit">

    </form>
</body>
</html>
