<div class="container">
<div class="row mt-1">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px"><?=$title?></h1>
    </div>
</div>
    <div class="row mt-1">
    <div class="col-md-9">
        <a href="<?= base_url();?>scores/add_score"class="btn btn-success"><span class="fa fa-plus-square mr-2"></span> Add score Data</a>
        
    </div>
</div>
    
<?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    score Data <strong> Sucessfully </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <table class="table table-striped table-bordered " id="lecturer">
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
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $no = 1;
            foreach ($scores as $p) {?>
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
                    <td> <a href="<?= base_url(); ?>scores/deletescore/<?= $p['SCOREID']; ?>" onclick="return confirm('Are you sure want to delete this data?')"><span class="fa fa-minus-circle" style="color: red"></span> Delete</a></td>
                    <td>
                    <a class='badge badge-success float-right' 
                        href="<?=base_url();?>scores/editScore/<?=$p['SCOREID']?>">Edit</a>
                            </td>
                   

                </tr>
            <?php };     ?>
        </tbody>
    </table>
</div>
