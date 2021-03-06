<?php
namespace TestDbAcleTests\TestDbAcle\Db;

class  BasePdoFacadeTestCase extends \TestDbAcleTests\TestDbAcle\BaseTestCase
{
    protected $pdoFacade;
    protected $mockPdo;
    
    protected function createMock($className, $methods = array(), $constructorParameters = array()) {
        $mock = $this->getMock($className, $methods, $constructorParameters, "_Mock_" . uniqid($className));
        return $mock;
    }

    protected function createMockStatement($returnedData) {
        $mockPdoStatement = $this->createMock('PDOStatement', array('fetchAll'));
        $mockPdoStatement->expects($this->any())->method('fetchAll')->with(\PDO::FETCH_ASSOC)->will($this->returnValue($returnedData));
        return $mockPdoStatement;
    }
}
