<?php

if (!function_exists('elgg_di')) {
	/**
	 * Get container instance
	 * @return \Elgg\Di\PublicContainer
	 */
	function elgg_di() {
		return \Elgg\Di\PublicContainer::getInstance();
	}
};

\Elgg\Di\PublicContainer::start();