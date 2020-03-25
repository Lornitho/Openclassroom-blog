<?php
namespace App\src\model;

class Commentaire {
    
    /**
     * @var int
     */
    private $id ;
    /**
     * @var string
     */
    private  $username;
    /**
     * @var string
     */
    private  $text;
      /**
     * @var int
     */
    private $idBillet;

    /**
     * @var \DateTime
     */
    private $dateComment;

    /**
     * @return int
     */

    public function getId(){
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id){
        $this->id=$id; 
    }
        
    public function idillet(){
        return $this->idbillet;
    }
    
    public function setIdbillet($idbillet){
        $this->idbillet=$idbillet; 
    }
    
     /**
     * @return string
     */
    public function getUsername(){
        return $this->username;
    }

     /**
     * @param int $id
     */
    public function setUsername($username){
        $this->username=$username; 
    }

     /**
     * @return string
     */
    public function getText(){
        return $this->text;
    }

     /**
     * @param int $id
     */
    public function setText($text){
        $this->text=$text; 
    }
    /**
     * @return \DateTime
     */
    public function getDateComment(){
        return $this->dateComment;
    }
    /**
     * @param \DateTime $dateComment
     */
    public function setDateComment($dateComment){
        $this->dateComment=$dateComment; 
    }
    
}