<table>
    <tr><th>title</th><th>number</th></tr>
    <?php foreach($data as $item) :?>
        <tr><td><?php echo($item['name']); ?></td></tr>
    <?php endforeach;?>
</table>