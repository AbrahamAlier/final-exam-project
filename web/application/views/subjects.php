<div class="container">

<div class="row mt-1">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px"><?=$title?></h1>
    </div>
</div>
    <div class="row mt-1">
    <div class="col-md-9">
       
    </div>
</div>
    
<?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    subject Data <strong> Sucessfully </strong> <?= $this->session->flashdata('flash-data'); ?>
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
                <th>SUBJECT ID</th>
                <th>SUBJECT NAME</th>
               
            </tr>
        </thead>
        <tbody>
            <?php 
              $no = 1;
            foreach ($subjects as $p) {?>
                <tr>

                    <td><?= $no++; ?></td>
                    <td><?= $p["SUB_ID"]?></td>
                    <td><?= $p["SUB_NAME"]?></td>
                   

                </tr>
            <?php };     ?>
        </tbody>
    </table>
</div>
