<?php
/**
 * MyBB 1.8 Pacote de Língua Brasileira
 * Direitos Autorais 2014 MyBB Group, Todos os Direitos Reservados
 * Traduzido por dthiago aka ArnoldLayne-xXx http://bf4brasil.com.br/
 */

/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'Nenhum';
$l['not_installed'] = 'Não Instalado';
$l['installed'] = 'Instalado';
$l['not_writable'] = 'Não gravável';
$l['writable'] = 'Gravável';
$l['done'] = 'Feito';
$l['next'] = 'Próximo';
$l['error'] = 'Erro';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = 'Reverificando';

$l['title'] = "Assistente de Instalação MyBB";
$l['welcome'] = 'Olá';
$l['license_agreement'] = 'Concordância da Licensa';
$l['req_check'] = 'Checagem de Requerimentos';
$l['db_config'] = 'Configuração da Base de Dados';
$l['table_creation'] = 'Criação de Tabela';
$l['data_insertion'] = 'Inserindo Dados';
$l['theme_install'] = 'Instalação de Temas';
$l['board_config'] = 'Confiuração do Fórum';
$l['admin_user'] = 'Usuário Administrador';
$l['finish_setup'] = 'Finalização da Configuração';

$l['table_population'] = 'Propagação da Tabela';
$l['theme_installation'] = 'Inserção de Tema';
$l['create_admin'] = 'Criando Conta Administrativa';

$l['already_installed'] = "MyBB está instalado";
$l['mybb_already_installed'] = "<p>Bem vindo ao Assistente de Instalça do MyBB {1}. MyBB detectou diretório configurado.</p>
<p>Por favor escolha uma das opções possíveis abaixo:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Atualizar cópia existente para {1} <span style=\"font-size: 80%; color: maroon;\">(Recomendado)</span></h3>
	<p>Esta opção vai atualizar a sua atual instalação do MyNN para o MyBB {1}.</p>
	<p>Você deve escolher esta opção se deseja manter mensagens,usuários e configurações existentes.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Atualizar para MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Instalar uma nova cópia</h3>
	<p>Esta opção irá  <span style=\"color: red;\">excluir qualquer dado em seu fórum </span> e instalará uma nova cópia do MyBB.</p>
	<p>Você deve escolher esta opção para começar do zero excluindo todos os dados existentes.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Você tem certeza que desaja instalar uma nova cópia do MyBB?\\n\\nIsto excluirá todo o conteúdo. ESTE PROCESSO NÃO PODERÁ SER REVERTIDO.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Instalar MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB detectou que está sendo executado através da pasta \"Upload\" .</h3>
	<p>Embora não haja nada de errado com isso, é recomendado que o conteúdo da pasta upload  \"Upload\" seja enviado e nãoo a pasta em si.<br /><br />Para mais informações veja o  <a href=\"http://docs.mybb.com/Help-Upload_Directory.html\" target=\"_blank\" rel=\"nofollow\">MyBB Docs</a>.</p>
</div>";

$l['welcome_step'] = '<p>Bem vindo ao Assistente de Instalação do {1}. Este Assistente ajudará a instalar e a configurar uma nova cópia do MyBB.</p>
<p>Agora que você enviou os arquivos do MyBB o banco de dados e configurações precisam ser criados e importados. Abaixo está um esboço do que vai ser concluída durante a instalação.</p>
<ul>
	<li>Requerimentos do MyBB checados</li>
	<li>Configuração da Base de Dados</li>
	<li>Criação de Tabela da Base de Dados</li>
	<li>Data padrão inserida</li>
	<li>Tema e Modelo padrão inseridos</li>
	<li>Criação de uma conta administrativa para gerenciar o fórum</li>
	<li>Configurações básicas setadas</li>
</ul>
<p>Após cada passo completado com sucesso cliquem em PRÓXIMO para a etapa seguinte.</p>
<p>Clique "PRÓXIMO" para ver a licença de adesão ao MyBB.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> Enviar estatísticas anônimas sobreas especificações do servidor ao MyBB Group</label> (<a href="http://docs.mybb.com/Anonymous_Statistics.html" style="color: #555;" target="_blank" rel="nofollow"><small>Quais informações são enviadas?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Clicando em Próximot você concorda com os termos descritos na Licença de Adesão ao MyBB.</strong></p>';


$l['req_step_top'] = '<p>Antes da instalaçao você deve verificar os requerimentos mínimos para a instalação do MyBB.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Verificação de Requerimentos</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Requerementos</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">Versão PHP:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Extensões de DB suportadas:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Extensões de tradução suportados:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Extensões PHP XML:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Gravação de Arquivos possível?:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">Configuração de Gravação de Arquivo:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Pasta de Cache gravável?:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Pasta de UPLOADS gravável?:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Pasta de Avatares gravável?:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Parabéns, você possui os requerimentos mínimos para a instalação do MyBB.</strong></p>
<p>Clique em Próximo para continuar o processo de instalação.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB requer PHP 5.2.0  ou posterior par instalar.Atualmente está instalado a {1}.';
$l['req_step_error_dboptions'] = 'MyBB requer uma ou mais extensões de banco de dados adequados para serem instalados. O servidor informou que nenhum disponíveis.';
$l['req_step_error_xmlsupport'] = 'MyBB requer PHP para ser compilado com suporte a manipulação de dados XML. Veja <a href="http://www.php.net/xml" target="_blank">PHP.net</a> para mais informações.';
$l['req_step_error_configdefaultfile'] = 'O arquivo de configuração (inc/config.default.php) não pôde ser renomeado.Faça-o manualmente de <u>config.default.php</u> para <u>config.php</u> para permitir que ele seja escrito ou entre em contato com <a href="http://www.mybb.com/support" target="_blank" rel="nofollow">MyBB Support.</a>';
$l['req_step_error_configfile'] = 'O arquivo de confiuração (inc/config.php) não está gravável. Por favor ajuste o <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank" rel="nofollow">chmod</a> para permitir a escrita.';
$l['req_step_error_settingsfile'] = 'O arquivo de setagens (inc/settings.php) não está gravável veja em <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank" rel="nofollow">chmod</a> para as permissões corretas para escrita.';
$l['req_step_error_cachedir'] = 'A pasta de cache (cache/) não é gravável. Ajuste o  <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank" rel="nofollow">chmod</a> para as permissões corretas para escrita.';
$l['req_step_error_uploaddir'] = 'A pasta de uploads (uploads/) não é gravável. Ajuste <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank" rel="nofollow">chmod</a> para as permissões corretas para escrita.';
$l['req_step_error_avatardir'] = 'A pasta de avatares (uploads/avatars/) não é gravável. Ajuste <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank" rel="nofollow">chmod</a> para as permissões corretas para escrita.';
$l['req_step_error_cssddir'] = 'A pasta de CSS (css/) não é gravável. Ajuste o <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank" rel="nofollow">chmod</a> para as permissões corretas para escrita.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Erro</h3>
<p>A Verificação de Requerimentos do MyBB falhou devido as razões abaixo.A instalação não pôde continuar porque você não alcançou os requerimentos para a instalação do MyBB. Corrija-os e tente novamente:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>Agora é hora de configurar o banco de dados que irá utilizar MyBB, bem como seus detalhes de autenticação do banco de dados. Se você não tiver essas informações, ele pode ser obtida a partir do seu serviço de hospedagem.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Configuração da Base de Dados</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Configuração da Base de Dados</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Motor da Base de Dados:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>Uma vez que você verificou estes detalhes estão corretos, clique em Próximo para continuar.</p>';

$l['database_settings'] = "Configuração da Base de Dados";
$l['database_path'] = "Caminho da Base de dados:";
$l['database_host'] = "Nome do servidor do Banco de dados:";
$l['database_user'] = "Nome de Usuário do Banco de Dados:";
$l['database_pass'] = "Senha do Banco de Dados:";
$l['database_name'] = "Nome do Bando de Dados:";
$l['table_settings'] = "Configurações de Tabela";
$l['table_prefix'] = "Prefixo da Tavela:";
$l['table_encoding'] = "Codificação da Tabela:";

$l['db_step_error_config'] = '<div class="error">
<h3>Erro</h3>
<p>Um ou mais erros com as informações fornecidas:</p>
{1}
<p>Com os dados corretos continue com a instalação.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Você selecionou um motor de banco de dados inválido. Por favor, faça sua seleção na lista abaixo.';
$l['db_step_error_noconnect'] = 'Não foi possível conectar ao servidor de banco de dados \'{1}\' com o nome de usuário e senha fornecida. Tem certeza que o nome de host e do usuário dados estão corretos?';
$l['db_step_error_nodbname'] = 'Não foi possível selecionar o banco de dados \'{1}\'. Tem a certeza que existe e o nome de usuário e senha especificados tenham acesso a ele?';
$l['db_step_error_missingencoding'] = 'Você não selecionou uma codificação ainda. Por favor, verifique se você selecionou uma codificação antes de continuar. (Selecione \'UTF-8 Unicode\' se não tiver certeza)';
$l['db_step_error_sqlite_invalid_dbname'] = 'Você não pode usar URLs relativos para bancos de dados SQLite. Utilize um caminho de sistema de arquivos (ex: /home/user/database.db) para bancos de dados SQLite.';
$l['db_step_error_invalid_tableprefix'] = 'Você pode usar apenas um sublinhado (_) e caracteres alfanuméricos em um prefixo de tabela. Por favor, use um prefixo de tabela válido antes de continuar.';
$l['db_step_error_tableprefix_too_long'] = 'Você só pode usar o prefixo da tabela com um comprimento de 40 caracteres ou menos. Por favor, use um prefixo de tabela mais curta antes de continuar.';
$l['db_step_error_utf8mb4_error'] = '\'4-Byte UTF-8 Unicode\' requer MySQL 5.5.3 ou acima. Por favor selecione uma codificação que é compatível com a sua versão do MySQL.';

$l['tablecreate_step_connected'] = '<p>A conexão com o servidor de banco de dados e banco de dados especificado foi bem sucedida.</p>
<p>Database Engine: {1} {2}</p>
<p>As tabelas do banco de dados MyBB serão criadas agora.</p>';
$l['tablecreate_step_created'] = 'Criando tabelas {1}...';
$l['tablecreate_step_done'] = '<p>Todos as tabelas foram criadas, clique em Avançar para propagar.</p>';

$l['populate_step_insert'] = '<p>Agora que as tabelas básicas foram criadas, está na hora de inserir os dados padrão.</p>';
$l['populate_step_inserted'] = '<p>O padrão de dados foi inserido com sucesso no banco de dados. Clique em Avançar para inserir temas e modelos padrão do MyBB.</p>';


$l['theme_step_importing'] = '<p>Carregando e importando tema e arquivo de modelo...</p>';
$l['theme_step_imported'] = '<p>O tema padrão e modelo  foram inseridos com sucesso. Clique em Avançar para configurar as opções básicas para o seu fórum.</p>';


$l['config_step_table'] = '<p>It is now time for you to configure the basic settings for your forums such as forum name, URL, your website details, along with your "cookie" domain and paths. These settings can easily be changed in the future through the MyBB Admin Control Panel.</p>
		<div class="border_wrapper">
			<div class="title">Board Configuration</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Forum Details</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Forum Name:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">Forum URL (No trailing slash):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise links on your forum may be broken.\')" onchange="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise links on your forum may be broken.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Website Details</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Website Name:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">Website URL:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Cookie settings <a title="What\'s this?" target="_blank" rel="nofollow" href="http://docs.mybb.com/Cookie_Settings.html">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Cookie Domain:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise logging in or out on your forum may be broken.\')" onchange="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise logging in or out on your forum may be broken.\')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Cookie Path:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise logging in or out on your forum may be broken.\')" onchange="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise logging in or out on your forum may be broken.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Contact Details</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">Contact Email:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Security Settings</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">ACP PIN:</label><br />Leave this empty if you don\'t want to set one</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>Once you\'ve correctly entered the details above and are ready to proceed, click Next.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>Error</h3>
<p>There seems to be one or more errors with the board configuration you supplied:</p>
{1}
<p>Once the above are corrected, continue with the installation.</p>
</div>';
$l['config_step_error_url'] = 'You did not enter the URL to your forums.';
$l['config_step_error_name'] = 'You did not enter a name for your copy of MyBB.';
$l['config_step_revert'] = 'Click to revert this setting to original value.';


$l['admin_step_setupsettings'] = '<p>Setting up basic board settings...</p>';
$l['admin_step_insertesettings'] = '<p>Inserted {1} settings into {2} groups.</p>
<p>Updating settings with user defined values.</p>';
$l['admin_step_insertedtasks'] = '<p>Inserted {1} scheduled tasks.</p>';
$l['admin_step_insertedviews'] = '<p>Inserted {1} admin views.</p>';
$l['admin_step_createadmin'] ='<p>You need to create an initial administrator account for you to login and manage your copy of MyBB. Please fill in the required fields below to create this account.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Administrator Account Details</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Account Details</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Username:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Password:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Retype Password:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">Contact Details</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">Email Address:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>Once you\'ve correctly entered the details above and are ready to proceed, click Next.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Error</h3>
<p>There seems to be one or more errors with the board configuration you supplied:</p>
{1}
<p>Once the above are corrected, continue with the installation.</p>
</div>';
$l['admin_step_error_nouser'] = 'You did not enter a username for your Administrator account.';
$l['admin_step_error_nopassword'] = 'You did not enter a password for your Administrator account.';
$l['admin_step_error_nomatch'] = 'The passwords you entered do not match.';
$l['admin_step_error_noemail'] = 'You did not enter your email address for the Administrator\'s account.';
$l['admin_step_nomatch'] = 'The retyped password does not match the password from the first input. Please correct it before continuing.';

$l['done_step_usergroupsinserted'] = "<p>Importing user groups...";
$l['done_step_admincreated'] = '<p>Creating Administrator account...';
$l['done_step_adminoptions'] = '<p>Building Administrator permissions...';
$l['done_step_cachebuilding'] = '<p>Building data caches...';
$l['done_step_success'] = '<p class="success">Your copy of MyBB has successfully been installed and configured correctly.</p>
<p>The MyBB Group thanks you for your support in installing our software and we hope to see you around the <a href="http://community.mybb.com/" target="_blank" rel="nofollow">Community Forums</a> if you need help or wish to become a part of the MyBB community.</p>';
$l['done_step_locked'] = '<p>Your installer has been locked. To unlock the installer please delete the \'lock\' file in this directory.</p><p>You may now proceed to your new copy of <a href="../index.php">MyBB</a> or its <a href="../admin/index.php">Admin Control Panel</a>.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="color:red">Please remove this directory before exploring your copy of MyBB.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>Switching from another forum software?</strong></p><p>MyBB offers a merge system for easy merging of multiple forums from various different popular forum software, allowing an easy conversion process to MyBB. If you\'re looking to switch to MyBB, you\'re heading in the right direction! Check out the <a target="_blank" rel="nofollow" href="http://www.mybb.com/downloads/merge-system">Merge System</a> for more information.</p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Upgrade Process";
$l['upgrade_welcome'] = "<p>Welcome to the upgrade wizard for MyBB {1}.</p><p>Before you continue, please make sure you know which version of MyBB you were previously running as you will need to select it below.</p><p><strong>We strongly recommend that you also obtain a complete backup of your database and files before attempting to upgrade</strong> so if something goes wrong you can easily revert back to the previous version.  Also, ensure that your backups are complete before proceeding.</p><p>Make sure you only click Next ONCE on each step of the upgrade process. Pages may take a while to load depending on the size of your forum.</p><p>Once you are ready, please select your old version below and click Next to continue.</p>";
$l['upgrade_templates_reverted'] = 'Templates Reverted';
$l['upgrade_templates_reverted_success'] = "<p>All of the templates have successfully been reverted to the new ones contained in this release. Please press next to continue with the upgrade process.</p>";
$l['upgrade_settings_sync'] = 'Settings Synchronization';
$l['upgrade_settings_sync_success'] = "<p>The board settings have been synchronized with the latest in MyBB.</p><p>{1} new settings inserted along with {2} new setting groups.</p><p>To finalize the upgrade, please click next below to continue.</p>";
$l['upgrade_datacache_building'] = 'Data Cache Building';
$l['upgrade_building_datacache'] = '<p>Building caches...';
$l['upgrade_continue'] = 'Please press next to continue';
$l['upgrade_locked'] = "<p>Your installer has been locked. To unlock the installer please delete the 'lock' file in this directory.</p><p>You may now proceed to your upgraded copy of <a href=\"../index.php\">MyBB</a> or its <a href=\"../{1}/index.php\">Admin Control Panel</a>.</p>";
$l['upgrade_removedir'] = 'Please remove this directory before exploring your upgraded MyBB.';
$l['upgrade_congrats'] = "<p>Congratulations, your copy of MyBB has successfully been updated to {1}.</p>{2}<p><strong>What's Next?</strong></p><ul><li>Please use the 'Find Updated Templates' tool in the Admin CP to find customized templates updated during this upgrade process. Edit them to contain the changes or revert them to originals.</li><li>Ensure that your board is still fully functional.</li></ul>";
$l['upgrade_template_reversion'] = "Template Reversion Warning";
$l['upgrade_template_reversion_success'] = "<p>All necessary database modifications have successfully been made to upgrade your board.</p><p>This upgrade requires all templates to be reverted to the new ones contained in the package so please back up any custom templates you have made before clicking next.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> Send anonymous statistics about your server specifications to the MyBB Group</label> (<a href=\"http://docs.mybb.com/Anonymous_Statistics.html\" style=\"color: #555;\" target=\"_blank\"><small>What information is sent?</small></a>)</p>";

$l['please_login'] = "Please Login";
$l['login'] = "Login";
$l['login_desc'] = "Please enter your username and password to begin the upgrade process. You must be a valid forum administrator to perform the upgrade.";
$l['login_username'] = "Username";
$l['login_password'] = "Password";
$l['login_password_desc'] = "Please note that passwords are case sensitive.";

/* Error messages */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">Warning</h2><p>This version of MyBB is a development preview and is to be used for testing purposes only.</p><p>No official support, other than for plugins and theme development, will be provided for this version. By continuing with this install/upgrade you do so at your own risk.</p></div>";
$l['locked'] = 'The installer is currently locked, please remove \'lock\' from the install directory to continue';
$l['no_permision'] = "You do not have permissions to run this process. You need administrator permissions to be able to run the upgrade procedure.<br /><br />If you need to logout, please click <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">here</a>. From there you will be able to log in again under your administrator account.";

$l['task_versioncheck_ran'] = "The version check task successfully ran.";

