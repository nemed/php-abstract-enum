<?php
namespace ctur\base;
/**
 * Class Enum
 * @author Cyril Turkevich
 */
abstract class Enum
{
    /**
     * @var array $list data
     */
    protected static $list = array();

    /**
     * List data.
     * @return array|null data.
     */
    public static function listData()
    {
        return static::$list;
    }

    /**
     * @param string $id
     * @return string|null
     */
    public static function labelById($id)
    {
        return isset(static::$list[$id]) ? static::$list[$id] : null;
    }

    /**
     * @param string $label
     * @return string|null
     */
    public static function idByLabel($label)
    {
        $list = array_flip(static::$list);
        return isset($list[$label]) ? $list[$label] : null;
    }
}
