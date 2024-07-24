# 🐱 kirby-htmx-alpine-tailwind

This template is a scaffold for fully managed sites with Kirby CMS as the backend and modern lightweight clients leveraging [Htmx](https://htmx.org/) and [AlpineJs](https://alpinejs.dev/). The stack is designed to function without JavaScript to offer strong backward compatibility and functionality with high-security clients (i.e., TOR Browser's highest security setting). To fully understand the security benefits and limitations of this template, research the involved technologies.

## Features

- ⚡️ Uses [Vite](https://vitejs.dev/) tooling with the [kirby-vite](https://github.com/arnoson/kirby-vite) plugin.
- 🔄 Live Reloading for Kirby templates, snippets, content, and more.
- 📂 [Kirby CMS Public folder structure](https://getkirby.com/docs/guide/configuration#custom-folder-setup__public-folder-setup).
- 🥰 [Htmx](https://htmx.org/), [AlpineJs](https://alpinejs.dev/), and [TailwindCSS](https://tailwindcss.com/) for HTML-driven development.
- 🌎 Fully managed site template including Kirby's flat-file DB engine.
- 🐋 Easy & instant Git-based deployment on a Dokku PaaS.
- 🍀 Optional Git-based CI, including Git-based production backups.

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

2. Configure any necessary environment variables or settings.

### Development

To start a local development server:

```bash
npm run dev
```

This command will start both the PHP server for Kirby CMS and the Vite development server. Ensure that the necessary ports (e.g., 8888) are open and not conflicting with other services.

#### Backend

Access the Kirby CMS admin panel at `/panel` and the development site at `http://localhost:8888`.

## Deployment

### Requirements

Run the build script and copy the content of this repository into the endpoint directory.

### Apache

This repository provides a configured [.htaccess](public/.htaccess) file. Using Nginx or a different web server is possible but not recommended.

### Security Headers

With the `debug` setting disabled in the Kirby configuration, the site will set hardened security HTTP headers.

You can edit the headers in the [header.php snippet](site/snippets/header.php).

### SMTP

If you want to send emails from the site (e.g., from a form) it's recommended to setup a postfix SMTP server configured with `loopback_only` and `DANE` security level. 

To configure kirby to send emails using the SMTP server, refer to the [kirby dokumentation](https://getkirby.com/docs/guide/emails#transport-configuration).

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

Feel free to open issues or pull requests for improvements, bug fixes, or new features.
