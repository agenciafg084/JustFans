<?php

return [
    'dashboard' => [

    ],

    'common' => [
        'created_at' => 'Criado em',
        'updated_at' => 'Atualizado em',
        'expiring_at' => 'Expira em',
        'canceled_at' => 'Cancelado em',
        'create' => 'Criar',
        'edit' => 'Atualizar',
        'delete' => 'Excluir',
        'view' => 'Visualizar',
        'id' => 'ID',
    ],

    'navigation' => [
        'dashboard' => 'Dashboard',
        'groups' => [
            'users' => 'Usuários',
            'posts' => 'Postagens',
            'finances' => 'Finanças',
            'taxes' => 'Impostos',
            'stories' => 'Stories',
            'streams' => 'Transmissões',
            'site' => 'Site',
            'settings' => 'Configurações',
        ],
    ],

    'filters' => [
        'title' => 'Filtros',
        'start_date' => 'Data de início',
        'end_date' => 'Data de término',
        'today' => 'Hoje',
        'week' => 'Semana passada',
        'month' => 'Mês passado',
        'year' => 'Este ano',
        'last_month' => 'Últimos 30 dias',
        'last_year' => 'Últimos 12 meses',

    ],

    'widgets' => [
        'stats_overview' => [
            'title' => 'Visão geral dos últimos 7 dias',

            'revenue' => [
                'label' => 'Receita',
                'description' => 'Receita total obtida',
            ],
            'new_users' => [
                'label' => 'Novos usuários',
                'description' => 'Usuários registrados',
            ],
            'new_payments' => [
                'label' => 'Pagamentos',
                'description' => 'Transações concluídas',
            ],
        ],

        'users_chart' => [
            'title' => 'Usuários',
            'datasets' => [
                'users' => 'Usuários',
                'user_messages' => 'Mensagens de usuários',
            ],
        ],

        'posts_chart' => [
            'title' => 'Postagens',
            'filters' => [
                'today' => 'Hoje',
                'week' => 'Semana passada',
                'month' => 'Mês passado',
                'year' => 'Este ano',
            ],
            'datasets' => [
                'posts' => 'Postagens',
                'comments' => 'Comentários',
                'reactions' => 'Reações',
            ],
        ],

        'transactions_chart' => [
            'title' => 'Pagamentos',
            'filters' => [
                'today' => 'Hoje',
                'week' => 'Semana passada',
                'month' => 'Mês passado',
                'year' => 'Este ano',
            ],
            'datasets' => [
                'transactions' => 'Pagamentos',
                'subscriptions' => 'Assinaturas',
            ],
        ],

        'streams_chart' => [
            'title' => 'Transmissões',
            'filters' => [
                'today' => 'Hoje',
                'week' => 'Semana passada',
                'month' => 'Mês passado',
                'year' => 'Este ano',
            ],
            'datasets' => [
                'streams' => 'Transmissões',
                'stream_messages' => 'Mensagens na transmissão',
            ],
        ],

        'product_info' => [
            'title' => 'Início Rápido',
            'website' => [
                'title' => 'Website',
                'description' => 'Visite a página oficial do produto',
            ],
            'documentation' => [
                'title' => 'Documentação',
                'description' => 'Visite a documentação oficial',
            ],
            'changelog' => [
                'title' => 'Registro de Alterações',
                'description' => 'Visite o registro de alterações oficial',
            ],
        ],

        'transaction_stats' => [
            'heading' => 'Pagamentos deste ano',
            'total' => 'Total de pagamentos',
            'completed' => 'Pagamentos concluídos',
            'average' => 'Preço médio',
        ],

        'subscription_stats' => [
            'heading' => 'Assinaturas deste ano',
            'total' => 'Total de assinaturas',
            'active' => 'Assinaturas ativas atualmente',
            'average_price' => 'Preço médio',
        ],

    ],

    'resources' => [
        'user' => [
            'label' => 'Usuário',
            'plural' => 'Usuários',
            'sections' => [
                'account_info' => 'Informações da conta',
                'paywall_info' => 'Informações do paywall',
                'profile_info' => 'Informações do perfil',
                'withdrawals_info' => 'Informações de saque',
                'security_info' => 'Informações de segurança',
                'billing_info' => 'Informações de cobrança',
            ],
            'fields' => [
                'id' => 'ID',
                'name' => 'Nome',
                'email' => 'E-mail',
                'username' => 'Nome de usuário',
                'password' => 'Senha',
                'roles' => 'Função',
                'email_verified_at' => 'E-mail verificado em',
                'identity_verified_at' => 'Identidade verificada em',
                'birthdate' => 'Data de nascimento',
                'paid_profile' => 'Perfil pago',
                'public_profile' => 'Perfil público',
                'open_profile' => 'Perfil aberto',
                'profile_access_price' => 'Preço de acesso',
                'profile_access_price_3_months' => 'Preço de acesso (3 meses)',
                'profile_access_price_6_months' => 'Preço de acesso (6 meses)',
                'profile_access_price_12_months' => 'Preço de acesso (12 meses)',
                'current_avatar' => 'Avatar atual',
                'avatar' => 'Avatar',
                'current_cover' => 'Capa atual',
                'cover' => 'Capa',
                'bio' => 'Bio',
                'location' => 'Localização',
                'gender_id' => 'Gênero',
                'gender_pronoun' => 'Pronome',
                'website' => 'Site',
                'referral_code' => 'Código de referência',
                'stripe_account_id' => 'ID Stripe Connect',
                'country_id' => 'País Stripe Connect',
                'stripe_onboarding_verified' => 'Onboarding Stripe verificado',
                'last_ip' => 'Último IP',
                'last_active_at' => 'Última atividade em',
                'enable_geoblocking' => 'Ativar bloqueio geográfico',
                'enable_2fa' => 'Ativar 2FA',
                'billing_address' => 'Endereço de cobrança',
                'first_name' => 'Nome',
                'last_name' => 'Sobrenome',
                'city' => 'Cidade',
                'country' => 'País',
                'state' => 'Estado',
                'postcode' => 'CEP',
                'gender' => 'Gênero',
            ],
            'actions' => [
                'impersonate' => 'Personificar',
                'profile_url' => 'URL do Perfil',
            ],
        ],

        'user_verify' => [
            'label' => 'Verificação de ID',
            'plural' => 'Verificações de ID',

            'sections' => [
                'verification_details' => 'Detalhes da verificação',
                'verification_details_descr' => 'Gerenciar solicitação de verificação do usuário.',
            ],

            'tabs' => [
                'all' => 'Todos',
                'pending' => 'Pendente',
                'approved' => 'Aprovado',
                'rejected' => 'Recusado',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'status' => 'Status',
                'rejectionReason' => 'Motivo da recusa',
                'files' => 'Prévia dos arquivos'
            ],

            'actions' => [
                'profile_url' => 'URL do Perfil',
            ],

            'navigation_badge_tooltip' => 'Número de verificações de ID pendentes',
        ],

        'wallet' => [
            'label' => 'Carteira',
            'plural' => 'Carteiras',

            'sections' => [
                'wallet_details' => 'Detalhes da carteira',
            ],

            'fields' => [
                'id' => 'ID da Carteira',
                'user_id' => 'Usuário',
                'total' => 'Valor total',
                'created_at' => 'Criado em',
                'updated_at' => 'Atualizado em',
            ],

            'helper_texts' => [
                'id' => 'Formato UUID preferido.',
            ],
        ],

        'notification' => [
            'label' => 'Notificação',
            'plural' => 'Notificações',

            'sections' => [
                'general_info' => 'Informações gerais',
                'notification_details' => 'Detalhes da notificação',
                'linked_models' => 'Modelos vinculados',
            ],

            'fields' => [
                'id' => 'ID da Notificação',
                'from_user_id' => 'Do usuário',
                'to_user_id' => 'Para o usuário',
                'type' => 'Tipo de notificação',
                'read' => 'Marcar como lida',
                'post_id' => 'ID da Postagem',
                'post_comment_id' => 'ID do Comentário',
                'subscription_id' => 'ID da Assinatura',
                'transaction_id' => 'ID da Transação',
                'reaction_id' => 'ID da Reação',
                'withdrawal_id' => 'ID do Saque',
                'user_message_id' => 'ID da Mensagem',
                'stream_id' => 'ID da Transmissão'
            ],

            'helper_texts' => [
                'id' => 'Formato UUID preferido.',
                'read' => 'Indica se o usuário visualizou a notificação.',
            ],

            'types' => [
                'ppv_unlock' => 'Conteúdo desbloqueado',
                'expiring_stream' => 'Transmissão expirando',
                'new_message' => 'Nova mensagem',
                'withdrawal_action' => 'Atualização de saque',
                'new_subscription' => 'Nova assinatura',
                'new_comment' => 'Novo comentário',
                'new_reaction' => 'Nova reação',
                'new_tip' => 'Nova gorjeta',
            ],
        ],

        'user_message' => [
            'label' => 'Mensagem',
            'plural' => 'Mensagens',

            'sections' => [
                'user_message_details' => 'Detalhes da mensagem',
                'user_message_details_descr' => 'Gerenciar mensagens diretas entre usuários.',
            ],

            'fields' => [
                'sender_id' => 'Remetente',
                'receiver_id' => 'Destinatário',
                'message' => 'Conteúdo da mensagem',
                'price' => 'Preço (opcional)',
                'replyTo' => 'Responder à mensagem ID',
                'isSeen' => 'Foi visualizada',
                 'story_id' => 'Story',
            ],

            'attachments' => [
                'title' => 'Ver anexos de :name',
                'breadcrumb' => 'Anexos',
                'nav_label' => 'Ver anexos',
                'file_link' => 'Abrir arquivo',
                'actions' => [
                    'create' => 'Adicionar novo anexo',
                ],
            ],

            'transactions' => [
                'title' => 'Ver pagamentos de :record',
                'breadcrumb' => 'Pagamentos',
                'nav_label' => 'Ver pagamentos',
                'fields' => [
                    'id' => 'ID',
                    'sender' => 'Remetente',
                    'payer' => 'Pagador',
                    'status' => 'Status',
                    'type' => 'Tipo',
                    'payment_provider' => 'Provedor',
                    'amount' => 'Valor',
                ],
                'actions' => [
                    'create' => 'Adicionar nova transação',
                ],
            ]

        ],

        'reaction' => [
            'label' => 'Reação',
            'plural' => 'Reações',

            'sections' => [
                'reaction_info' => 'Informações da reação',
                'reaction_info_descr' => 'Detalhes sobre o usuário e o tipo de reação.',
                'target_content' => 'Conteúdo alvo',
                'target_content_descr' => 'Especifique o conteúdo ao qual esta reação está vinculada.',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'reaction_type' => 'Tipo de reação',
                'post_id' => 'ID da Postagem',
                'post_comment_id' => 'ID do Comentário'
            ],

            'types' => [
                'like' => 'Curtida',
            ],
        ],

        'user_list' => [
            'label' => 'Lista',
            'plural' => 'Listas',

            'sections' => [
                'list_details' => 'Detalhes da lista',
                'list_details_descr' => 'Forneça um nome e tipo para esta lista de usuários.',
                'owner' => 'Proprietário',
                'owner_descr' => 'Selecione o usuário dono desta lista.',
            ],

            'fields' => [
                'name' => 'Nome da lista',
                'type' => 'Tipo de lista',
                'user_id' => 'Dono da lista'
            ],

            'placeholders' => [
                'name' => 'Digite o nome da lista',
            ],

            'types' => [
                'blocked' => 'Usuários bloqueados',
                'following' => 'Seguindo',
                'followers' => 'Seguidores',
                'custom' => 'Lista personalizada',
            ],

            'members' => [
                'title' => 'Ver membros de :name',
                'breadcrumb' => 'Membros',
                'navigation_label' => 'Ver membros',
                'fields' => [
                    'id' => 'ID',
                    'username' => 'Usuário',
                    'created_at' => 'Criado em',
                ],
            ],
        ],

        'user_list_member' => [
            'label' => 'Membro da Lista',
            'plural' => 'Membros da Lista',

            'actions' => [
                'create' => 'Adicionar novo membro',
            ],

            'sections' => [
                'list_association' => 'Associação à Lista',
                'list_association_descr' => 'Atribuir um usuário a uma lista específica.',
            ],

            'fields' => [
                'list_id' => 'ID da Lista de Usuários',
                'user_id' => 'Usuário',
            ],

            'placeholders' => [
                'list_id' => 'Selecione uma lista',
                'user_id' => 'Selecione um usuário',
            ],
        ],

        'user_bookmark' => [
            'label' => 'Favorito',
            'plural' => 'Favoritos',

            'sections' => [
                'bookmark_details' => 'Detalhes do favorito',
                'bookmark_details_descr' => 'Vincular um usuário a uma postagem favoritada.',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'post_id' => 'ID da Postagem',
                'username' => 'Usuário'
            ],
        ],

        'user_report' => [
            'label' => 'Denúncia',
            'plural' => 'Denúncias',

            'sections' => [
                'reporter_reported' => 'Denunciante e denunciado',
                'reporter_reported_descr' => 'Identifique o usuário que enviou a denúncia e o usuário sendo denunciado.',

                'reported_content' => 'Conteúdo denunciado (opcional)',
                'reported_content_descr' => 'Vincule esta denúncia a um conteúdo específico.',

                'report_details' => 'Detalhes da denúncia',
            ],

            'tabs' => [
                'all' => 'Todas',
                'received' => 'Recebidas',
                'seen' => 'Vistas',
                'solved' => 'Resolvidas',
            ],

            'fields' => [
                'from_user_id' => 'Denunciante',
                'user_id' => 'Usuário denunciado',
                'post_id' => 'ID da Postagem',
                'message_id' => 'ID da Mensagem',
                'stream_id' => 'ID da Transmissão',
                'type' => 'Motivo da denúncia',
                'status' => 'Status',
                'details' => 'Detalhes adicionais',
                'story_id' => 'ID do Story',
            ],

            'types' => [
                'i_dont_like' => 'Não gosto disso',
                'spam' => 'Spam',
                'dmca' => 'DMCA',
                'offensive_content' => 'Conteúdo ofensivo',
                'abuse' => 'Abuso',
            ],

            'statuses' => [
                'received' => 'Recebida',
                'seen' => 'Vista',
                'solved' => 'Resolvida',
            ],

            'actions' => [
                'view_admin' => 'Ver página administrativa',
                'view_public' => 'Ver página pública',
            ],

            'navigation_badge_tooltip' => 'Número de denúncias pendentes',
        ],

        'featured_user' => [
            'label' => 'Usuário em destaque',
            'plural' => 'Usuários em destaque',

            'sections' => [
                'main' => 'Destacar um usuário',
                'main_descr' => 'Selecione um usuário para exibir como destaque na plataforma.',
            ],

            'fields' => [
                'user_id' => 'Usuário destacado',
                'username' => 'Nome de usuário',
                'created_at' => 'Criado em',
                'updated_at' => 'Atualizado em',
            ],
        ],

        'user_tax' => [
            'label' => 'Informações fiscais',
            'plural' => 'Informações fiscais',

            'sections' => [
                'user' => 'Associação de usuário',
                'user_descr' => 'Vincule as informações fiscais a um usuário e seu país emissor.',

                'tax' => 'Identificação fiscal',
                'tax_descr' => 'Detalhes de identificação legal e fiscal.',

                'personal' => 'Detalhes pessoais',
                'personal_descr' => 'Informações adicionais de endereço e pessoais.',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'issuing_country_id' => 'País emissor',
                'legal_name' => 'Nome legal',
                'tax_identification_number' => 'Número de identificação fiscal',
                'vat_number' => 'Número de IVA/VAT',
                'tax_type' => 'Tipo de imposto',
                'date_of_birth' => 'Data de nascimento',
                'primary_address' => 'Endereço principal',
                'earnings_ytd' => 'Ganhos acumulados no ano (bruto)',
            ],

            'filters' => [
                'min_earnings' => 'Ganhos mínimos',
            ],

            'descriptions' => [
                'primary_address' => 'Insira o endereço completo',
            ],

            'placeholders' => [
                'user_id' => 'Selecione o usuário',
                'issuing_country_id' => 'Selecione o país',
            ],

            'options' => [
                'types' => [
                    'dac7' => 'DAC7',
                ],
            ],
        ],

        'post_comment' => [
            'label' => 'Comentário',
            'plural' => 'Comentários',

            'sections' => [
                'post_comment_details' => 'Detalhes do comentário',
                'post_comment_details_descr' => 'Detalhes do comentário na postagem.',
            ],

            'fields' => [
                'id' => 'ID',
                'author' => 'Usuário',
                'message' => 'Mensagem',
                'post_id' => 'Postagem'
            ],
        ],

        'attachment' => [
            'label' => 'Anexo',
            'plural' => 'Anexos',

            'sections' => [
                'file_and_metadata' => 'Arquivo e metadados',
                'associations' => 'Associações',
                'attachment_details' => 'Detalhes do anexo',
                'attachment_details_descr' => 'Configure ou revise os detalhes do anexo.',
            ],

            'fields' => [
                'id' => 'ID',
                'filename' => 'Nome do arquivo',
                'file' => 'Arquivo',
                'driver' => 'Driver de armazenamento',
                'type' => 'Tipo',
                'user_id' => 'Usuário',
                'post_id' => 'ID da Postagem',
                'message_id' => 'ID da Mensagem',
                'payment_request_id' => 'ID da Solicitação de pagamento',
                'coconut_id' => 'ID Coconut',
                'has_thumbnail' => 'Tem miniatura',
                'has_blurred_preview' => 'Tem prévia borrada',
                'open' => 'Abrir arquivo',
                'story_id' => 'Story',
                'sound_id' => 'Som',
                'length'   => 'Duração',
            ],

            'help' => [
                'id' => 'Formato UUID preferido.',
                'driver' => 'Selecione qual driver de armazenamento usar para os arquivos do usuário.',
                'length' => 'Duração do arquivo de mídia em segundos.',
            ],
        ],

        'poll' => [
            'label' => 'Enquete',
            'plural' => 'Enquetes',

            'sections' => [
                'post_details' => 'Detalhes da enquete',
                'post_details_descr' => 'Configure os detalhes da enquete.',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'post_id' => 'ID da Postagem',
                'ends_at' => 'Termina em',
                'answer_id' => 'Resposta selecionada',
                'answer' => 'Escolha',
                'id' => 'Id',
            ],

            'filters' => [
                'poll.id' => 'ID da Enquete',
                'user.username' => 'Nome de usuário',
            ],

            'poll_answers' => [
                'poll_choices' => 'Opções da enquete',
                'choices' => 'Escolhas',
                'actions' => [
                    'create' => 'Adicionar nova escolha',
                    'edit' => 'Editar escolha',
                    'delete' => 'Excluir escolha',
                ]
            ],

            'user_poll_answers' => [
                'label' => 'Respostas dos usuários',
                'fields' => [
                    'user_id' => 'Usuário',
                    'answer_id' => 'Resposta selecionada',
                    'answer' => 'Resposta',
                ],
                'actions' => [
                    'create' => 'Adicionar resposta',
                    'edit' => 'Editar resposta',
                    'delete' => 'Excluir resposta',
                ],
            ],
        ],

        'transaction' => [

            'label' => 'Transação',
            'plural' => 'Transações',

            'sections' => [
                'participants' => 'Participantes',
                'participants_descr' => 'Defina o remetente e o destinatário envolvidos na transação.',

                'details' => 'Detalhes da transação',
                'details_descr' => 'Defina o status, tipo, provedor e dados principais.',

                'related' => 'Entidades relacionadas',
                'related_descr' => 'Associe esta transação a conteúdos ou assinaturas.',

                'provider_info' => 'Informações do provedor',
                'provider_info_descr' => 'Adicione IDs ou tokens opcionais de provedores externos.',
            ],

            'fields' => [
                'sender_user_id' => 'Comprador',
                'recipient_user_id' => 'Vendedor',

                'status' => 'Status',
                'type' => 'Tipo',
                'payment_provider' => 'Provedor de pagamento',
                'currency' => 'Código da moeda',
                'amount' => 'Valor',
                'taxes' => 'Impostos',

                'subscription_id' => 'Assinatura',
                'post_id' => 'Postagem',
                'stream_id' => 'Transmissão',
                'invoice_id' => 'Fatura',
                'user_message_id' => 'Mensagem',

                'paypal_payer_id' => 'ID do pagador PayPal',
                'paypal_transaction_id' => 'ID da transação PayPal',
                'paypal_transaction_token' => 'Token da transação PayPal',

                'stripe_transaction_id' => 'ID da transação Stripe',
                'stripe_session_id' => 'ID da sessão Stripe',

                'coinbase_charge_id' => 'ID da cobrança Coinbase',
                'coinbase_transaction_token' => 'Token da transação Coinbase',

                'nowpayments_payment_id' => 'ID do pagamento NowPayments',
                'nowpayments_order_id' => 'ID do pedido NowPayments',

                'ccbill_transaction_token' => 'Token da transação CCBill',
                'ccbill_transaction_id' => 'ID da transação CCBill',
                'ccbill_subscription_id' => 'ID da assinatura CCBill',

                'verotel_payment_token' => 'Token da transação Verotel',
                'verotel_sale_id' => 'ID da venda Verotel',

                'paystack_payment_token' => 'Token de pagamento Paystack',

                'mercado_payment_token' => 'Token de pagamento Mercado Pago',
                'mercado_payment_id' => 'ID de pagamento Mercado Pago',

                'sender' => 'Remetente',
                'receiver' => 'Destinatário',
                'receiver_user_id' => 'Vendedor',
                'id' => 'ID'
            ],

            'helpers' => [
                'taxes' => 'JSON obrigatório. Exemplos podem ser obtidos de transações criadas pelo app.',
                'taxes_placeholder' => 'Insira o detalhamento de impostos ou notas',
            ],

            'status_labels' => [
                'pending' => 'Pendente',
                'refunded' => 'Reembolsado',
                'partially_paid' => 'Parcialmente pago',
                'declined' => 'Recusado',
                'initiated' => 'Iniciado',
                'canceled' => 'Cancelado',
                'approved' => 'Aprovado',
            ],

            'type_labels' => [
                'tip' => 'Gorjeta',
                'deposit' => 'Depósito',
                'withdrawal' => 'Saque',
                'chat_tip' => 'Gorjeta no chat',
                'stream_access' => 'Acesso à transmissão',
                'message_unlock' => 'Desbloqueio de mensagem',
                'post_unlock' => 'Desbloqueio de postagem',
                'one_month_subscription' => 'Assinatura de 1 mês',
                'three_months_subscription' => 'Assinatura de 3 meses',
                'six_months_subscription' => 'Assinatura de 6 meses',
                'yearly_subscription' => 'Assinatura anual',
                'subscription_renewal' => 'Renovação de assinatura',
            ],

            'tabs' => [
                'all' => 'Todas',
                'pending' => 'Pendente',
                'approved' => 'Aprovada',
                'declined' => 'Recusada',
            ],

        ],

        'post' => [
            'label' => 'Postagem',
            'plural' => 'Postagens',

            'sections' => [
                'details' => 'Detalhes da postagem',
                'details_descr' => 'Configure os detalhes da postagem.',
                'settings' => 'Configurações da postagem',
                'settings_descr' => 'Preço, status e configurações de tempo.',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'text' => 'Texto da postagem',
                'price' => 'Preço',
                'status' => 'Status',
                'release_date' => 'Data de lançamento',
                'expire_date' => 'Data de expiração',
                'is_pinned' => 'Fixar postagem',
            ],

            'actions' => [
                'post_url' => 'URL da Postagem',
            ],

            'status_labels' => [
                '0' => 'Pendente',
                '1' => 'Aprovado',
                '2' => 'Rejeitado',
            ],
        ],

        'subscription' => [
            'label' => 'Assinatura',
            'plural' => 'Assinaturas',

            'sections' => [
                'user_info' => 'Informações do usuário',
                'subscription_details' => 'Detalhes da assinatura',
                'platform_identifiers' => 'Identificadores da plataforma',
                'timestamps' => 'Carimbos de data/hora',
            ],

            'fields' => [
                'sender_user_id' => 'Assinante',
                'recipient_user_id' => 'Criador',

                'subscriber.username' => 'Assinante',
                'creator.username' => 'Criador',

                'type' => 'Tipo',
                'status' => 'Status',
                'provider' => 'Provedor de pagamento',
                'amount' => 'Valor',

                'paypal_agreement_id' => 'ID do acordo PayPal',
                'paypal_plan_id' => 'ID do plano PayPal',
                'stripe_subscription_id' => 'ID da assinatura Stripe',
                'ccbill_subscription_id' => 'ID da assinatura CCBill',
                'verotel_sale_id' => 'ID da venda Verotel',

                'expires_at' => 'Expira em',
                'canceled_at' => 'Cancelada em',
            ],

            'status_labels' => [
                'active' => 'Ativa',
                'completed' => 'Concluída',
                'canceled' => 'Cancelada',
                'suspended' => 'Suspensa',
                'expired' => 'Expirada',
                'failed' => 'Falhou',
                'pending' => 'Pendente',
            ],

            'tabs' => [
                'all' => 'Todas',
                'pending' => 'Pendente',
                'active' => 'Ativa',
                'canceled' => 'Cancelada',
            ],

            'type_labels' => [
                'one_month_subscription' => 'Assinatura de 1 mês',
                'three_months_subscription' => 'Assinatura de 3 meses',
                'six_months_subscription' => 'Assinatura de 6 meses',
                'yearly_subscription' => 'Assinatura de 1 ano',
            ],
        ],

        'withdrawal' => [
            'label' => 'Saque',
            'plural' => 'Saques',

            'sections' => [
                'details' => 'Detalhes do saque',
                'details_descr' => 'Configure ou revise a solicitação de saque.',
            ],

            'fields' => [
                'id' => 'ID',
                'username' => 'Usuário',
                'amount' => 'Valor',
                'fee' => 'Taxa',
                'status' => 'Status',
                'processed' => 'Processado',
                'payment_method' => 'Método de pagamento',
                'payment_identifier' => 'Identificador de pagamento',
                'stripe_payout_id' => 'ID do Payout Stripe',
                'stripe_transfer_id' => 'ID da Transferência Stripe',
                'user_id' => 'Usuário',
                'message' => 'Mensagem',
            ],

            'helpers' => [
                'stripe_connect_warning' => 'Os saques usando Stripe Connect só podem ser criados por criadores',
                'status_creation_rule' => 'Um novo saque deve ser criado com o status solicitado.',
                'processed_warning' => 'Esta solicitação de saque já foi processada',
                'amount_overflow' => "O saldo de crédito deste usuário é menor que o valor do saque. Tente um valor menor",
                'fees_info' => "As taxas são calculadas automaticamente, se as taxas de saque estiverem ativadas nas configurações de pagamento."
            ],

            'status_labels' => [
                'approved' => 'Aprovado',
                'requested' => 'Solicitado',
                'rejected' => 'Rejeitado',
            ],

            'actions' => [
                'approve' => 'Aprovar',
                'reject' => 'Rejeitar',
            ],

            'tabs' => [
                'all' => 'Todos',
                'requested' => 'Solicitados',
                'approved' => 'Aprovados',
                'rejected' => 'Rejeitados',
            ],

            'navigation_badge_tooltip' => 'Número de saques pendentes',
        ],

        'payment_request' => [
            'label' => 'Solicitação de pagamento',
            'plural' => 'Solicitações de pagamento',

            'sections' => [
                'payment_request' => 'Solicitação de pagamento',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'transaction_id' => 'ID da Transação',
                'amount' => 'Valor',
                'status' => 'Status',
                'type' => 'Tipo',
                'reason' => 'Motivo da recusa',
                'message' => 'Mensagem',
            ],

            'status_labels' => [
                'approved' => 'Aprovada',
                'pending' => 'Pendente',
                'rejected' => 'Rejeitada',
            ],

 'type_labels' => [
                'tip' => 'Gorjeta',
                'deposit' => 'Depósito',
                'withdrawal' => 'Saque',
                'chat_tip' => 'Gorjeta no chat',
                'stream_access' => 'Acesso à transmissão',
                'message_unlock' => 'Desbloqueio de mensagem',
                'post_unlock' => 'Desbloqueio de post',
                'one_month_subscription' => 'Assinatura de 1 mês',
                'three_months_subscription' => 'Assinatura de 3 meses',
                'six_months_subscription' => 'Assinatura de 6 meses',
                'yearly_subscription' => 'Assinatura anual',
                'subscription_renewal' => 'Renovação de assinatura',
            ],

            'tabs' => [
                'all' => 'Todos',
                'pending' => 'Pendente',
                'approved' => 'Aprovado',
                'declined' => 'Recusado',
            ],

        ],

        'post' => [
            'label' => 'Post',
            'plural' => 'Posts',

            'sections' => [
                'details' => 'Detalhes do post',
                'details_descr' => 'Configure os detalhes da postagem.',
                'settings' => 'Configurações do post',
                'settings_descr' => 'Preços, status e configurações de tempo.',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'text' => 'Texto do post',
                'price' => 'Preço',
                'status' => 'Status',
                'release_date' => 'Data de lançamento',
                'expire_date' => 'Data de expiração',
                'is_pinned' => 'Fixar este post',
            ],

            'actions' => [
                'post_url' => 'URL do post',
            ],

            'status_labels' => [
                '0' => 'Pendente',
                '1' => 'Aprovado',
                '2' => 'Rejeitado',
            ],
        ],

        'subscription' => [
            'label' => 'Assinatura',
            'plural' => 'Assinaturas',

            'sections' => [
                'user_info' => 'Informações do usuário',
                'subscription_details' => 'Detalhes da assinatura',
                'platform_identifiers' => 'Identificadores da plataforma',
                'timestamps' => 'Carimbos de data/hora',
            ],

            'fields' => [
                'sender_user_id' => 'Assinante',
                'recipient_user_id' => 'Criador',

                'subscriber.username' => 'Assinante',
                'creator.username' => 'Criador',

                'type' => 'Tipo',
                'status' => 'Status',
                'provider' => 'Provedor de pagamento',
                'amount' => 'Valor',

                'paypal_agreement_id' => 'ID do contrato PayPal',
                'paypal_plan_id' => 'ID do plano PayPal',
                'stripe_subscription_id' => 'ID da assinatura Stripe',
                'ccbill_subscription_id' => 'ID da assinatura CCBill',
                'verotel_sale_id' => 'ID da venda Verotel',

                'expires_at' => 'Expira em',
                'canceled_at' => 'Cancelado em',
            ],

            'status_labels' => [
                'active' => 'Ativa',
                'completed' => 'Concluída',
                'canceled' => 'Cancelada',
                'suspended' => 'Suspensa',
                'expired' => 'Expirada',
                'failed' => 'Falhou',
                'pending' => 'Pendente',
            ],

            'tabs' => [
                'all' => 'Todas',
                'pending' => 'Pendentes',
                'active' => 'Ativas',
                'canceled' => 'Canceladas',
            ],

            'type_labels' => [
                'one_month_subscription' => 'Assinatura de 1 mês',
                'three_months_subscription' => 'Assinatura de 3 meses',
                'six_months_subscription' => 'Assinatura de 6 meses',
                'yearly_subscription' => 'Assinatura de 1 ano',
            ],
        ],

        'withdrawal' => [
            'label' => 'Saque',
            'plural' => 'Saques',

            'sections' => [
                'details' => 'Detalhes do saque',
                'details_descr' => 'Configure ou revise os detalhes da solicitação de saque.',
            ],

            'fields' => [
                'id' => 'ID',
                'username' => 'Usuário',
                'amount' => 'Valor',
                'fee' => 'Taxa',
                'status' => 'Status',
                'processed' => 'Processado',
                'payment_method' => 'Método de pagamento',
                'payment_identifier' => 'Identificador de pagamento',
                'stripe_payout_id' => 'ID de pagamento Stripe',
                'stripe_transfer_id' => 'ID de transferência Stripe',
                'user_id' => 'Usuário',
                'message' => 'Mensagem',
            ],

            'helpers' => [
                'stripe_connect_warning' => 'Saques usando Stripe Connect só podem ser criados por criadores',
                'status_creation_rule' => 'Um novo saque deve ser criado com o status solicitado.',
                'processed_warning' => 'Esta solicitação de saque já foi processada',
                'amount_overflow' => "O saldo de crédito deste usuário é menor que o valor do saque. Tente um valor menor",
                'fees_info' => "As taxas são calculadas automaticamente, se as taxas de saque estiverem ativadas nas configurações de pagamento."
            ],

            'status_labels' => [
                'approved' => 'Aprovado',
                'requested' => 'Solicitado',
                'rejected' => 'Rejeitado',
            ],

            'actions' => [
                'approve' => 'Aprovar',
                'reject' => 'Rejeitar',
            ],

            'tabs' => [
                'all' => 'Todos',
                'requested' => 'Solicitados',
                'approved' => 'Aprovados',
                'rejected' => 'Rejeitados',
            ],

            'navigation_badge_tooltip' => 'O número de saques pendentes',
        ],

        'payment_request' => [
            'label' => 'Solicitação de pagamento',
            'plural' => 'Solicitações de pagamento',

            'sections' => [
                'payment_request' => 'Solicitação de pagamento',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'transaction_id' => 'ID da Transação',
                'amount' => 'Valor',
                'status' => 'Status',
                'type' => 'Tipo',
                'reason' => 'Motivo da rejeição',
                'message' => 'Mensagem',
            ],

            'status_labels' => [
                'approved' => 'Aprovado',
                'pending' => 'Pendente',
                'rejected' => 'Rejeitado',
            ],

            'type_labels' => [
                'deposit' => 'Depósito',
            ],

            'tabs' => [
                'all' => 'Todos',
                'pending' => 'Pendentes',
                'approved' => 'Aprovados',
                'rejected' => 'Rejeitados',
            ],
        ],

        'invoice' => [
            'label' => 'Fatura',
            'plural' => 'Faturas',

            'sections' => [
                'invoice_info' => 'Informações da fatura',
                'invoice_info_descr' => 'Aqui você pode ver os dados codificados de uma fatura gerada.',
            ],

            'fields' => [
                'invoice_id' => 'ID da Fatura',
                'transaction_id' => 'ID da Transação',
                'data' => 'Dados',
            ],

            'actions' => [
                'invoice_url' => 'URL da Fatura',
            ],
        ],

        'tax' => [
            'label' => 'Imposto',
            'plural' => 'Impostos',

            'sections' => [
                'details' => 'Detalhes do imposto',
                'details_descr' => 'Edite os detalhes das taxas do seu site.',
            ],

            'fields' => [
                'name' => 'Nome',
                'type' => 'Tipo',
                'percentage' => 'Valor (%)',
                'country_name' => 'País',
                'countries_name' => 'Países',
                'hidden' => 'Oculto',
            ],

            'type_labels' => [
                'fixed' => 'Fixo',
                'exclusive' => 'Exclusivo (Adicional)',
                'inclusive' => 'Inclusivo (Embutido)',
            ],
        ],

        'country' => [
            'label' => 'País',
            'plural' => 'Países',

            'sections' => [
                'country_details' => 'Detalhes do país',
                'country_details_descr' => 'Detalhes do país/região.',
            ],

            'fields' => [
                'name' => 'Nome',
                'country_code' => 'Código do País',
                'phone_code' => 'Código Telefônico',
                'created_at' => 'Criado em',
                'updated_at' => 'Atualizado em',
            ],
        ],

        'stream' => [
            'label' => 'Transmissão',
            'plural' => 'Transmissões',

            'sections' => [
                'stream_details' => 'Detalhes da transmissão',
                'stream_details_descr' => 'Detalhes básicos sobre a transmissão.',
                'stream_source' => 'Fonte e reprodução',
                'stream_source_descr' => 'Configuração para entrega de stream e RTMP.',
                'advanced_metadata' => 'Avançado e metadados',
            ],

            'fields' => [
                'name' => 'Nome da transmissão',
                'slug' => 'Slug',
                'price' => 'Preço de acesso',
                'user_id' => 'Usuário',
                'poster' => 'Imagem de capa',
                'status' => 'Status',
                'requires_subscription' => 'Requer assinatura',
                'is_public' => 'Transmissão pública',
                'sent_expiring_reminder' => 'Lembrete de expiração enviado',

                'driver' => 'Driver de transmissão',
                'pushr_id' => 'ID Pushr',
                'rtmp_key' => 'Chave RTMP',
                'rtmp_server' => 'Servidor RTMP',
                'hls_link' => 'Link de reprodução HLS',
                'vod_link' => 'Link VOD',

                'settings' => 'Configurações da transmissão (JSON)',
                'ended_at' => 'Terminou em',
                'created_at' => 'Criado',
                'updated_at' => 'Atualizado',
            ],

            'status_labels' => [
                'all' => 'Todos',
                'in_progress' => 'Em andamento',
                'ended' => 'Encerrado',
                'deleted' => 'Excluído',
            ],

            'driver_labels' => [
                '1' => 'PushrCDN',
                '2' => 'LiveKit',
            ],
        ],

        'stream_message' => [
            'label' => 'Mensagem da transmissão',
            'plural' => 'Mensagens da transmissão',

            'sections' => [
                'message_details' => 'Detalhes da mensagem',
            ],

            'fields' => [
                'user_id' => 'Usuário',
                'stream_id' => 'Transmissão',
                'message' => 'Conteúdo da mensagem',
                'created_at' => 'Criado em',
                'updated_at' => 'Atualizado em',
            ],

            'help' => [
                'user_id' => 'Selecione o usuário que enviou a mensagem.',
                'stream_id' => 'Escolha a transmissão para associar esta mensagem.',
                'message' => 'O conteúdo da mensagem de chat.',
            ],
        ],

        'public_page' => [
            'label' => 'Página pública',
            'plural' => 'Páginas públicas',

            'sections' => [
                'page_details' => 'Detalhes da página',
                'page_details_descr' => 'Configure o conteúdo e a estrutura desta página pública.',
                'display_settings' => 'Configurações de exibição',
                'display_settings_descr' => 'Controle como e onde esta página aparece.',
            ],

            'fields' => [
                'title' => 'Título',
                'title_helper' => 'Título da página mostrado no cabeçalho e na lista.',
                'short_title' => 'Título curto',
                'short_title_helper' => 'Título alternativo mais curto usado para navegação ou menus.',
                'slug' => 'Slug',
                'content' => 'Conteúdo',
                'slug_helper' => 'Identificador único usado na URL (sem espaços ou caracteres especiais).',
                'shown_in_footer' => 'Mostrar no rodapé',
                'shown_in_footer_helper' => 'Habilite para mostrar esta página no rodapé do site.',
                'is_tos' => 'Termos de serviço',
                'is_tos_helper' => 'Habilite se esta página representar os Termos de Serviço.',
                'is_privacy' => 'Política de privacidade',
                'is_privacy_helper' => 'Habilite se esta página representar a Política de Privacidade.',
                'show_last_update_date' => 'Mostrar data da última atualização',
                'show_last_update_date_helper' => 'Se ativado, mostra a data da última modificação na página.',
                'page_order' => 'Ordem da página',
                'page_order_helper' => 'Define a ordem em que esta página aparece nas listagens.',
                'page_url' => 'URL da página',
            ],
        ],

        'contact_message' => [
            'label' => 'Mensagem de contato',
            'plural' => 'Mensagens de contato',

            'fields' => [
                'email' => 'E-mail',
                'subject' => 'Assunto',
                'message' => 'Mensagem',
                'created_at' => 'Criado em',
                'updated_at' => 'Atualizado em',
            ],
        ],

        'global_announcement' => [
            'label' => 'Anúncio',
            'plural' => 'Anúncios',

            'fields' => [
                'content' => 'Conteúdo',
                'size' => 'Tamanho',
                'expiring_at' => 'Expira em',
                'is_published' => 'Publicado',
                'is_dismissible' => 'Dispensável',
                'is_sticky' => 'Fixo',
                'is_global' => 'Global',
                'id_verified_only' => 'Apenas ID verificado',
            ],

            'helpers' => [
                'is_published' => 'Se o anúncio é visível para os usuários.',
                'is_dismissible' => 'Permite que os usuários fechem ou ocultem este anúncio.',
                'is_sticky' => 'Mantém o anúncio fixado no topo.',
                'is_global' => 'Mostra o anúncio para todos os usuários em todo o sistema.',
                'id_verified_only' => 'Visível apenas para usuários que verificaram sua identidade.',
            ],

            'sections' => [
                'content' => 'Conteúdo',
                'content_descr' => 'Detalhes do anúncio.',
                'visibility' => 'Visibilidade',
                'visibility_descr' => 'Habilitar/desabilitar comportamentos de exibição.',
            ],

            'size_labels' => [
                'regular' => 'Normal',
                'small' => 'Pequeno',
            ],
        ],

        'reward' => [
            'label'  => 'Indicação',
            'plural' => 'Indicações',

            'sections' => [
                'referral_info'       => 'Informações de recompensa',
                'referral_info_descr' => 'Atribua recompensas geradas a partir da atividade de indicação.',
            ],

            'fields' => [
                'id'                     => 'ID',
                'from_user_id'           => 'Indicador',
                'to_user_id'             => 'Usuário indicado',
                'referral_code_usage_id' => 'Uso do código de indicação',
                'amount'                 => 'Valor da recompensa',
                'transaction_id'         => 'ID da transação',
                'reward_type'            => 'Tipo de recompensa',
            ],

            'help' => [
                'reward_type' => 'Código do tipo para a recompensa.',
            ],
        ],

        'story' => [
            'label'  => 'Story',
            'plural' => 'Stories',

            'sections' => [
                'details'       => 'Detalhes do story',
                'details_descr' => 'Campos principais do story e propriedade.',
                'settings'      => 'Configurações do story',
                'settings_descr'=> 'Visibilidade, expiração, links e opções de exibição.',
                'overlay'       => 'Sobreposição',
                'overlay_descr' => 'Carga útil de sobreposição (JSON) usada pelo visualizador (ex: x/y).',
            ],

            'fields' => [
                'user_id'     => 'Usuário',
                'mode'        => 'Modo',
                'text'        => 'Texto',
                'overlay'     => 'Sobreposição',
                'bg_preset'   => 'Predefinição de fundo',
                'is_public'   => 'Público',
                'is_highlight'=> 'Destaque',
                'expires_at'  => 'Expira em',
                'sound_id'    => 'Som',
                'views'       => 'Visualizações',
                'link_url'    => 'URL do link',
                'link_text'   => 'Rótulo do link',
            ],

            'mode_labels' => [
                'media' => 'Foto / Vídeo',
                'text'  => 'Texto',
            ],

            'help' => [
                'overlay'     => 'Armazenado como JSON (x/y).',
                'sound_id'    => 'Opcional: som anexado a este story.',
                'bg_preset'   => 'Aplica-se apenas a stories de texto.',
                'link_url'    => 'Deve começar com http:// ou https://',
                'link_text'   => 'Mostrado como o rótulo de CTA no visualizador.',
            ],

            'actions' => [
                'view_in_app' => 'Ver no app',
            ],
        ],

        'sound' => [
            'label'  => 'Som',
            'plural' => 'Sons',

            'sections' => [
                'details'        => 'Detalhes do som',
                'details_descr'  => 'Informações básicas sobre o som.',
                'settings'       => 'Configurações',
                'settings_descr' => 'Controles de visibilidade e disponibilidade do som.',
                'media'          => 'Mídia',
                'media_descr'    => 'Arquivo de áudio e imagem de capa associados a este som.',
            ],

            'fields' => [
                'title'       => 'Título',
                'artist'      => 'Artista',
                'description' => 'Descrição',
                'is_active'   => 'Ativo',
                'cover'       => 'Capa',
                'audio'       => 'Arquivo de áudio',
                'length'      => 'Duração',
                'attachments' => 'Anexos'
            ],

            'help' => [
                'title'       => 'Nome exibido do som.',
                'artist'      => 'Artista ou autor do som.',
                'description' => 'Descrição opcional para uso administrativo.',
                'is_active'   => 'Apenas sons ativos podem ser selecionados em stories.',
                'cover'       => 'Imagem de capa mostrada no seletor de som.',
                'audio'       => 'Arquivo de áudio primário associado a este som.',
            ],

            'actions' => [
                'view_attachments' => 'Ver anexos',
            ],
        ],

    ],

    'settings' => [
        'general' => 'Geral',
        'users' => 'Usuários',
        'feed' => 'Feed',
        'media' => 'Mídia',
        'storage' => 'Armazenamento',
        'payments' => 'Pagamentos',
        'websockets' => 'Websockets',
        'emails' => 'E-mails',
        'streams' => 'Transmissões',
        'stories' => 'Stories',
        'compliance' => 'Conformidade',
        'security' => 'Segurança',
        'referrals' => 'Indicações',
        'ai' => 'IA',
        'admin' => 'Admin',
        'theme' => 'Tema',
        'license' => 'Licença',
    ],

];