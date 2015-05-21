<?php
/**
 * Test Case bake template
 *
 * @copyright NetCommons Project
 * @link http://www.netcommons.org
 * @package Cake.Console.Templates.NetCommons.classes
 * @license http://www.netcommons.org/license.txt NetCommons License
 */

echo "<?php\n";
?>
/**
 * <?php echo $fullClassName; ?> Test Case
 *
<?php echo Configure::read('PhpDocumentor.classHeader') . "\n" ?>
 */

<?php foreach ($uses as $dependency): ?>
App::uses('<?php echo $dependency[0]; ?>', '<?php echo $dependency[1]; ?>');
<?php endforeach; ?>

/**
 * Summary for <?php echo $fullClassName; ?> Test Case
 */
<?php if ($type === 'Controller'): ?>
class <?php echo $fullClassName; ?>Test extends ControllerTestCase {
<?php else: ?>
class <?php echo $fullClassName; ?>Test extends CakeTestCase {
<?php endif; ?>

<?php if (!empty($fixtures)): ?>
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'<?php echo join("',\n\t\t'", $fixtures); ?>'
	);

<?php endif; ?>
<?php if (!empty($construction)): ?>
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
<?php echo $preConstruct ? "\t\t" . $preConstruct : ''; ?>
		$this-><?php echo $className . ' = ' . $construction; ?>
<?php echo $postConstruct ? "\t\t" . $postConstruct : ''; ?>
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this-><?php echo $className; ?>);

		parent::tearDown();
	}

<?php endif; ?>
<?php foreach ($methods as $method): ?>
/**
 * test<?php echo Inflector::camelize($method); ?> method
 *
 * @return void
 */
	public function test<?php echo Inflector::camelize($method); ?>() {
	}

<?php endforeach; ?>
}
