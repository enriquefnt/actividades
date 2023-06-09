<?php
//if (empty($_SESSION['name']))
//{session_start();}
session_start();
?>
    <table id="registros-table"  class="table">
        <thead>
            <tr>
                <th>Lugar</th>
                <?php foreach ($meses as $mes) { ?>
                    <th><?php echo $mes; ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $lugar => $mesesData) { ?>
                <tr>
                    <td><?php echo $lugar; ?></td>
                    <?php foreach ($meses as $mes) { ?>
                        <td><?php echo isset($mesesData[$mes]) ? $mesesData[$mes] : 0; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#registros-table').DataTable();
        });
    </script>
