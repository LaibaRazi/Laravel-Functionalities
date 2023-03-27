<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{ url('/pet/update/'.$pet->Id_Pet) }}" method="post">
        {{ csrf_field() }}
        @method('put')
        <h3>Edit</h3>
        <label for="">Pet Name :</label>
        <br>
        <input type="text" name="PetName" id="" value=" {{ $pet->PetName }}" >
        <br>
        <label>Quantity of pets</label>
        <br>
        <input type="text" name="Quantity" id="" value=" {{ $pet->Quantity }} ">
        <br>
        <input type="submit" value="submit">

    </form>
</body>
</html>
