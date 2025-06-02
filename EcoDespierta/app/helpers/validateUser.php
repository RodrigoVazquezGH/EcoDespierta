<?php

function validateUser($user){
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Se requiere un usuario');
    }
    if (empty($user['email'])){
        array_push($errors, 'Se requiere un correo electrónico');
    }
    if (empty($user['password'])){
        array_push($errors, 'Se requiere una contraseña');
    }

    if ($user['passwordConf'] !== $user['password']){
        array_push($errors, 'Las contraseñas no coinciden');
    }
    
    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        array_push($errors, 'El correo ya ha sido utilizado');
    }
    return $errors;
}

function validateLogin($user){
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Se requiere un usuario');
    }
    if (empty($user['password'])){
        array_push($errors, 'Se requiere una contraseña');
    }
    return $errors;
}