<h3>Междугородка</h3>

<table class="table table-bordered table-striped table-hover table-condensed">
  

    <tr>
        <th>Поток</th>
        <th>DFI</th>
        <th>№TG</th>
        <th>Направление</th>
    </tr>

    <?php foreach($tolls as $toll) : ?>

    <tr>
        <td><?= $toll['Toll']['number_flow'] ?></td>
        <td><?= $toll['Toll']['number_dfi'] ?></td>
        <td><?= $toll['Toll']['number_tg'] ?></td>
        <td><?= $toll['Toll']['direction'] ?></td>




        <?php  endforeach; ?>

</table>