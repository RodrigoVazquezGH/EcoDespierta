<?php

function validatePost($post){
    $errors = array();

    if (empty($post['title'])){
        array_push($errors, 'Se requiere un titulo');
    }
    if (empty($post['body'])){
        array_push($errors, 'Se requiere un texto');
    }
    if (empty($post['topic-id'])){
        array_push($errors, 'Elige un tema');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']){
            array_push($errors, 'Ya existe una publicación con ese título');
        }
        if (isset($post['add-post'])) {
            array_push($errors, 'Ya existe una publicación con ese título');
        }
    }
    return $errors;
}

