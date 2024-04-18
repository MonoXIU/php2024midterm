<?php

function ReSubmission($postData) {
    $decision = isset($postData['decision']) ? $postData['decision'] : '未選擇';
    $comments = isset($postData['comments']) ? $postData['comments'] : '無評論';

    return "您選擇了：$decision<br>您的評論是：$comments";
}



function AuSubmission($postData) {
    $title = $postData['title'];
    $author_name = $postData['author_name'];
    $author_email = $postData['author_email'];
    $abstract = $postData['abstract'];

    return [
        "title" => $title,
        "author_name" => $author_name,
        "author_email" => $author_email,
        "abstract" => $abstract
    ];
}

?>