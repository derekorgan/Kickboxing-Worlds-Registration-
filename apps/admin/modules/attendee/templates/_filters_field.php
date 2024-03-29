<?php if ($field->isPartial()): ?>
  <?php include_partial('attendee/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php elseif ($field->isComponent()): ?>
  <?php include_component('attendee', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php else: ?>

 <?php if($i % 3 == 0): ?>
  <tr class="<?php echo $class ?>">
 <?php endif; ?>
      
    <td>
      <?php echo $form[$name]->renderLabel($label) ?>
    </td>
    <td>
      <?php echo $form[$name]->renderError() ?>

      <?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>

      <?php if ($help || $help = $form[$name]->renderHelp()): ?>
        <div class="help"><?php echo __($help, array(), 'messages') ?></div>
      <?php endif; ?>
        
    </td>
 <?php if($i % 3 == 2): ?>
  </tr>
 <?php endif; ?>
<?php endif; ?>
