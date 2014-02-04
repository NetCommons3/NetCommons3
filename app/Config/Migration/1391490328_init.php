<?php
class Init extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'nc3_announcement_edits' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'お知らせ編集ID'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'post_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => '記事投稿権限
（101,201,301のみ）'),
					'approved_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '主担の承認が必要かどうか。'),
					'approved_pre_change_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '未承認の場合、変更前のコンテンツを表示するかどうか。'),
					'approved_mail_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '承認されたらメールで通知するかどうか。'),
					'approved_mail_subject' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '承認後のメールで通知の件名', 'charset' => 'utf8'),
					'approved_mail_body' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '承認後のメールで通知の内容', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_announcements' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'お知らせID'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'revision_group_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '0：公開中
1：一時保存中
2：一時保存中(新規投稿->一時保存の場合)	　　新規投稿記事メール送信用'),
					'is_approved' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '承認済かどうか。'),
					'pre_change_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '変更前のコンテンツを表示するかどうか。'),
					'pre_change_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '公開日付（pre_change_flagがONの場合、指定することで、自動的にに最新の記事が公開される。）'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_archives' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'アーカイブID。新着、検索用のデータを管理。記事投稿、編集、削除時に登録。新着、検索モジュールから表示させる。'),
					'parent_model_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '親記事のモデル名称', 'charset' => 'utf8'),
					'parent_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '親記事のID（根記事ID等。ブログならば親記事。）'),
					'module_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'model_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '記事モデル名称', 'charset' => 'utf8'),
					'unique_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'comment' => '記事ID'),
					'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '記事の状態
0:公開中
1: 一時保存中
2:一時保存中(新規投稿->一時保存の場合)	新規投稿時にメール送信用'),
					'is_approved' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '承認された記事かどうか。'),
					'user_group_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '会員グループID。指定されていれば、所属グループのみ表示する新着（検索）であることを表す。'),
					'access_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'アクセス権限
（0,101,201,301のみ）'),
					'count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '記事数（1記事にコメントが2件登録してある記事、及びコメントならば、count=3となる）'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '新着（検索）タイトル', 'charset' => 'utf8'),
					'content' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '新着詳細', 'charset' => 'utf8'),
					'search_content' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '検索詳細。', 'charset' => 'utf8'),
					'url' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '新着（検索）リンク先URL。', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'module_id' => array('column' => array('module_id', 'model_name', 'unique_id'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_assets' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'AssetID(CSS,JSを連結して書き出した一覧)
app\\webroot\\theme\\assets下に圧縮したものと、そうでないもののCSS,JSを保持。'),
					'url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'comment' => 'ファイルパス', 'charset' => 'utf8'),
					'hash_content' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => 'ファイルコンテンツをHash値した値をセット。', 'charset' => 'utf8'),
					'plugin' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'プラグイン名称ORJs,Css,Nc-Locale,(file_name)', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'url' => array('column' => 'url', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_authorities' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '権限ID（会員権限（ベース権限）毎の振る舞いと、ルーム権限における権限(hierarchy)を設定）'),
					'default_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '権限名のデフォルトの項目名。新規追加か、langがenならば、default_nameを更新。該当言語の権限名がなければ、こちらを表示する。', 'charset' => 'utf8'),
					'system_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'システムで使用するかどうか。ONの場合、権限管理から削除不可。'),
					'hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ヒエラルキー：この値の上下でモジュール内の記事を編集できるかどうかを判定する。モデレーター以上で同じレベル同士で編集可。
0：不参加
1：ゲスト
101-200：一般
201-300：モデレーター
301-400：主担
401-500：管理者'),
					'allow_creating_community' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'コミュニティー作成権限
0：コミュニティー作成不可（デフォルト）
1：非公開(参加者のみ)のコミュニティー作成可
2：公開（すべてのログイン会員が閲覧可能）までのコミュニティー作成可
3：公開・非公開「全会員を強制的に参加させる。」までのコミュニティー作成可。
4：公開コミュニティーまで作成でき、すべてのコミュニティーの表示順変更、削除が可能'),
					'allow_new_participant' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'コミュニティーで主担ならば、参加会員を自由に追加でき、参加方法で「参加者のみ」を選択可能にするかどうか。この項目がOFFの場合、SNSのような振る舞いになる。'),
					'myportal_use_flag' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'マイポータルを使用するかどうか。'),
					'allow_myportal_viewing_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'マイポータルを閲覧できる権限
（1,101,201,301のみ）'),
					'private_use_flag' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'マイルームを使用するかどうか。'),
					'public_createroom_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'パブリックスペース内にルームの新規作成を許可するかどうか。'),
					'group_createroom_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'コミュニティー内にルームの新規作成を許可するかどうか。'),
					'myportal_createroom_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'マイポータル内にルームの新規作成を許可するかどうか（未使用）。'),
					'private_createroom_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'マイルーム内にルームの新規作成を許可するかどうか（未使用）。'),
					'allow_htmltag_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'HTMLタグの書き込み制限をするかどうか。'),
					'allow_meta_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページ情報の変更を許すかどうか。'),
					'allow_theme_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページテーマの変更を許すかどうか。'),
					'allow_style_flag' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'ページスタイルの変更を許すかどうか。
0：許可しない。
1：許可する。
2：CSSの編集まで許可する。'),
					'allow_layout_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページレイアウトの変更を許すかどうか。'),
					'allow_column_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページカラムの変更を許すかどうか。'),
					'allow_attachment' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '編集画面からのファイルアップロードを行うかどうか。
0:許可しない。
1:画像のみ。
2:画像、ファイル。'),
					'allow_video' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '編集画面からの動画ファイル貼り付けを許すかどうか。'),
					'max_size' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'アップロードファイルの容量（バイト数）'),
					'change_leftcolumn_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '左カラムの変更を許すかどうか。'),
					'change_rightcolumn_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '右カラムの変更を許すかどうか。'),
					'change_headercolumn_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ヘッダーカラムの変更を許すかどうか。'),
					'change_footercolumn_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'フッターカラムの変更を許すかどうか。'),
					'display_participants_editing' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '参加者設定画面で使用するかどうか。'),
					'allow_move_operation' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページ・ブロックの移動を許可するかどうか。'),
					'allow_copy_operation' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページ・ブロックのコピーを許可するかどうか。'),
					'allow_shortcut_operation' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページ・ブロックのショートカット作成を許可するかどうか。'),
					'allow_operation_of_shortcut' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ショートカットブロックのコピー・移動・ショートカット作成を許可するかどうか。'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_authority_langs' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '権限言語ID'),
					'authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '権限名', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'authority_id' => array('column' => array('authority_id', 'lang'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_backgrounds' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'バックグラウンドID
「\\webroot\\img\\backgrounds\\patterns」、「\\webroot\\img\\backgrounds\\images」にあるファイルからページスタイル背景用のマスタを作成。'),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'Locale/(jang)/LC_MESSAGE/background.poの名称、「\\webroot\\img\\backgrounds\\patterns(images)」下フォルダ名称に対応する。フォルダでなければ、ファイル名のキャメル記法。', 'charset' => 'utf8'),
					'category' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'Plugin/page/Locale/(jang)/LC_MESSAGE/page.poの背景キーワード名称、「\\webroot\\img\\backgrounds\\patterns(images)」下のファイル名の「_」までの先頭文字列（キャメル記法）。', 'charset' => 'utf8'),
					'color' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'Plugin/page/Locale/(jang)/LC_MESSAGE/page.poの背景色名称、「\\webroot\\img\\backgrounds\\patterns(images)」下のファイル名の「_」までの第2番目の文字列（キャメル記法）。', 'charset' => 'utf8'),
					'file_path' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '「\\webroot\\img\\backgrounds\\patterns(images)」下のファイルパス。', 'charset' => 'utf8'),
					'file_width' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'comment' => '背景ファイルの広さ'),
					'file_height' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'comment' => '背景ファイルの高さ'),
					'file_size' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'comment' => '背景ファイルのサイズ'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_blocks' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'ブロックID（ページ内にモジュールを配置した際に割り振られるID）'),
					'page_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'module_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ブロックタイトル（{X-CONTENT}と記述されていればContent.titleをブロックタイトルとして表示）', 'charset' => 'utf8'),
					'show_title' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'タイトルを表示するかどうか。'),
					'controller_action' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ページからブロックを表示する際のコントロール、アクション名', 'charset' => 'utf8'),
					'root_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ブロックルートID（ブロックはグループ化することにより、深さをもつため）'),
					'parent_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ブロック親ID（ブロックはグループ化することにより、深さをもつため）'),
					'thread_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ブロック深さ（ブロックはグループ化することにより、深さをもつため）'),
					'col_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ブロック列番号'),
					'row_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ブロック行番号'),
					'display_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '公開中かどうか。'),
					'display_from_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '公開日付From'),
					'display_to_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '公開日付To'),
					'theme_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ブロックテーマ名', 'charset' => 'utf8'),
					'temp_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ブロックテンプレート名', 'charset' => 'utf8'),
					'left_margin' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'ブロックレフトマージン'),
					'right_margin' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'ブロックライトマージン'),
					'top_margin' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'ブロックトップマージン'),
					'bottom_margin' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'ブロックボトムマージン'),
					'min_width_size' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ブロック最小の広さ'),
					'min_height_size' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ブロック最小の高さ'),
					'lock_authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ロックされたブロックかどうか（現状、未使用）。ロックされるとブロックの削除、ブロック操作ができなくなる。'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'page_id' => array('column' => 'page_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_blog_comments' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'blog_post_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'treeビヘイビア用 親コメントのID'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'treeビヘイビア用 現在のオブジェクトの左端の座標'),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'treeビヘイビア用 現在のオブジェクトの右端の座標'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コメントタイトル', 'charset' => 'utf8'),
					'comment' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コメント内容', 'charset' => 'utf8'),
					'author' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'コメント入力者名', 'charset' => 'utf8'),
					'author_email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コメント入力者メールアドレス', 'charset' => 'utf8'),
					'author_url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コメント入力者URL', 'charset' => 'utf8'),
					'author_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'コメント入力者IP', 'charset' => 'utf8'),
					'is_approved' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '承認済かどうか。'),
					'blog_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'トラックバック受信時のデータ\'blog_name\'', 'charset' => 'utf8'),
					'comment_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => 'コメントの種類
trackback：トラックバック
comment：コメント', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'content_id' => array('column' => array('content_id', 'created'), 'unique' => 1),
						'blog_post_id' => array('column' => 'created', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_blog_posts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'post_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '記事投稿日'),
					'is_future' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '記事投稿日が未来かどうか'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '記事タイトル', 'charset' => 'utf8'),
					'permalink' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '固定リンク', 'charset' => 'utf8'),
					'icon_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'utf8_general_ci', 'comment' => 'タイトルの横につくアイコンファイル名', 'charset' => 'utf8'),
					'revision_group_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'revisionテーブルのgroup_id'),
					'vote' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '投票済みユーザのID', 'charset' => 'utf8'),
					'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '0：公開中
1：一時保存中
2：一時保存中(新規投稿->一時保存の場合)	　　新規投稿記事メール送信用'),
					'is_approved' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '承認済みかどうか'),
					'pre_change_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '変更前のコンテンツを表示するかどうか。'),
					'pre_change_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '公開日付（pre_change_flagがONの場合、指定することで、自動的にに最新の記事が公開される。）'),
					'post_password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '記事をパスワード保護する場合のパスワード', 'charset' => 'utf8'),
					'to_ping' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '未送信のトラックバック', 'charset' => 'utf8'),
					'pinged' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '送信済みのトラックバック', 'charset' => 'utf8'),
					'approved_comment_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '承認済みコメント数'),
					'comment_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'コメント数'),
					'approved_trackback_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '承認済みトラックバック数'),
					'trackback_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'トラックバック数'),
					'vote_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '投票数'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'created_user_id' => array('column' => array('content_id', 'created_user_id'), 'unique' => 0),
						'post_date' => array('column' => array('content_id', 'status', 'post_date', 'id'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_blog_styles' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'block_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'widget_type' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3, 'comment' => 'ブログウィジットの種類
1：メイン記事
2：最近の投稿
3：最近のコメント
4：アーカイブ
5：カテゴリー
6：表示件数
7：タグ
8：カレンダー
9：RSS
10：検索'),
					'display_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '表示するかどうか'),
					'col_num' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'comment' => 'ブログブロック内での列番号'),
					'row_num' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'comment' => 'ブログブロック内での行番号'),
					'visible_item' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '記事の表示件数'),
					'options' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ブログウィジットごとの表示方法をシリアライズして設定', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'block_id' => array('column' => 'block_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_blog_term_links' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'blog_post_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'blog_term_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'blog_post_id' => array('column' => 'blog_post_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_blog_terms' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'カテゴリーかタグの名称', 'charset' => 'utf8'),
					'slug' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '投稿や固定ページを表すカテゴリーかタグの名称であり、固定リンクのURLで利用', 'charset' => 'utf8'),
					'taxonomy' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '0：分類（タグ）
1：分類（カテゴリー）', 'charset' => 'utf8'),
					'checked' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '記事の新規投稿時にカテゴリーやタグとして初期設定の対称にするかどうか'),
					'parent' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '種類がカテゴリーの場合に親子関係があればblog_termsのid'),
					'count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '利用されている件数'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'slug' => array('column' => array('content_id', 'taxonomy', 'slug'), 'unique' => 1),
						'taxonomy' => array('column' => array('content_id', 'taxonomy'), 'unique' => 0),
						'name' => array('column' => array('content_id', 'name', 'taxonomy'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_blogs' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'post_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => '記事投稿権限
（101,201,301のみ）'),
					'term_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => '新規カテゴリ、タグの追加を許す権限
（101,201,301のみ）'),
					'vote_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '投票有無'),
					'sns_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'Twitter,Facebookアイコン表示有無'),
					'new_period' => array('type' => 'integer', 'null' => false, 'default' => '5', 'comment' => 'New記号表示期間(日)'),
					'mail_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'メール通知するかどうか。'),
					'mail_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => 'メール通知する権限
（1,101,201,301のみ）'),
					'mail_subject' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'メール通知件名', 'charset' => 'utf8'),
					'mail_body' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'メール通知本文', 'charset' => 'utf8'),
					'comment_flag' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3, 'comment' => 'コメント投稿有無'),
					'comment_required_name' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '非会員の場合、名前とメールアドレスの入力を必須にするかどうか。'),
					'comment_image_auth' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'コメントの画像認証を行うかどうか。'),
					'comment_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '101', 'comment' => 'コメント投稿権限
（1,101,201,301のみ）'),
					'comment_mail_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'コメントをメールで通知するかどうか。
'),
					'comment_mail_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => 'コメント通知する権限
（1,101,201,301のみ）'),
					'comment_mail_subject' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コメントメール通知件名', 'charset' => 'utf8'),
					'comment_mail_body' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コメントメール通知本文', 'charset' => 'utf8'),
					'trackback_transmit_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'トラックバックを送信するかどうか。'),
					'trackback_receive_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'トラックバックを受信するかどうか。'),
					'transmit_blog_name' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'トラックバック送信時タイトル', 'charset' => 'utf8'),
					'approved_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '投稿の承認で主担の承認が必要かどうか。'),
					'approved_pre_change_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '未承認の場合、変更前のコンテンツを表示するかどうか。'),
					'approved_mail_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '承認メールを通知するかどうか。'),
					'approved_mail_subject' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '承認メール件名', 'charset' => 'utf8'),
					'approved_mail_body' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '承認メール本文', 'charset' => 'utf8'),
					'comment_approved_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'コメントの主担による承認が必要かどうか。'),
					'trackback_approved_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'トラックバックの主担による承認が必要かどうか。'),
					'comment_approved_mail_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'コメントとトラックバック承認完了通知を行うかどうか。'),
					'comment_approved_mail_subject' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コメントとトラックバック承認完了通知メール件名', 'charset' => 'utf8'),
					'comment_approved_mail_body' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_communities' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'photo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コミュニティーの写真(選択ファイル名 OR (Upload.id)_library.(extension))', 'charset' => 'utf8'),
					'is_upload' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'アップロードファイルを指定したかどうか。'),
					'publication_range_flag' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '公開範囲
0:非公開（コミュニティー参加者のみが閲覧可能）
1:公開（すべてのログイン会員が閲覧可能）'),
					'participate_force_all_users' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '公開コミュニティーの場合のみ指定。強制的に一般(ゲスト)として参加させるかどうか。チェックがついていた場合、PageUserLinkテーブルに存在していなくてもコミュニティー一覧にも表示させる。'),
					'participate_flag' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '参加方法
0:参加会員のみ
1:招待制（コミュニティーメンバーから招待を受けた会員のみ参加可能）
2:承認制（主担の承認が必要）
3:参加受付制(希望者は誰でも参加可能）'),
					'invite_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => '招待を許可する権限
（0,101,201,301のみ）'),
					'is_participate_notice' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '参加者をメール通知するかどうか。'),
					'participate_notice_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => '参加者をメール通知する権限。
（0,101,201,301のみ）'),
					'is_resign_notice' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '退会者をメール通知するかどうか。'),
					'resign_notice_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => '退会者をメール通知する権限。
（0,101,201,301のみ）'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'room_id' => array('column' => 'room_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_community_invitations' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'コミュニティー招待ID'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'activate_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => 'コミュニティー招待用承認用キー', 'charset' => 'utf8'),
					'is_pending_approval_mail' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '承認待ちメールかどうか'),
					'expires' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '有効期限'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_community_langs' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
					'community_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コミュニティー名称', 'charset' => 'utf8'),
					'summary' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '概要', 'charset' => 'utf8'),
					'revision_group_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '活動の概要へのRevison.id'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'room_id' => array('column' => array('room_id', 'lang'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_community_sum_tags' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'tag_value' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => 'タグ名称', 'charset' => 'utf8'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
					'used_number' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '該当タグ使用回数。'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'tag_value_lang' => array('column' => array('tag_value', 'lang'), 'unique' => 1),
						'tag_value' => array('column' => 'tag_value', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_community_tags' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'community_sum_tag_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'tag_value' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'タグ名称', 'charset' => 'utf8'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
					'display_sequence' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'コミュニティー単位の表示順序(room_id毎の連番)'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'room_id' => array('column' => array('room_id', 'community_sum_tag_id', 'tag_value'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_config_langs' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'Config言語ID'),
					'module_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index', 'comment' => '現状、未使用'),
					'config_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => 'Configキー名称', 'charset' => 'utf8'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
					'value' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'Config値。', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'module_id' => array('column' => array('module_id', 'config_name', 'lang'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_configs' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'ConfigID（システム管理のデータ一覧。今後、モジュール毎の設定値の保存用としても使用するかもしれないが、現状、未使用）'),
					'module_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index', 'comment' => '現状、未使用'),
					'cat_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'カテゴリーID
0：一般設定
1：ログインとログアウト、サイトの閉鎖
2：サーバー設定
3：メール設定
4：メタ情報
5：表示設定
6：モジュール設定
7：入会退会設定
8：コミュニティー設定、自動登録設定
9：開発者向け
10：セキュリティー関連'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => 'Configキー名称', 'charset' => 'utf8'),
					'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'Config名デフォルト値（__関数で変換して表示）', 'charset' => 'utf8'),
					'value' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'Configデフォルト値（__d関数で変換して表示）', 'charset' => 'utf8'),
					'description' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'Config説明デフォルト値（__d関数で変換して表示）', 'charset' => 'utf8'),
					'options' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'Configオプションデフォルト値（__d関数で変換して表示）。シリアライズしてセット。', 'charset' => 'utf8'),
					'domain' => array('type' => 'string', 'null' => false, 'default' => 'system', 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '__dの第一引数のdomain指定。', 'charset' => 'utf8'),
					'attribute' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '属性値（例：size="30"等）', 'charset' => 'utf8'),
					'required' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '必須入力かどうか。'),
					'minlength' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最小文字数'),
					'maxlength' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最大文字数'),
					'regexp' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '正規表現', 'charset' => 'utf8'),
					'lang_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ConfigLangモデルにデータを保持するかどうか。'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'name' => array('column' => array('name', 'module_id'), 'unique' => 0),
						'module_id' => array('column' => array('module_id', 'cat_id'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_contents' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'コンテンツID（ブロック内のコンテンツを管理）'),
					'module_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'コンテンツ名', 'charset' => 'utf8'),
					'shortcut_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'ショートカットタイプ
0：ショートカットではないコンテンツ
1：閲覧のみ許可なショートカット
2：表示中のルーム権限より閲覧・編集権限を付与するショートカット'),
					'master_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ショートカットでない場合、自分自身のContent.id。ショートカットの場合、コンテンツ元のContent.id'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'display_flag' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 2, 'comment' => 'コンテンツを公開するかどうか。
0：非公開
1：公開
2：利用不可'),
					'is_approved' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '承認済かどうか。'),
					'url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '外部にコンテンツがあった場合にフルパスで指定（未使用）', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_languages' => array(
					'language' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
					'display_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '表示名(Japanese,English等。__関数で変換したものを表示させる。)', 'charset' => 'utf8'),
					'display_sequence' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '表示順序。'),
					'display_flag' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3, 'key' => 'index', 'comment' => '公開フラグ
1:公開
0:非公開'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'language', 'unique' => 1),
						'display_flag' => array('column' => array('display_flag', 'display_sequence'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_module_links' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'モジュールリンクID（ルームごとの配置可能一般モジュールの設定）'),
					'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
					'authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'マイポータル、マイルームで配置可能なモジュールのみ権限ID毎で設定可能（権限管理）'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index', 'comment' => 'マイポータル、マイルームで配置可能なモジュールの設定、各スペースタイプのデフォルト値のみ0を設定。'),
					'module_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'room_id' => array('column' => array('room_id', 'authority_id', 'space_type'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_module_system_links' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'モジュールシステムリンクID（表示する管理系モジュールを権限毎に設定）'),
					'authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'module_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '管理系のモジュールを表示した際の管理系モジュールの権限を設定。一部管理系モジュールにて使用（会員管理等）。'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_modules' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'モジュールID'),
					'dir_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールディレクトリ名', 'charset' => 'utf8'),
					'version' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールVersion', 'charset' => 'utf8'),
					'system_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'システムで使用するかどうか。ONの場合、モジュール管理から削除不可。'),
					'disposition_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'モジュールインストール時に利用可能モジュールにデフォルト設定するかどうか。'),
					'controller_action' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ブロック追加時（管理系モジュールならば、コントロールパネルからアイコンクリック時）、表示コントローラ-アクション名。', 'charset' => 'utf8'),
					'edit_controller_action' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ブロック編集時（ブロック上部アイコンより遷移する画面）、表示コントローラ-アクション名。', 'charset' => 'utf8'),
					'style_controller_action' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 266, 'collate' => 'utf8_general_ci', 'comment' => 'ブロック表示方法変更クリック時（ブロック上部操作->表示方法変更リンクより遷移する画面）、表示コントローラ-アクション名。', 'charset' => 'utf8'),
					'display_sequence' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'comment' => '表示順序（モジュール追加のリストボックス、会員管理の表示順で使用）。'),
					'module_icon' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールアイコン名（管理系モジュールのみ使用）', 'charset' => 'utf8'),
					'temp_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールデフォルトテンプレート名（未使用）', 'charset' => 'utf8'),
					'content_has_one' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'カレンダー等のブロックに依存しないモジュールは、モジュールの追加の時にcontentsテーブルを
　　　ルーム毎で唯一insertできるようにしておくために用意したカラム（現状、未使用。使用するかどうかは今後、検討）'),
					'copy_operation' => array('type' => 'string', 'null' => false, 'default' => 'disabled', 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールコピー操作を可能にするかどうか
enable：使用可能だがデフォルト使用不可(システム管理より変更可)
enabled ：使用可能
disabled：使用不可', 'charset' => 'utf8'),
					'shortcut_operation' => array('type' => 'string', 'null' => false, 'default' => 'disabled', 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールショートカット操作を可能にするかどうか
enable：使用可能だがデフォルト使用不可(システム管理より変更可)
enabled ：使用可能
disabled：使用不可', 'charset' => 'utf8'),
					'move_operation' => array('type' => 'string', 'null' => false, 'default' => 'disabled', 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'モジュール移動操作を可能にするかどうか
enable：使用可能だがデフォルト使用不可(システム管理より変更可)
enabled ：使用可能
disabled：使用不可', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_page_columns' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'ページカラム情報ID（ページ設定->ページカラム設定）'),
					'scope' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '適用範囲
1：サイト全体
2：スペースタイプ全体
3：ルーム
4：ノード
5：カレントページのみ'),
					'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'カテゴリわけしたい場合に使用（未使用）'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '適用言語(ja,en等)', 'charset' => 'utf8'),
					'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'scopeが2以上で設定。'),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'scopeが3以上で設定。'),
					'header_page_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ヘッダーカラムページID'),
					'left_page_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'レフトカラムページID'),
					'right_page_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ライトカラムページID'),
					'footer_page_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'フッターカラムページID'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_page_layouts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'ページレイアウト情報ID（ページ設定->ページレイアウト）
'),
					'scope' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '適用範囲
1：サイト全体
2：スペースタイプ全体
3：ルーム
4：ノード
5：カレントページのみ'),
					'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'カテゴリわけしたい場合に使用（未使用）'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '適用言語(ja,en等)', 'charset' => 'utf8'),
					'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'scopeが2以上で設定。'),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'scopeが3以上で設定。'),
					'is_display_header' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ヘッダーカラムを表示するかどうか。'),
					'is_display_left' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'レフトカラムを表示するかどうか。'),
					'is_display_right' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ライトカラムを表示するかどうか。'),
					'is_display_footer' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'フッターカラムを表示するかどうか。'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_page_metas' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'ページメタ情報ID（ページ設定->ページ情報）'),
					'scope' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '適用範囲
1：サイト全体
2：スペースタイプ全体
3：ルーム
4：ノード
5：カレントページのみ'),
					'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'カテゴリわけしたい場合に使用（未使用）'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '適用言語(ja,en等)', 'charset' => 'utf8'),
					'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'scopeが2以上で設定。'),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'scopeが3以上で設定。'),
					'title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'タイトル名(titleタグ)', 'charset' => 'utf8'),
					'meta_keywords' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'キーワード名(metaタグ name="keywords")', 'charset' => 'utf8'),
					'meta_description' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'キーワード名(metaタグ name="description")', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_page_styles' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'ページスタイル情報ID（ページ設定->ページスタイル）'),
					'scope' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '適用範囲
1：サイト全体
2：スペースタイプ全体
3：ルーム
4：ノード
5：カレントページのみ'),
					'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'タイプ毎に設定可能。
1：フォント設定
2：背景
3：表示位置
4：カスタム設定'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '適用言語(ja,en等)', 'charset' => 'utf8'),
					'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'scopeが2以上で設定。'),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'scopeが3以上で設定。'),
					'align' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '行揃え
left：左寄せ
center：中央揃え
right：右寄せ', 'charset' => 'utf8'),
					'width' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '最小の広さ(autoならば自動、100%、(%d)px)', 'charset' => 'utf8'),
					'height' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '最小の高さ(autoならば自動、100%、(%d)px)', 'charset' => 'utf8'),
					'original_background_image' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'オリジナル背景画像ファイル名（(upload_id).(extension)）', 'charset' => 'utf8'),
					'original_background_repeat' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'オリジナル背景画像のrepeat(background-repeat)', 'charset' => 'utf8'),
					'original_background_position' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'オリジナル背景画像の位置(background-position)', 'charset' => 'utf8'),
					'original_background_attachment' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '背景画像を固定する(background-attachment)', 'charset' => 'utf8'),
					'file' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 48, 'collate' => 'utf8_general_ci', 'comment' => '選択CSSファイル名', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_page_sum_views' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'ページ集計ID（ページ設定->よく見るページ）'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'page_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'sum' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ページビュー数'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_page_themes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'ページテーマ情報ID（ページ設定->ページテーマ）'),
					'scope' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '適用範囲
1：サイト全体
2：スペースタイプ全体
3：ルーム
4：ノード
5：カレントページのみ'),
					'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'カテゴリわけしたい場合に使用（未使用）'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '適用言語(ja,en等)', 'charset' => 'utf8'),
					'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'scopeが2以上で設定。'),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'scopeが3以上で設定。'),
					'theme_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'テーマ名', 'charset' => 'utf8'),
					'temp_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'テンプレート名（未使用）', 'charset' => 'utf8'),
					'center_theme' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'センターカラムテーマ名', 'charset' => 'utf8'),
					'header_theme' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'ヘッダーカラムテーマ名', 'charset' => 'utf8'),
					'left_theme' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'レフトカラムテーマ名', 'charset' => 'utf8'),
					'right_theme' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'ライトカラムテーマ名', 'charset' => 'utf8'),
					'footer_theme' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'フッターカラムテーマ名', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_page_trees' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '先祖のpage_id'),
					'child_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '子孫のpage_id'),
					'stratum_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '先祖からみた子孫の階層'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_page_user_links' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'room_id' => array('column' => array('room_id', 'user_id'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_pages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'ページID（ページとルームの情報を保持）'),
					'root_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ルートページID（深さ１のページをルートとする。深さ0のものは0）'),
					'parent_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '親ページID（深さ0のものは0）'),
					'thread_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '深さ（ルートノードは0）'),
					'display_sequence' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '深さ１のページ単位で1から連番を振る。深さ１より大きいものは、そのノード単位で1から連番を振る(レフト・ライト、ヘッダー、フッターカラムは0)。'),
					'page_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => 'ページ名', 'charset' => 'utf8'),
					'permalink' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '固定リンク', 'charset' => 'utf8'),
					'position_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'センターカラムならば1'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
					'is_page_meta_node' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページメタ情報が現ページID、またはノードに設定されているかどうか。'),
					'is_page_style_node' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページスタイル情報が現ページID、またはノードに設定されているかどうか。'),
					'is_page_layout_node' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページレイアウト情報が現ページID、またはノードに設定されているかどうか。'),
					'is_page_theme_node' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページテーマ情報が現ページID、またはノードに設定されているかどうか。'),
					'is_page_column_node' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ページカラム情報が現ページID、またはノードに設定されているかどうか。'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'スペースタイプ
1：パブリックスペース
2：マイポータル
3：プライベートスペース（マイルーム）
4：コミュニティー'),
					'show_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ページのブロックの追加、移動、削除時にインクリメント。複数人が同時にブロックの配置を変更するとBlock.row_num,Block.col_numが狂うため、同時に編集を許さないようにするために用いる。'),
					'display_flag' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 2, 'comment' => '公開中かどうか。'),
					'display_from_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '公開日付From'),
					'display_to_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '公開日付To'),
					'display_apply_subpage' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '公開日付Fromで公開になった場合に下位ページにも適用するかどうか。'),
					'display_reverse_permalink' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'is_approved' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '承認済ページかどうか（現状、未使用）'),
					'lock_authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ロックされたページかどうか（現状、未使用）。ロックされるとページのブロックの追加等の操作ができなくなる。'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_passports' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'パスポートID（自動ログインパスポート保存用）'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'passport' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'utf8_general_ci', 'comment' => '自動ログイン用パスポート（クッキーに記録）', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_revisions' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'リビジョンID。WYSIWYGの情報を履歴管理。'),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index', 'comment' => '１つの記事毎のリビジョン一覧のグループID。記事(WYSIWYG)の新規登録時のRevision.idをセット。'),
					'pointer' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '現在、表示位置（group_id毎に１つONとなる）。記事追加、編集時に該当記事をONにする(そのほかのリビジョンがOFFに戻す)。但し、revision_nameが\'auto-draft\'の編集時は、ONにしない。'),
					'is_approved_pointer' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '承認済表示位置（承認済の記事すべてがONとなる）。承認前の記事にpointerがついていた場合、以前の履歴から最新の承認済記事を表示させるため。'),
					'revision_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '\'publish\'(公開中)、\'draft\'(一時保存中)、\'pending\'(承認待ち)、
　\'auto-draft\'(自動保存中)', 'charset' => 'utf8'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'content' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'WYSIWYGの記事コンテンツ。', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'group_id' => array('column' => array('group_id', 'pointer'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_sessions' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => 'sessionID', 'charset' => 'utf8'),
					'data' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'sessionデータ', 'charset' => 'utf8'),
					'expires' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '有効期限'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_temp_datas' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '一時保存用ID（現状、コピー元、先ページIDで使用）。SessionID単位ではなく、一時的にデータを保持する場合に使用する。', 'charset' => 'utf8'),
					'data' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '一時保存データ', 'charset' => 'utf8'),
					'expires' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '有効期限'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_upload_links' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'アップロードリンクID'),
					'upload_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'plugin' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'アップロードを行ったモジュールディレクトリ名', 'charset' => 'utf8'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'unique_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'アップロードを行った記事等のユニークID'),
					'model_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'アップロードを行った記事等（WYSIWYGならばRevision）のモデル名', 'charset' => 'utf8'),
					'field_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'アップロードを行った記事等（WYSIWYGならばcontent）のフィールド名', 'charset' => 'utf8'),
					'access_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '表示可能権限
0,101,201,301のみ'),
					'is_use' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4, 'comment' => 'ファイル使用中かどうか。
Revisionから復元処理があるため、一度、記事として登録されたファイルは、登録される。'),
					'download_password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ダウンロード用パスワード', 'charset' => 'utf8'),
					'check_component_action' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '表示チェック用コンポーネント、アクション名をカンマ区切りで設定。記述コンポーネント、アクション名がすべてtrueならば閲覧可能（アクション名のdefaultはcheckメソッド）。
[プラグイン名].[コンポーネント名].[アクション名]（Camel形式）の形式で登録。', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'upload_id' => array('column' => array('upload_id', 'id'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_uploads' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'アップロードID'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '所有者会員ID'),
					'file_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ファイル名', 'charset' => 'utf8'),
					'alt' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ファイルalt属性', 'charset' => 'utf8'),
					'caption' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ファイルキャプション名（未使用）', 'charset' => 'utf8'),
					'description' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ファイル説明', 'charset' => 'utf8'),
					'file_size' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20, 'comment' => 'ファイルサイズ'),
					'file_path' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'ファイルパス', 'charset' => 'utf8'),
					'mimetype' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'MIMEタイプ
画像,音声,動画などの判断に使用', 'charset' => 'utf8'),
					'extension' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '拡張子', 'charset' => 'utf8'),
					'plugin' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'アップロードを行ったモジュールディレクトリ名', 'charset' => 'utf8'),
					'upload_model_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'アップロードを行ったモデル名', 'charset' => 'utf8'),
					'is_delete_from_library' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'アップロードのライブラリー一覧から削除を許すかどうか。'),
					'is_use' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '使用フラグ
UploadLinkの対応するレコードが１件もない場合は「0」となる'),
					'is_wysiwyg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'WYSIWYGでアップロードされたかどうか。'),
					'download_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ダウンロード数'),
					'year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'comment' => 'アップロード年'),
					'month' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2, 'comment' => 'アップロード月'),
					'day' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2, 'comment' => 'アップロード日付'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_user_group_links' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'グループリンクID（グループに誰が所属しているかを指定）'),
					'user_group_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'Group.id'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_user_groups' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'グループID（回覧板モジュールのようにグループ単位で新着、検索情報の表示可否を行いたい場合に使用）'),
					'module_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'content_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'グループ名', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_user_invitations' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '会員招待ID'),
					'user_name' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'comment' => '招待する会員名称', 'charset' => 'utf8'),
					'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '招待する会員のeメール', 'charset' => 'utf8'),
					'activate_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '会員招待用承認用キー', 'charset' => 'utf8'),
					'is_pending_approval_mail' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '承認待ちメールかどうか'),
					'expires' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '有効期限'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_user_item_authority_links' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '会員項目のベース権限毎の編集・閲覧権限ID'),
					'user_item_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'user_authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '会員権限（ベース権限）
1:管理者
2:主担
3:モデレーター
4:一般
5:ゲスト'),
					'edit_lower_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '編集権限
（0,1,101,201,301,401のみ）'),
					'show_lower_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '閲覧権限
（0,1,101,201,301,401のみ）'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'item_id' => array('column' => array('user_item_id', 'user_authority_id'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_user_item_langs' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '会員項目言語毎のID'),
					'user_item_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '項目名', 'charset' => 'utf8'),
					'description' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '項目説明', 'charset' => 'utf8'),
					'options' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '項目オプション値をシリアライズしたデータとしてセット。', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'room_id' => array('column' => array('user_item_id', 'lang'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_user_item_links' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '会員と会員項目リンクID（会員の項目コンテンツをセット）'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
					'user_item_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'public_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '公開するかどうか。UserItem.allow_public_flagがONの場合のみ有効。'),
					'email_reception_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '公開するかどうか。UserItem.allow_email_reception_flagがONの場合のみ有効。'),
					'content' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '会員項目のコンテンツ。', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'user_id' => array('column' => array('user_id', 'lang', 'user_item_id'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_user_items' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '会員項目ID(会員のログインID、パスワード等の項目を保持)'),
					'default_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '会員項目のデフォルトの項目名。新規追加か、langがenならば、更新。該当言語の項目名がなければ、こちらを表示する。', 'charset' => 'utf8'),
					'default_description' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '会員項目のデフォルトの項目説明。新規追加か、langがenならば、更新。該当言語の項目説明がなければ、こちらを表示する。', 'charset' => 'utf8'),
					'default_options' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '会員項目のデフォルトの項目オプション値。新規追加か、langがenならば、更新。該当言語の項目オプション値がなければ、こちらを表示する。選択式、リストボックス時に設定され、シリアライズしたデータを登録する。', 'charset' => 'utf8'),
					'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '項目タイプ
\'text\'：テキスト,
\'password\'：パスワード,
\'email\'：eメール,
\'mobile_email\'：モバイルeメール,
\'select\'：リストボックス,
\'file\'：ファイル,
\'label\'：ラベル,
\'radio\'：ラジオボタン,
\'textarea\'：テキストエリア,
\'checkbox\'：チェックボックス', 'charset' => 'utf8'),
					'tag_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'Userモデルに値が格納する項目の場合、Userモデルのカラム名をセット。', 'charset' => 'utf8'),
					'is_system' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'システムで使用するかどうか。ONの場合、項目設定から削除不可。'),
					'allow_self_edit' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '各自、編集を許すかどうか。但し、管理者・事務局は編集可能。'),
					'required' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '必須項目にするかどうか。'),
					'allow_duplicate' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '重複を許可するかどうか。'),
					'minlength' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'comment' => '最小文字数'),
					'maxlength' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'comment' => '最大文字数'),
					'regexp' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '正規表現。パターンマッチングによるエラーチェックを記述。', 'charset' => 'utf8'),
					'display_flag' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '公開するかどうか。'),
					'allow_public_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '各自で公開・非公開を設定可能にするかどうか。'),
					'allow_email_reception_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '各自でメールの受信可否を設定可能にするかどうか。'),
					'list_num' => array('type' => 'integer', 'null' => false, 'default' => '1', 'comment' => '表示位置：何個目のリストか。'),
					'col_num' => array('type' => 'integer', 'null' => false, 'default' => '1', 'comment' => '表示位置：何列目か。'),
					'row_num' => array('type' => 'integer', 'null' => false, 'default' => '1', 'comment' => '表示位置：何行目か。'),
					'attribute' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '項目属性値（例：size=\'30\' style=\'padding:0px 3px\'）', 'charset' => 'utf8'),
					'default_selected' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '選択式、リストボックス時のデフォルトチェックする項目をシリアライズしたデータとしてセット。', 'charset' => 'utf8'),
					'display_title' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'タイトルを表示するかどうか。'),
					'is_lang' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '言語毎で設定可能にするかどうか。'),
					'autoregist_use' => array('type' => 'string', 'null' => false, 'default' => 'hide', 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '自動登録時に使用するかどうか。', 'charset' => 'utf8'),
					'autoregist_sendmail' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '自動登録時に管理者にメール通知する項目かどうか。'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '会員ID'),
					'login_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'ログインID', 'charset' => 'utf8'),
					'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'パスワード', 'charset' => 'utf8'),
					'handle' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'ハンドル名', 'charset' => 'utf8'),
					'authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'is_active' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3, 'comment' => '利用可能かどうか
0：利用不可
1：利用可能
2：承認待ち
3：承認済み'),
					'permalink' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => 'マイポータル、マイルーム固定リンク名', 'charset' => 'utf8'),
					'myportal_page_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'マイポータル直下のページID'),
					'private_page_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'マイルーム直下のページID'),
					'avatar' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'アバターファイル名', 'charset' => 'utf8'),
					'activate_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '自動登録用承認用キー', 'charset' => 'utf8'),
					'lang' => array('type' => 'string', 'null' => false, 'default' => 'ja', 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'ログイン後のデフォルト言語(ja,en等)　', 'charset' => 'utf8'),
					'timezone_offset' => array('type' => 'integer', 'null' => false, 'default' => '9', 'comment' => 'ログイン後のデフォルトタイムゾーン'),
					'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'eメール', 'charset' => 'utf8'),
					'mobile_email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'モバイルeメール', 'charset' => 'utf8'),
					'password_regist' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => 'パスワード登録日時'),
					'last_login' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => 'Lastログイン日時'),
					'previous_login' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '１つ前のLastログイン日時'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_whatsnew_select_rooms' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '新着選択ルームID（指定したルームのみの新着を表示する場合に指定）'),
					'block_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_whatsnew_select_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '新着選択会員ID（指定した会員のマイポータルのみの新着を表示する場合に指定）'),
					'block_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'nc3_whatsnew_styles' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '新着スタイルID（新着のスタイルの設定）'),
					'block_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
					'display_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '表示タイプ
0: ルーム毎に表示
1: フラットに表示'),
					'display_period_type' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '表示期間タイプ
0: 表示期間リストボックス非表示
1: 表示期間リストボックス表示'),
					'display_days' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
					'display_number' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '表示日数'),
					'is_display_title' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'タイトルの表示するかどうか。'),
					'is_display_description' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '詳細表示するかどうか。'),
					'is_display_room_name' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ルーム名の表示をするかどうか。'),
					'is_display_module_name' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'モジュール名の表示をするかどうか。'),
					'is_display_user_name' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'ハンドル名の表示をするかどうか。'),
					'is_display_created' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '日時の表示をするかどうか。'),
					'title_truncate_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'タイトル最大文字数'),
					'description_truncate_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '詳細最大文字数'),
					'allow_rss_feed' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'RSSフィードのリンクを表示するかどうか。'),
					'display_modules' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '表示モジュール', 'charset' => 'utf8'),
					'myportal_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'マイポータルの新着を表示するかどうか。'),
					'myroom_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'マイルームの新着を表示するかどうか。'),
					'select_myportal_users' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'マイポータルの新着を表示する場合、会員の絞り込みをしているかどうか。'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'nc3_announcement_edits', 'nc3_announcements', 'nc3_archives', 'nc3_assets', 'nc3_authorities', 'nc3_authority_langs', 'nc3_backgrounds', 'nc3_blocks', 'nc3_blog_comments', 'nc3_blog_posts', 'nc3_blog_styles', 'nc3_blog_term_links', 'nc3_blog_terms', 'nc3_blogs', 'nc3_communities', 'nc3_community_invitations', 'nc3_community_langs', 'nc3_community_sum_tags', 'nc3_community_tags', 'nc3_config_langs', 'nc3_configs', 'nc3_contents', 'nc3_languages', 'nc3_module_links', 'nc3_module_system_links', 'nc3_modules', 'nc3_page_columns', 'nc3_page_layouts', 'nc3_page_metas', 'nc3_page_styles', 'nc3_page_sum_views', 'nc3_page_themes', 'nc3_page_trees', 'nc3_page_user_links', 'nc3_pages', 'nc3_passports', 'nc3_revisions', 'nc3_sessions', 'nc3_temp_datas', 'nc3_upload_links', 'nc3_uploads', 'nc3_user_group_links', 'nc3_user_groups', 'nc3_user_invitations', 'nc3_user_item_authority_links', 'nc3_user_item_langs', 'nc3_user_item_links', 'nc3_user_items', 'nc3_users', 'nc3_whatsnew_select_rooms', 'nc3_whatsnew_select_users', 'nc3_whatsnew_styles'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
