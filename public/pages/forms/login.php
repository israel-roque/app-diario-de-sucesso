<?php

require_once '../../../bootstrap.php';

if (isEmpty()) {
    flash('message', 'Preencha todos os campos');
    return redirect('register');
}

$validate = validate([
    'email' => 's',
    'password' => 's'
]);

$user = find('users', 'email', $validate->email);

if (!$user) {
    flash('message', 'Usuário ou senha não cadastrados');
    return redirectToHome();
}

if (!$user->email === $validate->email) {
    flash('message', 'Usuário ou senha inválido(s)');
    return redirectToHome();
}

if (!password_verify($validate->password, $user->password)) {
    flash('message', 'Usuário ou senha inválido(s)');
    return redirectToHome();
}

$_SESSION['logged'] = true;
$_SESSION['user_id'] = $user->id;
$_SESSION['name'] = $user->name;
return redirect('create_diary');