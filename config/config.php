<?php

#$GLOBALS['TL_HOOKS']['parseArticles'][] = array('NewsVGWort', 'myParseArticles');

array_insert($GLOBALS['FE_MOD']['news'], count($GLOBALS['FE_MOD']['news']), array
(
    'newsvgwort'  => 'ModuleNewsVGWort'
));
