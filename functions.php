<?php
require_once('./langs.php');

$langs = new Langs();

function current_lang_code() {
  global $langs;
  return $langs->get_current_lang()['code'];
}

function __($key) {
  global $langs;
  return $langs->__($key);
}