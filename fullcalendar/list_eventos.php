<?php
/*
 * @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 */

include 'conexao.php';

$query_events = "SELECT id, user_id, title, description, color, start, end FROM events";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];

while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id = $row_events['id'];
    $user_id = $row_events['user_id'];
    $title = $row_events['title'];
    $description = $row_events['description'];
    $color = $row_events['color'];
    $start = $row_events['start'];
    $end = $row_events['end'];
    
    $eventos[] = [
        'id' => $id,
        'user_id' => $user_id,
        'title' => $title,
        'description' => $description,
        'color' => $color,
        'start' => $start,
        'end' => $end,
        ];
}

echo json_encode($eventos);