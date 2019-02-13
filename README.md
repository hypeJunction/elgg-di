# Dependency Injection for Elgg

![Elgg 2.3](https://img.shields.io/badge/Elgg-2.3.x-orange.svg?style=flat-square)

## Features

 * PHP-DI integration for Elgg

## Usage

### Installation

 * Place the plugin above all others in your plugin list and enable
  
### Service Registration

 * To register a new service, add ``config/di.php`` to your plugin root and return an array of services you want to register
 * You can access services via ``elgg_di()->$service_name``
 
### Container Compilation

 * To disable container compilation/caching - set `$CONFIG->environment = 'development'`

