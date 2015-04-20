<?php
namespace OpenFood\Model;
use LazyRecord\Schema\SchemaDeclare;

class IngredientSchema extends SchemaDeclare
{
    public function schema() {
        $this->column('name')->varchar(30);
        $this->column('scientific_name')->varchar(60);
        $this->column('other_names')->varchar(60);
        $this->many('foods', 'OpenFood\\Model\\FoodSchema', 'ingredient_id', 'id');
    }
}
