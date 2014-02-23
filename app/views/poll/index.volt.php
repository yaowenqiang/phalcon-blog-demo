<h1>Polls</h1>
<ul>
<?php foreach ($polls as $poll) { ?>
    <li><?php echo $this->tag->linkTo(array('/poll/show/' . $poll->id, $poll->question)); ?></li>
<?php } ?>
</ul>
