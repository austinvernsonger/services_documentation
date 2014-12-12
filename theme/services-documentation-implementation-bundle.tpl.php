<?php

/**
 * @file
 * Default theme implementation for a method example implementation bundle.
 *
 * Available variables:
 * - $language
 * - $examples
 */
?>
<!-- implementation-bundle -->
<div class="implementation-bundle">
  <h6 class="implementation-bundle-language"><?php print $language; ?></h6>
  <?php foreach ($examples as $example): ?>
    <?php print render($example); ?>
  <?php endforeach; ?>
</div>
<!-- /implementation-bundle -->
