<?php $this->layout('layout-error', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>
<h1>404. Perdu ?</h1>
<h2>OH NOES! PAGE NOT FOUND</h2><br>

<h2>This is the part of web development that I hate the most. I have to tell you that what you were expecting
didn't happen. You were looking to access a page that was probably once on my website, but isn't there any more. I'd like
to say that this was a technical error, but likely it's not. The fact is, I'm not that good at keeping track of things. I
mean, I'm not the kind of person who would lose a baby or anything. Seriously, your baby is safe with me, but web pages....well,
that's another thing. I misplace them all the time. And, in this case, I've done so with the one you were looking for. I'm
sorry. Feel free to curse my name. But remember...I love you.</h2>

<a href="<?= $this->url('default_home') ?>" class="btn btn-danger"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
<?php $this->stop('main_content'); ?>
