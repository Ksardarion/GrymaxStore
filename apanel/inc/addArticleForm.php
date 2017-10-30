<form method="post" action="inc/createArticle.php" class="form-horizontal">
    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Name of article</label>
      <div class="col-sm-9">
        <input name="name" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Description of article</label>
      <div class="col-sm-9">
        <div class="form-group">
          <input name="description" type="text" class="form-control form-control-lg">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Price of article</label>
      <div class="col-sm-9">
        <input name="price" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Picture</label>
      <div class="col-sm-9">
        <label class="custom-file">
          <input type="file" id="picture-input" name="picture" class="custom-file-input">
          <span class="custom-file-control" id="file-control">Browse a file</span>
        </label>
      </div>
    </div>
    <div class="line"></div>
    <div class="form-group row">
      <div class="col-sm-9 ml-auto">
        <button type="submit" class="btn btn-secondary">Cancel</button>
        <button name="add" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>

</form>