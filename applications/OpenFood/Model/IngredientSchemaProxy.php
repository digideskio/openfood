<?php
/**
 * THIS FILE IS AUTO-GENERATED BY LAZYRECORD,
 * PLEASE DO NOT MODIFY THIS FILE DIRECTLY.
 * 
 * Last Modified: April 20th at 2:14pm
 */
namespace OpenFood\Model;


use LazyRecord;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\Relationship;

class IngredientSchemaProxy extends RuntimeSchema
{

    public static $column_names = array (
  0 => 'name',
  1 => 'id',
);
    public static $column_hash = array (
  'name' => 1,
  'id' => 1,
);
    public static $mixin_classes = array (
);
    public static $column_names_include_virtual = array (
  0 => 'name',
  1 => 'id',
);

    const schema_class = 'OpenFood\\Model\\IngredientSchema';
    const collection_class = 'OpenFood\\Model\\IngredientCollection';
    const model_class = 'OpenFood\\Model\\Ingredient';
    const model_name = 'Ingredient';
    const model_namespace = 'OpenFood\\Model';
    const primary_key = 'id';
    const table = 'ingredients';
    const label = 'Ingredient';

    public function __construct()
    {
        /** columns might have closure, so it can not be const */
        $this->columnData      = array( 
  'name' => array( 
      'name' => 'name',
      'attributes' => array( 
          'isa' => 'str',
          'type' => 'varchar',
          'primary' => NULL,
          'length' => 30,
        ),
    ),
  'id' => array( 
      'name' => 'id',
      'attributes' => array( 
          'isa' => 'int',
          'type' => 'int',
          'primary' => true,
          'autoIncrement' => true,
        ),
    ),
);
        $this->columnNames     = array( 
  'id',
  'name',
);
        $this->primaryKey      = 'id';
        $this->table           = 'ingredients';
        $this->modelClass      = 'OpenFood\\Model\\Ingredient';
        $this->collectionClass = 'OpenFood\\Model\\IngredientCollection';
        $this->label           = 'Ingredient';
        $this->relations       = array( 
  'foods' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 1,
      'self_column' => 'id',
      'self_schema' => 'OpenFood\\Model\\IngredientSchema',
      'foreign_column' => 'ingredient_id',
      'foreign_schema' => 'OpenFood\\Model\\FoodSchema',
    ),
  'accessor' => 'foods',
  'where' => NULL,
  'orderBy' => array( 
    ),
)),
);
        $this->readSourceId    = 'default';
        $this->writeSourceId    = 'default';
        parent::__construct();
    }


    /**
     * Code block for message id parser.
     */
    private function __() {
        _('Ingredient');
    }

}
