<?php

/**
 * Test class for Symfony_Component_Templating_Storage_FileStorage.
 * Generated by PHPUnit on 2012-02-25 at 20:22:42.
 */
class Symfony_Component_Templating_Storage_FileStorageTest extends PHPUnit_Framework_TestCase
{

	public function testGetContent()
    {
        $storage = new Symfony_Component_Templating_Storage_FileStorage('foo');
        $this->assertInstanceOf('Symfony_Component_Templating_Storage_Storage', $storage, 'FileStorage is an instance of Storage');
        $storage = new Symfony_Component_Templating_Storage_FileStorage(__DIR__.'/../Fixtures/templates/foo.php');
        $this->assertEquals('<?php echo $foo ?>'."\n", $storage->getContent(), '->getContent() returns the content of the template');
    }

}

?>
