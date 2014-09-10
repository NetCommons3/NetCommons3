<?php
/**
 * All test suite
 */

/**
 * All test suite
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
class AllTest extends CakeTestSuite {

/**
 * All test suite
 *
 * @author Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @return CakeTestSuite
 */
	public static function suite() {
		$suite = new CakeTestSuite('All tests');
		$suite->addTestDirectoryRecursive(TESTS . 'Case');
		return $suite;
	}
}
