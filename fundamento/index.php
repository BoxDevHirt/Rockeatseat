<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <style>
    .finalizado {
      background-color: green;
      margin: 1rem 0;
      padding: 1rem;
      line-height: 2rem;
    }

    .andamento {
      background-color: yellow;
      margin: 1rem 0;
      padding: 1rem;
      line-height: 2rem;
    }

    .interrompido {
      background-color: red;
      margin: 1rem 0;
      padding: 1rem;
      line-height: 2rem;
    }

    .branco {
      background-color: white;
      border: 1px solid black;
      margin: 1rem 0;
      padding: 1rem;
      line-height: 2rem;
    }

    ul {
      list-style: none;
    }
  </style>

</head>

<body>
  <?php
  $function = function ($status = null, $date = null) {
    $data["projetos"] = [
      'projetos01' => [
        'titulo' => 'havan',
        'status' => 'finalizado',
        'data' => '2025-04-23',
        'descricao' => 'teste'
      ],
      'projetos02' => [
        'titulo' => 'havan',
        'status' => 'finalizado',
        'data' => '2025-04-25',
        'descricao' => 'teste'
      ],
      'projetos03' => [
        'titulo' => 'havan',
        'status' => 'interrompido',
        'data' => '2025-04-23',
        'descricao' => 'teste'
      ],
      'projetos07' => [
        'titulo' => 'havan',
        'status' => 'branco',
        'data' => '2021-04-26',
        'descricao' => 'teste'
      ],
      'projetos04' => [
        'titulo' => 'havan',
        'status' => 'andamento',
        'data' => '2025-04-23',
        'descricao' => 'teste'
      ],
      'projetos05' => [
        'titulo' => 'havan',
        'status' => 'interrompido',
        'data' => '2025-04-26',
        'descricao' => 'teste'
      ],
      'projetos06' => [
        'titulo' => 'havan',
        'status' => 'branco',
        'data' => '2026-04-20',
        'descricao' => 'teste'
      ],
      'projetos08' => [
        'titulo' => 'havan',
        'status' => 'branco',
        'data' => '2014-07-22',
        'descricao' => 'teste'
      ]
    ];

    foreach ($data["projetos"] as $value) {
      switch ($status) {
        case 'andamento':
          foreach ($data["projetos"] as $values) {
            if ($values['status'] == $status) {
              $data['view'][] =
                '<div class="andamento">'
                . $values['titulo'] . '<br>'
                . $values['status'] . '<br>'
                . $values['data'] . '<br>'
                . $values['descricao'] . '<br>'
                . '</div>';
            }
          }

          return $data['view'];
        case 'finalizado':
          foreach ($data["projetos"] as $values) {
            if ($values['status'] == $status) {
              $data['view'][] =
                '<div class="finalizado">'
                . $values['titulo'] . '<br>'
                . $values['status'] . '<br>'
                . $values['data'] . '<br>'
                . $values['descricao'] . '<br>'
                . '</div>';
            }
          }

          return $data['view'];
        case 'interrompido':
          foreach ($data["projetos"] as $values) {
            if ($values['status'] == $status) {
              $data['view'][] =
                '<div class="interrompido">'
                . $values['titulo'] . '<br>'
                . $values['status'] . '<br>'
                . $values['data'] . '<br>'
                . $values['descricao'] . '<br>'
                . '</div>';
            }
          }

          return $data['view'];
        case 'branco':
          foreach ($data["projetos"] as $values) {
            if ($values['status'] == $status && $values['data'] == $date) {
              $data['view'][] =
                '<div class="branco">'
                . $values['titulo'] . '<br>'
                . $values['status'] . '<br>'
                . $values['data'] . '<br>'
                . $values['descricao'] . '<br>'
                . '</div>';
            } else if ($values['status'] == $status && !$date) {
              $data['view'][] =
                '<div class="branco">'
                . $values['titulo'] . '<br>'
                . $values['status'] . '<br>'
                . $values['data'] . '<br>'
                . $values['descricao'] . '<br>'
                . '</div>';
            }
          }

          return $data['view'];
        default:
          foreach ($data["projetos"] as $values) {
            if ($values['status'] == 'finalizado') {
              $data['view'][] =
                '<div class="finalizado">'
                . $values['titulo'] . '<br>'
                . $values['status'] . '<br>'
                . $values['data'] . '<br>'
                . $values['descricao'] . '<br>'
                . '</div>';
            } else if ($values['status'] == 'andamento') {
              $data['view'][] =
                '<div class="andamento">'
                . $values['titulo'] . '<br>'
                . $values['status'] . '<br>'
                . $values['data'] . '<br>'
                . $values['descricao'] . '<br>'
                . '</div>';
            } else if ($values['status'] == 'interrompido') {
              $data['view'][] =
                '<div class="interrompido">'
                . $values['titulo'] . '<br>'
                . $values['status'] . '<br>'
                . $values['data'] . '<br>'
                . $values['descricao'] . '<br>'
                . '</div>';
            } else if ($values['status'] == 'branco') {
              $data['view'][] =
                '<div class="branco">'
                . $values['titulo'] . '<br>'
                . $values['status'] . '<br>'
                . $values['data'] . '<br>'
                . $values['descricao'] . '<br>'
                . '</div>';
            }
          }

          return $data['view'];
      }
    }
  }
  ?>

  <ul>
    <?php
    $list = $function('', '');
    foreach ($list as $key => $values) {
      echo  "<li>" . $values . "</li>";
    }
    ?>
  </ul>

  </div>
</body>

</html>