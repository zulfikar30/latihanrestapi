<?php

function getKey() {
    return ["1234", "rahasia", "xyz"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getFilm() {
    $film = [
        ["title" => "The Conjuring", "konten" => "film ini film ke-9"],
        ["title" => "The Conjuring 2", "konten" => "film ini film ke-1"],
        ["title" => "The Conjuring 3", "konten" => "film ini film ke-2"]
    ];
    return $film;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getFilm());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>