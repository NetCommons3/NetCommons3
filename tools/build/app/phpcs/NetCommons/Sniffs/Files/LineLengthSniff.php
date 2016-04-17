<?php
/**
 * Generic_Sniffs_Files_LineLengthSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author Greg Sherwood <gsherwood@squiz.net>
 * @author Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link	  http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * Generic_Sniffs_Files_LineLengthSniff.
 *
 * Checks all lines in the file, and throws warnings if they are over 80
 * characters in length and errors if they are over 100. Both these
 * figures can be changed by extending this sniff in your own standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author	Greg Sherwood <gsherwood@squiz.net>
 * @author	Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link	  http://pear.php.net/package/PHP_CodeSniffer
 */
class NetCommons_Sniffs_Files_LineLengthSniff extends Generic_Sniffs_Files_LineLengthSniff
{
	/**
	 * Processes this test, when one of its tokens is encountered.
	 *
	 * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
	 * @param int $stackPtr The position of the current token in the stack passed in $tokens.
	 *
	 * @return int
	 */
	public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
	{
		return parent::process($phpcsFile, $stackPtr);
	}//end process()

	/**
	 * Checks if a line is too long.
	 *
	 * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
	 * @param array $tokens The token stack.
	 * @param int $stackPtr The first token on the next line.
	 *
	 * @return null|false
	 */
	protected function checkLineLength(PHP_CodeSniffer_File $phpcsFile, $tokens, $stackPtr)
	{
		//コメントは除外する
		$str = substr(trim($stackPtr), 0, 2);
		if (in_array($str, ['/*', '*', '*' . chr(9), '* ', '//', '*/'], true)) {
			return;
		}

		parent::checkLineLength($phpcsFile, $tokens, $stackPtr);
	}//end checkLineLength()

}//end class
