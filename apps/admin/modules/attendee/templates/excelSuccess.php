<table border="1">
    <thead>
        <?php foreach($headers as $header): ?>
            <th><?php echo $header ?></th>
        <?php endforeach;?>
    </thead>
    <tbody>
        <?php foreach($results as $result): ?>
        <tr>
            <?php for($i = 0; $i < count($result) / 2; $i++): ?>
              <td><?php echo $result[$i] ?></td>
            <?php endfor; ?>
        </tr>
        
        <?php endforeach; ?>
    </tbody>
</table>