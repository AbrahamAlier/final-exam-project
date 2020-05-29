<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form for editing scores data
                </div>
                <div class="card-body">
                    <?php if(validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <?=validation_errors()?>
                        </div>
                    <?php endif?>
                    <form action = "<?=base_url()?>scores/editScore/<?=$scores['SCOREID']?>" method = "POST">
                  
                   
                        <div class="form-group">
                            <label for="USERNAME">USERNAME</label>
                            <input type="text" class="form-control" id="USERNAME" name="USERNAME" value='<?=$scores['USERNAME']?>'>
                        </div>
                        
                        <div class="form-group">
                            <label for="QUIZ1">QUIZ1</label>
                            <input type="number" class="form-control" id="QUIZ1" name="QUIZ1" value='<?=$scores['QUIZ1']?>'>
                        </div>
                        <div class="form-group">
                            <label for="QUIZ2">QUIZ2</label>
                            <input type="number" class="form-control" id="QUIZ2" name="QUIZ2" value='<?=$scores['QUIZ2']?>'>
                        </div>
                        <div class="form-group">
                            <label for="MID_TERM">MID_TERM</label>
                            <input type="number" class="form-control" id="MID_TERM" name="MID_TERM" value='<?=$scores['MID_TERM']?>'>
                        </div>
                        <div class="form-group">
                            <label for="QUIZ3">QUIZ3</label>
                            <input type="number" class="form-control" id="QUIZ3" name="QUIZ3" value='<?=$scores['QUIZ3']?>'>
                        </div>
                        <div class="form-group">
                            <label for="LAST_EXAM">LAST_EXAM</label>
                            <input type="number" class="form-control" id="LAST_EXAM" name="LAST_EXAM" value='<?=$scores['LAST_EXAM']?>'>
                        </div>
                        <div class="form-group">
                            <label for="AVERAGE">AVERAGE</label>
                            <input type="number" class="form-control" id="AVERAGE" name="AVERAGE" value='<?=$scores['AVERAGE']?>'>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button> <a href="<?= base_url();?>scores" class="btn btn-danger">back</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>