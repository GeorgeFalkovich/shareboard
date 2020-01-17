
<div class="">

        <h3 class="well bg-light py-2 text-center table-bordered">Share Something</h3>

    <div class="">
       <form method="post" action="<? $_SERVER['PHP_SELF'];  ?>">
           <div class="form-group">
               <label for="title">Share Title</label>
               <input id="title" type="text" name="title" class="form-control" placeholder="Inupt title"/>
           </div>
           <div class="form-group">
               <label for="body">Body</label>
               <textarea id="body" type="text" name="body" class="form-control" placeholder="Input text info"></textarea>
           </div>
           <div class="form-group">
               <label for="link">Link</label>
               <input id="id" type="text" name="link" class="form-control" placeholder="Input link"/>
           </div>
           <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
           <a href="<?= ROOT_PATH; ?>" class="btn btn-danger">Cancel</a>
       </form>

    </div>
</div>