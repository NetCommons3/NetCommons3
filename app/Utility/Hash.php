<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       Cake.Utility
 * @since         CakePHP(tm) v 2.2.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * CakeのコアにあるHashだと、パフォーマンスが悪いので、CakeのUtilityをコピーして、
 * パフォーマンスの改善を図る。
 * 基本的には、CakeのHashと同じ動きになるようにする
 *
 * @package Cake.Utility
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class Hash {

/**
 * get() は extract() のシンプル版で、直接的に指定するパス式のみがサポートされます。
 * {n} や {s} 、マッチャーを使ったパスはサポートされません。
 *  配列から１つの値だけを取り出したい場合に get() を使ってください
 *
 * 速度改善メモ：
 * $dataが大量になると、遅くなる。原因は、下記の部分で参照渡しにしていたため。
 * https://github.com/cakephp/cakephp/blob/2.10.9/lib/Cake/Utility/Hash.php#L65
 *
 * @param array $data Array of data to operate on.
 * @param string|array $path The path being searched for. Either a dot
 *   separated string, or an array of path segments.
 * @param mixed $default The return value when the path does not exist
 * @throws InvalidArgumentException
 * @return mixed The value fetched from the array, or null.
 * @link https://book.cakephp.org/2.0/ja/core-utility-libraries/hash.html#Hash::get
 */
	public static function get($data, $path, $default = null) {
		if (empty($data) || $path === null) {
			return $default;
		}

		if (is_string($path) || is_numeric($path)) {
			$parts = explode('.', $path);
		} elseif (is_bool($path) || $path === null) {
			$parts = array($path);
		} elseif (is_array($path)) {
			$parts = $path;
		} else {
			throw new InvalidArgumentException(__d('cake_dev',
				'Invalid path parameter: %s, should be dot separated path or array.',
				var_export($path, true)
			));
		}

		return self::__simpleGet($data, $parts, $default);
	}

/**
 * {n} or {s}, {*}が含まれていないPathから値を取得する
 *
 * @param array $data データ
 * @param array $path Path配列
 * @param mixed $default デフォルト値
 * @return mixed
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 */
	private static function __simpleGet($data, $path, $default = null) {
		if (! $path) {
			return $data;
		}
		$count = count($path);
		if ($count === 1) {
			if (isset($data[$path[0]])) {
				return $data[$path[0]];
			} else {
				return $default;
			}
		} elseif ($count === 2) {
			if (isset($data[$path[0]][$path[1]])) {
				return $data[$path[0]][$path[1]];
			} else {
				return $default;
			}
		} elseif ($count === 3) {
			if (isset($data[$path[0]][$path[1]][$path[2]])) {
				return $data[$path[0]][$path[1]][$path[2]];
			} else {
				return $default;
			}
		} elseif ($count === 4) {
			if (isset($data[$path[0]][$path[1]][$path[2]][$path[3]])) {
				return $data[$path[0]][$path[1]][$path[2]][$path[3]];
			} else {
				return $default;
			}
		} elseif ($count === 5) {
			if (isset($data[$path[0]][$path[1]][$path[2]][$path[3]][$path[4]])) {
				return $data[$path[0]][$path[1]][$path[2]][$path[3]][$path[4]];
			} else {
				return $default;
			}
		} elseif ($count === 6) {
			if (isset($data[$path[0]][$path[1]][$path[2]][$path[3]][$path[4]][$path[5]])) {
				return $data[$path[0]][$path[1]][$path[2]][$path[3]][$path[4]][$path[5]];
			} else {
				return $default;
			}
		} else {
			foreach ($path as $p) {
				if (is_array($data) && isset($data[$p])) {
					$data = $data[$p];
				} else {
					return $default;
				}
			}
			return $data;
		}
	}

/**
 * Hash::extract() は Hash パス構文 にあるすべての式とマッチャーを サポートします。
 * extract を使うことで、配列から好きなパスに沿ったデータを手早く 取り出すことができます。
 * もはやデータ構造をループする必要はありません。 その代わりに欲しい要素を絞り込むパス式を使います。
 *
 * 速度改善メモ：
 * 無駄なループ等を行っていたため、全体的に処理を見直し。
 *
 * @param array $data The data to extract from.
 * @param string $path The path to extract.
 * @return array An array of the extracted values. Returns an empty array
 *   if there are no matches.
 * @link https://book.cakephp.org/2.0/ja/core-utility-libraries/hash.html#Hash::extract
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
	public static function extract($data, $path) {
		if (empty($path)) {
			return $data;
		}

		if (strpos($path, '{') === false && strpos($path, '[') === false) {
			return (array)self::get($data, $path);
		}
		$tokens = explode('.', $path);

		//先頭から完全一致のものに対しては、事前にissetでチェックする。
		foreach ($tokens as $token) {
			if (strpos($token, '{') === false && strpos($token, '[') === false) {
				if (! isset($data[$token])) {
					return [];
				}
				$data = $data[$token];
				array_shift($tokens);
			} else {
				break;
			}
		}

		if (self::__isSimplePath($path)) {
			return self::__simpleFormulaExtract($data, $tokens);
		}

		$_key = '__set_item__';

		$context = [$_key => [$data]];

		foreach ($tokens as $token) {
			$next = [];
			if (strpos($token, '{') === false && strpos($token, '[') === false) {
				foreach ($context[$_key] as $item) {
					$item = (array)$item;
					foreach ($item as $k => $v) {
						if (is_numeric($token) && $k == $token ||
								$k === $token) {
							$next[] = $v;
						}
					}
				}
			} else {
				list($token, $conditions) = self::__splitConditions($token);
				foreach ($context[$_key] as $item) {
					$item = (array)$item;
					foreach ($item as $k => $v) {
						if (! self::__matchToken($k, $token)) {
							continue;
						}
						if ($conditions) {
							if (is_array($v) && self::__matches($v, $conditions)) {
								$next[] = $v;
							}
						} else {
							$next[] = $v;
						}
					}
				}
			}

			$context = [$_key => $next];
		}

		return $context[$_key];
	}

/**
 * 簡単なPathで{n}, {s}, {*}が一つだけ含まれてる場合のextract()処理
 *
 * @param array $data The data to operate on.
 * @param array $tokens The path to work on.
 * @return array data.
 */
	private static function __simpleFormulaExtract($data, $tokens) {
		$token = array_shift($tokens);
		$result = [];

		foreach ($data as $k => $v) {
			if (! self::__matchToken($k, $token)) {
				continue;
			}
			if (is_array($tokens)) {
				if (! is_array($v)) {
					continue;
				}
				$v = self::__simpleGet($v, $tokens);
			}
			$result[] = $v;
		}

		return $result;
	}

/**
 * Split token conditions
 *
 * @param string $token the token being splitted.
 * @return array [token, conditions] with token splitted
 */
	private static function __splitConditions($token) {
		$conditions = false;
		$position = strpos($token, '[');
		if ($position !== false) {
			$conditions = substr($token, $position);
			$token = substr($token, 0, $position);
		}

		return [$token, $conditions];
	}

/**
 * Check a key against a token.
 *
 * @param string $key The key in the array being searched.
 * @param string $token The token being matched.
 * @return bool
 */
	private static function __matchToken($key, $token) {
		if ($token === '{n}') {
			return is_numeric($key);
		} elseif ($token === '{s}') {
			return is_string($key);
		} elseif ($token === '{*}') {
			return true;
		} else {
			return is_numeric($token) ? ($key == $token) : $key === $token;
		}
	}

/**
 * $dataが属性パターンと一致するかどうかをチェックします。
 *
 * @param array $data Array of data to match.
 * @param string $selector The patterns to match.
 * @return bool Fitness of expression.
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
	private static function __matches($data, $selector) {
		$conditions = null;
		preg_match_all(
			'/(\[ (?P<attr>[^=><!]+?) ' .
				'(\s* (?P<op>[><!]?[=]|[><]) ' .
				'\s* (?P<val>(?:\/.*?\/ | [^\]]+)) )? \])/x',
			$selector,
			$conditions,
			PREG_SET_ORDER
		);

		foreach ($conditions as $cond) {
			$cond += ['op' => null, 'val' => null];

			$attr = $cond['attr'];
			$op = $cond['op'];
			$val = $cond['val'];

			// Empty attribute = fail.
			if (!array_key_exists($attr, $data)) {
				return false;
			}

			// Presence test.
			if (empty($op) && empty($val) && !isset($data[$attr])) {
				return false;
			}

			$prop = $data[$attr];

			$isBool = is_bool($prop);
			if ($isBool && is_numeric($val)) {
				$prop = $prop ? '1' : '0';
			} elseif ($isBool) {
				$prop = $prop ? 'true' : 'false';
			} elseif (is_numeric($prop)) {
				$prop = (string)$prop;
			}

			// Pattern matches and other operators.
			if ($op === '=' && $val && $val[0] === '/') {
				if (!preg_match($val, $prop)) {
					return false;
				}
			} elseif (($op === '=' && $prop != $val) ||
				($op === '!=' && $prop == $val) ||
				($op === '>' && $prop <= $val) ||
				($op === '<' && $prop >= $val) ||
				($op === '>=' && $prop < $val) ||
				($op === '<=' && $prop > $val)
			) {
				return false;
			}
		}

		return true;
	}

/**
 * Insert $values into an array with the given $path. You can use
 * `{n}` and `{s}` elements to insert $data multiple times.
 *
 * @param array $data The data to insert into.
 * @param string $path The path to insert at.
 * @param mixed $values The values to insert.
 * @return array The data with $values inserted.
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::insert
 */
	public static function insert($data, $path, $values = null) {
		$tokens = explode('.', $path);

		if (strpos($path, '{') === false && strpos($path, '[') === false) {
			return self::__simpleInsert($data, $tokens, $values);
		} elseif (self::__isSimplePath($path)) {
			return self::__simpleFormulaInsert($data, $tokens, $values);
		}

		$token = array_shift($tokens);
		$nextPath = implode('.', $tokens);

		list($token, $conditions) = self::__splitConditions($token);

		foreach ($data as $k => $v) {
			if (self::__matchToken($k, $token)) {
				if (!$conditions || self::__matches($v, $conditions)) {
					$data[$k] = $nextPath ?
							self::insert($v, $nextPath, $values) :
							array_merge($v, (array)$values);
				}
			}
		}

		return $data;
	}

/**
 * 簡単なPath({n}, {s}, {*}が含まれていない)に対するinsert()処理
 *
 * @param array $data The data to operate on.
 * @param array $path The path to work on.
 * @param mixed $value The values to insert when doing inserts.
 * @return array data.
 */
	private static function __simpleInsert($data, $path, $value = null) {
		$_list =& $data;
		$count = count($path);
		$last = $count - 1;
		foreach ($path as $i => $key) {
			if ($i === $last) {
				$_list[$key] = $value;
				return $data;
			}
			if (!isset($_list[$key])) {
				$_list[$key] = [];
			}
			$_list =& $_list[$key];
			if (!is_array($_list)) {
				$_list = [];
			}
		}
	}

/**
 * 簡単なPathで{n}, {s}, {*}が一つだけ含まれてる場合のinsert()処理
 *
 * @param array $data The data to operate on.
 * @param array $path The path to work on.
 * @param mixed $value The values to insert when doing inserts.
 * @return array data.
 */
	private static function __simpleFormulaInsert($data, $path, $value = null) {
		$_list =& $data;
		//$count = count($path);
		//$last = $count - 1;
		foreach ($path as $i => $key) {
			if (strpos($key, '{') !== false) {
				foreach ($_list as $k => $d) {
					if (self::__matchToken($k, $key)) {
						$token = array_slice($path, $i + 1);
						$_list[$k] = self::__simpleInsert($d, $token, $value);
					}
				}
				return $data;
			}
			if (!isset($_list[$key])) {
				$_list[$key] = [];
			}
			$_list =& $_list[$key];
			if (!is_array($_list)) {
				$_list = [];
			}
		}
	}

/**
 * Remove data matching $path from the $data array.
 * You can use `{n}` and `{s}` to remove multiple elements
 * from $data.
 *
 * @param array $data The data to operate on
 * @param string $path A path expression to use to remove.
 * @return array The modified array.
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::remove
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
	public static function remove(array $data, $path) {
		$noTokens = strpos($path, '[') === false;
		$noExpansion = strpos($path, '{') === false;

		if ($noExpansion && $noTokens && strpos($path, '.') === false) {
			unset($data[$path]);
			return $data;
		}

		$tokens = explode('.', $path);

		if ($noExpansion && $noTokens) {
			return self::__simpleRemove($data, $tokens);
		} elseif (self::__isSimplePath($path)) {
			return self::__simpleFormulaRemove($data, $tokens);
		}

		$token = array_shift($tokens);
		$nextPath = implode('.', $tokens);

		list($token, $conditions) = self::__splitConditions($token);

		foreach ($data as $k => $v) {
			$match = self::__matchToken($k, $token);
			if ($match && is_array($v)) {
				if ($conditions) {
					if (self::__matches($v, $conditions)) {
						if ($nextPath !== '') {
							$data[$k] = self::remove($v, $nextPath);
						} else {
							unset($data[$k]);
						}
					}
				} else {
					$data[$k] = self::remove($v, $nextPath);
				}
				if (empty($data[$k])) {
					unset($data[$k]);
				}
			} elseif ($match && $nextPath === '') {
				unset($data[$k]);
			}
		}

		return $data;
	}

/**
 * 簡単なPath({n}, {s}, {*}が含まれていない)に対するremove()処理
 *
 * @param array $data The data to operate on.
 * @param array $path The path to work on.
 * @return array data.
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 */
	private static function __simpleRemove($data, $path) {
		if (count($path) === 1) {
			if (isset($data[$path[0]])) {
				unset($data[$path[0]]);
			}
			return $data;
		} elseif (count($path) === 2) {
			if (isset($data[$path[0]][$path[1]])) {
				unset($data[$path[0]][$path[1]]);
			}
			return $data;
		} elseif (count($path) === 3) {
			if (isset($data[$path[0]][$path[1]][$path[2]])) {
				unset($data[$path[0]][$path[1]][$path[2]]);
			}
			return $data;
		} elseif (count($path) === 4) {
			if (isset($data[$path[0]][$path[1]][$path[2]][$path[3]])) {
				unset($data[$path[0]][$path[1]][$path[2]][$path[3]]);
			}
			return $data;
		} elseif (count($path) === 5) {
			if (isset($data[$path[0]][$path[1]][$path[2]][$path[3]][$path[4]])) {
				unset($data[$path[0]][$path[1]][$path[2]][$path[3]][$path[4]]);
			}
			return $data;
		} elseif (count($path) === 6) {
			if (isset($data[$path[0]][$path[1]][$path[2]][$path[3]][$path[4]][$path[5]])) {
				unset($data[$path[0]][$path[1]][$path[2]][$path[3]][$path[4]][$path[5]]);
			}
			return $data;
		} else {
			$_list =& $data;
			$count = count($path);
			$last = $count - 1;
			foreach ($path as $i => $key) {
				if ($i === $last) {
					if (is_array($_list)) {
						unset($_list[$key]);
					}
					return $data;
				}
				if (!isset($_list[$key])) {
					return $data;
				}
				$_list =& $_list[$key];
			}
		}
	}

/**
 * 簡単なPathで{n}, {s}, {*}が一つだけ含まれてる場合のremove()処理
 *
 * @param array $data The data to operate on.
 * @param array $path The path to work on.
 * @return array data.
 */
	private static function __simpleFormulaRemove($data, $path) {
		$_list =& $data;
		$count = count($path);
		$last = $count - 1;
		foreach ($path as $i => $key) {
			if (strpos($key, '{') !== false) {
				foreach ($_list as $k => $d) {
					if (self::__matchToken($k, $key)) {
						if (is_array($d)) {
							$nextPath = array_slice($path, $i + 1);
							$d = self::__simpleRemove($d, $nextPath);
							if (isset($d)) {
								$_list[$k] = $d;
							} else {
								unset($_list[$k]);
							}
						} elseif ($i === $last) {
							unset($_list[$k]);
						}
					}
				}
				return $data;
			}
			if (!isset($_list[$key])) {
				return $data;
			}
			$_list =& $_list[$key];
		}
	}

/**
 * $keyPath のパスをキー、$valuePath （省略可） のパスを値として使って連想配列を作ります。
 * $valuePath が省略された場合や、$valuePath に合致するものが無かった場合は、値は null で初期化されます。
 * $groupPath が指定された場合は、そのパスにしたがって生成したものをグルーピングします。
 *
 * 速度改善メモ：
 * 簡単構成のPathについては、Cakeではなく別処理にで簡略化する。
 *
 * @param array $data Array from where to extract keys and values
 * @param string $keyPath A dot-separated string.
 * @param string $valuePath A dot-separated string.
 * @param string $groupPath A dot-separated string.
 * @return array Combined array
 * @link https://book.cakephp.org/2.0/ja/core-utility-libraries/hash.html#Hash::combine
 * @throws CakeException CakeException When keys and values count is unequal.
 */
	public static function combine($data, $keyPath, $valuePath = null, $groupPath = null) {
		if (empty($data)) {
			return [];
		}

		if (self::__isSimpleCombineToken($keyPath, $valuePath, $groupPath)) {
			return self::__simpleCombine($data, $keyPath, $valuePath, $groupPath);
		} else {
			return self::__complexityCombine($data, $keyPath, $valuePath, $groupPath);
		}
	}

/**
 * 簡単な構成のPathのcombine()処理
 *
 * @param array $data combine()するデータ
 * @param string $keyPath combine()のkeyPath
 * @param string $valuePath combine()のvaluePath
 * @param string $groupPath combine()のgroupPath
 * @return array Combined array
 * @throws CakeException CakeException When keys and values count is unequal.
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
	private static function __simpleCombine($data, $keyPath, $valuePath, $groupPath) {
		$keyTokens = explode('.', $keyPath);
		if ($valuePath) {
			$valueTokens = explode('.', $valuePath);
		} else {
			$valueTokens = null;
		}
		if ($groupPath) {
			$groupTokens = explode('.', $groupPath);
		} else {
			$groupTokens = null;
		}

		//先頭から完全一致のものに対しては、事前にissetでチェックする。
		$token = null;
		foreach ($keyTokens as $keyToken) {
			array_shift($keyTokens);
			if ($valueTokens) {
				array_shift($valueTokens);
			}
			if ($groupTokens) {
				array_shift($groupTokens);
			}
			if (substr($keyToken, 0, 1) !== '{') {
				if (! isset($data[$keyToken])) {
					return [];
				}
				$data = $data[$keyToken];
			} else {
				$token = $keyToken;
				break;
			}
		}

		$out = $keys = $vals = [];
		foreach ($data as $k => $item) {
			if (! self::__matchToken($k, $token)) {
				continue;
			}
			$key = self::__simpleGet($item, $keyTokens);
			if (! $key && !is_string($key)) {
				throw new CakeException(__d(
					'cake_dev',
					'Hash::combine() needs an equal number of keys + values.'
				));
			}
			if (isset($valueTokens)) {
				$value = self::__simpleGet($item, $valueTokens);
			} else {
				$value = null;
			}
			$group = self::__simpleGet($item, $groupTokens);
			if (isset($groupTokens)) {
				$out[$group][$key] = $value;
			} else {
				$keys[] = $key;
				if ($value) {
					$vals[] = $value;
				}
				$out[$key] = $value;
			}
		}
		if (!empty($vals) && count($keys) !== count($vals)) {
			throw new CakeException(__d(
				'cake_dev',
				'Hash::combine() needs an equal number of keys + values.'
			));
		}
		return $out;
	}

/**
 * Cakeのcombine()処理
 *
 * @param array $data combine()するデータ
 * @param string $keyPath combine()のkeyPath
 * @param string $valuePath combine()のvaluePath
 * @param string $groupPath combine()のgroupPath
 * @return array Combined array
 * @link https://book.cakephp.org/2.0/ja/core-utility-libraries/hash.html#Hash::combine
 * @throws CakeException CakeException When keys and values count is unequal.
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
	private static function __complexityCombine($data, $keyPath, $valuePath, $groupPath) {
		if (is_array($keyPath)) {
			$format = array_shift($keyPath);
			$keys = self::format($data, $keyPath, $format);
		} else {
			$keys = self::extract($data, $keyPath);
		}
		if (empty($keys)) {
			return [];
		}

		$vals = null;
		if (!empty($valuePath) && is_array($valuePath)) {
			$format = array_shift($valuePath);
			$vals = self::format($data, $valuePath, $format);
		} elseif (!empty($valuePath)) {
			$vals = self::extract($data, $valuePath);
		}
		if (empty($vals)) {
			$vals = array_fill(0, count($keys), null);
		}

		if (count($keys) !== count($vals)) {
			throw new CakeException(__d(
				'cake_dev',
				'Hash::combine() needs an equal number of keys + values.'
			));
		}

		if ($groupPath !== null) {
			$group = self::extract($data, $groupPath);
			if (!empty($group)) {
				$cnt = count($keys);
				$out = [];
				for ($i = 0; $i < $cnt; $i++) {
					if (!isset($group[$i])) {
						$group[$i] = 0;
					}
					if (!isset($out[$group[$i]])) {
						$out[$group[$i]] = [];
					}
					$out[$group[$i]][$keys[$i]] = $vals[$i];
				}

				return $out;
			}
		}
		if (empty($vals)) {
			return [];
		}

		$result = array_combine($keys, $vals);
		return $result;
	}

/**
 * 簡単なパスか否か
 *
 * 先頭が{n} or {s}, {*}で始まるかどうか
 *
 * @param string $path パス
 * @return bool
 */
	private static function __isSimplePath($path) {
		if (!isset($path)) {
			return true;
		}
		if (! is_string($path)) {
			return false;
		}

		return substr_count($path, '.') < 6 &&
				substr_count($path, '{') <= 1 &&
				strpos($path, '[') === false;
	}

/**
 * 簡単なパスか否か
 *
 * 先頭が{n}, {s}, {*}で始まるかどうか
 *
 * @param string $keyPath combine()のkeyPath
 * @param string $valuePath combine()のvaluePath
 * @param string $groupPath combine()のgroupPath
 * @return bool
 */
	private static function __isSimpleCombineToken($keyPath, $valuePath, $groupPath) {
		if (! self::__isSimplePath($keyPath) ||
				! self::__isSimplePath($valuePath) ||
				! self::__isSimplePath($groupPath)) {
			return false;
		}

		$keyPos = strpos($keyPath, '{');
		if (isset($valuePath) && strpos($keyPath, '{') !== $keyPos) {
			return false;
		}
		if (isset($groupPath) && strpos($groupPath, '{') !== $keyPos) {
			return false;
		}
		return true;
	}

/**
 * 配列から取り出し、フォーマット文字列でフォーマットされた文字列の配列を返します。
 *
 * 速度改善メモ：
 * 特になし。CakePHPのまま。ただし、extract()が多少速度改善されているため、
 * 当メソッドも改善されている。
 *
 * @param array $data Source array from which to extract the data
 * @param array $paths An array containing one or more Hash::extract()-style key paths
 * @param string $format Format string into which values will be inserted, see sprintf()
 * @return array An array of strings extracted from `$path` and formatted with `$format`
 * @see sprintf()
 * @see Hash::extract()
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::format
 */
	public static function format($data, $paths, $format) {
		$extracted = [];
		$count = count($paths);

		if (!$count) {
			return null;
		}

		for ($i = 0; $i < $count; $i++) {
			$extracted[] = self::extract($data, $paths[$i]);
		}
		$out = [];
		$data = $extracted;
		$count = count($data[0]);

		$countTwo = count($data);
		for ($j = 0; $j < $count; $j++) {
			$args = [];
			for ($i = 0; $i < $countTwo; $i++) {
				if (array_key_exists($j, $data[$i])) {
					$args[] = $data[$i][$j];
				}
			}
			$out[] = vsprintf($format, $args);
		}

		return $out;
	}

/**
 * Determines if one array contains the exact keys and values of another.
 *
 * @param array $data The data to search through.
 * @param array $needle The values to file in $data
 * @return bool true if $data contains $needle, false otherwise
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::contains
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 */
	public static function contains(array $data, array $needle) {
		if (empty($data) || empty($needle)) {
			return false;
		}
		$stack = [];

		while (!empty($needle)) {
			$key = key($needle);
			$val = $needle[$key];
			unset($needle[$key]);

			if (array_key_exists($key, $data) && is_array($val)) {
				$next = $data[$key];
				unset($data[$key]);

				if (!empty($val)) {
					$stack[] = [$val, $next];
				}
			} elseif (!array_key_exists($key, $data) || $data[$key] != $val) {
				return false;
			}

			if (empty($needle) && !empty($stack)) {
				list($needle, $data) = array_pop($stack);
			}
		}

		return true;
	}

/**
 * Test whether or not a given path exists in $data.
 * This method uses the same path syntax as Hash::extract()
 *
 * Checking for paths that could target more than one element will
 * make sure that at least one matching element exists.
 *
 * @param array $data The data to check.
 * @param string $path The path to check for.
 * @return bool Existence of path.
 * @see Hash::extract()
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::check
 */
	public static function check(array $data, $path) {
		$results = self::extract($data, $path);
		if (!is_array($results)) {
			return false;
		}

		return count($results) > 0;
	}

/**
 * Recursively filters a data set.
 *
 * @param array $data Either an array to filter, or value when in callback
 * @param callable $callback A function to filter the data with. Defaults to
 *   `self::_filter()` Which strips out all non-zero empty values.
 * @return array Filtered array
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::filter
 */
	public static function filter(array $data, $callback = array('self', '__filter')) {
		foreach ($data as $k => $v) {
			if (is_array($v)) {
				$data[$k] = self::filter($v, $callback);
			}
		}

		return array_filter($data, $callback);
	}

/**
 * Callback function for filtering.
 *
 * @param array $var Array to filter.
 * @return bool
 * @SuppressWarnings(PHPMD.UnusedPrivateMethod)
 */
	private static function __filter($var) {
		if ($var === 0 || $var === 0.0 || $var === '0' || !empty($var)) {
			return true;
		}
		return false;
	}

/**
 * 多次元配列を１次元配列へと平坦化します
 *
 * 速度改善メモ：
 * 特になし。CakePHPのまま。
 *
 * @param array $data Array to flatten
 * @param string $separator String used to separate array key elements in a path, defaults to '.'
 * @return array
 * @link https://book.cakephp.org/2.0/ja/core-utility-libraries/hash.html#Hash::flatten
 */
	public static function flatten($data, $separator = '.') {
		$result = [];
		$stack = [];
		$path = null;

		reset($data);
		while (!empty($data)) {
			$key = key($data);
			$element = $data[$key];
			unset($data[$key]);

			if (is_array($element) && !empty($element)) {
				if (!empty($data)) {
					$stack[] = [$data, $path];
				}
				$data = $element;
				reset($data);
				$path .= $key . $separator;
			} else {
				$result[$path . $key] = $element;
			}

			if (empty($data) && !empty($stack)) {
				list($data, $path) = array_pop($stack);
				reset($data);
			}
		}

		return $result;
	}

/**
 * Hash::flatten():: によって前もって平坦化された配列を再構築します。
 *
 * 速度改善メモ：
 * 階層が深くない場合、直接値をセットする。階層が深くなった場合、既存の処理を使用する。
 *
 * @param array $data Flattened array
 * @param string $separator The delimiter used
 * @return array
 * @link https://book.cakephp.org/2.0/ja/core-utility-libraries/hash.html#Hash::expand
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 */
	public static function expand($data, $separator = '.') {
		$result = [];

		$stack = [];

		foreach ($data as $flat => $value) {
			$keys = explode($separator, $flat);

			if (count($keys) <= 6) {
				$result = self::__simpleInsert($result, $keys, $value);
			} else {
				$keys = array_reverse($keys);
				$child = [
					$keys[0] => $value
				];
				array_shift($keys);
				foreach ($keys as $k) {
					$child = [
						$k => $child
					];
				}
				$stack = [[$child, &$result]];
				while (!empty($stack)) {
					foreach ($stack as $curKey => &$curMerge) {
						foreach ($curMerge[0] as $key => &$val) {
							if (!empty($curMerge[1][$key]) &&
									(array)$curMerge[1][$key] === $curMerge[1][$key] &&
									(array)$val === $val) {
								$stack[] = array(&$val, &$curMerge[1][$key]);
							} elseif ((int)$key === $key &&
									isset($curMerge[1][$key])) {
								$curMerge[1][] = $val;
							} else {
								$curMerge[1][$key] = $val;
							}
						}
						unset($stack[$curKey]);
					}
					unset($curMerge);
				}
			}
		}
		return $result;
	}

/**
 * この関数は PHP の array_merge と array_merge_recursive の 両方の機能を持っていると考えることができます。
 * この２つの関数との違いは、一方の配列キーが もう一方に含まれていた場合には (array_merge と違って) 再帰的に動きますが、
 * 含まれていなかった場合には (array_merge_recursive と違って) 再帰的には動きません。
 *
 * 速度改善メモ：
 * 基本の処理は変えていない。if文を少し変更
 *
 * @param array $data マージされるデータ
 * @param mixed $merge マージするデータ
 * @return array Merged array
 * @link https://book.cakephp.org/2.0/ja/core-utility-libraries/hash.html#Hash::merge
 */
	public static function merge($data, $merge) {
		$args = array_slice(func_get_args(), 1);
		$return = $data;
		$stack = [];

		foreach ($args as &$curArg) {
			$stack[] = [(array)$curArg, &$return];
		}
		unset($curArg);

		while (!empty($stack)) {
			foreach ($stack as $curKey => &$curMerge) {
				foreach ($curMerge[0] as $key => &$val) {
					if (!empty($curMerge[1][$key])) {
						if ((array)$curMerge[1][$key] === $curMerge[1][$key] &&
								(array)$val === $val) {
							$stack[] = array(&$val, &$curMerge[1][$key]);
						} elseif ((int)$key === $key) {
							$curMerge[1][] = $val;
						} else {
							$curMerge[1][$key] = $val;
						}
					} else {
						$curMerge[1][$key] = $val;
					}
				}
				unset($stack[$curKey]);
			}
			unset($curMerge);
		}
		return $return;
	}

/**
 * Checks to see if all the values in the array are numeric
 *
 * @param array $data The array to check.
 * @return bool true if values are numeric, false otherwise
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::numeric
 */
	public static function numeric(array $data) {
		if (empty($data)) {
			return false;
		}

		return $data === array_filter($data, 'is_numeric');
	}

/**
 * Counts the dimensions of an array.
 * Only considers the dimension of the first element in the array.
 *
 * If you have an un-even or heterogeneous array, consider using Hash::maxDimensions()
 * to get the dimensions of the array.
 *
 * @param array $data Array to count dimensions on
 * @return int The number of dimensions in $data
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::dimensions
 */
	public static function dimensions(array $data) {
		if (empty($data)) {
			return 0;
		}
		reset($data);
		$depth = 1;
		while ($elem = array_shift($data)) {
			if (is_array($elem)) {
				$depth += 1;
				$data = $elem;
			} else {
				break;
			}
		}

		return $depth;
	}

/**
 * Counts the dimensions of *all* array elements. Useful for finding the maximum
 * number of dimensions in a mixed array.
 *
 * @param array $data Array to count dimensions on
 * @return int The maximum number of dimensions in $data
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::maxDimensions
 */
	public static function maxDimensions($data) {
		$depth = array();
		if (is_array($data) && reset($data) !== false) {
			foreach ($data as $value) {
				$depth[] = self::maxDimensions($value) + 1;
			}
		}
		return empty($depth) ? 0 : max($depth);
	}

/**
 * Map a callback across all elements in a set.
 * Can be provided a path to only modify slices of the set.
 *
 * @param array $data The data to map over, and extract data out of.
 * @param string $path The path to extract for mapping over.
 * @param callable $function The function to call on each extracted value.
 * @return array An array of the modified values.
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::map
 */
	public static function map(array $data, $path, $function) {
		$values = (array)self::extract($data, $path);

		return array_map($function, $values);
	}

/**
 * Reduce a set of extracted values using `$function`.
 *
 * @param array $data The data to reduce.
 * @param string $path The path to extract from $data.
 * @param callable $function The function to call on each extracted value.
 * @return mixed The reduced value.
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::reduce
 */
	public static function reduce(array $data, $path, $function) {
		$values = (array)self::extract($data, $path);

		return array_reduce($values, $function);
	}

/**
 * Apply a callback to a set of extracted values using `$function`.
 * The function will get the extracted values as the first argument.
 *
 * ### Example
 *
 * You can easily count the results of an extract using apply().
 * For example to count the comments on an Article:
 *
 * ```
 * $count = Hash::apply($data, 'Article.Comment.{n}', 'count');
 * ```
 *
 * You could also use a function like `array_sum` to sum the results.
 *
 * ```
 * $total = Hash::apply($data, '{n}.Item.price', 'array_sum');
 * ```
 *
 * @param array $data The data to reduce.
 * @param string $path The path to extract from $data.
 * @param callable $function The function to call on each extracted value.
 * @return mixed The results of the applied method.
 */
	public static function apply(array $data, $path, $function) {
		$values = (array)self::extract($data, $path);

		return call_user_func($function, $values);
	}

/**
 * Sorts an array by any value, determined by a Hash-compatible path
 *
 * ### Sort directions
 *
 * - `asc` Sort ascending.
 * - `desc` Sort descending.
 *
 * ### Sort types
 *
 * - `regular` For regular sorting (don't change types)
 * - `numeric` Compare values numerically
 * - `string` Compare values as strings
 * - `locale` Compare items as strings, based on the current locale
 * - `natural` Compare items as strings using "natural ordering" in a human friendly way.
 *   Will sort foo10 below foo2 as an example. Requires PHP 5.4 or greater or it will fallback to 'regular'
 *
 * To do case insensitive sorting, pass the type as an array as follows:
 *
 * ```
 * array('type' => 'regular', 'ignoreCase' => true)
 * ```
 *
 * When using the array form, `type` defaults to 'regular'. The `ignoreCase` option
 * defaults to `false`.
 *
 * @param array $data An array of data to sort
 * @param string $path A Hash-compatible path to the array value
 * @param string $dir See directions above. Defaults to 'asc'.
 * @param array|string $type See direction types above. Defaults to 'regular'.
 * @return array Sorted array of data
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::sort
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
	public static function sort(array $data, $path, $dir = 'asc', $type = 'regular') {
		if (empty($data)) {
			return [];
		}

		$originalKeys = array_keys($data);
		$numeric = is_numeric(implode('', $originalKeys));
		if ($numeric) {
			$data = array_values($data);
		}
		$sortValues = self::extract($data, $path);
		$dataCount = count($data);

		// Make sortValues match the data length, as some keys could be missing
		// the sorted value path.
		$missingData = count($sortValues) < $dataCount;
		if ($missingData && $numeric) {
			// Get the path without the leading '{n}.'
			$itemPath = substr($path, 4);
			foreach ($data as $key => $value) {
				$sortValues[$key] = self::get($value, $itemPath);
			}
		} elseif ($missingData) {
			$sortValues = array_pad($sortValues, $dataCount, null);
		}
		$result = self::__squash($sortValues);
		$keys = self::extract($result, '{n}.id');
		$values = self::extract($result, '{n}.value');

		$dir = strtolower($dir);
		$ignoreCase = false;

		// $type can be overloaded for case insensitive sort
		if (is_array($type)) {
			$type += ['ignoreCase' => false, 'type' => 'regular'];
			$ignoreCase = $type['ignoreCase'];
			$type = $type['type'];
		}
		$type = strtolower($type);

		//if ($type === 'natural' && version_compare(PHP_VERSION, '5.4.0', '<')) {
		//	$type = 'regular';
		//}

		if ($dir === 'asc') {
			$dir = SORT_ASC;
		} else {
			$dir = SORT_DESC;
		}
		if ($type === 'numeric') {
			$type = SORT_NUMERIC;
		} elseif ($type === 'string') {
			$type = SORT_STRING;
		} elseif ($type === 'natural') {
			$type = SORT_NATURAL;
		} elseif ($type === 'locale') {
			$type = SORT_LOCALE_STRING;
		} else {
			$type = SORT_REGULAR;
		}
		if ($ignoreCase) {
			$values = array_map('mb_strtolower', $values);
		}
		array_multisort($values, $dir, $type, $keys, $dir, $type);
		$sorted = [];
		$keys = array_unique($keys);

		foreach ($keys as $k) {
			if ($numeric) {
				$sorted[] = $data[$k];
				continue;
			}
			if (isset($originalKeys[$k])) {
				$sorted[$originalKeys[$k]] = $data[$originalKeys[$k]];
			} else {
				$sorted[$k] = $data[$k];
			}
		}

		return $sorted;
	}

/**
 * Helper method for sort()
 * Squashes an array to a single hash so it can be sorted.
 *
 * @param array $data The data to squash.
 * @param string $key The key for the data.
 * @return array
 */
	private static function __squash($data, $key = null) {
		$stack = [];
		foreach ($data as $k => $r) {
			$id = $k;
			if ($key !== null) {
				$id = $key;
			}
			if (is_array($r) && !empty($r)) {
				$stack = array_merge($stack, self::__squash($r, $id));
			} else {
				$stack[] = ['id' => $id, 'value' => $r];
			}
		}

		return $stack;
	}

/**
 * Computes the difference between two complex arrays.
 * This method differs from the built-in array_diff() in that it will preserve keys
 * and work on multi-dimensional arrays.
 *
 * @param array $data First value
 * @param array $compare Second value
 * @return array Returns the key => value pairs that are not common in $data and $compare
 *    The expression for this function is ($data - $compare) + ($compare - ($data - $compare))
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::diff
 */
	public static function diff(array $data, $compare) {
		if (empty($data)) {
			return (array)$compare;
		}
		if (empty($compare)) {
			return (array)$data;
		}
		$intersection = array_intersect_key($data, $compare);
		while (($key = key($intersection)) !== null) {
			if ($data[$key] == $compare[$key]) {
				unset($data[$key], $compare[$key]);
			}
			next($intersection);
		}

		return $data + $compare;
	}

/**
 * Merges the difference between $data and $compare onto $data.
 *
 * @param array $data The data to append onto.
 * @param array $compare The data to compare and append onto.
 * @return array The merged array.
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::mergeDiff
 */
	public static function mergeDiff(array $data, $compare) {
		if (empty($data) && !empty($compare)) {
			return $compare;
		}
		if (empty($compare)) {
			return $data;
		}
		foreach ($compare as $key => $value) {
			if (!array_key_exists($key, $data)) {
				$data[$key] = $value;
			} elseif (is_array($value)) {
				$data[$key] = self::mergeDiff($data[$key], $compare[$key]);
			}
		}

		return $data;
	}

/**
 * Normalizes an array, and converts it to a standard format.
 *
 * @param array $data List to normalize
 * @param bool $assoc If true, $data will be converted to an associative array.
 * @return array
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::normalize.
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
	public static function normalize(array $data, $assoc = true) {
		$keys = array_keys($data);
		$count = count($keys);
		$numeric = true;

		if (!$assoc) {
			for ($i = 0; $i < $count; $i++) {
				if (!is_int($keys[$i])) {
					$numeric = false;
					break;
				}
			}
		}
		if (!$numeric || $assoc) {
			$newList = [];
			for ($i = 0; $i < $count; $i++) {
				if (is_int($keys[$i])) {
					$newList[$data[$keys[$i]]] = null;
				} else {
					$newList[$keys[$i]] = $data[$keys[$i]];
				}
			}
			$data = $newList;
		}

		return $data;
	}

/**
 * Takes in a flat array and returns a nested array
 *
 * ### Options:
 *
 * - `children` The key name to use in the resultset for children.
 * - `idPath` The path to a key that identifies each entry. Should be
 *   compatible with Hash::extract(). Defaults to `{n}.$alias.id`
 * - `parentPath` The path to a key that identifies the parent of each entry.
 *   Should be compatible with Hash::extract(). Defaults to `{n}.$alias.parent_id`
 * - `root` The id of the desired top-most result.
 *
 * @param array $data The data to nest.
 * @param array $options Options are:
 * @return array of results, nested
 * @see Hash::extract()
 * @throws InvalidArgumentException When providing invalid data.
 * @link https://book.cakephp.org/2.0/en/core-utility-libraries/hash.html#Hash::nest
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
	public static function nest(array $data, $options = array()) {
		if (!$data) {
			return $data;
		}

		$alias = key(current($data));
		$options += [
			'idPath' => "{n}.$alias.id",
			'parentPath' => "{n}.$alias.parent_id",
			'children' => 'children',
			'root' => null
		];

		$return = $idMap = [];
		$ids = self::extract($data, $options['idPath']);

		$idKeys = explode('.', $options['idPath']);
		array_shift($idKeys);

		$parentKeys = explode('.', $options['parentPath']);
		array_shift($parentKeys);

		foreach ($data as $result) {
			$result[$options['children']] = [];

			$id = self::get($result, $idKeys);
			$parentId = self::get($result, $parentKeys);

			if (isset($idMap[$id][$options['children']])) {
				$idMap[$id] = array_merge($result, (array)$idMap[$id]);
			} else {
				$idMap[$id] = array_merge($result, [$options['children'] => []]);
			}
			if (!$parentId || !in_array($parentId, $ids)) {
				$return[] =& $idMap[$id];
			} else {
				$idMap[$parentId][$options['children']][] =& $idMap[$id];
			}
		}

		if (!$return) {
			throw new InvalidArgumentException(__d('cake_dev',
				'Invalid data array to nest.'
			));
		}

		if ($options['root']) {
			$root = $options['root'];
		} else {
			$root = self::get($return[0], $parentKeys);
		}

		foreach ($return as $i => $result) {
			$id = self::get($result, $idKeys);
			$parentId = self::get($result, $parentKeys);
			if ($id !== $root && $parentId != $root) {
				unset($return[$i]);
			}
		}

		return array_values($return);
	}
}
