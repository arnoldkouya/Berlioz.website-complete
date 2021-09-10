@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../berlioz/cli-core/berlioz
php "%BIN_TARGET%" %*
