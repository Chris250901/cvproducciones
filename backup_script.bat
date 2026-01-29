@echo off
REM Script de backup para CV Producciones
REM Crea snapshots MANUALES con fecha

REM Configuración
set PROJECT_PATH=C:\laragon\www\cvproducciones
set BACKUP_PATH=C:\laragon\www\backups\cvproducciones
set TIMESTAMP=%date:~-4%%date:~3,2%%date:~0,2%_%time:~0,2%%time:~3,2%

REM Crear directorio de backup si no existe
if not exist "%BACKUP_PATH%" mkdir "%BACKUP_PATH%"

REM Crear snapshot
echo ========================================
echo BACKUP MANUAL - CV Producciones
echo Fecha: %date% a las %time%
echo ========================================
echo.

xcopy "%PROJECT_PATH%" "%BACKUP_PATH%\snapshot_%TIMESTAMP%" /E /I /H /Y

REM Comprimir el backup
echo Comprimiendo backup...
cd "%BACKUP_PATH%"
tar -a -c -f "cvproducciones_snapshot_%TIMESTAMP%.zip" "snapshot_%TIMESTAMP%"

echo.
echo ========================================
echo BACKUP COMPLETADO!
echo Archivo: cvproducciones_snapshot_%TIMESTAMP%.zip
echo Ruta: %BACKUP_PATH%
echo ========================================

echo.
echo Pulsa cualquier tecla para salir...
pause >nul