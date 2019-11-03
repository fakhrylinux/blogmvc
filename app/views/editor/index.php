<div class="container">

    <?php $param = ParseURL::parse($_GET['url']); if (isset($param[2])): ?>
    <form method='post' id='formEditor' action='<?= BASEURL; ?>/editor/update' id='editor'>
    <?php else: ?>
    <form method='post' id='formEditor' action='<?= BASEURL; ?>/editor/add' id='editor'>
    <?php endif; ?>
            
            <fieldset>
                <legend>New Entry Submission</legend>
                <div class="form-group">
                    <input type="hidden" name="entry_id" value="<?= $data['blog']['entry_id']; ?>" />
                    <label for="titleEdit">Title</label>
                    <input type="text" id="titleEdit" class="form-control" name="title" maxlength="150" placeholder="Enter title" value="<?= $data['blog']['title']; ?>" required />
                </div>

                <div class="form-group">
                    <label>Entry</label>
                    <textarea name="entry_text" id="summernote" placeholder="Your content here"><?= $data['blog']['entry_text']; ?></textarea>


                </div>

                <fieldset id="editor-buttons">
                    <input type="submit" name="action" value="save" />                    
                    <p id="editor-message"></p>
                </fieldset>
            </fieldset>    
        </form>
</div>

