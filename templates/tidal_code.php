
<?php $max = sizeof($site->data["tidalsnippets"]); ?>

<?php $randomNumber  = rand(0,$max-1); ?>
<?php $randomNumber1 = rand(0,$max-1); ?>
<?php $randomNumber2 = rand(0,$max-1); ?>
<?php $randomNumber3 = rand(0,$max-1); ?>

<?php $snippets = $site->data["tidalsnippets"]; ?>

<div class="insert--div-tidalcode">

<code class="language-haskell insert--code-tidalcode">
    <?php echo $snippets[$randomNumber]->code ?>
</code>
<code class="language-haskell insert--code-tidalcode">
    <?php echo $snippets[$randomNumber1]->code ?>
</code>
<code class="language-haskell insert--code-tidalcode">
    <?php echo $snippets[$randomNumber2]->code ?>
</code>
<code class="language-haskell insert--code-tidalcode">
    <?php echo $snippets[$randomNumber3]->code ?>
</code>
<!-- {% for snippet in snippets ?> -->
<!-- {% endfor ?> -->

</div>

