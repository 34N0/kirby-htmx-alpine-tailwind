# 🏗️ kirby-vite-hat

**This is in early development. Do not expect all features to be implemented yet.**

## Features

- ⚡️ Uses [Vite](https://vitejs.dev/) with [kirby-vite](https://github.com/arnoson/kirby-vite) plugin
- 🔄 Live Reloading for Kirby templates, snippets, content, ... changes
- 📂 [Kirby Cms Public folder structure](https://getkirby.com/docs/guide/configuration#custom-folder-setup__public-folder-setup)
- 🐋 Project Setup for easy & instant Git based deployment on a dokku PaaS

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [Development](#development)
- [Deployment](#deployment)
- [Contributing](#contributing)
- [License](#license)

## Getting Started

### Prerequisites

Before you begin, ensure you have the following prerequisites:

- [Node.js](https://nodejs.org/) (>=14.x)
- [Composer](https://getcomposer.org/)
- PHP (for Kirby CMS)

- [Dokku](https://dokku.com/) (on production server)

### Installation

1. Clone this repository:

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
npm install
cp .env.example .env
```
### Development

To start a local development server:

```bash
npm run dev
```

This command will start both the PHP server for Kirby CMS and the Vite development server.

Access the Kirby CMS admin panel at /panel and the development site at http://localhost:8888.


### Deployment

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
