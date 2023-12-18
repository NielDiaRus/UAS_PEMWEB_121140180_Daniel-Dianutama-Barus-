<?php


class TaskManager {
    public function processTask($task, $priority, $completed, $category) {
        

        
        $database = new Database(); 
        $database->connect();
        $database->insertTask($task, $priority, $completed, $category);
        $database->close();

       
        return [
            'success' => true,
            'message' => 'Task added successfully.'
        ];
    }
}
?>
