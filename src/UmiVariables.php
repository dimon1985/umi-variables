<?php

/*
 * Добавляет константы в шаблон
 * */

namespace DgroupsVariables;

class UmiVariables{

  public function defineVars($variables)
  {
      define("METHOD",getArrayKey($variables,'@method'));
      define("MODULE",getArrayKey($variables,'@module'));
      define("DOMAIN",getArrayKey($variables,'@domain'));
      define("PAGE_ID",getArrayKey($variables,'@pageId'));
      define("IS_DEFAULT_PAGE",getArrayKey($variables,'@is-default'));
      define("REQUEST_URI",getArrayKey($variables,'@request-uri'));

      $page = getArrayKey($variables,'full:page');
      $parents = getArrayKey($variables,'parents');
      $parents = getArrayKey($variables,'+page');

      define("PAGE_ID",$page instanceof umiHierarchyElement ? $page->getId() : false);

  }

}
