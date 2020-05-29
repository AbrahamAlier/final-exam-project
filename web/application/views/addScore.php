<div class="container">
    <div class="row mt-1">
        <div class="col-md-6">
            <div class="card bg-info text-white">
                <div class="card-header" style="font-size: 20px !important">
                    <?= $title ?>
                </div>
                <div class="card-body ">
                    <?php if(validation_errors()): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div> 
                    <?php endif ?>
                    <form action="<?=base_url()?>/scores/add_process" method="POST">
                        <div class="form-group">
                            <label for="USERNAME" style="font-size: 20px !important">USERNAME</label>
                            <input type="TEXT" name="USERNAME" class="form-control" id="" placeholder="USERNAME" style="font-size: 20px !important">
                        </div>
                        <div class="form-group">
                            <label for="ID" style="font-size: 20px !important">ID</label>
                            <input type="number" name="ID"number="ID" class="form-control" id="ID" placeholder="ID" style="font-size: 20px !important">
                        </div>
                        <div class="form-group">
                            <label for="SUB_ID" style="font-size: 20px !important">SUB_ID</label>
                            <input type="NUMBER" name="SUB_ID"text="SUB_ID" class="form-control" id="SUB_ID" placeholder="SUB_ID" style="font-size: 20px !important">
                        </div>
                        <div class="form-group">
                            <label for="QUIZ1" style="font-size: 20px !important">QUIZ1</label>
                            <input type="number" name="QUIZ1" class="form-control" id="QUIZ1" placeholder="QUIZ1" style="font-size: 20px !important">
                        </div>
                        <div class="form-group">
                            <label for="QUIZ2" style="font-size: 20px !important">QUIZ2</label>
                            <input type="number" name="QUIZ2" class="form-control" id="QUIZ2" placeholder="QUIZ2" style="font-size: 20px !important">
                        </div>
                        <div class="form-group">
                            <label for="MID_EXAM" style="font-size: 20px !important">MID_EXAM</label>
                            <input type="NUMBER" name="MID-EXAM" class="form-control" id="MID_EXAM" placeholder="MID_EXAM" style="font-size: 20px !important">
                            </div>
                        <div class="form-group">
                            <label for="QUIZ3" style="font-size: 20px !important">QUIZ3</label>
                            <input type="number" name="QUIZ3" class="form-control" id="QUIZ3" placeholder="QUIZ3" style="font-size: 20px !important">
                        </div>
                        <div class="form-group">
                            <label for="LAST_EXAM" style="font-size: 20px !important">LAST_EXAM</label>
                            <input type="number" name="LAST_EXAM" class="form-control" id="LAST_EXAM" placeholder="LAST_EXAM" style="font-size: 20px !important">
                        </div>
                        <div class="form-group">
                            <label for="AVERAGE" style="font-size: 20px !important">AVERAGE</label>
                            <input type="number" name="AVERAGE" class="form-control" id="AVERAGE" placeholder="AVERAGE" style="font-size: 20px !important">
                        </div>
                            </select>

                        </div>    
                        <button type="submit" name="submit" class="btn btn-success float-right">Submit</button> <a href="<?= base_url();?>scores" class="btn btn-danger">Go back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>