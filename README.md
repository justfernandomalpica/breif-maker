# 📄 Brief Maker – Web App

Aplicación web diseñada para la recopilación estructurada de información de clientes mediante un formulario de brief.

El objetivo principal es facilitar el proceso de entendimiento de marca, necesidades y objetivos de clientes para proyectos de diseño y marketing digital.

---

## 🎯 Objetivo del Sistema

Crear una plataforma web centrada en un formulario de brief que permita:

- Enviar el formulario a clientes
- Recopilar respuestas de forma estructurada
- Gestionar y consultar dichas respuestas desde un panel interno

---

## ⚙️ Funcionalidades Principales

### 📝 Formulario de Brief

- Formulario dinámico para recopilar información de clientes
- Envío de respuestas persistidas en base de datos
- Validación de campos

### 📊 Dashboard Administrativo

Panel interno para gestión de respuestas:

- Visualizar respuestas recibidas
- Editar respuestas
- Eliminar registros
- Descargar respuestas en PDF
- Contactar al cliente directamente (email)

<!-- ### 👤 Página About

- Información sobre la profesional (cliente final)
- Presentación de servicios y enfoque -->

---

## 🚧 Funcionalidades Futuras

El sistema está diseñado para escalar. Posibles mejoras:

- Editor de formularios:
  - Agregar/eliminar preguntas
  - Reordenar campos
  - Tipos de input dinámicos
- Sistema de autenticación (login)
- Notificaciones automáticas (email)
- Exportación avanzada (CSV, Excel)
- Etiquetado o categorización de clientes

---

## 🏗️ Arquitectura

El proyecto sigue una arquitectura MVC personalizada:

/core → Núcleo del framework (Router, Render, etc.)
/controllers → Controladores (manejo de requests)
/models → Modelos (Active Record)
/views → Vistas (HTML + PHP)
/public → Punto de entrada (index.php, assets)
/config → Configuración (DB, env)
/middleware → Middlewares (opcional)
/domain → Casos de uso (futuro)

---

## 🧩 Stack Tecnológico

- **Backend:** PHP (MVC custom + Active Record)
- **Base de datos:** MySQL
- **Frontend:** HTML5, CSS3, JavaScript
- **Build tools:** (opcional) Gulp / esbuild

---

## 🔄 Flujo General

1. El cliente recibe el enlace al formulario
2. Completa el brief
3. La información se guarda en la base de datos
4. El administrador accede al dashboard:
   - Consulta respuestas
   - Descarga PDF
   - Contacta al cliente
   - Administra registros

---

## 🧪 Estado del Proyecto

🚧 En desarrollo

- [x] Estructura base MVC
- [x] Active Record funcional
- [ ] Formulario inicial
- [ ] Dashboard básico
- [ ] Generación de PDF

---

## 📌 Notas Técnicas

- El sistema está diseñado bajo el patrón **Active Record**, por lo que los modelos gestionan su propia persistencia.

---

## 🚀 Posibles Casos de Uso

- Brief de branding
- Brief de marketing digital
- Onboarding de clientes
- Formularios de diagnóstico de negocio

---

## 📬 Contacto

Desarrollado por: **Fernando De Los Santos Malpica**  
Proyecto enfocado en desarrollo full-stack personalizado.

---

## 🧩 Consideraciones

Este proyecto busca equilibrar:

- Simplicidad (para uso real inmediato)
- Escalabilidad (para evolución futura)
- Control total sobre la arquitectura
