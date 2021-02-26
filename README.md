# Battlestar Digital Plugin Boilerplate
This modern boilerplate template uses namespaces for PHP and React for plugin settings.

## Installation and Usage

### Prerequisites

Before you begin, ensure you have met the following requirements:
* You have installed the latest version of [Node.js](https://nodejs.org/en/download/)
* You have installed the latest version of NPM (included with Node.js)

### Installation

Clone this folder into your `\wp-content\plugins` folder. The steps below will walk you through customizing these files for your new plugin.

First, we need to replace our generic plugin name and slug with your plugin name and slug.

1. Rename the root folder to your plugin's slug. 
1. Rename `bsd-plugin-boilerplate.php` to `your-plugin-slug.php`
1. Rename `includes\class-bsd-plugin-boilerplate.php` to `includes\class-your-plugin-slug.php`
1. Find and replace all instances of `bsd-plugin-boilerplate` with `your-plugin-slug`
1. Find and replace all instances of `bsd_plugin_boilerplate_admin` with `your_plugin_slug_admin`
1. Find and replace all instances of `BSD_PLUGIN_BOILERPLATE_MAIN_PLUGIN` with `YOUR_PLUGIN_SLUG_MAIN_PLUGIN`
1. Find and replace all instances of `BSD_PLUGIN_BOILERPLATE_URL` with `YOUR_PLUGIN_SLUG_URL`
1. Find and replace all instances of `BSD_Plugin_Boilerplate` with `Your_Plugin_Slug`
1. Find and replace all instances of `BSD Plugin Boilerplate` with `Your Plugin Name`

Next, install the required Node modules and create a `dist` file:

1. Navigate to `your-plugin-slug\blocks` and run `npm install`
1. Run `npm run build`. This command creates the `dist` folder which contains the JS and CSS files enqueued by your plugin.

Congratulations! You now have a fully-functional -- if somewhat barebones -- plugin.

## Backlog

1. Add a script to ZIP only the files necessary for plugin distribution (e.g., ignore `node-modules`, `blocks\app`)
1. Add a script to rename files, variables, and constants with your plugin name and slug
1. Add PHPUnit for PHP unit tests
1. Add React Testing Library for React component testing
