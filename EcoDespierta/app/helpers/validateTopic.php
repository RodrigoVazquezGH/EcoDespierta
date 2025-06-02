<?php

function validateTopic($topic){
    $errors = array();

    if (empty($topic['name'])){
        array_push($errors, 'Se requiere un nombre');
    }
    
    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic) {
        array_push($errors, 'El tema ya existe');
    }
    return $errors;
}
