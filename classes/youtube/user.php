<?php defined('SYSPATH') or die('No direct script access.');

class YouTube_User {

    protected $_user;

    protected $_playlists;

    public function __construct($name)
    {
        $this->_playlists = new YouTube_Playlist($this->_user = $name);
    }

    public function playlists()
    {
        return $this->_playlists;
    }
}
