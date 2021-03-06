<?php

namespace Jasny\DB;

/**
 * An entity is a "thing" you want to represent in the database.
 * 
 * @author  Arnold Daniels <arnold@jasny.net>
 * @license https://raw.github.com/jasny/db/master/LICENSE MIT
 * @link    https://jasny.github.com/db
 */
interface Entity extends \JsonSerializable
{
    /**
     * Set the values.
     * {@interal Using Entity::setValues() shouldn't be any different than setting the properties one by one }}
     * 
     * @param array|object $values
     * @return $this
     */
    public function setValues($values);

    /**
     * Get the values.
     * {@interal Using Entity::getValues() shouldn't be any different than getting the properties one by one }}
     * 
     * @param array|object $values
     * @return $this
     */
    public function getValues();
    
    
    /**
     * Convert loaded values to an entity.
     * 
     * @param object $values
     * @return static
     */
    public static function fromData($values);
    
    /**
     * Get data that needs stored in the DB
     * 
     * @return array
     */
    public function toData();
    
    
    /**
     * Create an entity set
     * 
     * @param Entities[]|\Traversable $entities  Array of entities
     * @param int|\Closure            $total     Total number of entities (if set is limited)
     * @param int                     $flags     Control the behaviour of the entity set
     * @return EntitySet
     */
    public static function entitySet($entities = [], $total = null, $flags = 0);
}
