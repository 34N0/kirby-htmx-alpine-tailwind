# 🐱 KHAT Stack

## Features

- ⚡️ Uses [Vite](https://vitejs.dev/) tooling with [kirby-vite](https://github.com/arnoson/kirby-vite) plugin.
- 🔄 Live Reloading for Kirby templates, snippets, content, ... changes.
- 📂 [Kirby Cms Public folder structure](https://getkirby.com/docs/guide/configuration#custom-folder-setup__public-folder-setup)
- 🥰 Htmx, AlpineJs & TailwindCSS for Html driven development.
- 🌎 Fully managed site template including kirby flat file db engine.
- 🍀 Git Based CI including git based production backups.
- 🐋 easy & instant Git based deployment on a dokku PaaS.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following prerequisites:

- [Node.js](https://nodejs.org/) (>=14.x)
- PHP 8.2 (for Kirby CMS)
- [Composer](https://getcomposer.org/)

### Installation

1. Clone this repository:

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
npm install
composer install
```
### Development

To start a local development server:

```bash
npm run dev
```

This command will start both the PHP server for Kirby CMS and the Vite development server.

#### Backend

Access the Kirby CMS admin panel at /panel and the development site at http://localhost:8888.

## Deployment

### Requirements

Run the build script and copy the content of this repository into the endpoint directory. FIY the site sets Http headers.

- PHP v8.2
- locally running SMTP server (like postfix)

### Apache

This repository provides a configured .htaccess file. Using Nginx or a different Webserver is not impossible but not recommended.

### Dokku

To deploy your application using Dokku, follow these general steps:

1. Set up a Dokku instance and configure it.
2. Add your Dokku server as a remote:

```bash
git remote add <remote-app-prod> dokku@your-server:<remote-app>
```

Deploy your application:

```bash
git push <remote-app-prod> prod
```

For more details on deploying with Dokku, refer to the Dokku documentation.

### Contributing

Feel free to open issues or pull requests for improvements, bug fixes, or new features. We welcome your contributions!
