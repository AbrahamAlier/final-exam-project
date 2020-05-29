
<div class="container" style="margin-top:20px">
<div class="col-md-12">
</div>
<table class="table table-striped table-bordered" id="list_mhs">
<thead>
<tr>
                <th>no</th>
               <th>SCOREID</th>
                <th>USERNAME</th>
                <th>ID</th>
                <th>SUBJECT CODE</th>
                <th>QUIZ1</th>
                <th>MID TERM</th>
                <th>QUIZ</th>
                <th>QUIZ3</th>
                <th>LAST EXAM</th>
                <th>AVERAGE</th>
</tr>
</thead>
</tbody>
<?php
$no=1;
foreach($scores as $p){?>
<tr>
<td><?= $no++; ?></td>
                    <td><?= $p["SCOREID"]?></td>
                    <td><?= $p["USERNAME"]?></td>
                    <td><?= $p["ID"]?></td>
                    <td><?= $p["SUB_ID"]?></td>
                    <td><?= $p["QUIZ1"]?></td>
                    <td><?= $p["QUIZ2"]?></td>
                    <td><?= $p["MID_EXAM"]?></td>
                    <td><?= $p["QUIZ3"]?></td>
                    <td><?= $p["LAST_EXAM"]?></td>
                    <td><?= $p["AVERAGE"]?></td>
</tr>
<?php
}?>
</tbody>
</table>
</div>
