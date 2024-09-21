<?php

function connect()
{
    $pdo = new PDO(
        'mysql:host='.$_ENV['HOST'].';port='.$_ENV['PORT'].';dbname='.$_ENV['DATABASE'].';charset=utf8mb4', 
        $_ENV['USER'], 
        $_ENV['PASS']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;
}

function create($table, $fields): bool
{
    if (!is_array($fields)) {
        $fields = (array) $fields;
    }

    if (isset($fields['password'])) {
        $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
    }

    $pdo = connect();

    $sql = "INSERT INTO {$table}";
    $sql .= '(' . implode(',', array_keys($fields)) . ')';
    $sql .= ' VALUES(:' . implode(',:', array_keys($fields)) . ')';

    $insert = $pdo->prepare($sql);

    return $insert->execute($fields);
}

function find($table, $field, $value)
{
    $pdo = connect();

    $value = strip_tags($value);

    $sql = "SELECT * FROM {$table} where {$field} = :{$field}";

    $find = $pdo->prepare($sql);
    $find->bindValue($field, $value);
    $find->execute();

    return $find->fetch();
}