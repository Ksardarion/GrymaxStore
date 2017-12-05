<form method="post" action="inc/createNew.php" class="form-horizontal">
    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Title of new</label>
      <div class="col-sm-9">
        <input name="title" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Content of new</label>
      <div class="col-sm-9">
        <div class="form-group">
          <input name="content" type="text" class="form-control form-control-lg">
        </div>
      </div>
    </div>
    <input type="hidden" name="author" value="<?=$user->id?>">
    <div class="line"></div>
    <div class="form-group row">
      <div class="col-sm-9 ml-auto">
        <button type="submit" class="btn btn-secondary">Cancel</button>
        <button name="add" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</form>