<?php
/**
 * Block Model
 *
 * @property Page $Page
 * @property Content $Content
 * @property Module $Module
 * @property Block $ParentBlock
 * @property Block $ChildBlock
 * @property BlogStyle $BlogStyle
 * @property WhatsnewSelectRoom $WhatsnewSelectRoom
 * @property WhatsnewSelectUser $WhatsnewSelectUser
 * @property WhatsnewStyle $WhatsnewStyle
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('AppModel', 'Model');

/**
 * Summary for Block Model
 */
class Block extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array();

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Language' => array(
			'className' => 'Language',
			'joinTable' => 'blocks_languages',
			'with' => 'BlocksLanguage',
			'foreignKey' => 'block_id',
			'associationForeignKey' => 'language_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

/**
 * findRoomPartByBlockId
 * 共通のModelの処理へ移動するべき。
 * 現在のuser_idにおけるブロックのPartテーブルの編集権限を取得
 * block_idからroom_idを求め、user_id,room_idからpart_idを求め
 * room_parts.can_xxxx(can_edit_block等)を見て判断。
 *
 * @param int $blockId blocks.id
 * @param int $userId  users.id
 * @return mixed array $roomPart or boolean false
 */
	public function findRoomPartByBlockId($blockId, $userId) {
		$roomPart = $this->find('first', array(
			'fields' => array(
				'RoomPart.id',
				'RoomPart.part_id',
				'RoomPart.can_read_page',
				'RoomPart.can_edit_page',
				'RoomPart.can_create_page',
				'RoomPart.can_publish_page',
				'RoomPart.can_read_block',
				'RoomPart.can_edit_block',
				'RoomPart.can_create_block',
				'RoomPart.can_publish_block',
				'RoomPart.can_read_content',
				'RoomPart.can_edit_content',
				'RoomPart.can_create_content',
				'RoomPart.can_publish_content',
			),
			'recursive' => -1,
			'conditions' => array('Block.id' => $blockId),
			'joins' => array(
				array(
					"type" => "INNER",
					"table" => "parts_rooms_users",
					"alias" => "PartsRoomsUser",
					"conditions" => array(
						'PartsRoomsUser.room_id = Block.room_id',
						'PartsRoomsUser.user_id' => $userId
					)
				),
				array(
					"type" => "INNER",
					"table" => "room_parts",
					"alias" => "RoomPart",
					"conditions" => array(
						'RoomPart.part_id = PartsRoomsUser.part_id'
					)
				),
			),
		));

		if (!isset($roomPart['RoomPart'])) {
			return false;
		}
		return $roomPart;
	}

/**
 * ブロック追加
 *
 * @param int $frameId frames.id
 * @return mixed $blockId or false
 */
	public function addBlock($frameId) {
		// テスト用データ
		// frameIDから権限チェックが必要

		$data['Block'] = array(
			'id' => 0,
			'room_id' => 1,	// 固定値
		);
		$data['Language'] = array(
			array(
				'id' => 1,
				'BlocksLanguage' => array(
					'language_id' => 1,
					'name' => 'Test' . date('Y/m/d H:i:s'),
				),
			),
			array(
				'id' => 2,
				'BlocksLanguage' => array(
					'language_id' => 2,
					'name' => 'テスト' . date('Y/m/d H:i:s'),
				),
			),
		);
		$this->create();
		if (!$this->save($data)) {
			return false;
		}

		return $this->id;
	}

}
