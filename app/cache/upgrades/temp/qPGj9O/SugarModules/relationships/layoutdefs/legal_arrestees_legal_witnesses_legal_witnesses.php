<?php
 // created: 2014-12-11 18:41:41
$layout_defs["legal_witnesses"]["subpanel_setup"]['legal_arrestees_legal_witnesses'] = array (
  'order' => 100,
  'module' => 'legal_arrestees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEGAL_ARRESTEES_LEGAL_WITNESSES_FROM_LEGAL_ARRESTEES_TITLE',
  'get_subpanel_data' => 'legal_arrestees_legal_witnesses',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
