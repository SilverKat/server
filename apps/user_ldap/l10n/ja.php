<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "マッピングのクリアに失敗しました。",
"Failed to delete the server configuration" => "サーバー設定の削除に失敗しました",
"The configuration is valid and the connection could be established!" => "設定は有効であり、接続を確立しました！",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "設定は有効ですが、接続に失敗しました。サーバー設定と資格情報を確認してください。",
"The configuration is invalid. Please have a look at the logs for further details." => "設定が無効です。詳細はログを確認してください。",
"No action specified" => "アクションが指定されていません",
"No configuration specified" => "構成が指定されていません",
"No data specified" => "データが指定されていません",
" Could not set configuration %s" => "構成 %s を設定できませんでした",
"Deletion failed" => "削除に失敗しました",
"Take over settings from recent server configuration?" => "最近のサーバー設定から設定を引き継ぎますか？",
"Keep settings?" => "設定を保持しますか？",
"{nthServer}. Server" => "{nthServer}. サーバー",
"Cannot add server configuration" => "サーバー設定を追加できません",
"mappings cleared" => "マッピングをクリアしました",
"Success" => "成功",
"Error" => "エラー",
"Please specify a Base DN" => "ベースDN を指定してください",
"Could not determine Base DN" => "ベースDNを決定できませんでした",
"Please specify the port" => "ポートを指定してください",
"Configuration OK" => "設定OK",
"Configuration incorrect" => "設定に誤りがあります",
"Configuration incomplete" => "設定が不完全です",
"Select groups" => "グループを選択",
"Select object classes" => "オブジェクトクラスを選択",
"Select attributes" => "属性を選択",
"Connection test succeeded" => "接続テストに成功しました",
"Connection test failed" => "接続テストに失敗しました",
"Do you really want to delete the current Server Configuration?" => "現在のサーバー設定を本当に削除してもよろしいですか？",
"Confirm Deletion" => "削除の確認",
"_%s group found_::_%s groups found_" => array("%s グループが見つかりました"),
"_%s user found_::_%s users found_" => array("%s ユーザーが見つかりました"),
"Could not find the desired feature" => "望ましい機能は見つかりませんでした",
"Invalid Host" => "無効なホスト",
"Server" => "サーバー",
"User Filter" => "ユーザーフィルター",
"Login Filter" => "ログインフィルター",
"Group Filter" => "グループフィルタ",
"Save" => "保存",
"Test Configuration" => "設定をテスト",
"Help" => "ヘルプ",
"Groups meeting these criteria are available in %s:" => "これらの基準を満たすグループが %s で利用可能:",
"only those object classes:" => "それらのオブジェクトクラスのみ:",
"only from those groups:" => "それらのグループからのみ:",
"Edit raw filter instead" => "フィルタを編集",
"Raw LDAP filter" => "LDAP フィルタ",
"The filter specifies which LDAP groups shall have access to the %s instance." => "フィルタは、どの LDAP グループが %s にアクセスするかを指定します。",
"groups found" => "グループが見つかりました",
"Users login with this attribute:" => "この属性でユーザーログイン:",
"LDAP Username:" => "LDAPユーザー名:",
"LDAP Email Address:" => "LDAPメールアドレス:",
"Other Attributes:" => "他の属性:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "ログイン実行時に適用するフィルタを定義します。%%uid にはログイン操作におけるユーザー名が入ります。例： \"uid=%%uid\"",
"1. Server" => "1. Server",
"%s. Server:" => "%s. サーバー:",
"Add Server Configuration" => "サーバー設定を追加",
"Delete Configuration" => "設定を削除",
"Host" => "ホスト",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "SSL通信しない場合には、プロトコル名を省略することができます。そうでない場合には、ldaps:// から始めてください。",
"Port" => "ポート",
"User DN" => "ユーザーDN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "クライアントユーザーのDNは、特定のものに結びつけることはしません。 例えば uid=agent,dc=example,dc=com. だと匿名アクセスの場合、DNとパスワードは空のままです。",
"Password" => "パスワード",
"For anonymous access, leave DN and Password empty." => "匿名アクセスの場合は、DNとパスワードを空にしてください。",
"One Base DN per line" => "1行に1つのベースDN",
"You can specify Base DN for users and groups in the Advanced tab" => "拡張タブでユーザーとグループのベースDNを指定することができます。",
"Limit %s access to users meeting these criteria:" => "この基準を満たすユーザーに対し %s へのアクセスを制限:",
"The filter specifies which LDAP users shall have access to the %s instance." => "フィルタは、どのLDAPユーザーが %s にアクセスするかを指定します。",
"users found" => "ユーザーが見つかりました",
"Back" => "戻る",
"Continue" => "続ける",
"Expert" => "エキスパート設定",
"Advanced" => "詳細設定",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>警告:</b> user_ldap と user_webdavauth のアプリには互換性がありません。予期せぬ動作をする可能性があります。システム管理者にどちらかを無効にするよう問い合わせてください。",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>警告:</b> PHP LDAP モジュールがインストールされていません。バックエンドが正しく動作しません。システム管理者にインストールするよう問い合わせてください。",
"Connection Settings" => "接続設定",
"Configuration Active" => "設定はアクティブです",
"When unchecked, this configuration will be skipped." => "チェックを外すと、この設定はスキップされます。",
"Backup (Replica) Host" => "バックアップ（レプリカ）ホスト",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "バックアップホストをオプションで指定することができます。メインのLDAP/ADサーバーのレプリカである必要があります。",
"Backup (Replica) Port" => "バックアップ（レプリカ）ポート",
"Disable Main Server" => "メインサーバーを無効にする",
"Only connect to the replica server." => "レプリカサーバーにのみ接続します。",
"Case insensitive LDAP server (Windows)" => "大文字と小文字を区別しないLDAPサーバー (Windows)",
"Turn off SSL certificate validation." => "SSL証明書の確認を無効にする。",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "推奨されません、テストにおいてのみ使用してください！このオプションでのみ接続が動作する場合は、LDAP サーバーのSSL証明書を %s サーバーにインポートしてください。",
"Cache Time-To-Live" => "キャッシュのTTL",
"in seconds. A change empties the cache." => "秒。変更後にキャッシュがクリアされます。",
"Directory Settings" => "ディレクトリ設定",
"User Display Name Field" => "ユーザー表示名のフィールド",
"The LDAP attribute to use to generate the user's display name." => "ユーザーの表示名の生成に利用するLDAP属性",
"Base User Tree" => "ベースユーザーツリー",
"One User Base DN per line" => "1行に1つのユーザーベースDN",
"User Search Attributes" => "ユーザー検索属性",
"Optional; one attribute per line" => "オプション：1行に1属性",
"Group Display Name Field" => "グループ表示名のフィールド",
"The LDAP attribute to use to generate the groups's display name." => "ユーザーのグループ表示名の生成に利用するLDAP属性",
"Base Group Tree" => "ベースグループツリー",
"One Group Base DN per line" => "1行に1つのグループベースDN",
"Group Search Attributes" => "グループ検索属性",
"Group-Member association" => "グループとメンバーの関連付け",
"Nested Groups" => "ネスト化ブロック",
"When switched on, groups that contain groups are supported. (Only works if the group member attribute contains DNs.)" => "オンに切り替えたら、グループを含むグループがサポートされます。(グループメンバーの属性がDNを含む場合のみ有効です。)",
"Paging chunksize" => "ページ分割サイズ",
"Chunksize used for paged LDAP searches that may return bulky results like user or group enumeration. (Setting it 0 disables paged LDAP searches in those situations.)" => "ページ分割サイズは、LDAP検索時にユーザーやグループのリスト一覧データを一括で返すデータ量を指定します。(設定が0の場合には、LDAP検索の分割転送は無効)",
"Special Attributes" => "特殊属性",
"Quota Field" => "クォータフィールド",
"Quota Default" => "クォータのデフォルト",
"in bytes" => "バイト",
"Email Field" => "メールフィールド",
"User Home Folder Naming Rule" => "ユーザーのホームフォルダー命名規則",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "ユーザー名を空のままにしてください（デフォルト）。もしくは、LDAPもしくはADの属性を指定してください。",
"Internal Username" => "内部ユーザー名",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "デフォルトでは、内部ユーザー名はUUID属性から作成されます。これにより、ユーザー名がユニークであり、かつ文字の変換が不要であることを保証します。内部ユーザー名には、[ a-zA-Z0-9_.@- ] の文字のみが有効であるという制限があり、その他の文字は対応する ASCII コードに変換されるか単に無視されます。そのため、他のユーザ名との衝突の回数が増加するでしょう。内部ユーザー名は、内部的にユーザを識別するために用いられ、また、ownCloudにおけるデフォルトのホームフォルダー名としても用いられます。例えば*DAVサービスのように、リモートURLの一部でもあります。この設定により、デフォルトの振る舞いを再定義します。ownCloud 5 以前と同じような振る舞いにするためには、以下のフィールドにユーザー表示名の属性を入力します。空にするとデフォルトの振る舞いとなります。変更は新しくマッピング（追加）されたLDAPユーザーにおいてのみ有効となります。",
"Internal Username Attribute:" => "内部ユーザー名属性:",
"Override UUID detection" => "UUID検出を再定義する",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "デフォルトでは、UUID 属性は自動的に検出されます。UUID属性は、LDAPユーザーとLDAPグループを間違いなく識別するために利用されます。また、もしこれを指定しない場合は、内部ユーザー名はUUIDに基づいて作成されます。この設定は再定義することができ、あなたの選択した属性を用いることができます。選択した属性がユーザーとグループの両方に対して適用でき、かつユニークであることを確認してください。空であればデフォルトの振る舞いとなります。変更は、新しくマッピング（追加）されたLDAPユーザーとLDAPグループに対してのみ有効となります。",
"UUID Attribute for Users:" => "ユーザーのUUID属性:",
"UUID Attribute for Groups:" => "グループの UUID 属性:",
"Username-LDAP User Mapping" => "ユーザー名とLDAPユーザのマッピング",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "ユーザー名は（メタ）データの保存と割り当てに使用されます。ユーザーを正確に識別して認識するために、個々のLDAPユーザは内部ユーザ名を持っています。これは、ユーザー名からLDAPユーザーへのマッピングが必要であることを意味しています。この生成されたユーザ名は、LDAPユーザのUUIDにマッピングされます。加えて、DNがLDAPとのインタラクションを削減するためにキャッシュされますが、識別には利用されません。DNが変わった場合は、変更が検出されます。内部ユーザ名は全体に亘って利用されます。マッピングをクリアすると、いたるところに使われないままの物が残るでしょう。マッピングのクリアは設定に敏感ではありませんが、すべてのLDAPの設定に影響を与えます！本番の環境では決してマッピングをクリアしないでください。テストもしくは実験の段階でのみマッピングのクリアを行なってください。",
"Clear Username-LDAP User Mapping" => "ユーザー名とLDAPユーザーのマッピングをクリアする",
"Clear Groupname-LDAP Group Mapping" => "グループ名とLDAPグループのマッピングをクリアする"
);
$PLURAL_FORMS = "nplurals=1; plural=0;";
