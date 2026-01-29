# Configuración automática de snapshots
# Ejecutar una vez para configurar el sistema

# Crear directorio de backups
New-Item -ItemType Directory -Path "C:\laragon\www\backups\cvproducciones" -Force

# Agregar al Task Scheduler para backups diarios
$action = New-ScheduledTaskAction -Execute "C:\laragon\www\cvproducciones\backup_script.bat"
$trigger = New-ScheduledTaskTrigger -Daily -At 2am
$settings = New-ScheduledTaskSettingsSet -StartWhenAvailable -DontStopOnIdleEnd
Register-ScheduledTask -Action $action -Trigger $trigger -Settings $settings -TaskName "CVProducciones_Backup" -Description "Daily backup snapshot"

Write-Host "Sistema de snapshots configurado correctamente!"
Write-Host "Backups se guardarán en: C:\laragon\www\backups\cvproducciones"
Write-Host "Task Scheduler: CVProducciones_Backup (diario a las 2 AM)"