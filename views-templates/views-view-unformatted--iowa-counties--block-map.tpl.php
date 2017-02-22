<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<map name="iowa_counties_map" id="iowa_counties_map">
<?php foreach ($rows as $id => $row): ?>
  <?php print $row; ?>
<?php endforeach; ?>
</map>
<img src="<?php print base_path() . drupal_get_path('module', 'iowa_counties'); ?>/views-templates/iowa_counties_named.svg" alt="Map of Iowa Counties" usemap="#iowa_counties_map" />
