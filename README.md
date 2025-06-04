# 💰 MyPocket – Gestor de Finanzas Personales

**MyPocket** es una aplicación web desarrollada como proyecto de grado para la carrera de Ingeniería de Sistemas. Permite a los usuarios gestionar sus finanzas personales mediante el registro de ingresos, gastos y reportes financieros personalizados.

---

## 🚀 Características

- Registro y autenticación de usuarios
- Gestión de categorías de ingresos y gastos
- Visualización de transacciones por fecha y tipo
- Interfaz moderna usando Livewire y Laravel Volt
- Seguridad básica con autenticación y autorización

---

## 🛠️ Requisitos del sistema

- PHP 8.2 o superior  
- Composer  
- Laravel 11  
- MySQL o MariaDB  
- Node.js y NPM (para assets)

---

## ⚙️ Instalación y configuración

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tuusuario/MyPocket.git
   cd MyPocket
2. Instala dependencias:
   composer install
   npm install && npm run build
3. Configura el archivo .env:
   cp .env.example .env
   php artisan key:generate
4. DB_DATABASE=finanzas_personales_db
   DB_USERNAME=root
   DB_PASSWORD=tu_password
5. Ejecuta migraciones
   php artisan migrate

## 🧪 Testing funcional (Sprint 2)
Actualmente implementado:
 Registro de categorías (RF-03)
 Edición de categorías (RF-04)
 Listado por usuario autenticado

---

## 📚 Créditos
Proyecto desarrollado por Migdonio Dediego como trabajo de grado en Ingeniería de Sistemas.
Tutor: Ingeniero Carlos Sánchez
Institución: UNAD

## Licencia
Este proyecto es de uso académico. No distribuible sin autorización del autor.
