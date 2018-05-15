<?PHP

namespace etrak;

abstract class Singleton
{
    /**
     * Container for the objects.
     *
     * @since   0.1
     */
    private static $registry = array();
    /**
     * Get an instance of the current, called class.
     *
     * @since   0.1
     * @access  public
     * @return  object An instance of $cls
     */
    public static function instance()
    {
        $cls = get_called_class();
        !isset(self::$registry[$cls]) && self::$registry[$cls] = new $cls;
        return self::$registry[$cls];
    }
    abstract protected function __construct();
}

?>