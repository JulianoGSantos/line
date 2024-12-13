<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
</head>
<body>
    <form action="{{ route('client.store') }}" method="POST">
    @csrf

        <label for="i">Nome:</label>
        <input type="text" name="name" id="iname">

        <label for="ilastname">Sobrenome:</label>
        <input type="text" name="lastname" id="ilastname">
        
        <label for="igender">Sexo:</label>
        <input type="text" name="gender" id="igender">
        
        <label for="icpf">CPF:</label>
        <input type="text" name="cpf" id="icpf">
        
        <label for="icellphone">Celular:</label>
        <input type="text" name="cellphone" id="icellphone">
        
        <label for="ibirth">Nascimento:</label>
        <input type="text" name="birth" id="ibirth">
        
        <label for="istreet">Rua:</label>
        <input type="text" name="street" id="istreet">
        
        <label for="idistrict">Bairro:</label>
        <input type="text" name="district" id="idistrict">
        
        <label for="icity">Cidade:</label>
        <input type="text" name="city" id="icity">
        
        <label for="istate">Estado:</label>
        <input type="text" name="state" id="istate">

        <input type="submit" value="cadastrar">
    </form>
</body>
</html>