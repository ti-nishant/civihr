<?php
/*
+--------------------------------------------------------------------+
| CiviHR version 1.2                                                 |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2013                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/HRJob/HRJobRole.xml
 * DO NOT EDIT.  Generated by GenCode.php
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_HRJob_DAO_HRJobRole extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_hrjob_role';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = true;
  /**
   * Unique HRJobRole ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to Job
   *
   * @var int unsigned
   */
  public $job_id;
  /**
   * Negotiated name for the role
   *
   * @var string
   */
  public $title;
  /**
   * Negotiated name for the role
   *
   * @var text
   */
  public $description;
  /**
   * Amount of time allocated for work (in a given week)
   *
   * @var float
   */
  public $hours;
  /**
   *
   * @var string
   */
  public $region;
  /**
   *
   * @var string
   */
  public $department;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $manager_contact_id;
  /**
   *
   * @var string
   */
  public $functional_area;
  /**
   *
   * @var string
   */
  public $organization;
  /**
   *
   * @var string
   */
  public $cost_center;
  /**
   * Main work location
   *
   * @var string
   */
  public $location;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_hrjob_role
   */
  function __construct()
  {
    $this->__table = 'civicrm_hrjob_role';
    parent::__construct();
  }
  /**
   * return foreign keys and entity references
   *
   * @static
   * @access public
   * @return array of CRM_Core_EntityReference
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = array(
        new CRM_Core_EntityReference(self::getTableName() , 'job_id', 'civicrm_hrjob', 'id') ,
        new CRM_Core_EntityReference(self::getTableName() , 'manager_contact_id', 'civicrm_contact', 'id') ,
      );
    }
    return self::$_links;
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
        ) ,
        'job_id' => array(
          'name' => 'job_id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
          'FKClassName' => 'CRM_HRJob_DAO_HRJob',
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Title') ,
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Description') ,
        ) ,
        'hours' => array(
          'name' => 'hours',
          'type' => CRM_Utils_Type::T_FLOAT,
          'title' => ts('Amount') ,
        ) ,
        'region' => array(
          'name' => 'region',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Region') ,
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'hrjob_role_department' => array(
          'name' => 'department',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Job Role Department') ,
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
          'export' => true,
          'where' => 'civicrm_hrjob_role.department',
          'headerPattern' => '',
          'dataPattern' => '',
          'pseudoconstant' => array(
            'optionGroupName' => 'hrjob_department',
          )
        ) ,
        'manager_contact_id' => array(
          'name' => 'manager_contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'functional_area' => array(
          'name' => 'functional_area',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Functional Area') ,
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'organization' => array(
          'name' => 'organization',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Organization') ,
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'cost_center' => array(
          'name' => 'cost_center',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Cost Center') ,
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'location' => array(
          'name' => 'location',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Location') ,
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
          'pseudoconstant' => array(
            'optionGroupName' => 'hrjob_location',
          )
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'job_id' => 'job_id',
        'title' => 'title',
        'description' => 'description',
        'hours' => 'hours',
        'region' => 'region',
        'department' => 'hrjob_role_department',
        'manager_contact_id' => 'manager_contact_id',
        'functional_area' => 'functional_area',
        'organization' => 'organization',
        'cost_center' => 'cost_center',
        'location' => 'location',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['hrjob_role'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['hrjob_role'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
