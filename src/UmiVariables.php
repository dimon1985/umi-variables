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
      define("PARENT_ID",$page instanceof umiHierarchyElement ? $page->getParentId() : false);
      define("PAGE_OTYPE_ID",$page instanceof umiHierarchyElement ? $page->getObjectTypeId() : false);

      $parents = getArrayKey($variables,'parents');
      $parents = getArrayKey($variables,'+page');

      define('TABLE_H', 'cms3_hierarchy');
      define('TABLE_O', 'cms3_hierarchy');
      define('TABLE_OC', 'cms3_hierarchy');

      define("IS_TABLET",\UmiCms\Service::BrowserDetector()->isTablet());
      define("IS_MOBILE",\UmiCms\Service::BrowserDetector()->isMobile());

  }
  
}
