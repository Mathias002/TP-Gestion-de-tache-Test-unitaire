<?php

namespace Ehwa\TestUnitTaskManager\test;

use Ehwa\TestUnitTaskManager\TaskManager;

class TestTaskManager extends \PHPUnit\Framework\TestCase {

    public function testConstruct() {

        $taskConstructor = new TaskManager();

        $this->assertIsArray($taskConstructor->getTasks());

    }

    public function testAddTask() {

        $taskConstructor = new TaskManager();

        $taskConstructor->addTask("Task1");

        $this->assertCount(1, $taskConstructor->getTasks());
        $this->assertEquals("Task1", $taskConstructor->getTask(0));
        
    }


    public function testRemoveTask() {

        $taskConstructor = new TaskManager();

        $taskConstructor->addTask("Task1");

        $taskConstructor->removeTask(0);

        $this->assertCount(0, $taskConstructor->getTasks());

    }

    public function testRemoveTaskOutOfBoundsException() {

        $taskConstructor = new TaskManager();

        $taskConstructor->addTask("Task1");

        $this->expectException(\OutOfBoundsException::class);
        $this->expectExceptionMessage("Index de tâche invalide: 1");

        $taskConstructor->removeTask(1);

    }

    public function testTaskOrderAfterRemoval() {

        $taskConstructor = new TaskManager();

        $taskConstructor->addTask("Task1");
        $taskConstructor->addTask("Task2");
        $taskConstructor->removeTask(0);

        $this->assertIsString($taskConstructor->getTask(0));
        $this->assertEquals("Task2", $taskConstructor->getTask(0));

    }

    public function testGetTasks() {

        $taskConstructor = new TaskManager();

        $taskConstructor->addTask("Task1");
        $taskConstructor->addTask("Task2");

        $this->assertIsArray($taskConstructor->getTasks());
        $this->assertCount(2, $taskConstructor->getTasks());

    }

    public function testGetTask() {

        $taskConstructor = new TaskManager();

        $taskConstructor->addTask("Task1");

        $this->assertIsString($taskConstructor->getTask(0));
        $this->assertEquals("Task1", $taskConstructor->getTask(0));

    }

    public function testGetTaskOutOfBoundsException() {

        $taskConstructor = new TaskManager();

        $taskConstructor->addTask("Task1");

        $this->expectException(\OutOfBoundsException::class);
        $this->expectExceptionMessage("Index de tâche invalide: 1");

        $taskConstructor->getTask(1);

    }

}

?>