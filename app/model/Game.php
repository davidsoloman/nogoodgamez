<?php
namespace Documents;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */

class Game
{	
	/** @ODM\Id */
    private $id;
 
    /** @ODM\String */
    private $pic;

    /** @ODM\Collection */
    private $platforms = array();

    /** @ODM\String */
    private $name;

    /** @ODM\Collection*/
    private $genres = array();

    public function addGenre($genre)
    {
    	$this->genres[] = $genre;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPic($uri)
    {
        $this->pic = $uri;
    }

    public function addPlatform($platform)
    {
        $this->platforms[] = $platform;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPlatforms()
    {
        return $this->platforms;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPic()
    {
        return $this->pic;
    }

    public function getGenres()
    {
        return $this->genres;
    }



  
}



?>