<?php

namespace src\views;
class View
{
    public function render($data)
    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title><?php echo $data['title']; ?></title>
        </head>
        <body>
        <h1><?php echo $data['title']; ?></h1>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <?php foreach ($data as $key => $value): ?>
                <tr>
                    <td><?php echo ucfirst($key); ?></td>
                    <td><?php echo nl2br($value); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </body>
        </html>
        <?php
    }
}
