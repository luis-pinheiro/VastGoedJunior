<?php
/**
 * @package     vastgoedjunior
 * @subpackage  tpl_vastgoedjunior
 *
 * @author       <>
 * @copyright   Copyright (C)  . All rights reserved.
 * @license     GNU
 */

// No direct access.
defined('_JEXEC') or die;

/*
 * welkom
 */
function modChrome_welkom($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <section class="vastgoedjunior-background<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
    <?php if ((bool) $module->showtitle) : ?>
      <h2><?php echo $module->title; ?></h2>
    <?php endif; ?>
      <?php echo $module->content; ?>
    </section>
  <?php endif;
}

/*
 * logo
 */
function modChrome_logo($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <section class="vastgoedjunior-background<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
    <?php if ((bool) $module->showtitle) : ?>
      <h2><?php echo $module->title; ?></h2>
    <?php endif; ?>
      <?php echo $module->content; ?>
    </section>
  <?php endif;
}

/*
 * Navbar
 */
function modChrome_navbar($module, &$params, &$attribs)
{
  echo $module->content;
}


/*
 * hoe_img
 */
function modChrome_hoe_img($module, &$params, &$attribs)
{
  echo $module->content;
}


/*
 * btn_reg
 */
function modChrome_btn_reg($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <button id="btn-registreren<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
      <?php echo $module->content; ?>
    </button>
  <?php endif;
}

/*
 * btn_meer
 */
function modChrome_btn_meer($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <button id="btn-lees-meer<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
      <?php echo $module->content; ?>
    </button>
  <?php endif;
}


/*
 * linkedin
 */
function modChrome_linkedin($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <a href="<?php echo $module->content ?> " target="_blank">
      <span class="vgv vgv-32"></span>
    </a>
  <?php endif;
}


/*
 * twitter
 */
function modChrome_twitter($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <a href="<?php echo $module->content ?> " target="_blank">
      <span class="vgv vgv-footer4"></span>
    </a>
  <?php endif;
}


/*
 * waarom
 */
function modChrome_waarom($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <div <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
    <?php if ((bool) $module->showtitle) : ?>
      <h2 class="text-center"><?php echo $module->title; ?></h2>
    <?php endif; ?>
    <p class="text-center"> <?php echo $module->content; ?></p>
    </div>
  <?php endif;
}

/*
 * formule
 */
function modChrome_formule($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <div <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
    <?php if ((bool) $module->showtitle) : ?>
      <h2 class="text-center"><?php echo $module->title; ?></h2>
    <?php endif; ?>
    <p class="text-center"> <?php echo $module->content; ?></p>
    </div>
  <?php endif;
}


/*
 * nieuws
 */
function modChrome_nieuws($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <div <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
    <?php if ((bool) $module->showtitle) : ?>
      <h2 class="text-center"><?php echo $module->title; ?></h2>
    <?php endif; ?>
    <p class="text-center"> <?php echo $module->content; ?></p>
    </div>
     <a class="btn btn-primary btn-sm btn-nw" data-toggle="modal" href='#Nieuws-modal'>Meer</a>
  <?php endif;
}


/*
 * nieuws_header
 */
function modChrome_nieuws_header($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
  <h3><?php echo $module->title; ?></h3>
  <?php endif;
}


/*
 * nieuws_header_mod
 */
function modChrome_nieuws_header_mod($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
  <h4 class="modal-title"><?php echo $module->title; ?></h3>
  <?php endif;
}


/*
 * nieuws_mod
 */
function modChrome_nieuws_mod($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <div class="nieuws-art-mod<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
    <?php if ((bool) $module->showtitle) : ?>
      <h4><?php echo $module->title; ?></h4>
    <?php endif; ?>
    <p> <?php echo $module->content; ?></p>
    </div>
  <?php endif;
}


/*
 * hoe
 */
function modChrome_hoe($module, &$params, &$attribs)
{
  if (!empty ($module->content)) : ?>
    <div<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
    <?php if ((bool) $module->showtitle) : ?>
      <h2 id="werkt" class="text-center"><?php echo $module->title; ?></h2>
    <?php endif; ?>
    <p class="text-center"> <?php echo $module->content; ?></p>
    </div>
  <?php endif;
}
