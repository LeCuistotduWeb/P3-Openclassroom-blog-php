<?php $title = "Billet simple pour l'Alaska | Accueil"; ?>
<?php $heading = "Billet simple pour l'Alaska"; ?>
<?php $subHeading = "Jean - Forteroche"; ?>

<?php ob_start(); ?>
<div class="container">
  <!-- Main Content -->
    <div class="container">
      <div class="row centered">
        <h2 class="mb-2">Mon dernier billet :</h2>
        <!-- dernier billet -->
        <?php foreach ($lastPost as $donnees) { ?>
        <div class="post-preview first-post">
          <a href="index.php?action=post&id=<?= $donnees->id(); ?>">
            <div class="first-post-thumb_container">
              <img src="public/img/<?= $donnees->post_thumbnail(); ?>" alt="photo d'un orque qui nage" class="firstpost-img">
            </div>
            <h3 class="post-title">
              <?= $donnees->title(); ?>
            </h3>
            <p><?= $donnees->excerpt() ;?></p>
          </a>
          <p class="post-meta"><?= $donnees->creation_date(); ?></p>
        </div>
        <?php } ?>
        <!-- dernier billet -->
      </div>
      <hr>
      <div class="row">
      <?php foreach ($posts as $post){?>
        <article class="post-preview col-md-6">
          <a href="index.php?action=post&id=<?= $post->id()?>">
            <div class="post-thumb-content">
              <img src="public/img/<?= $post->post_thumbnail()?>" alt="photo d'un orque qui nage" class="post-img">
            </div>
            <h3 class="post-title"><?= $post->title();?></h3>
            <p><?= $donnees->excerpt();?></p>
          </a>
          <p class="post-meta"><?= $post->creation_date();?></p>
        </article>
        <?php } ?>
      </div>

      <!-- Pager -->
      <!-- <div class="clearfix">
        <a class="btn btn-primary float-right col-xs-6 col-sm-5 col-lg-3 mb-2 px-2" href="index.php?action=oldPost">Anciens billets &rarr;</a>
        <a class="btn btn-primary float-left col-xs-6 col-sm-5 col-lg-3 mb-2 px-2" href="index.php?action=nextPost">&larr; Nouveaux billets</a>
      </div>
    </div> -->

</div>
<?php $content = ob_get_clean(); ?>
<?php require_once 'template.php';
