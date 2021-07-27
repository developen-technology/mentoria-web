<?php

class m0001_initial {
    public function up()
    {
        //echo "Applying migration";

        $db = \app\core\Application::$app->db;
        $sql = "CREATE TABLE users(
                id INT AUTO_INCREMENT KEY,
                email VARCHAR(255) NOT NULL,
                firstname VARCHAR(255) NOT NULL,
                lastname VARCHAR(255) NOT NULL,
                status TINYINT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=INNODB";
        
        $db->pdo->exec($sql);
    }

    public function down()
    {
        //echo "Reversing migration";
        $db = \app\core\Application::$app->db;
        $sql = "DROP TABLE users";        
        $db->pdo->exec($sql);
    }    
}