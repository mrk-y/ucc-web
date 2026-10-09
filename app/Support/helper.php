<?php
declare(strict_types=1);

require_once __DIR__ . '/../../bootstrap.php';

function e(string $text): string {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function sluggify(string $text): string {
    $text = transliterator_transliterate('Any-Latin; Latin-ASCII', $text);
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    return trim($text, '-');
}

function redirectAdmin(string $url): void {
    header('Location: /admin/' . $url);
}

function redirectPublic(string $url): void {
    header('Location: /' . $url);
}

function jsonResponse(int $statusCode = 200, string $message = '', array $data = []): never {
    http_response_code($statusCode);
    header('Content-Type: application/json; charset=utf-8');

    echo json_encode([
        'message' => $message,
        'data' => $data,
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    exit;
}

function timeAgo(string $datetime): string {
    $date = new DateTime($datetime);
    $now = new DateTime();

    $diff = $now->diff($date);

    if ($diff->y > 0) {
        return $diff->y . ' ' . ($diff->y === 1 ? 'year' : 'years') . ' ago';
    }

    if ($diff->m > 0) {
        return $diff->m . ' ' . ($diff->m === 1 ? 'month' : 'months') . ' ago';
    }

    if ($diff->d > 0) {
        return $diff->d . ' ' . ($diff->d === 1 ? 'day' : 'days') . ' ago';
    }

    if ($diff->h > 0) {
        return $diff->h . ' ' . ($diff->h === 1 ? 'hour' : 'hours') . ' ago';
    }

    if ($diff->i > 0) {
        return $diff->i . ' ' . ($diff->i === 1 ? 'minute' : 'minutes') . ' ago';
    }

    return 'just now';
}
