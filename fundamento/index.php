<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <?php
  $projetosFiltro = function ($datetime = null, $status = null) {

    $data['projetos'] = json_decode(file_get_contents('list.json'), true);
    $data['lista'] = [];

    foreach ($data["projetos"] as $item) {
      if (is_null($datetime) || is_null($status)) {
        $data['lista'][] = [
          'titulo' => $item['titulo'],
          'status' => $item['status'],
          'data' => $item['data'],
          'descricao' => $item['descricao']
        ];
      } else {
        if ($item['status'] == $status && $datetime > $item['data']) {
          $data['lista'][] = [
            'titulo' => $item['titulo'],
            'status' => $item['status'],
            'data' => $item['data'],
            'descricao' => $item['descricao']
          ];
        } else if ($item['status'] == $status || $datetime > $item['data']) {
          $data['lista'][] = [
            'titulo' => $item['titulo'],
            'status' => $item['status'],
            'data' => $item['data'],
            'descricao' => $item['descricao']
          ];
        }
      }
    }

    return $data['lista'];
  };
  ?>

  <?php

  $data['arr'] = $projetosFiltro(2025, 'status');

  foreach ($data['arr'] as $item) {
    echo "<ul>
        <li>{$item['titulo']}</li>
        <li>{$item['status']}</li>
        <li>{$item['data']}</li>
        <li>{$item['descricao']}</li>
      </ul>";
  }

  ?>

  </div>
</body>

</html>