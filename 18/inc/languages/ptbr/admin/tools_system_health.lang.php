<?php
/**
 * MyBB 1.8 Pacote de Língua Brasileira
 * Direitos Autorais 2014 MyBB Group, Todos os Direitos Reservados
 * Traduzido por dthiago ArnoldLayne-xXx http://bf4brasil.com.br/
 */

$l['system_health'] = "Saúde do Sistema";
$l['system_health_desc'] = "Aqui você pode visualizar informações sobre a saúde do seu sistema.";
$l['utf8_conversion'] = "Conversão UTF-8";
$l['utf8_conversion_desc'] = "Você está convertendo a tabela da base de dados para o formato UTF-8. Tenha cuidado pois este processo pode demorar muito tempo -  dependendo do tamanho do seu fórum e desta tabela. Quando o processo completar você irá retornar para a página principal da conversão de arquivos UTF-8.";
$l['utf8_conversion_desc2'] = "Esta ferramenta verifica as tabelas da base de dados para ter a certeza que elas estão no formato UTF-8 e permite-lhe converte-las se não estiver nessa condição.";

$l['convert_all'] = "Converter Tudo";
$l['converting_to_utf8'] = "O MyBB está convertendo a tabela \"{1}\" para a codificação de idioma UTF-8 de {2} codificação.";
$l['convert_to_utf8'] = "Você irá converter a tabela \"{1}\" para a codificação de idioma UTF-8 de {2} codificação.";
$l['convert_all_to_utf'] = "Você irá converter todas as tabelas para a codificação de idioma UTF-8 de {1} codificação.";
$l['convert_all_to_utf8mb4'] = "Você está prestes a converter todas as tabelas para a codificação do idioma 4-Byte UTF-8 Unicode da codificação {1}.";
$l['converting_to_utf8mb4'] = "O MyBB irá a converter a tabela \"{1}\" para a codificação de idioma 4-Byte UTF-8 Unicode da codificação {2}.";
$l['please_wait'] = "Por favor aguarde...";
$l['converting_table'] = "Convertendo a Tabela:";
$l['convert_table'] = "Converter Tabela";
$l['convert_tables'] = "Converter Todas as Tabelas";
$l['convert_database_table'] = "Converter Tabela Base Dados";
$l['convert_database_tables'] = "Converter Todas as Tabelas Base Dados";
$l['table'] = "Tabela";
$l['status_utf8'] = "Estado UTF-8";
$l['status_utf8mb4'] = "Suporte 4-Byte UTF-8 <br />(necessário o MySQL 5.5.3 ou superior)";
$l['not_available'] = "Não disponível";
$l['all_tables'] = "Todas as Tabelas";
$l['convert_now'] = "Converter Agora";
$l['totals'] = "Totais";
$l['attachments'] = "Anexos";
$l['total_database_size'] = "Tamanho Total da Base de Dados";
$l['attachment_space_used'] = "Espaço Usado por Anexos";
$l['total_cache_size'] = "Tamanho Total da Cache";
$l['estimated_attachment_bandwidth_usage'] = "Largura de Banda usada pelos anexos";
$l['max_upload_post_size'] = "Envio Max. Tamanho da Mensagem";
$l['average_attachment_size'] = "Tamanho Médio de Anexos";
$l['stats'] = "Estado";
$l['task'] = "Tarefa";
$l['run_time'] = "Hora de Execução";
$l['next_3_tasks'] = "Próximas 3 Tarefas";
$l['no_tasks'] = "Não existem tarefas sendo executadas neste momento.";
$l['backup_time'] = "Tempo de Arquivamento";
$l['no_backups'] = "Atualmente não foram efetuados arquivamentos.";
$l['existing_db_backups'] = "Arquivamento de Base de Dados existentes";
$l['writable'] = "Gravável";
$l['not_writable'] = "Não Gravável";
$l['please_chmod_777'] = "Por favor altere o CHMOD para 777.";
$l['chmod_info'] = "Por favor altere as configurações CHMOD para uma especificada no arquivo abaixo. Para mais informações em como efetuar o CHMOD, veja o";
$l['file'] = "Arquivo";
$l['location'] = "Localização";
$l['settings_file'] = "Definições do arquivo";
$l['config_file'] = "Configuração do arquivo";
$l['file_upload_dir'] = "Pasta de arquivos Enviados";
$l['avatar_upload_dir'] = "Pasta de Avatares Enviados";
$l['language_files'] = "Arquivos de Idioma";
$l['backup_dir'] = "Pasta de Backups";
$l['cache_dir'] = "Pasta de Cache";
$l['themes_dir'] = "Pasta de Temas";
$l['chmod_files_and_dirs'] = "CHMOD de arquivos e pastas";

$l['notice_process_long_time'] = "Este processo pode demorar algumas horas, dependendo do tamanho do seu fórum e desta tabela.";
$l['notice_mb4_warning'] = "O suporte 4-Byte UTF-8 necessita do MySQL 5.5.3 ou acima. Não vai conseguir importar a base de dados  de um servidor MySQL  com outra versão.";

$l['check_templates'] = "Verifica os Modelos";
$l['check_templates_desc'] = "Verifica problemas de segurança conhecidos em todos os modelos instalados.";
$l['check_templates_title'] = "Verifica a Segurança do Modelos";
$l['check_templates_info'] = "Este processo vai verificar os seus modelos contra problemas de segurança que possam afetar o seu fórum e o servidor onde ele corre. Isto pode demorar um pouco se você tiver instalado muitos Temas.
<br /><br />Para iniciar o processo clique no botão 'Continuar' abaixo.";
$l['check_templates_info_desc'] = "Os modelos abaixo coincidem com problemas conhecidos de segurança. Por favor reveja-os.";
$l['full_edit'] = "Edição Total";

$l['error_chmod'] = "Dos arquivos e pastas necessárias não têm as configurações adequadas de CHMOD.";
$l['error_invalid_table'] = "A tabela especificada não existe.";
$l['error_db_encoding_not_set'] = "As suas definições atuais do MyBB não estão configuradas para usar esta ferramenta ainda. Por favor veja o <a href=\"http://docs.mybb.com/Utf8_setup.html\">MyBB Docs</a> para mais informações de como configurar.";
$l['error_not_supported'] = "O sistema da sua base de dados atual não é suportado pela ferramenta de conversão UTF-8.";
$l['error_invalid_input'] = "Ocorreu um problema ao verificar o Modelo. Por favor tente outra vez ou contate o  MyBB  Group para suporte.";
$l['error_master_templates_altered'] = "Os Modelos Principais foram alterados. Pr favor contate o MyBB Group  para suporte de como altera-lo.";
$l['error_utf8mb4_version'] = "A sua versão MySQL não suporta a codificação 4-Byte UTF-8.";


$l['warning_multiple_encodings'] = "É recomendado que não use codificações diferentes na sua base de dados. Isso pode causar comportamentos inesperados ou erros de MySQL.";
$l['warning_utf8mb4_config'] = "Para suporte 4-Byte UTF-8 total necessita de alterar <i>\$config['database']['encoding'] = 'utf8';</i> para <i>\$config['database']['encoding'] = 'utf8mb4';</i> no seu inc/config.php.";

$l['success_templates_checked'] = "Modelos verificados com sucesso - sem problemas de segurança conhecidos!";
$l['success_all_tables_already_converted'] = "Todas as tabelas estão convertidas ou estão no formato UTF-8.";
$l['success_table_converted'] = "A tabela \"{1}\" foi convertida para UTF-8 com sucesso.";
$l['success_chmod'] = "Todos os arquivos e pastas necessários estão com as configurações CHMOD corretas.";
?>
