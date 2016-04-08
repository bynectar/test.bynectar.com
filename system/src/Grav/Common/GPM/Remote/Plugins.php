<?php
namespace Grav\Common\GPM\Remote;

/**
 * Class Plugins
 * @package Grav\Common\GPM\Remote
 */
class Plugins extends AbstractPackageCollection
{
    /**
     * @var string
     */
    protected $type = 'plugins';

    protected $repository = 'https://getgrav.org/downloads/plugins.json';

    /**
     * Local Plugins Constructor
     * @param bool $refresh
     * @param callable $callback Either a function or callback in array notation
     */
    public function __construct($refresh = false, $callback = null)
    {
        $this->repository .= '?v=' . GRAV_VERSION;

        parent::__construct($this->repository, $refresh, $callback);
    }
}
