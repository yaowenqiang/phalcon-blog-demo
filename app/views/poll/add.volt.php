<h1>Add Option</h1>
<form method='post'>
    <p>
        <?php echo $this->tag->textField(array('name')); ?>
    </p>
    <p>
        <?php echo $this->tag->submitButton(array('Save')); ?>
        <?php echo $this->tag->linkTo(array('poll/', 'Cancel')); ?>
    </p>
</form>
