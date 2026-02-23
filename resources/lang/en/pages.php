<?php

return [
    'navigation_group' => 'Settings',
    'navigation_label' => 'Mixpanel Analytics',
    'title' => 'Mixpanel Analytics Settings',

    'sections' => [
        'project_configuration' => [
            'heading' => 'Project Configuration',
            'description' => 'Configure the connection to your Mixpanel project.',
        ],
        'tracking_debug' => [
            'heading' => 'Tracking & Debug',
            'description' => 'Control tracking behavior and debug logging.',
        ],
        'storage_cookies' => [
            'heading' => 'Storage & Cookies',
            'description' => 'Configure data persistence and cookie settings.',
        ],
        'privacy_geolocation' => [
            'heading' => 'Privacy & Geolocation',
            'description' => 'Control privacy settings and geolocation tracking.',
        ],
        'advanced_features' => [
            'heading' => 'Advanced Features',
            'description' => 'Configure session recording and heatmap collection.',
        ],
    ],

    'fields' => [
        'project_token' => [
            'label' => 'Project Token',
            'helper' => 'Your Mixpanel project token (required for tracking to work).',
        ],
        'api_host' => [
            'label' => 'API Host',
            'helper' => 'Custom API endpoint for data residency (e.g. https://api-eu.mixpanel.com) or proxy.',
        ],
        'custom_lib_url' => [
            'label' => 'Custom Library URL',
            'helper' => 'Custom URL for the Mixpanel JavaScript library (for proxy setups).',
        ],
        'debug' => [
            'label' => 'Debug Mode',
            'helper' => 'Enable debug logging to the browser console.',
        ],
        'autocapture' => [
            'label' => 'Autocapture',
            'helper' => 'Automatically capture clicks, inputs, page views, and other interactions.',
        ],
        'track_pageview' => [
            'label' => 'Track Page Views',
            'helper' => 'How page views should be tracked.',
            'options' => [
                'true' => 'Enabled',
                'false' => 'Disabled',
                'full-url' => 'Full URL',
                'url-with-path-and-query-string' => 'URL with Path and Query String',
                'url-with-path' => 'URL with Path',
            ],
        ],
        'persistence' => [
            'label' => 'Persistence',
            'helper' => 'Storage method for Mixpanel data.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
            ],
        ],
        'cookie_expiration' => [
            'label' => 'Cookie Expiration (days)',
            'helper' => 'Number of days before the Mixpanel cookie expires.',
        ],
        'secure_cookie' => [
            'label' => 'Secure Cookie',
            'helper' => 'Only transmit cookies over HTTPS.',
        ],
        'cross_subdomain_cookie' => [
            'label' => 'Cross Subdomain Cookie',
            'helper' => 'Persist cookies across subdomains.',
        ],
        'ip' => [
            'label' => 'IP Geolocation',
            'helper' => 'Use the user\'s IP address for geolocation data.',
        ],
        'property_blacklist' => [
            'label' => 'Property Blacklist',
            'helper' => 'Comma-separated list of properties to exclude from tracking.',
        ],
        'opt_out_tracking_by_default' => [
            'label' => 'Opt Out by Default',
            'helper' => 'Disable tracking by default (GDPR compliance). Users must explicitly opt in.',
        ],
        'stop_utm_persistence' => [
            'label' => 'Stop UTM Persistence',
            'helper' => 'Disable automatic retention of UTM parameters across sessions.',
        ],
        'record_sessions_percent' => [
            'label' => 'Session Recording (%)',
            'helper' => 'Percentage of sessions to record (0-100). Set to 0 to disable.',
        ],
        'record_heatmap_data' => [
            'label' => 'Record Heatmap Data',
            'helper' => 'Enable heatmap data collection for click and scroll tracking.',
        ],
    ],
];
