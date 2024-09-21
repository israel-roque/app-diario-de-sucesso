<?php

require_once '../../../bootstrap.php';

if (isEmpty()) {
    flash('message', 'Preencha todos os campos');
    return redirect('register');
}

$validate = validate([
    'name' => 's',
    'email' => 's',
    'password' => 's'
]);

$created = create('users', $validate);

if ($created) {
    flash('message', 'Usuário cadastrado com sucesso!', 'success');
    return redirect('register');
}

flash('message', 'Falha ao cadastrar usuário',);
return redirect('register');