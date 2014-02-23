<h1><?php echo $poll->question; ?></h1>
<ul>
<?php foreach ($options as $option) { ?>
    <li><?php echo $option->name; ?>.<?php echo $option->number_votes; ?> <?php echo $this->tag->linkTo(array('poll/vote/' . $option->id, 'vote')); ?></li>
<?php } ?>
</ul>
<p>
<?php echo $this->tag->linkTo(array('poll/add/' . $poll->id, 'add')); ?><br>
<?php echo $this->tag->linkTo(array('poll/', 'Go back')); ?>
</p>
