<?php

return [
    'navigation_group' => 'Configurações',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Configurações do Mixpanel Analytics',

    'sections' => [
        'project_configuration' => [
            'heading' => 'Configuração do Projeto',
            'description' => 'Configure a conexão com o seu projeto Mixpanel.',
        ],
        'tracking_debug' => [
            'heading' => 'Rastreamento e Debug',
            'description' => 'Controle o comportamento do rastreamento e logs de depuração.',
        ],
        'storage_cookies' => [
            'heading' => 'Armazenamento e Cookies',
            'description' => 'Configure a persistência de dados e configurações de cookies.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Privacidade e Geolocalização',
            'description' => 'Controle as configurações de privacidade e rastreamento de geolocalização.',
        ],
        'advanced_features' => [
            'heading' => 'Recursos Avançados',
            'description' => 'Configure gravação de sessões e coleta de mapas de calor.',
        ],
    ],

    'fields' => [
        'project_token' => [
            'label' => 'Token do Projeto',
            'helper' => 'O token do seu projeto Mixpanel (obrigatório para o rastreamento funcionar).',
        ],
        'api_host' => [
            'label' => 'Host da API',
            'helper' => 'Endpoint personalizado para residência de dados (ex: https://api-eu.mixpanel.com) ou proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'URL da Biblioteca Personalizada',
            'helper' => 'URL personalizada para a biblioteca JavaScript do Mixpanel (para configurações de proxy).',
        ],
        'debug' => [
            'label' => 'Modo Debug',
            'helper' => 'Habilitar logs de depuração no console do navegador.',
        ],
        'autocapture' => [
            'label' => 'Captura Automática',
            'helper' => 'Capturar automaticamente cliques, inputs, visualizações de página e outras interações.',
        ],
        'track_pageview' => [
            'label' => 'Rastrear Visualizações de Página',
            'helper' => 'Como as visualizações de página devem ser rastreadas.',
            'options' => [
                'true' => 'Habilitado',
                'false' => 'Desabilitado',
                'full-url' => 'URL Completa',
                'url-with-path-and-query-string' => 'URL com Caminho e Query String',
                'url-with-path' => 'URL com Caminho',
            ],
        ],
        'persistence' => [
            'label' => 'Persistência',
            'helper' => 'Método de armazenamento para dados do Mixpanel.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Armazenamento Local',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Expiração do Cookie (dias)',
            'helper' => 'Número de dias antes do cookie do Mixpanel expirar.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie Seguro',
            'helper' => 'Transmitir cookies apenas via HTTPS.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Cookie entre Subdomínios',
            'helper' => 'Persistir cookies entre subdomínios.',
        ],
        'ip' => [
            'label' => 'Geolocalização por IP',
            'helper' => 'Usar o endereço IP do usuário para dados de geolocalização.',
        ],
        'property_blacklist' => [
            'label' => 'Lista de Exclusão de Propriedades',
            'helper' => 'Lista separada por vírgulas de propriedades a excluir do rastreamento.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Desativar Rastreamento por Padrão',
            'helper' => 'Desativar rastreamento por padrão (conformidade LGPD/GDPR). Usuários devem optar por participar.',
        ],
        'stop_utm_persistence' => [
            'label' => 'Parar Persistência UTM',
            'helper' => 'Desativar a retenção automática de parâmetros UTM entre sessões.',
        ],
        'record_sessions_percent' => [
            'label' => 'Gravação de Sessões (%)',
            'helper' => 'Porcentagem de sessões a gravar (0-100). Defina 0 para desativar.',
        ],
        'record_heatmap_data' => [
            'label' => 'Gravar Dados de Mapa de Calor',
            'helper' => 'Habilitar coleta de dados de mapa de calor para rastreamento de cliques e rolagem.',
        ],
    ],
];
