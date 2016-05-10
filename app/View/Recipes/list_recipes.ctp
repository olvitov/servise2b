<table>
    <tr>
        <th><?php echo $paginator->sort('ID', 'id');?></th>
        <th><?php echo $paginator->sort('Title', 'title');?></th>
    </tr>
    <?php foreach($data as $recipe): ?>
        <tr>
            <td><?php echo $recipe['Recipe']['id']; ?></td>
            <td><?php echo $recipe['Recipe']['title']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>