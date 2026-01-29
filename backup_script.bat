@echo off
REM Script de backup para CV Producciones
REM Crea snapshots automáticos con fecha

REM Configuración
set PROJECT_PATH=C:\laragon\www\cvproducciones
set BACKUP_PATH=C:\laragon\www\backups\cvproducciones
set TIMESTAMP=%date:~-4%%date:~3,2%%date:~0,2%_%time:~0,2%%time:~3,2%

REM Crear directorio de backup si no existe
if not exist "%BACKUP_PATH%" mkdir "%BACKUP_PATH%"

REM Crear snapshot
echo Creando snapshot del %date% a las %time%
xcopy "%PROJECT_PATH%" "%BACKUP_PATH%\snapshot_%TIMESTAMP%" /E /I /H /Y

REM Comprimir el backup
echo Comprimiendo backup...
cd "%BACKUP_PATH%"
tar -a -c -f "cvproducciones_snapshot_%TIMESTAMP%.zip" "snapshot_%TIMESTAMP%"

echo Backup completado: %BACKUP_PATH%\cvproducciones_snapshot_%TIMESTAMP%.zip

REM Mantener solo los últimos 5 snapshots
for /f "delims=" %%F in ('dir /B /O:-D "cvproducciones_snapshot_*.zip"') do (
    set count=0
    for /f "delims=" %%G in ('dir /B "cvproducciones_snapshot_*.zip" ^| find /C "%%F"') do set count=%%G
    if !count! gtr 5 (
        del "%%F"
    )
)

pause