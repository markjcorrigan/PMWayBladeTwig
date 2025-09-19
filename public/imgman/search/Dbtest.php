<?php
/////My understanding is that this creates a specific database connection.
//I.e. you would use this along with Database.php and Config.php to customize a number of different database connections, this page slightly different for each.
require_once 'Database.php';

  class Dbtest {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }

    

    // Get All Posts
    public function getUsers(){
      $this->db->query("SELECT * from users");
      $results = $this->db->resultset();

      return $results;
    }

    // Get Post By ID
    public function getUserById($id){
      $this->db->query("SELECT * FROM users WHERE id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

      
      /*
    // Add Post
    public function addPost($data){
      // Prepare Query
      $this->db->query('INSERT INTO images (id, path, showing, created_at) 
      VALUES (:id, :path, :showing, :created_at)');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':path', $data['path']);
      $this->db->bind(':showing', $data['showing']);
      $this->db->bind(':created_at', $data['created_at']);
     

      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Update Post
    public function updatePost($data){
      // Prepare Query
      $this->db->query('UPDATE test SET id = :id, path = :path, showing = :showing, created_at = :created_at WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':path', $data['path']);
      $this->db->bind(':showing', $data['showing']);
      $this->db->bind(':created_at', $data['created_at']);
  
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    
    */

    // Delete Post
    public function deleteUser($id){
      // Prepare Query
      $this->db->query('DELETE FROM users WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $id);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }