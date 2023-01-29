<?php
$webhook_url = 'https://ctxsend.com/';
function send_embed_message($title, $description, $color) {
    $data = array(
        'embeds' => array(
            array(
                'title' => $title,
                'description' => $description,
                'color' => $color
            )
        )
    );
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-type: application/json',
            'content' => json_encode($data)
        )
    );
    $context = stream_context_create($options);
    $response = file_get_contents($webhook_url, false, $context);
}

while (true) {
    if (is_ddos()) {
        send_embed_message('bbos', 'someone trying to bbos our website lmfao', '#ff0000');
    }
}
