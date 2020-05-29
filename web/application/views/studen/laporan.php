<!DOCTYPE html>
<html>

<head>
    <title>Report Table</title>
    <style type="text/css">
        #outtable {
            padding: 20px;
            border: 1px solid #e3e3e3;
            width: 600px;
            border-radius: 5px;
        }

        .short {
            width: 50px;
        }
        .normal {
            width: 150px;
        }

        table {
            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
        }

        thead th {
            text-align: left;
            padding: 10px;
        }

        tbody td {
            border-top: 1px solid #e3e3e3;
            padding: 10px;
        }

        tbody tr:nth-child(even) {
            background: #F6F5FA;
        }

        tbody tr:hover {
            background: #EAE9F5
        }
    </style>
</head>

<body>

   
<div
id="outtable">

       
<table>

           
<thead>

               
<tr>

                   
<th
class="short">NO</th>

                   
<th
                  class="normal">SCOREID</th>
                    <th class="normal">USERNAME</th>
                    <th class="normal">ID</th>
                    <th class="normal">SUB_ID</th>
                    <th class="normal">QUIZ1</th>
                    <th class="normal">QUIZ2</th>
                    <th class="normal">MID_EXAM</th>
                    <th class="normal">QUIZ3</th>
                    <th class="normal">LAST_EXAM</th>
                    <th class="normal">AVERAGE</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($scores as $user) : ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $user->SCOREID; ?></td>
                        <td><?php echo $user->USERNAME; ?></td>
                        <td><?php echo $user->ID; ?></td>
                        <td><?php echo $user->SUB_ID; ?></td>
                        <td><?php echo $user->QUIZ1; ?></td>
                        <td><?php echo $user->QUIZ2; ?></td>
                        <td><?php echo $user->MID_EXAM; ?></td>
                        <td><?php echo $user->QUIZ3; ?></td>
                        <td><?php echo $user->LAST_EXAM; ?></td>
                        <td><?php echo $user->AVERAGE; ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>


 