<?php
/**
 * MyBB 1.8 Pacote de Idioma Português do Brasil
 * Direitos Autorais 2014 MyBB Group, Todos os Direitos Reservados
 * Traduzido por dthiago ArnoldLayne-xXx http://bf4brasil.com.br/
 */

$l['board_settings'] = "Configurações do Fórum";
$l['change_settings'] = "Modificar Configurações";
$l['change_settings_desc'] = "Esta seção permite gerenciar todas as configurações e ajustes referentes ao seu fórum. Para iniciar, selecione um grupo abaixo para gerenciar as configurações atuais no mesmo.";
$l['add_new_setting'] = "Adicionar Configuração";
$l['add_new_setting_desc'] = "Esta seção permite-lhe adicionar uma nova configuração ao seu fórum.";
$l['modify_existing_settings'] = "Modificar Configuração";
$l['modify_existing_settings_desc'] = "Esta seção permite-lhe modificar uma configuração existente no seu fórum.";
$l['add_new_setting_group'] = "Adicionar Grupo de Configurações";
$l['add_new_setting_group_desc'] = "Esta seção permite-lhe criar um grupo de configurações para categorizar configurações individuais.";
$l['edit_setting_group'] = "Editar Grupo de Configuração";
$l['edit_setting_group_desc'] = "Esta seção permite-lhe editar um grupo de configurações existente.";

$l['title'] = "Título";
$l['description'] = "Descrição";
$l['group'] = "Grupo";
$l['display_order'] = "Ordem de Exibição";
$l['name'] = "Identificador";
$l['name_desc'] = "Este identificador único é usado numa matriz de configurações para fazer referência a esta configuração (em scripts, traduções, e modelos).";
$l['group_name_desc'] = "Este identificador único é usado para o sistema de tradução.";
$l['text'] = "Texto";
$l['textarea'] = "Área de texto";
$l['yesno'] = "Opção Sim / Não";
$l['onoff'] = "Opção Ligado / Desligado";
$l['select'] = "Caixa de Seleção";
$l['radio'] = "Botões de Rádio";
$l['checkbox'] = "Caixas de Seleção";
$l['language_selection_box'] = "Caixa de Seleção de Linguagem";
$l['forum_selection_box'] = "Caixa de seleção do fórum";
$l['group_selection_box'] = "Caixa de seleção do grupo";
$l['adminlanguage'] = "Seleção de Linguagem do Administrativo";
$l['cpstyle'] = "Painel de Controle da caixa da Seleção de estilo";
$l['php'] = "PHP Disponível";
$l['type'] = "Tipo";
$l['extra'] = "Extra";
$l['extra_desc'] = "Se esta configuração for uma seleção, botão de opção ou botão de marcação, informe-nos a lista de chaves combinadas (chave=Item) para mostrar. Separe cada uma das chaves com uma linha. Se for código PHP, digite-o para ser avaliado.";
$l['value'] = "Valor";
$l['insert_new_setting'] = "inserir  Configuração";
$l['edit_setting'] = "Editar Configuração";
$l['delete_setting'] = "Remover Configuração";
$l['setting_configuration'] = "Definição das Configurações";
$l['update_setting'] = "Atualizar Configurações";
$l['save_settings'] = "Salvar Configurações";
$l['setting_groups'] = "Grupos de Configurações";
$l['bbsettings'] = "Configurações";
$l['insert_new_setting_group'] = "Inserir Grupo de Configurações";
$l['setting_group_setting'] = "Grupo de Configurações / Definições";
$l['order'] = "Ordem";
$l['delete_setting_group'] = "Apagar Grupo de Configurações";
$l['save_display_orders'] = "Guardar Ordens de Exibição";
$l['update_setting_group'] = "Atualizar Grupo de Configurações";
$l['modify_setting'] = "Alterar Configuração";
$l['search'] = "Procurar";
$l['plugin_settings'] = "Configurações Plugin";

$l['show_all_settings'] = "Mostrar todas as Configurações";
$l['settings_search'] = "Procurar por Configurações";

$l['confirm_setting_group_deletion'] = "Tem  certeza que deseja excluir este grupo de Configurações?";
$l['confirm_setting_deletion'] = "Tem certeza que deseja excluir esta configuração?";

$l['error_missing_title'] = "Você não inseriu um título para esta configuração";
$l['error_missing_group_title'] = "Você não inseriu um título para este grupo de configurações";
$l['error_invalid_gid'] = "Você não selecionou um grupo válido onde colocar esta configuração";
$l['error_invalid_gid2'] = "Você seguiu um link para um grupo de configuração inválido. Por favor, verifique a existência.";
$l['error_missing_name'] = "Você não inseriu um identificador para esta configuração";
$l['error_missing_group_name'] = "Você não inseriu um identificador para este grupo de configurações";
$l['error_invalid_type'] = "Você não selecionou um tipo válido para esta configuração";
$l['error_invalid_sid'] = "A configuração especificada não existe";
$l['error_duplicate_name'] = "O identificador especificado já está em uso pela configuração \"{1}\" -- deverá ser o único";
$l['error_duplicate_group_name'] = "O identificador especificado está em uso pelo grupo de configurações \"{1}\" -- deverá ser o único";
$l['error_no_settings_found'] = "Não fora encontrada nenhuma configuração para o termo de pesquisa especificado.";
$l['error_cannot_edit_default'] = "Configurações e grupos de configurações padrões não podem ser editados ou removidos.";
$l['error_cannot_edit_php'] = "Este é um tipo especial de configuração que não pode ser editado.";
$l['error_ajax_search'] = "Ocorreu um problema ao efetuar  pesquisa de configuração:";
$l['error_ajax_unknown'] = "ocorreu um erro desconhecido enquanto efetuava a pesquisa de configurações.";
$l['error_chmod_settings_file'] = "A configuração do arquivo \"./inc/settings.php\" não é editável. Por favor edite o CHMOD para 777.<br />Para mais informações de como modificar o CHMOD, verifique em <a href=\"http://docs.mybb.com/index.php/HowTo_Chmod.html\" target=\"_blank\">MyBB Docs</a>.";
$l['error_hidden_captcha_conflict'] = "O captcha escondido não pode ser \"{1}\" porque está em conflito com outro campo de registro.";

$l['success_setting_added'] = "A configuração foi criada com sucesso.";
$l['success_setting_updated'] = "A configuração foi atualizada com sucesso.";
$l['success_setting_deleted'] = "A configuração selecionada foi excluida com sucesso.";
$l['success_settings_updated'] = "As configurações foram atualizadas com sucesso.";
$l['success_display_orders_updated'] = "As ordens de exibição da configuração foram atualizadas com sucesso.";
$l['success_setting_group_added'] = "O grupo de configuração foi criado com sucesso.";
$l['success_setting_group_updated'] = "O grupo de configuração foi atualizado com sucesso.";
$l['success_setting_group_deleted'] = "O grupo de configuração selecionado foi apagado com sucesso.";
$l['success_duplicate_settings_deleted'] = "Todos os grupo de configurações duplicados foram apagados com sucesso.";

$l['searching'] = 'Procurando...';
$l['search_error'] = 'Ocorreu um erro ao obter os resultados de pesquisa:';
$l['search_done'] = 'Concluído!';
