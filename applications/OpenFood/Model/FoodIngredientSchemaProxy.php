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

class FoodIngredientSchemaProxy extends RuntimeSchema
{

    public static $column_names = array (
  0 => 'food_id',
  1 => 'ingredient',
  2 => 'id',
);
    public static $column_hash = array (
  'food_id' => 1,
  'ingredient' => 1,
  'id' => 1,
);
    public static $mixin_classes = array (
);
    public static $column_names_include_virtual = array (
  0 => 'food_id',
  1 => 'ingredient',
  2 => 'id',
);

    const schema_class = 'OpenFood\\Model\\FoodIngredientSchema';
    const collection_class = 'OpenFood\\Model\\FoodIngredientCollection';
    const model_class = 'OpenFood\\Model\\FoodIngredient';
    const model_name = 'FoodIngredient';
    const model_namespace = 'OpenFood\\Model';
    const primary_key = 'id';
    const table = 'food_ingredients';
    const label = 'FoodIngredient';

    public function __construct()
    {
        /** columns might have closure, so it can not be const */
        $this->columnData      = array( 
  'food_id' => array( 
      'name' => 'food_id',
      'attributes' => array( 
          'isa' => 'int',
          'type' => 'int',
          'primary' => NULL,
        ),
    ),
  'ingredient' => array( 
      'name' => 'ingredient',
      'attributes' => array( 
          'isa' => 'int',
          'type' => 'int',
          'primary' => NULL,
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
  'food_id',
  'ingredient',
);
        $this->primaryKey      = 'id';
        $this->table           = 'food_ingredients';
        $this->modelClass      = 'OpenFood\\Model\\FoodIngredient';
        $this->collectionClass = 'OpenFood\\Model\\FoodIngredientCollection';
        $this->label           = 'FoodIngredient';
        $this->relations       = array( 
  'food' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 3,
      'self_schema' => 'OpenFood\\Model\\FoodIngredientSchema',
      'self_column' => 'food_id',
      'foreign_schema' => 'OpenFood\\Model\\FoodSchema',
      'foreign_column' => 'id',
    ),
  'accessor' => 'food',
  'where' => NULL,
  'orderBy' => array( 
    ),
)),
  'ingredient' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 3,
      'self_schema' => 'OpenFood\\Model\\FoodIngredientSchema',
      'self_column' => 'ingredient_id',
      'foreign_schema' => 'OpenFood\\Model\\IngredientSchema',
      'foreign_column' => 'id',
    ),
  'accessor' => 'ingredient',
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
        _('FoodIngredient');
    }

}
