# Spustenie: powershell -NoProfile -ExecutionPolicy Bypass -File .\start.ps1
$phpCommand = Get-Command php -ErrorAction SilentlyContinue
$localPhp = Join-Path $env:LOCALAPPDATA 'Programs/PHP/8.3/php.exe'

if ($phpCommand) {
    $phpExecutable = $phpCommand.Source
} elseif (Test-Path -LiteralPath $localPhp) {
    $phpExecutable = $localPhp
} else {
    Write-Error 'PHP sa nenaslo. Nainstalujte PHP 8.3 alebo novsie a pridajte ho do PATH. Postup je v README.md.'
    exit 1
}

Write-Host 'Aplikacia: http://localhost:8000 | Zastavenie: Ctrl+C'
& $phpExecutable -S localhost:8000 -t "$PSScriptRoot/public"
