<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'syzygy_form_star_rating',
    'Configuration/TypoScript/',
    'SYZYGY Form Star Rating'
);
