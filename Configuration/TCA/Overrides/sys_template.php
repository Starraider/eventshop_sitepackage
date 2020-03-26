<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'eventshop_sitepackage';

    /**
     * Default TypoScript for EventshopSitepackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'eventshop sitepackage'
    );
});
