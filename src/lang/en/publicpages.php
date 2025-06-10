<?php

return [
    'home' => [
        'title' => 'Welcome to our website',
        'description' => 'This is the home page provided by esanj/base-pages package.',
    ],

    'labels' => [
        'copyright' => '© :year :brand Platform. All rights reserved.'
    ],

    'errors' => [
        '400' => [
            'title' => "Bad Request",
            'message' => "Your request couldn't be processed due to invalid parameters. Please check and try again.",
        ],
        '401' => [
            'title' => "Unauthorized",
            'message' => "You need to be authenticated to access this resource. Please log in and try again.",
        ],
        '403' => [
            'title' => "Forbidden",
            'message' => "Access denied. You don't have permission to view this resource. If you believe this is an error, please contact the administrator.",
        ],
        '404' => [
            'title' => "Page Not Found",
            'message' => "The page or resource you're looking for was not found. Please verify the address and try again.",
        ],
        '419' => [
            'title' => "Page Expired",
            'message' => "Your session has expired. Please refresh the page and log in again.",
        ],
        '429' => [
            'title' => "Internal Server Error",
            'message' => "You have made too many requests. Please wait a moment and try again.",
        ],
        '500' => [
            'title' => "Internal Server Error",
            'message' => "An internal server error occurred. Please try again later, and contact support if the problem persists.",
        ],
        '502' => [
            'title' => "Bad Gateway",
            'message' => "We're having trouble reaching the server. Please try again shortly.",
        ],
        '503' => [
            'title' => "Service Unavailable",
            'message' => "The service is currently unavailable. Please try again later.",
        ],
        '504' => [
            'title' => "Gateway Timeout",
            'message' => "The server took too long to respond. Please try again in a few moments.",
        ],
    ]
];
