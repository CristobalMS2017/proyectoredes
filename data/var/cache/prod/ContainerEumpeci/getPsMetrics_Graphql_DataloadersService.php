<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ps_metrics.graphql.dataloaders' shared service.

return $this->services['ps_metrics.graphql.dataloaders'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaders(${($_ = isset($this->services['ps_metrics.cache.data']) ? $this->services['ps_metrics.cache.data'] : $this->load('getPsMetrics_Cache_DataService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.json']) ? $this->services['ps_metrics.helper.json'] : $this->load('getPsMetrics_Helper_JsonService.php')) && false ?: '_'});
