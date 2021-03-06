<?php
$module_name = 'legal_lawyers';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'CONTACT INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'EXPERIENCE' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'VOLUNTEER INFO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'NOTES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'DEFAULT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'label' => 'LBL_FIRST_NAME',
            'tabindex' => '1',
          ),
          1 => 
          array (
            'name' => 'organization_c',
            'label' => 'LBL_ORGANIZATION',
            'tabindex' => '4',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_LAST_NAME',
            'tabindex' => '2',
          ),
          1 => 
          array (
            'name' => 'nlg_c',
            'label' => 'LBL_NLG',
            'tabindex' => '3',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'public_defender_c',
            'label' => 'LBL_PUBLIC_DEFENDER',
            'tabindex' => '5',
          ),
        ),
      ),
      'CONTACT INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
            'tabindex' => '10',
          ),
          1 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS_STREET',
            'tabindex' => '14',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
            'tabindex' => '11',
          ),
          1 => 
          array (
            'name' => 'primary_address_city',
            'label' => 'LBL_PRIMARY_ADDRESS_CITY',
            'tabindex' => '15',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
            'tabindex' => '12',
          ),
          1 => 
          array (
            'name' => 'primary_address_state',
            'label' => 'LBL_PRIMARY_ADDRESS_STATE',
            'tabindex' => '16',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX_PHONE',
            'tabindex' => '13',
          ),
          1 => 
          array (
            'name' => 'primary_address_postalcode',
            'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
            'tabindex' => '17',
          ),
        ),
      ),
      'EXPERIENCE' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'license_number_c',
            'label' => 'LBL_LICENSE_NUMBER',
            'tabindex' => '20',
          ),
          1 => 
          array (
            'name' => 'federal_practice_c',
            'label' => 'LBL_FEDERAL_PRACTICE',
            'tabindex' => '25',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'practicing_states_c',
            'label' => 'LBL_PRACTICING_STATES',
            'tabindex' => '21',
          ),
          1 => 
          array (
            'name' => 'represented_protestors_c',
            'label' => 'LBL_REPRESENTED_PROTESTORS',
            'tabindex' => '26',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'years_in_practice_c',
            'label' => 'LBL_YEARS_IN_PRACTICE',
            'tabindex' => '22',
          ),
          1 => 
          array (
            'name' => 'civil_rights_experience_c',
            'label' => 'LBL_CIVIL_RIGHTS_EXPERIENCE',
            'tabindex' => '27',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'years_in_crim_practice_c',
            'label' => 'LBL_YEARS_IN_CRIM_PRACTICE',
            'tabindex' => '23',
          ),
          1 => 
          array (
            'name' => 'regular_courts_c',
            'label' => 'LBL_REGULAR_COURTS',
            'tabindex' => '28',
          ),
        ),
      ),
      'VOLUNTEER INFO' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lawyer_roles_c',
            'label' => 'LBL_LAWYER_ROLES',
            'tabindex' => '40',
          ),
          1 => 
          array (
            'name' => 'lawyersspecialties_c',
            'label' => 'LBL_LAWYERSSPECIALTIES',
            'tabindex' => '41',
          ),
        ),
      ),
      'NOTES' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
            'tabindex' => '50',
          ),
          1 => 
          array (
            'name' => 'case_notes_c',
            'studio' => 'visible',
            'label' => 'LBL_CASE_NOTES',
          ),
        ),
      ),
    ),
  ),
);
?>
