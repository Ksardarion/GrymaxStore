<form method="post" action="inc/saveConfig.php" class="form-horizontal">
    <div class="form-group row">
      <label class="col-sm-3 form-control-label"><b>Title of Home Page</b></label>
    </div>
    <div class="form-group row">
      <div class="col-sm-9">
        <input name="indexTitle" type="text" placeholder="<?=$configs['indexTitle']?>" class="form-control">
      </div>
    </div>
    <div class="line"></div>
    <div class="form-group row">
      <div class="col-sm-9 ml-auto">
        <button type="submit" class="btn btn-secondary">Cancel</button>
        <button name="saveMetaData" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</form>