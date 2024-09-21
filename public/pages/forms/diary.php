<?php

require_once '../../../bootstrap.php';

if (isEmpty()) {
    flash('message', 'Preencha todos os campos');
    return redirect('create_diary');
}

$validate = validate([
    'user_id' => 'i',
    'title' => 's',
    'content' => 's',
]);

$created = create('diaries', $validate);

if ($created) {
    flash('message', 'Diário criado com sucesso! 👋 Nos vemos amanhã <b>' . $_SESSION['name'] . '</b>', 'success');
    return redirect('logout');
}

flash('message', 'Houve uma falha inesperada ao criar seu diário',);
return redirect('create_diary');