<?php

function isDuplicateName(string $user_name, string $log_file = 'log.txt'): bool {
    if (!file_exists($log_file)) {
        return false;
    }

    $lines = file($log_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $parts = explode(' - ', $line);
        if (count($parts) === 2 && trim($parts[1]) === $user_name) {
            return true;
        }
    }

    return false;
}
