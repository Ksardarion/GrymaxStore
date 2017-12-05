<form method="post" action="inc/saveConfig.php" class="form-horizontal">
    <div class="form-group row">
      <label class="col-sm-3 form-control-label">"What a Company" <b>Block</b></label>
    </div>
    <div class="form-group row">
      <div class="col-sm-9">
        <input name="title" type="text" placeholder="<?=$configs['aboutCompanyTitle']?>" class="form-control">
      </div>
      <div class="col-sm-9">
        <input name="description" type="text" placeholder="<?=$configs['aboutCompany']?>" class="form-control form-control-lg">
      </div>
    </div>
    <div class="line"></div>
    <div class="form-group row">
      <div class="col-sm-9 ml-auto">
        <button type="submit" class="btn btn-secondary">Cancel</button>
        <button name="saveIndexPageBlocks" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</form>